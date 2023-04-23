<?php

namespace App\Controller\Teacher;

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
     * @Route("/teacher/absence", name="mainPageAbsenceTeacher")
     */
    public function absenceIndex(ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $schoolClass = $doctrine->getRepository(SchoolClass::class)->findAll();
        return $this->render('teacher/absence.html.twig', [
            'user' => $user, 'schoolClass' => $schoolClass
        ]);
    }
    /**
     * @Route("/teacher/absence/view/class/{id}", name="absenceClassViewPageTeacher")
     */
    public function absenceView(ManagerRegistry $doctrine, int $id): Response
    {
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
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

        return $this->render('teacher/absenceView.html.twig', [
            'user' => $user, 'className' => $className, 'classId'=>$id, 'absence' => $absence
        ]);
    }
    /**
     * @Route("/teacher/absence/class/{id}", name="absenceClassPageTeacher")
     */
    public function absence(ManagerRegistry $doctrine, int $id): Response
    {
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $className = $doctrine->getRepository(SchoolClass::class)->find($id)->getSymbol();
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->findAll();
        $schoolClassList = $doctrine->getRepository(SchoolClass::class)->find($id)->getStudents();
        $timeTableHours = $doctrine->getRepository(HoursOfClassesAndBreaks::class)->find(1)->getTimesJson()['godziny'];
        foreach($timeTableHours as $v){
            $hours[] = $v['rozpoczecie']." - ".$v['koniec'];
        }
        return $this->render('teacher/absenceAdd.html.twig', [
            'user' => $user, 'className' => $className, 'classId'=>$id, 'schoolSubject' => $schoolSubject,
            'schoolClassList' => $schoolClassList, 'hours' => $hours
        ]); 
    }
     /**
     * @Route("/teacher/absence/class/add/{id}", name="AbsenceAddTeacher")
     */
    public function absenceAdd(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($data['subject']);
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
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
        $absence->setFkTeacherId($user);
        $absence->setStudents($students);
        $absence->setDate($dt);
        $em->persist($absence);
        $em->flush();
        return $this->redirectToRoute('absenceClassViewPageTeacher',['id' => $id]);
    }

}
