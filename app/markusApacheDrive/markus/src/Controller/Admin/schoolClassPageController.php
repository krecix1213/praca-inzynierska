<?php

namespace App\Controller\Admin;

use App\Entity\Teacher;
use App\Entity\Student;
use App\Entity\SchoolClass;
use App\Entity\SchoolSubject;
use App\Entity\HoursOfClassesAndBreaks;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class schoolClassPageController extends AbstractController
{
    /**
     * @Route("/admin/class", name="mainPageClassesAdmin")
     */
    public function classIndex(ManagerRegistry $doctrine): Response
    {
        $schoolClass = $doctrine->getRepository(SchoolClass::class)->findAll();
        return $this->render('admin/schoolClass.html.twig', [
            'schoolClass' => $schoolClass
        ]);
    }
    /**
     * @Route("/admin/class/edit/{id}", name="ClassEditPageAdmin")
     */
    public function classView(ManagerRegistry $doctrine, int $id): Response
    {
        $class = $doctrine->getRepository(SchoolClass::class)->find($id);
        $student = $doctrine->getRepository(Student::class)->findAll();
        $teacher = $doctrine->getRepository(Teacher::class)->findAll();
        $studentInClass = $class->getStudents();
        $studentInClassId = [];
        foreach($studentInClass as $v){
            $studentInClassId[] = $v->getId();
        }
        return $this->render('admin/schoolClassEdit.html.twig', [
            'class'=>$class, 'student'=>$student, 'teacher'=>$teacher, 'id'=>$id,
            'studentInClassId'=>$studentInClassId,
        ]);
    }
     /**
     * @Route("/admin/class/edit/save/{id}", name="ClassEditSaveAdmin")
     */
    public function classEdit(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $class = $doctrine->getRepository(SchoolClass::class)->find($id);
        $studentToRemove = $class->getStudents();
        foreach($studentToRemove as $v){
            $class->removeStudent($v);
        }
        $class->setLevel($data['level']);
        $class->setSymbol($data['symbol']);
        $headTeacher = $doctrine->getRepository(Teacher::class)->find($data['headTeacher']);
        $class->setHeadTeacher($headTeacher);
        $headStudent = $doctrine->getRepository(Student::class)->find($data['headStudent']);
        $class->setHeadStudent($headStudent);
        foreach($data['students'] as $v){
            $student = $doctrine->getRepository(Student::class)->find($v);
            $class->addStudent($student);
        }
        $em->persist($class);
        $em->flush();
        return $this->redirectToRoute('ClassEditPageAdmin',['id' => $id]);
    }
     /**
     * @Route("/admin/class/add", name="ClassAddAdmin")
     */
    public function classAdd(ManagerRegistry $doctrine): Response
    {
        $student = $doctrine->getRepository(Student::class)->findAll();
        $teacher = $doctrine->getRepository(Teacher::class)->findAll();
        return $this->render('admin/schoolClassAdd.html.twig',[
            'student'=>$student, 'teacher'=>$teacher
        ]);
    }
    /**
     * @Route("/admin/class/add/save", name="ClassSaveAddAdmin")
     */
    public function classAddSave(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request): Response
    {
        $data = $request->request->all();
        $class = new SchoolClass();
        $class->setLevel($data['level']);
        $class->setSymbol($data['symbol']);
        $headTeacher = $doctrine->getRepository(Teacher::class)->find($data['headTeacher']);
        $class->setHeadTeacher($headTeacher);
        $headStudent = $doctrine->getRepository(Student::class)->find($data['headStudent']);
        $class->setHeadStudent($headStudent);
        foreach($data['students'] as $v){
            $student = $doctrine->getRepository(Student::class)->find($v);
            $class->addStudent($student);
        }
        $em->persist($class);
        $em->flush();
        return $this->redirectToRoute('mainPageClassesAdmin');
    }
    /**
     * @Route("/admin/class/delete/ask/{id}", name="ClassAskDeleteAdmin")
     */
    public function studentAskDelete(ManagerRegistry $doctrine, int $id): Response
    {
        $class = $doctrine->getRepository(SchoolClass::class)->find($id);
        return $this->render('admin/personAskDelete.html.twig', [
            'class'=>$class, 'typ'=>'klasę'
        ]);
    }
     /**
     * @Route("/admin/absence/delete/{id}", name="ClassDeleteAdmin")
     */
    public function studentDelete(EntityManagerInterface $em,ManagerRegistry $doctrine, int $id): Response
    {
        $schoolClass = $doctrine->getRepository(SchoolClass::class)->find($id);
        $em->remove($schoolClass);
        $em->flush();
        return $this->redirectToRoute('mainPageClassesAdmin');
    }
    /**
     * @Route("/admin/absence/editPlan/{id}", name="ClassEditPlanAdmin")
     */
    public function editPlan(ManagerRegistry $doctrine, int $id): Response
    {
        $timetable = $doctrine->getRepository(SchoolClass::class)->find($id)->getBasicTimetable();
        $subjects = $doctrine->getRepository(SchoolSubject::class)->findAll();
        $teachers = $doctrine->getRepository(Teacher::class)->findAll();
        $hoursDoctrine = $doctrine->getRepository(HoursOfClassesAndBreaks::class)->find(1);
        $hours = $hoursDoctrine->getTimesJson()['godziny'];
        return $this->render('admin/editTimetable.html.twig', [
            'timetable'=>$timetable, 'hours'=>$hours, 'subjects'=>$subjects,'teachers'=>$teachers, 'id'=>$id
        ]);
    }
    /**
     * @Route("/admin/absence/editPlan/save/{id}", name="ClassSavePlanAdmin")
     */
    public function savePlan(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $timetable = array();
        foreach($data['timetable'] as $k => $v){
            for($i=0;$i<9;$i++){
                if($v[$i]['subject'] != 'false' && $v[$i]['teacher'] != 'false'){
                    $subject = $doctrine->getRepository(SchoolSubject::class)->find($v[$i]['subject']);
                    $teacher = $doctrine->getRepository(Teacher::class)->find($v[$i]['teacher']);
                    $tmp = array(
                        'Hours'=>$i,
                        'Subject'=>$subject->getName(),
                        'SubjectId'=>$subject->getId(),
                        'Teacher'=>$teacher->getName()." ".$teacher->getSurname(),
                        'TeacherId'=>$teacher->getId()
                    );
                    $timetable[$k][] = $tmp;
                }
            }
        }
        $schoolClass = $doctrine->getRepository(SchoolClass::class)->find($id);
        $schoolClass->setBasicTimetable($timetable);
        $em->persist($schoolClass);
        $em->flush();
        return $this->redirectToRoute('ClassEditPlanAdmin',['id' => $id]);
    }
}
