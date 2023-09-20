<?php

namespace App\Controller;

use App\Entity\Pieces;
use App\Form\PiecesFormulaireType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormulaireController extends AbstractController
{
    #[Route('/ajouterPiece', name: 'formulaire')]
    public function formulaire(Request $request): Response
    {
        //on créé un objet piece
        $piece = new Pieces();
        //je créé l'objet form
        $form = $this->createForm(PiecesFormulaireType::class, $piece );
        //ici opn demande au forulaire d'extraire et de traiter les données dans l'objet $form
        $form->handleRequest($request);
        $donneesFormulaire = NULL;

        if($form->isSubmitted() && $form->isValid()){
          $donneesFormulaire=$form->getData();

          return $this->redirectToRoute('info', [
            'nom' => $donneesFormulaire->getNom(),
            'taille' => $donneesFormulaire->getTaille(),
            'metal' => $donneesFormulaire->getMetal(),
            'continent' => $donneesFormulaire->getContinent(),
            'pays' => $donneesFormulaire->getPays(),
            'annee' => $donneesFormulaire->getAnnee(),
            'imagePath' => $donneesFormulaire->getImagePath(),
            'qualite' => $donneesFormulaire->getQualite(),
            'appartenance' => $donneesFormulaire->getAppartenance(),
            'prixPublic' => $donneesFormulaire->getPrixPublic(),

          ]);
        }

        $menuItems=[
          ['label'=> 'Accueil', 'route'=> 'menu'],
          ['label'=> 'Ajouter une pièce', 'route'=> 'formulaire'],
          ['label'=> 'Pièces', 'route'=> 'pieces']
        ];

        return $this->render('menu/formulaire.html.twig', [
          //ici je donne à la variable form le fait de créer une vue avec $form->createView()
            'form' => $form->createView(),
            'menuItems' => $menuItems,
        ]);
    }
}