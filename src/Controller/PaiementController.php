<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PaiementController extends AbstractController
{

    public function paiement(Environment $twig)
    {
        $content = $twig->render('commande/paiement.html.twig');
        return new Response($content);

    }
}





