<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Twig\Environment;

class BagController
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
        dd($session->get('panier'));
    }

    public function bag(Environment $twig)
    {
        $content = $twig->render('bag.html.twig');
        return new Response($content);
    }
}