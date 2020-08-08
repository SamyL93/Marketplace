<?php

namespace App\Controller;

use App\Form\SearchForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony     \Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Repository\ProduitRepository;
use App\Data\SortData;




class ProductController extends AbstractController
{
    public function categorie(Environment $twig)
    {

        $content = $twig->render('product/categorie.html.twig');
        return new Response($content);
    }


    public function liste_produit(Environment $twig,ProduitRepository $produitRepository, $id, Request $request)
    {
$data = new SortData();
$form = $this->createForm(SearchForm::class, $data);
$form->handleRequest($request);
        $produits = $this->maCategorie($produitRepository, $id);
        return $this->render('product/articles.html.twig', [
            'products' => $produits, 'cat' => $id,
            'form' => $form->createView()
        ]);
    }


    public function maCategorie($produitRepository,$id)
    {
        switch ($id) {
            case 'fashion':
                {
                    return  $produitRepository->findBy((array('categorie' => 'Fashion')));
                }
                break;

            case 'home':
                {
                    return  $produitRepository->findBy((array('categorie' => 'Home')));
                }
                break;

            case 'books':
                {
                    return  $produitRepository->findBy((array('categorie' => 'Books')));
                }
                break;

            case 'high-tech':
            {
                return  $produitRepository->findBy((array('categorie' => 'High-tech')));
            }
        }
    }
}