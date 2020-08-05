<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
//use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\Form\TextType;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;

class ContactController extends AbstractController {


    /**
    * @Route( "/contact", name = "contact" )
    */

    public function contact( Request $request, \Swift_Mailer $mailer, FlashyNotifier $flashy) {

        $form = $this->createForm( ContactType::class );
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {

            $flashy->success('Welcome Aboard', 'http://your-awesome-link.com');

           $this->addFlash('success', 'Message is sent successfully'); 
            $contactEmail = $form->getData();
          //  print_r($flashy);
          
            $message = ( new \Swift_Message( 'Hello Email im a new email' ) )
             
            ->setFrom($contactEmail['email'])
            ->setTo('nutritionaecor@gmail.com')
            ->setReplyTo($contactEmail['email'])
            ->setBody($this->renderView(
                'emails/registration.html.twig', 
                ['cont' => $contactEmail])
        , 'text/html');
            $mailer->send( $message );

            return $this->redirectToRoute('contact');           
        }

        
        return $this->render( 'contact/contact.html.twig', [
            'form' => $form->createView()
            ] );

    }
}
