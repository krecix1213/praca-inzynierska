<?php

namespace App\Controller\Teacher;

use App\Entity\Teacher;
use App\Entity\Absence;
use App\Entity\Marks;
use App\Entity\Student;
use App\Entity\SchoolSubject;
use App\Entity\SchoolClass;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class marksPageController extends AbstractController
{
    /**
     * @Route("/teacher/marks", name="marksMainPageTeacher")
     */
    public function marks(ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $schoolClass = $doctrine->getRepository(SchoolClass::class)->findAll();
        return $this->render('teacher/marksClass.twig', [
            'user' => $user, 'schoolClass' => $schoolClass
        ]);
    }
    /**
     * @Route("/teacher/marks/class/{id}", name="marksClassPageTeacher")
     */
    public function marksClass(ManagerRegistry $doctrine, int $id)
    {
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $className = $doctrine->getRepository(SchoolClass::class)->find($id)->getSymbol();
        $schoolClassList = $doctrine->getRepository(SchoolClass::class)->find($id)->getStudents();
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->findAll();
        return $this->render('teacher/marksClassAdd.twig', [
            'user' => $user, 'schoolClassList' => $schoolClassList, 'schoolSubject' => $schoolSubject , 'classId' => $id, 'className' => $className
        ]);
    }
    /**
     * @Route("/teacher/marks/class/add/{id}", name="marksAddClass")
     */
    public function addMarksClass(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id)
    {
        $data = $request->request->all();
        $weight = (int) $data["weight"];
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($data['subject']);
        $teacher = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        foreach($data["student"] as $studentId => $marksString){
            $marks = explode(",",$marksString);
            foreach($marks as $mark){
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
                $student = $doctrine->getRepository(Student::class)->find($studentId);

                $marks = new Marks();
                $marks->setMark($mark);
                $marks->setWeight($weight);
                $marks->setTeacher($teacher);
                $marks->setStudent($student);
                $marks->setFkIdSchoolSubject($schoolSubject);
                $em->persist($marks);
                $em->flush();
            }
        }
        return $this->redirectToRoute('marksClassViewPageTeacher',['id' => $id]);
    }

    /**
     * @Route("/teacher/marks/view/class/{id}", name="marksClassViewPageTeacher")
     */
    public function marksViewClass(ManagerRegistry $doctrine, int $id){
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        $schoolClassListDoctrine = $doctrine->getRepository(SchoolClass::class)->find($id)->getStudents();
        $className = $doctrine->getRepository(SchoolClass::class)->find($id)->getSymbol();
        $arrayMarks = array();
        foreach($schoolClassListDoctrine as $v){
            $marksListDoctrine = $doctrine->getRepository(Marks::class)->findBy(['fk_id_user_student' => $v->getId()]);
            $studentName = $v->getName()." ".$v->getSurname();
            $i = 0;
            foreach($marksListDoctrine as $marks){
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["marks"] = $marks->getMark();
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["subjectShortcut"] = $marks->getFkIdSchoolSubject()->getShortcut();
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["weight"] = $marks->getWeight();
                $arrayMarks[$studentName][$marks->getFkIdSchoolSubject()->getName()][$i]["teacher"] = $marks->getTeacher()->getName()." ".$marks->getTeacher()->getSurname();
                $i++;
            }
        }
        // foreach($arrayMarks as $key => $subject){
        //     $sumWeight = $sumMarks = 0;
        //     foreach($subject as $v){                
        //         $sumMarks += $v['marks'] * $v['weight'];
        //         $sumWeight += $v['weight'];    
        //     }            
        //     $marksAvg[$key] = round($sumMarks/$sumWeight,2);
        // }
        return $this->render('teacher/marksViewClass.twig', [
            'user' => $user,'className' => $className, 'marks'=> $arrayMarks
        ]);
    }
}
