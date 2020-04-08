<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Entity\Product;

class FrontController extends AbstractController {

    /**
    * @Route( "/", name = "index" )
    */

    public function index() {

        return $this->render( 'front/index.html.twig' );

    }

    /**
    * @Route( "/liste", name = "liste" )
    */

    public function Liste() {
        $listes = $this->getDoctrine()
        ->getRepository( User::class )
        ->findAll();

        // print_r( $listes );
        return $this->render( 'front/listes_users.html.twig', ['listes' => $listes ] );

    }

    /**
    * @Route( "/delete/{id}", name = "delete" )
    */

    public function deleteAction( $id ) {

        $data = $this->getDoctrine()
        ->getRepository( User::class )
        ->findOneBy( array( 'id' => $id ) );

        /*  $currentUserId = 1;
        print_r( $currentUserId );
        if ( $currentUserId == $id ) {
            $session = $this->get( 'session' );
            $session = new Session();
            $session->invalidate();
            */
            $em = $this->getDoctrine()->getManager();
            $em->remove( $data );
            $em->flush();

            return $this->redirectToRoute( 'liste' );

        }

}

