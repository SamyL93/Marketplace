<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailController extends AbstractController
{
    public function mail_inscription($destination, $name, \Swift_Mailer $mailer){
        $message = (new \Swift_Message('Inscription confirmation'))
            ->setFrom('marketplace12344@gmail.com')
            ->setTo($destination)
            ->setBody(
                $this->renderView(
                // templates/emails/mail_inscription.html.twig
                    'emails/registration.html.twig',
                    ['name' => $name]
                ),
                'text/html'
            )
        ;

        $mailer->send($message);

        //return $this->render(...);
    }/*
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