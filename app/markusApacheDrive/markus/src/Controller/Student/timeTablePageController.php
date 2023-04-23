<?php

namespace App\Controller\Student;

use App\Entity\Student;
use App\Entity\SchoolClass;
use App\Entity\HoursOfClassesAndBreaks;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class timeTablePageController extends AbstractController
{
    /**
     * @Route("/student/timetable", name="timeTableStudent")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Student::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);   
        $schoolPlan = $user->getClass()->getBasicTimetable();
        $plan = array();
        foreach($schoolPlan as $k => $value){
            foreach($value as $v){
                $plan[$k][$v['Godzina']]['Przedmiot'] = $v['Przedmiot'];
                $plan[$k][$v['Godzina']]['Nauczyciel'] = $v['Nauczyciel'];
            }
        }
        $hours = $doctrine->getRepository(HoursOfClassesAndBreaks::class)->find(1)->getTimesJson();
        return $this->render('student/timeTable.twig', [
            'user' => $user, 'hours' => $hours, 'plan' => $plan
        ]);
    }
}
