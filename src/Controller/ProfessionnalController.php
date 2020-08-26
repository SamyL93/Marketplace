<?php


namespace App\Controller;


use App\Entity\Produit;
use App\Entity\Revendeur;
use App\Form\InscriptionProType;
use App\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Controller\MailerInscriptionController;
use Symfony\Component\Security\Core\Encoder\ProPasswordEncoder;
use Doctrine\ORM\EntityManager;
use Twig\Environment;

class ProfessionnalController extends AbstractController
{
    public function inscriptionPro (Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new Revendeur();

        $form = $this->createForm(InscriptionProType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash=$encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($hash);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('connexionPro');
        }
        return $this->render('security/inscriptionPro.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function profilPro ($twig)
    {
        $content = $twig->render('commande/profilPro.html.twig');
        return new Response($content);

    }

    public function connexionPro ()
    {
        return $this->render('security/connexionPro.html.twig');
    }

    public function logout ()
    {

    }

    public function stats ()
    {
        return $this->render('product/pro/stats.html.twig');
    }

    public function addProduct (Environment $twig, EntityManagerInterface $manager, Request $request)
    {
        $product = new Produit();
        //$UserId=$this->getUser()->getId();
       // $product->setRevendeur(4);
        $revendeur = $manager->getRepository(Revendeur::class)->find($this->getUser()->getId());
$product->setRevendeur($revendeur);
        //dd($product->getRevendeur());
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $manager->persist($product);
            $manager->flush();
            return $this->redirectToRoute('connexion');

        }
        return $this->render('product/pro/addProduct.html.twig',[
            'form' => $form->createView()
        ]);

    }
}