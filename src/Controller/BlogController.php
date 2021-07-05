<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(BlogRepository $BlogRepository): Response
    {$Blogs = $BlogRepository ->findAll();
        return $this->render('blog/index.html.twig', [
            'blogs' => $Blogs
        ]);
    }
}
