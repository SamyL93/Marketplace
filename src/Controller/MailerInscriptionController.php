<?php


namespace App\Controller;


use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailerInscriptionController extends AbstractController
{
    public function mail_inscription($destination): void
    {
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
            ->setUsername('marketplace12344@gmail.com')
            ->setPassword('marketplace1')
            ->setEncryption( 'tls') //For Gmail
        ;
        $mailer = new Swift_Mailer($transport);
        $message = (new \Swift_Message('Inscription confirmation'))
            ->setFrom('marketplace12344@gmail.com')
            ->setTo($destination)
            ->setBody(
                $this->renderView(
                // templates/mail/mail_inscription.html.twig
                    'mail/mail_inscription.html.twig'
                ),
                'text/html'
            )
        ;

        $mailer->send($message);

        //return $this->render(...);
    }

    /*
    public function sendEmail($name, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('marketplace12344@gmail.com')
            ->setTo('paul.piotro@gmail.com')
            ->setBody('You should see me from the profiler!')
        ;

        $mailer->send($message);


    }*/
}