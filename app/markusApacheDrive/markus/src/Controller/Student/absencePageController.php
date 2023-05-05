<?php

namespace App\Controller\Student;

use App\Entity\Student;
use App\Entity\Marks;
use App\Entity\Teacher;
use App\Entity\SchoolSubject;
use App\Entity\Absence;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class absencePageController extends AbstractController
{
    /**
     * @Route("/student/absence/", name="mainAbsenceStudent")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Student::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $absence = array();
        $absenceDoctrine = $doctrine->getRepository(Absence::class)->searchAbsence($user->getId());
        foreach($absenceDoctrine as $v){
            $teacherTmp = $doctrine->getRepository(Teacher::class)->find($v['fk_teacher_id_id']);
            $dateTmp = new \DateTimeImmutable($v['date'], new \DateTimeZone("Europe/Warsaw"));
            $tmp=array(
                'subject' => $doctrine->getRepository(SchoolSubject::class)->find($v['fk_id_school_lesson_id'])->getName(),
                'teacher' => $teacherTmp->getName()." ".$teacherTmp->getSurname(),
                'date' => $dateTmp->format("Y-m-d H:i"),
                'ts' => $v['ts']
            );
            $json = json_decode($v['students'],true)['students'];
            $k = array_search($user->getId(),array_column($json,'id'));
            if($k !== false) $tmp['json']=$json[$k];
            array_push($absence,$tmp);
        }
        
        return $this->render('student/absence.html.twig', [
            'user' => $user, 'absence' => $absence
        ]);
    }
}
