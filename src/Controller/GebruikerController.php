<?php

namespace App\Controller;

use App\Entity\Training;
use Doctrine\ORM\EntityManagerInterface;
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
    
    #[Route('/training', name: 'app_training')]
    public function training(EntityManagerInterface $entityManager): Response
    {
        $trainings = $entityManager->getRepository(Training::class)->findAll();

        return $this->render('training/training.html.twig', array('trainings' => $trainings));
    }

    #[Route('/inschrijven', name: 'app_inschrijven')]
    public function inschrijven(EntityManagerInterface $entityManager): Response
    {
        $trainings = $entityManager->getRepository(Training::class)->findAll();

        return $this->render('training/training.html.twig', array('trainings' => $trainings));
    }
}


