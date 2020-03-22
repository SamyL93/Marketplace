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

<<<<<<< HEAD:src/Controller/ContactController.php
    public function contact(Environment $twig, Request $request, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('Name', TextType::class)
            ->add('LastName', TextType::class)
            ->add('mail', TextType::class)
            ->add('Subject', TextType::class)
            ->add('Message', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'send message'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $message = (new \Swift_Message($contact->getSubject()))
                ->setFrom('marketplace12344@gmail.com')
                ->setTo('marketplace12344@gmail.com')
                ->setBody(
                    $this->renderView(
                    // templates/mail/mail_contact.html.twig
                        'mail/mail_contact.html.twig',
                        ['name'=>$contact->getName(),'lastname'=>$contact->getLastName(),'message'=>$contact->getMessage(), 'mail'=>$contact->getMail()]

                    ),
                    'text/html'
                )
            ;

            $mailer->send($message);
        }

        return $this->render('contact.html.twig', [
            'form' => $form->createView()
        ]);
=======
    public function about(Environment $twig)
    {
        $content = $twig->render('infos/about.html.twig');
        return new Response($content);
    }
>>>>>>> f425b9abfff5b7280b4daa9ac89cca547892fbd7:src/Controller/InfoController.php

    public function contact(Environment $twig)
    {
        $content = $twig->render('infos/contact.html.twig');
        return new Response($content);
    }
}




