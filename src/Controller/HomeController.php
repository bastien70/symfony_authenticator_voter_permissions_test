<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/test1", name="home_test_with_security_annotation")
     * @Security("is_granted('home_test_page')")
     */
    public function testPageWithSecurityAction()
    {
        return $this->render('home/test_page.html.twig');
    }

    /**
     * @Route("/test2", name="home_test_with_is_granted_annotation")
     * @IsGranted("home_test_page")
     */
    public function testPageWithIsGrantedAction()
    {
        return $this->render('home/test_page.html.twig');
    }
}
