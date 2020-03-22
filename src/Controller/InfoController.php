<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class InfoController extends AbstractController
{

    public function about(Environment $twig)
    {
        $content = $twig->render('infos/about.html.twig');
        return new Response($content);
    }

    public function contact(Environment $twig)
    {
        $content = $twig->render('infos/contact.html.twig');
        return new Response($content);
    }
}




