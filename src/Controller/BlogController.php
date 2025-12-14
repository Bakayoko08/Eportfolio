<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/Contacts', name: 'app_blog')]
    public function Contacts(): Response
    {
        return $this->render('blog/Contacts.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

   #[Route('/blog/Home', name: 'app_Home')]
    public function home(): Response
    {
        return $this->render('blog/Home.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/Apropos', name: 'app_Apropos')]
    public function Apropos(): Response
    {
        return $this->render('blog/Apropos.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    
     #[Route('/blog/Hobbies', name: 'app_Hobbies')]
    public function Hobbies(): Response
    {
        return $this->render('blog/Hobbies.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

     #[Route('/blog/Compétences', name: 'app_Compétences')]
    public function Compétences(): Response
    {
        return $this->render('blog/Compétences.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/Compétence1', name: 'app_Compétence1')]
    public function Compétence1(): Response
    {
        return $this->render('/Compétence1.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/Compétence2', name: 'app_Compétence2')]
    public function Compétence2(): Response
    {
        return $this->render('/Compétence2.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/Compétence3', name: 'app_Compétence3')]
    public function Compétence3(): Response
    {
        return $this->render('/Compétence3.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

}

