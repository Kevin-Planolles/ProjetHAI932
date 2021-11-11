<?php

namespace App\Controller;

use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TournoiController extends AbstractController
{
    /**
     * @Route("/tournoi/newEvt/{nom<[0-9a-zA-Z ]+>}", name="newevt")
     */
    public function newevt($nom): Response
    {
        $ev = new Evenement();
        $ev->setNom($nom);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($ev);
        $entityManager->flush();
        return new Response('L\'évenement '. $nom . ' créé avec l\'id : ' . $ev->getId() .  '!');
    }
}
