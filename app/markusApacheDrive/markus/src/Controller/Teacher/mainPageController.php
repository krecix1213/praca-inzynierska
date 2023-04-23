<?php

namespace App\Controller\Teacher;

use App\Entity\Teacher;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainPageController extends AbstractController
{
    /**
     * @Route("/teacher/", name="mainPageTeacher")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $user = $doctrine->getRepository(Teacher::class)->findOneBy(['fk_id_user'=>$this->getUser()->getId()]);
        return $this->render('teacher/index.html.twig', [
            'user' => $user,
        ]);
    }
}
