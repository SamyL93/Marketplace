<?php


namespace App\Controller;



use Symfony\Component\Form\FormTypeInterface;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Contact;

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




