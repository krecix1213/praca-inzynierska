<?php

namespace App\Controller\Student;

use App\Entity\Student;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainPageController extends AbstractController
{
    /**
     * @Route("/student/", name="mainPageStudent")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Student::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        return $this->render('student/index.html.twig', [
            'user' => $user,
        ]);
    }
}
