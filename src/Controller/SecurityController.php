<?php


namespace App\Controller;


use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twig\Environment;
use App\Entity\User;
use App\Form\InscriptionType;


class SecurityController extends AbstractController
{



public function inscription (Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer) {
    $user = new User();
    $form = $this->createForm(InscriptionType::class, $user);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $hash=$encoder->encodePassword($user,$user->getPassword());
        $user->setPassword($hash);
        $manager->persist($user);
        $manager->flush();
        $message = (new \Swift_Message('Inscription confirmation'))
            ->setFrom('marketplace12344@gmail.com')
            ->setTo($user->getMail())
            ->setBody(
                $this->renderView(
                // templates/mail/mail_inscription.html.twig
                    'mail/mail_inscription.html.twig'
                ),
                'text/html'
            )
        ;

        $mailer->send($message);
    }
    return $this->render('security/inscription.html.twig', [
        'form' => $form->createView()
    ]);
}
}