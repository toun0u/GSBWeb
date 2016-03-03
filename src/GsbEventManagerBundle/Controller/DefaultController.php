<?php

namespace GsbEventManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GsbEventManagerBundle:Default:index.html.twig');
    }

    public function sendmailAction()
    {

        /*
        $message = \Swift_Message::newInstance('Wonderful Subject')
            ->setFrom(array('sioetudiant@gmail.com' => 'John Doe'))
            ->setTo(array('sioetudiant@gmail.com', 'other@domain.org' => 'A name'))
            ->setBody('Here is the message itself')
        ;
        */

        /*
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('sioetudiant@gmail.com')
            ->setTo('sioetudiant@gmail.com')
            ->setBody('hello');
        */
/*
        $leMailer = $this->get('mailer');
        $leMailer->send($message);
*/

        $message = \Swift_Message::newInstance();
        $message->setSubject("Objet");
        $message->setFrom('sioetudiant@gmail.com');
        $message->setTo('sioetudiant@gmail.com');
        // pour envoyer le message en HTML
        $message->setBody('Hello world');
        // pour envoyer le message en HTML
        $message->setBody('<p>Hello world</p>','text/html');
        //envoi du message
        $this->get('mailer')->send($message);
        return $this->render('GsbEventManagerBundle:Default:index.html.twig');
    }
}
