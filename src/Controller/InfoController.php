<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InfoController extends AbstractController
{
    #[Route('/info', name: 'info')]
    public function nouvellePage(Request $request): Response
    {


      $nom=$request->query->get('nom');
      $taille=$request->query->get('taille');
      $metal=$request->query->get('metal');
      $continent=$request->query->get('continent');
      $pays=$request->query->get('pays');
      $annee=$request->query->get('annee');
      $imagePath=$request->query->get('imagePath');
      $qualite=$request->query->get('qualite');
      $appartenance=$request->query->get('appartenance');
      $prixPublic=$request->query->get('prixPublic');



      return $this->render('info/index.html.twig', [
            'nom' => $nom,
            'taille' => $taille,
            'metal' => $metal,
            'continent' => $continent,
            'pays' => $pays,
            'annee' => $annee,
            'imagePath' => $imagePath,
            'qualite' => $qualite,
            'appartenance' => $appartenance,
            'prixPublic' => $prixPublic,
        ]);
    }
}