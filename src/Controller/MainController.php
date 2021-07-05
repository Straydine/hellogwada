<?php

namespace App\Controller;

use App\Entity\Carrousel;
use App\Repository\CarrouselRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(CarrouselRepository $carrouselRepository): Response
    {$carrousels = $carrouselRepository ->findAll();
        return $this->render('main/index.html.twig', [
            'carrousels' => $carrousels,
        ]);
    }
}
