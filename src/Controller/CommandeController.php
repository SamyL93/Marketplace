<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class CommandeController extends AbstractController
{

    public function myprofil(Environment $twig)
    {
        $content = $twig->render('commande/myprofil.html.twig');
        return new Response($content);

    }
}




