<?php

namespace App\Controller\Admin;

use App\Entity\SchoolSubject;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class schoolSubjectPageController extends AbstractController
{
    /**
     * @Route("/admin/subjects", name="mainPageSubjectsAdmin")
     */
    public function subjectsIndex(ManagerRegistry $doctrine): Response
    {
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->findAll();
        return $this->render('admin/schoolSubject.html.twig', [
            'schoolSubject' => $schoolSubject
        ]);
    }
     /**
     * @Route("/admin/subject/edit/{id}", name="SubjectEditAdmin")
     */
    public function editSubject(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($id);
        return $this->render('admin/schoolSubjectEdit.html.twig', [
            'id'=>$id, 'schoolSubject' => $schoolSubject
        ]);
    }
     /**
     * @Route("/admin/subject/save/{id}", name="SubjectSaveAdmin")
     */
    public function subjectAdd(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $data = $request->request->all();
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($id);
        $schoolSubject->setName($data['name']);
        $schoolSubject->setShortcut($data['shortcut']);
        $em->persist($schoolSubject);
        $em->flush();
        return $this->redirectToRoute('SubjectEditAdmin',['id' => $id]);
    }
    /**
     * @Route("/admin/subject/add", name="SubjectAddAdmin")
     */
    public function addSubject(): Response
    {
        return $this->render('admin/schoolSubjectAdd.html.twig');
    }
     /**
     * @Route("/admin/subject/add/save", name="SubjectAddSaveAdmin")
     */
    public function addSubjectSave(EntityManagerInterface $em,ManagerRegistry $doctrine, Request $request): Response
    {
        $data = $request->request->all();
        $schoolSubject = new SchoolSubject();
        $schoolSubject->setName($data['name']);
        $schoolSubject->setShortcut($data['shortcut']);
        $em->persist($schoolSubject);
        $em->flush();
        return $this->redirectToRoute('mainPageSubjectsAdmin');
    }


    /**
     * @Route("/admin/subject/delete/ask/{id}", name="SubjectAskDeleteAdmin")
     */
    public function subjectAskDelete(ManagerRegistry $doctrine, int $id): Response
    {
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($id);
        return $this->render('admin/personAskDelete.html.twig', [
            'schoolSubject'=>$schoolSubject, 'typ'=>'przedmiot'
        ]);
    }
     /**
     * @Route("/admin/subject/delete/{id}", name="SubjectDeleteAdmin")
     */
    public function subjectDelete(EntityManagerInterface $em,ManagerRegistry $doctrine, int $id): Response
    {
        $schoolSubject = $doctrine->getRepository(SchoolSubject::class)->find($id);
        $em->remove($schoolSubject);
        $em->flush();
        return $this->redirectToRoute('mainPageSubjectsAdmin');
    }
}
