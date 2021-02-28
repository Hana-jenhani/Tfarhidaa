<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RondonneController extends AbstractController
{
    /**
     * @Route("/rondonne", name="rondonne")
     */
    public function index(): Response
    {
        return $this->render('rondonne/newrondonne.html.twig', [
            'controller_name' => 'RondonneController',
        ]);
    }
}
