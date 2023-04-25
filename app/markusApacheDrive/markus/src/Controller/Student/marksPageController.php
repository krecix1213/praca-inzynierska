<?php

namespace App\Controller\Student;

use App\Entity\Student;
use App\Entity\Marks;
use App\Entity\SchoolSubject;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class marksPageController extends AbstractController
{
    /**
     * @Route("/student/marks/", name="mainMarksStudent")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $user= $doctrine->getRepository(Student::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $marksDoctrine = $doctrine->getRepository(Marks::class)->findBy(array('fk_id_user_student' => $user->getId()),array('fk_id_schoolSubject' => 'ASC'));
        $marksAvg = $marks = array();
        $i=0;
        foreach($marksDoctrine as $v){
            $marks[$v->getFkIdSchoolSubject()->getName()][$i]['id'] = $v->getId();
            $marks[$v->getFkIdSchoolSubject()->getName()][$i]['subjectShortcut'] = $v->getFkIdSchoolSubject()->getShortcut();
            $marks[$v->getFkIdSchoolSubject()->getName()][$i]['marks'] = $v->getMark();
            $marks[$v->getFkIdSchoolSubject()->getName()][$i]['weight']= $v->getWeight();
            $marks[$v->getFkIdSchoolSubject()->getName()][$i]['teacher']= $v->getTeacher()->getName()." ".$v->getTeacher()->getSurname();
            $i++;
        }
        foreach($marks as $key => $subject){
            $sumWeight = $sumMarks = 0;
            foreach($subject as $v){                
                $sumMarks += $v['marks'] * $v['weight'];
                $sumWeight += $v['weight'];    
            }            
            $marksAvg[$key] = round($sumMarks/$sumWeight,2);
        }
        return $this->render('student/marks.html.twig', [
            'user' => $user,
            'marks' => $marks,
            'marksAvg' => $marksAvg
        ]);
    }
    /**
     * @Route("/student/marks/{id}", name="marksStudentId")
     */
    public function marks(ManagerRegistry $doctrine, $id): Response
    {
        $user = $doctrine->getRepository(Student::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $marksDoctrine = $doctrine->getRepository(Marks::class)->find($id);
        $marks = array(
            'marks' => $marksDoctrine->getMark(),
            'weight' => $marksDoctrine->getWeight(),
            'teacher' => $marksDoctrine->getTeacher()->getName()." ".$marksDoctrine->getTeacher()->getSurname(),
            'subject' => $marksDoctrine->getFkIdSchoolSubject()->getName(),
            'ts' => $marksDoctrine->getTs()->format("d-M-Y H:i")
        );
        return $this->render('student/marksPage.html.twig', [
            'user' => $user,
            'marks' => $marks,
        ]);
    }
}
