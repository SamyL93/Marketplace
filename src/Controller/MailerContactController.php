<?php


namespace App\Controller;


use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailerContactController extends AbstractController
{

    public function contactUs($envoyeur, $contenu): void
    {
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
            ->setUsername('marketplace12344@gmail.com')
            ->setPassword('marketplace1')
            ->setEncryption( 'tls') //For Gmail
        ;
        $mailer = new Swift_Mailer($transport);
        $message = (new \Swift_Message('Contact'))
            ->setFrom('marketplace12344@gmail.com')
            ->setTo('marketplace12344@gmail.com')
            ->setBody(
                $this->renderView(
                // templates/mail/mail_contact.html.twig
                    'mail/mail_contact.html.twig',
                    ['message'=>$contenu, 'mail'=>$envoyeur]

                ),
                'text/html'
            )
        ;

        $mailer->send($message);
    }


}