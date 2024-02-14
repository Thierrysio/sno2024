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

    #[Route('/etudiant/tableau2', name: 'app_etudiant_tableau2')]
    public function tableau2(): Response
    {
        return $this->render('etudiant/tableau2.html.twig');
    }

    #[Route('/etudiant/{id}', name: 'etudiant_afficher')]

    public function afficher(Etudiant $etudiant): Response
    {

        
        if (!$etudiant) {
            throw $this->createNotFoundException('Aucun étudiant trouvé pour l\'id '.$id);
        }
        
        return $this->render('/etudiant/afficher.html.twig', [
            'etudiant' => $etudiant,
        ]);
    }

    #[Route('/etudiant/forme/{id}', name: 'etudiant_afficher-forme')]

    public function afficherforme(Etudiant $etudiant): Response
    {

        
        if (!$etudiant) {
            throw $this->createNotFoundException('Aucun étudiant trouvé pour l\'id '.$id);
        }
        
        return $this->render('/etudiant/afficherform.html.twig', [
            'etudiant' => $etudiant,
        ]);
    }
}
