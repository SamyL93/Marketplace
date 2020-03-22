<?php


namespace App\Controller;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Twig\Environment;

class BagController extends AbstractController
{
    public function add ($id, SessionInterface $session) {
        $panier = $session->get('panier',[]);
        if (!empty($panier[$id]))
        {
            $panier[$id]++;
        }
        else {
            $panier[$id]=1;

        }
        $session->set('panier',$panier);

        return $this->redirectToRoute("categorie");
    }

    public function bag(Environment $twig, SessionInterface $session, ProduitRepository $productRepository)
    {
        $panier = $session->get('panier',[]);
        $panierWithData =[];
        foreach ($panier as $id=> $quantity) {
            $panierWithData[] = [
                'product'=> $productRepository->find($id),
                'quantity'=> $quantity
            ];
        }
        $total=0;
        foreach ($panierWithData as $item){
            $totalItem = $item['product']->getPrice() *$item['quantity'];
            $total += $totalItem;
        }
        $content = $twig->render('bag.html.twig',[
            'items'=>$panierWithData,
            'total'=>$total
        ]);
        return new Response($content);
    }

    public function remove ($id, SessionInterface $session){
    $panier = $session->get('panier',[]);
    if (!empty($panier[$id])) {
        unset($panier[$id]);
    }
        $session->set('panier',$panier);
        return $this->redirectToRoute("bag");
    }
}