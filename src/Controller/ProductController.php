<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ProductController extends AbstractController
{
    public function categorie(Environment $twig)
    {

        $content = $twig->render('product/categorie.html.twig');
        return new Response($content);
    }
}