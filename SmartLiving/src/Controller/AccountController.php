<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_USER")
 */
/**
 * @Route("/account")
 */
class AccountController extends BaseController
{
    /**
     * @Route("/", name="app_account")
     */
    public function index()
    {
        return $this->render('account/account.html.twig', [
            'page_title' => 'Mon Compte',
        ]);
    }


    /**
     * @Route("/orders", name="app_orders")
     */
    public function getOrders()
    {
        return $this->render('account/account.html.twig', [
            'page_title' => 'Mes Commandes',
        ]);
    }
}
