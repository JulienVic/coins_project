<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu')]
    public function index(): Response
    {
        $menuItems=[
          ['label'=> 'Accueil', 'route'=> 'menu'],
          ['label'=> 'Ajouter une pièce', 'route'=> 'formulaire'],
          ['label'=> 'Pièces', 'route'=> 'pieces']
        ];
        return $this->render('menu/index.html.twig', [
            'menuItems' => $menuItems,
        ]);
    }

}