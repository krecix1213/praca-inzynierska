<?php

namespace App\Controller\Admin;

use App\Entity\Teacher; 
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class teacherEditPageController extends AbstractController
{
    /**
     * @Route("/admin/teacher", name="mainPageTeachersEditAdmin")
     */
    public function teacherEditIndex(ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();
        $teachers = $doctrine->getRepository(Teacher::class)->findAll();
        return $this->render('admin/teacherEdit.html.twig', [
            'user' => $user, 'teacher' => $teachers
        ]);
    }
    /**
     * @Route("/admin/teacher/{id}", name="TeacherEditAdmin")
     */
    public function teacherEdit(ManagerRegistry $doctrine,int $id): Response
    {
        $user=$this->getUser();
        $teacher = $doctrine->getRepository(Teacher::class)->find($id);
        $teacher->email = $teacher->getFkIdUser()->getEmail();
        return $this->render('admin/teacherEditPerson.html.twig', [
            'user' => $user, 'teacher' => $teacher, 
        ]);
    }
}