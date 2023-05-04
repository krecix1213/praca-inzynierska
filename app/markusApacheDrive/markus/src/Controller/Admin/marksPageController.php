<?php

namespace App\Controller\Admin;

use App\Entity\SchoolClass;
use App\Entity\Marks;
use App\Entity\Student;
use App\Entity\SchoolSubject;
use App\Entity\Teacher;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class marksPageController extends AbstractController
{
    /**
     * @Route("/admin/marks", name="mainMarksPageAdmin")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $schoolClassListDoctrine = $doctrine->getRepository(SchoolClass::class)->findAll();
        return $this->render('admin/marks.html.twig', [
            'schoolClassList' => $schoolClassListDoctrine
        ]);
    }
    /**
     * @Route("/admin/marks/{id}", name="marksClassPageAdmin")
     */
    public function classPage(ManagerRegistry $doctrine, int $id): Response
    {
        $schoolClassDoctrine = $doctrine->getRepository(SchoolClass::class)->find($id);
        $schoolClassListDoctrine = $doctrine->getRepository(SchoolClass::class)->find($id)->getStudents();
        $className = $doctrine->getRepository(SchoolClass::class)->find($id)->getSymbol();
        $arrayMarks = array();
        foreach($schoolClassListDoctrine as $v){
            $marksListDoctrine = $doctrine->getRepository(Marks::class)->findBy(['fk_id_user_student' => $v->getId()]);
            $studentName = $v->getName()." ".$v->getSurname();
            $i = 0;
            foreach($marksListDoctrine as $marks){
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["id"] = $marks->getId();
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["marks"] = $marks->getMark();
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["subjectShortcut"] = $marks->getFkIdSchoolSubject()->getShortcut();
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["weight"] = $marks->getWeight();
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["teacher"] = $marks->getTeacher()->getName()." ".$marks->getTeacher()->getSurname();
                $i++;
            }
        }
        return $this->render('admin/marksClass.html.twig', [
            'arrayMark' => $arrayMarks
        ]);
    }
    /**
     * @Route("/admin/marks/edit/{id}", name="markEditPageAdmin")
     */
    public function edit(ManagerRegistry $doctrine, int $id): Response
    {
        $mark = $doctrine->getRepository(Marks::class)->find($id);
        $teacher = $doctrine->getRepository(Teacher::class)->findAll();
        $student = $doctrine->getRepository(Student::class)->findAll();
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->findAll();
        $teacherSelected = $mark->getTeacher()->getId();
        $studentSelected = $mark->getStudent()->getId();
        $subjectSelected = $mark->getFkIdSchoolSubject()->getId();
        return $this->render('admin/markEdit.html.twig', [
            'mark' => $mark, 'teacher' => $teacher, 'student'=>$student, 'schoolSubject'=>$schoolSubject, 'id'=>$id,
            'teacherSelected'=> $teacherSelected, 'studentSelected'=> $studentSelected, 'subjectSelected'=> $subjectSelected,
        ]);
    }
    /**
     * @Route("/admin/marks/save/{id}", name="markSavePageAdmin")
     */
    public function save(EntityManagerInterface $em, ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $weight = (int) $data["weight"];
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($data['schoolSubject']);
        $teacher = $doctrine->getRepository(Teacher::class)->find($data['teacher']);
        $student = $doctrine->getRepository(Student::class)->find($data['student']);
        $mark = $data['mark'];
        if(preg_match("/(\d)(\-)/",$mark) || preg_match("/(-)(\d)/",$mark)){
            $mark = str_replace("-","",$mark);
            $mark = (float) $mark;
            $mark -= 0.25;
        }
        else if(preg_match("/(\d)(\+)/",$mark) || preg_match("/(\+)(\d)/",$mark)){
            $mark = (float) $mark;
            $mark += 0.5;
        }
        else{
            $mark = (float) $mark;
        }
        if($mark < 1 || $mark > 6){
            throw new BadRequestHttpException("Ocena musi byc z zakresu 1-6");
        }
        $marks = $doctrine->getRepository(Marks::class)->find($id);
        $marks->setMark($mark);
        $marks->setWeight($weight);
        $marks->setTeacher($teacher);
        $marks->setStudent($student);
        $marks->setFkIdSchoolSubject($schoolSubject);
        $em->persist($marks);
        $em->flush();
        return $this->redirectToRoute('markEditPageAdmin',['id' => $id]);
    }
}
