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

     /**
     * @Route("/admin/teacher/delete/ask/{id}", name="TeacherAskDeleteAdmin")
     */
    public function studentAskDelete(ManagerRegistry $doctrine, int $id): Response
    {
        $teacher = $doctrine->getRepository(Teacher::class)->find($id);
        return $this->render('admin/personAskDelete.html.twig', [
            'person'=>$teacher, 'typ'=>'nauczyciela'
        ]);
    }
     /**
     * @Route("/admin/teacher/delete/{id}", name="TeacherDeleteAdmin")
     */
    public function studentDelete(EntityManagerInterface $em,ManagerRegistry $doctrine, int $id): Response
    {
        $teacher = $doctrine->getRepository(Teacher::class)->find($id);
        $em->remove($teacher);
        $em->flush();
        return $this->redirectToRoute('mainPageTeachersEditAdmin');
    }
}