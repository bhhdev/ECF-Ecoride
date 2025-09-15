<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RegisterVehiculController extends AbstractController
{
    #[Route('/enregistrer_vehicule', name: 'app_register_vehicul')]
    public function index(): Response
    {
        return $this->render('register_vehicul/index.html.twig', [
            'controller_name' => 'Page enregistrement de vehicule',
        ]);
    }
}
