<?php


namespace App\Controller;



use App\Entity\Newsletter;
use App\Form\BaseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class homeController extends AbstractController
{

    public function home(Environment $twig, Request $request, EntityManagerInterface $manager, \Swift_Mailer $mailer){
        $newsletter = new Newsletter();
        $form = $this->createForm(BaseType::class, $newsletter);//on appelle le formulaire

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($newsletter);
            $manager->flush();
            $message = (new \Swift_Message('Newsletter'))
                ->setFrom('marketplace12344@gmail.com')
                ->setTo( $newsletter->getMail())
                ->setBody(
                    $this->renderView(
                    // templates/mail/mail_newsletter.html.twig
                        'mail/mail_newsletter.html.twig'

                    ),
                    'text/html'
                );


            $mailer->send($message);//on envoie le mail
        }

        return $this->render('accueil.html.twig', [
            'form' => $form->createView()
        ]);
    }
}




