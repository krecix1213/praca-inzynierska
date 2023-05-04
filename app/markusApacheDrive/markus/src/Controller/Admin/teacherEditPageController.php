<?php

namespace App\Controller\Admin;

use App\Entity\Teacher; 
use App\Entity\User; 
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
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
        $teachers = $doctrine->getRepository(Teacher::class)->findAll();
        return $this->render('admin/teacherEdit.html.twig', [
            'teacher' => $teachers
        ]);
    }
    /**
     * @Route("/admin/teacher/{id}", name="TeacherEditAdmin", requirements={"id"="\d+"})
     */
    public function teacherEdit(ManagerRegistry $doctrine,int $id): Response
    {
        $teacher = $doctrine->getRepository(Teacher::class)->find($id);
        $teacher->email = $teacher->getFkIdUser()->getEmail();
        return $this->render('admin/teacherEditPerson.html.twig', [
            'teacher' => $teacher, 'id'=>$id
        ]);
    }
        /**
     * @Route("/admin/teacher/edit/save/{id}", name="TeacherSaveAdmin")
     */
    public function teacherSave(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $teacher = $doctrine->getRepository(Teacher::class)->find($id);
        $teacher->setName($data['name']);
        $teacher->setSurname($data['surname']);
        $teacher->setTelephone($data['telephone']);
        $teacher->getFkIdUser()->setEmail($data['email']);
        $em->persist($teacher);
        $em->flush();
        return $this->redirectToRoute('TeacherEditAdmin',['id'=>$id]);
    }
    /**
     * @Route("/admin/teacher/add", name="TeacherAddAdmin")
     */
    public function teacherAdd(ManagerRegistry $doctrine): Response
    {
        return $this->render('admin/teacherAdd.html.twig');
    }
     /**
     * @Route("/admin/teacher/add/save", name="TeacherAddSaveAdmin")
     */
    public function teacherAddSave(UserPasswordHasherInterface $passwordHasher,EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request): Response
    {
        $data = $request->request->all();
        $user = new User();
        $user->setEmail($data['email']);
        $user->setRoles(json_encode(['ROLE_TEACHER']));
        $password = $passwordHasher->hashPassword($user,'Nauczyciel1!');
        $user->setPassword($password);
        $em->persist($user);
        $em->flush();

        $teacher = new Teacher();
        $teacher->setName($data['name']);
        $teacher->setSurname($data['surname']);
        $teacher->setTelephone($data['telephone']);
        $teacher->setFkIdUser($user);
        $em->persist($teacher);
        $em->flush();
        return $this->redirectToRoute('mainPageTeachersEditAdmin');
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