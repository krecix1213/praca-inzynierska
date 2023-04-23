<?php

namespace App\Controller\Admin;

use App\Entity\SchoolClass;
use App\Entity\Marks;
use App\Entity\Student;
use App\Entity\SchoolSubject;
use App\Entity\Teacher;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class marksPageController extends AbstractController
{
    /**
     * @Route("/admin/marks", name="mainMarksPageAdmin")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $schoolClassListDoctrine = $doctrine->getRepository(SchoolClass::class)->findAll();
        $user = $this->getUser();
        return $this->render('admin/marks.html.twig', [
            'user' => $user, 'schoolClassList' => $schoolClassListDoctrine
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
        $user = $this->getUser();
        return $this->render('admin/marksClass.html.twig', [
            'user' => $user, 'arrayMark' => $arrayMarks
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
        $user = $this->getUser();
        return $this->render('admin/markEdit.html.twig', [
            'user' => $user, 'mark' => $mark, 'teacher' => $teacher, 'student'=>$student, 'schoolSubject'=>$schoolSubject
        ]);
    }
}
