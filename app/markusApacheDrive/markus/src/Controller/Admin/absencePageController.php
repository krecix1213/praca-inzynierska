<?php

namespace App\Controller\Admin;

use App\Entity\Teacher;
use App\Entity\Student;
use App\Entity\Absence;
use App\Entity\HoursOfClassesAndBreaks;
use App\Entity\SchoolClass;
use App\Entity\SchoolSubject;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class absencePageController extends AbstractController
{
    /**
     * @Route("/admin/absence", name="mainPageAbsenceAdmin")
     */
    public function absenceIndex(ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();
        $schoolClass = $doctrine->getRepository(SchoolClass::class)->findAll();
        return $this->render('admin/absence.html.twig', [
            'user' => $user, 'schoolClass' => $schoolClass
        ]);
    }
    /**
     * @Route("/admin/absence/view/class/{id}", name="absenceClassViewPageAdmin")
     */
    public function absenceView(ManagerRegistry $doctrine, int $id): Response
    {
        $user=$this->getUser();
        $className = $doctrine->getRepository(SchoolClass::class)->find($id)->getSymbol();
        $classIdDoctrine = $doctrine->getRepository(SchoolClass::class)->find($id)->getStudents();
        $classIdStudents = array();
        foreach($classIdDoctrine as $v){
            array_push($classIdStudents,$v->getId());
        }
        $absenceDoctrine = $doctrine->getRepository(Absence::class)->findAll();
        $absence = array();
        foreach($absenceDoctrine as $v){
            $tmp=array(
                'id' => $v->getId(),
                'teacher' => $v->getFkTeacherId()->getName()." ".$v->getFkTeacherId()->getSurname(),
                'lesson' => $v->getFkIdSchoolLesson()->getName(),
                'data' => $v->getDate()->format('d-m-Y H:i:s'),
                'json' => $v->getStudents(),
            );
            $flagaInsert = FALSE;
            foreach($tmp['json']['students'] as $s){
                if((in_array($s['id'],$classIdStudents)) !== FALSE) $flagaInsert = TRUE;
            }
            if($flagaInsert === TRUE) array_push($absence,$tmp);
        }

        return $this->render('admin/absenceView.html.twig', [
            'user' => $user, 'className' => $className, 'classId'=>$id, 'absence' => $absence
        ]);
    }
     /**
     * @Route("/admin/absence/edit/{classId}/{id}", name="AbsenceEditAdmin")
     */
    public function edit(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $classId, int $id): Response
    {
        $user=$this->getUser();
        $absenceDoctrine = $doctrine->getRepository(Absence::class)->find($id);
        $studentList = $doctrine->getRepository(Student::class)->findBy(['class'=>$classId]);
        $teacherList = $doctrine->getRepository(Teacher::class)->findAll();
        $lessonList = $doctrine->getRepository(SchoolSubject::class)->findAll();
        $hours = $doctrine->getRepository(HoursOfClassesAndBreaks::class)->find(1);
        $absence=array(
            'teacher' => $absenceDoctrine->getFkTeacherId()->getId(),
            'lesson' => $absenceDoctrine->getFkIdSchoolLesson()->getId(),
            'date' => $absenceDoctrine->getDate()->format('Y-m-d'),
            'hour' => trim($absenceDoctrine->getDate()->format('H:i')),
            'json' => $absenceDoctrine->getStudents(),
        );
        $studentListId = array();
        foreach($studentList as $v){
            array_push($studentListId,$v->getId());
        }
        return $this->render('admin/absenceEdit.html.twig', [
            'user' => $user, 'absence' => $absence, 'studentList' => $studentList, 'studentListId' => $studentListId,
            'teacherList' => $teacherList, 'lessonList'=>$lessonList, 'hours'=>$hours
        ]);
    }
     /**
     * @Route("/admin/absence/class/add/{id}", name="AbsenceAddAdmin")
     */
    public function absenceAdd(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($data['subject']);
        $array=array();
        if(isset($data['student']['OB'])){
            foreach($data['student']['OB'] as $k => $v){
                $tmp=array(
                    'id'=>$k,
                    'name'=>$doctrine->getRepository(Student::class)->find($k)->getName(),
                    'surname'=>$doctrine->getRepository(Student::class)->find($k)->getSurname(),
                    'type'=>'OB'
                );
                array_push($array,$tmp);
            }}
            if(isset($data['student']['NB'])){
        foreach($data['student']['NB'] as $k => $v){
            $tmp=array(
                'id'=>$k,
                'name'=>$doctrine->getRepository(Student::class)->find($k)->getName(),
                'surname'=>$doctrine->getRepository(Student::class)->find($k)->getSurname(),
                'type'=>'NB'
            );
            array_push($array,$tmp);
        }}
        if(isset($data['student']['SP'])){
            foreach($data['student']['SP'] as $k => $v){
                $tmp=array(
                    'id'=>$k,
                    'name'=>$doctrine->getRepository(Student::class)->find($k)->getName(),
                    'surname'=>$doctrine->getRepository(Student::class)->find($k)->getSurname(),
                    'type'=>'SP'
                );
                array_push($array,$tmp);
        }}
        $students = array('students'=>$array);
        $date = $data['date'];
        $dateHours = preg_match("/\d?\d:\d\d -/",$data['dateHours'],$match);
        $dateHours = substr($match[0],0,-2);
        $date = $date." ".$dateHours;
        $dt = new \DateTimeImmutable($date, new \DateTimeZone("Europe/Warsaw"));
        $absence = new Absence();
        $absence->setFkIdSchoolLesson($schoolSubject);
        $absence->setFkTeacherId($userDoctrine);
        $absence->setStudents($students);
        $absence->setDate($dt);
        $em->persist($absence);
        $em->flush();
        return $this->redirectToRoute('absenceClassViewPageTeacher',['id' => $id]);
    }

}
