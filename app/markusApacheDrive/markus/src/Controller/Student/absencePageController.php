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
        $absenceDoctrine = $doctrine->getRepository(Absence::class)->searchAbsence($this->getUser()->getId());
        foreach($absenceDoctrine as $v){
            $tmp=array(
                'przedmiot' => $doctrine->getRepository(SchoolSubject::class)->find($v['fk_id_school_lesson_id'])->getName(),
                'przedmiotSkrot' => $doctrine->getRepository(SchoolSubject::class)->find($v['fk_id_school_lesson_id'])->getShortcut(),
                'nauczyciel' => $doctrine->getRepository(Teacher::class)->find($v['fk_teacher_id_id']),
                'data' => $v['date'],
                'ts' => $v['ts']
            );
            $json = json_decode($v['students'],true);
            $json = $json['students'];
            $k = array_search($this->getUser()->getId(),array_column($json,'id'));
            $tmp['json']=$json[$k];
            array_push($absence,$tmp);
        }
        return $this->render('student/absence.html.twig', [
            'user' => $user, 'absence' => $absence
        ]);
    }
}
