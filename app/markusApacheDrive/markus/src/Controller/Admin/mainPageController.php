<?php

namespace App\Controller\Admin;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainPageController extends AbstractController
{
    /**
     * @Route("/admin/", name="mainPageAdmin")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();
        return $this->render('admin/index.html.twig', [
            'user' => $user,
        ]);
    }
}
