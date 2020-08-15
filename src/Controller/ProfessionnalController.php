<?php


namespace App\Controller;


use App\Entity\Revendeur;
use App\Form\InscriptionProType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Controller\MailerInscriptionController;
use Symfony\Component\Security\Core\Encoder\ProPasswordEncoder;
use Doctrine\ORM\EntityManager;

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

    public function connexionPro ()
    {
        return $this->render('security/connexionPro.html.twig');
    }

    public function logout ()
    {

    }
}