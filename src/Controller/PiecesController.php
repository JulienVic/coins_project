<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PiecesController extends AbstractController
{
    #[Route('/pieces', name: 'pieces')]
    public function index(): Response
    {

      $menuItems=[
          ['label'=> 'Accueil', 'route'=> 'menu'],
          ['label'=> 'Ajouter une pièce', 'route'=> 'formulaire'],
          ['label'=> 'Pièces', 'route'=> 'pieces']
        ];

        return $this->render('pieces/index.html.twig', [
            'controller_name' => 'PiecesController',
            'menuItems' => $menuItems,
        ]);


    }
}