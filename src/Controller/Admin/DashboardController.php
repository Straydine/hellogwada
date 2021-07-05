<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Entity\Carrousel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Blog');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('carrousel', 'fas fa-list', Carrousel::class);
         yield MenuItem::linkToCrud('blog', 'fas fa-list', Blog::class);
         yield MenuItem::linkToUrl('Retour Au site', 'fas fa-arrow-circle-left', '/');
    }
}
