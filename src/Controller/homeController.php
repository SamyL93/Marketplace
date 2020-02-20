<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class homeController extends AbstractController
{

    public function homepage(Environment $twig)
    {

        $content = $twig->render('accueil.html.twig');
        return new Response($content);

    }
}