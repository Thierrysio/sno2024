<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etudiant;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'app_etudiant')]
    public function index(): Response
    {
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
    #[Route('/etudiant/tableau', name: 'app_etudiant_tableau')]
    public function tableau(): Response
    {
        return $this->render('etudiant/tableau.html.twig');
    }

    #[Route('/etudiant/tableau2cor', name: 'app_etudiant_tableau2cor')]
    public function tableau2cor(): Response
    {
        return $this->render('etudiant/tableau2cor.html.twig');
    }
    #[Route('/etudiant/tableauca2023', name: 'app_etudiant_tableauca2023')]
    public function tableauca23(): Response
    {
        return $this->render('etudiant/tableauca2023.html.twig');
    }

    #[Route('/etudiant/tableau2', name: 'app_etudiant_tableau2')]
    public function tableau2(): Response
    {
        return $this->render('etudiant/tableau2.html.twig');
    }

    #[Route('/etudiant/semaine7', name: 'app_etudiant_semaine7')]
    public function semaine7(): Response
    {
        return $this->render('etudiant/semaine7.html.twig');
    }
    #[Route('/etudiant/tableau200324', name: 'app_etudiant_tableau200324')]
    public function tableau200324(): Response
    {
        return $this->render('etudiant/tableau200324.html.twig');
    }
}
