<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class AboutController extends AbstractController
{

    public function about(Environment $twig)
    {

        $content = $twig->render('about.html.twig');
        return new Response($content);

    }
}




