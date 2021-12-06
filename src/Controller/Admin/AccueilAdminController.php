<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilAdminController extends AbstractController
{
    #[Route('/admin/accueil', name: 'accueil_admin')]
    public function index(): Response
    {
        return $this->render('admin/accueil_admin/index.html.twig', [
            'controller_name' => 'AccueilAdminController',
        ]);
    }
}