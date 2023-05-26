<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GebruikerController extends AbstractController
{
    #[Route('/', name: 'app_gebruiker')]
    public function index(): Response
    {
        return $this->render('gebruiker.html.twig');
    }

    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('profile/profile.html.twig');
    }

    #[Route('/lessons', name: 'app_lessons')]
    public function lessons(): Response
    {
        return $this->render('lessons/lessons.html.twig');
    }
}
