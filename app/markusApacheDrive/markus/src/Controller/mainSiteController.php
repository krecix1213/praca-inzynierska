<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainSiteController extends AbstractController
{
    /**
     * @Route("/", name="mainSite")
     */
    public function mainSite()
    {
        return $this->render('mainSite/mainSite.twig');
    }

}
?>