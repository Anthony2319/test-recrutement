<?php

namespace App\Controller\Admin;
use App\Entity\Famille;
use App\Entity\Semence;
use App\Entity\Stock;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="Menu Principal")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Guide De Plantation');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Famille', 'fas fa-list-alt', Famille::class);
        yield MenuItem::linkToCrud('Semence', 'fas fa-newspaper', Semence::class);
        yield MenuItem::linkToCrud('Stock', 'fas fa-list', Stock::class);
    }
    
}
