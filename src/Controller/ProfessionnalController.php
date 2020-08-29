<?php


namespace App\Controller;


use App\Data\SortData;
use App\Entity\Produit;
use App\Entity\Revendeur;
use App\Form\InscriptionProType;
use App\Form\ProductType;
use App\Form\SearchForm;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Controller\MailerInscriptionController;
use Symfony\Component\Security\Core\Encoder\ProPasswordEncoder;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\User\UserInterface;
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
        $content = $twig->render('pro/profilPro.html.twig');
        return new Response($content);

    }

    public function connexionPro ()
    {
        return $this->render('security/connexionPro.html.twig');
    }

    public function logout ()
    {

    }

    public function stats ( ProduitRepository $produitRepository,EntityManagerInterface $manager, Request $request )

    {
        $form = $this->createForm(SearchForm::class);
        $form->handleRequest($request);
        $revendeur = $manager->getRepository(Revendeur::class)->find($this->getUser()->getId());
//dd($user->getUsername());
        // $produits = $this->maCategorie($produitRepository, $id);
        $produits = $produitRepository->findbyRevendeur($revendeur->getId());


        return $this->render('pro/stats.html.twig',['products' => $produits,
            'form' => $form->createView()
        ]);

    }


    public function addProduct (Environment $twig, EntityManagerInterface $manager, Request $request)
    {
        $product = new Produit();
        //$UserId=$this->getUser()->getId();
       // $product->setRevendeur(4);
        $revendeur = $manager->getRepository(Revendeur::class)->find($this->getUser()->getId());
        //dd($revendeur->getId());
$product->setRevendeur($revendeur);
        //dd($product->getRevendeur());
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($product);
            $manager->flush();
           // dd($revendeur->getProduits());
            return $this->redirectToRoute('connexion');

        }
        return $this->render('pro/addProduct.html.twig',[
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("modif/{id}", name ="modifProduct")
     */
    public function modifProduct (Produit $product , EntityManagerInterface $manager, Request $request)
    {

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $manager->flush();
            // dd($revendeur->getProduits());
            return $this->redirectToRoute('connexion');

        }
        return $this->render('pro/addProduct.html.twig',[
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("delete/{id}", name ="deleteProduct")
     */
    public function deleteProduct (Produit $product)
    {
    $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($product);
    $entityManager->flush();

        return $this->redirectToRoute('connexion');


    }
}