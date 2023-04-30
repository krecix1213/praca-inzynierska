<?php

namespace App\Controller\Admin;

use App\Entity\Student; 
use App\Entity\SchoolClass; 
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class studentEditPageController extends AbstractController
{
    /**
     * @Route("/admin/student", name="mainPageStudentEditAdmin")
     */
    public function studentEditIndex(ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();
        $students = $doctrine->getRepository(Student::class)->findAll();
        return $this->render('admin/studentEdit.html.twig', [
            'user' => $user, 'students' => $students
        ]);
    }
    /**
     * @Route("/admin/student/{id}", name="StudentEditAdmin")
     */
    public function studentEdit(ManagerRegistry $doctrine,int $id): Response
    {
        $user=$this->getUser();
        $student = $doctrine->getRepository(Student::class)->find($id);
        $classList = $doctrine->getRepository(SchoolClass::class)->findAll();
        return $this->render('admin/studentEditPerson.html.twig', [
            'user' => $user, 'student' => $student, 'classList' => $classList, 'id'=>$id
        ]);
    }
    /**
     * @Route("/admin/student/edit/{id}", name="StudentSaveAdmin")
     */
    public function studentSave(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $student = $doctrine->getRepository(Student::class)->find($id);
        $student->setName($data['name']);
        $student->setSurname($data['surname']);
        $student->setTelephone($data['telephone']);
        $student->setEmail($data['email']);
        $student->getFkIdUser()->setEmail($data['email']);
        $student->setNumberIdentGoverment($data['nig']);
        $class= $doctrine->getRepository(SchoolClass::class)->find($data['class']);
        $student->setClass($class);
        $em->persist($student);
        $em->flush();
        return $this->redirectToRoute('StudentEditAdmin',['id' => $id]);
    }
}