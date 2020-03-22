<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony     \Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Repository\ProduitRepository;


class ProductController extends AbstractController
{
    public function categorie(Environment $twig)
    {

        $content = $twig->render('product/categorie.html.twig');
        return new Response($content);
    }


    public function liste_produit(Environment $twig,ProduitRepository $produitRepository)
    {

        return $this->render('product/articles.html.twig', [
            'products' => $produitRepository->findAll()
        ]);
    }
}