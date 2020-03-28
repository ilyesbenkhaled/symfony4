<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController {

    /**
    * @Route( "/menu", name = "menu" )
    * @author dev khaled
    */

    public function menu( $max = 3 ) {
        $product = $this->getDoctrine()
        ->getRepository( Product::class )
        ->findAll();

        return $this->render( 'menu.html.twig', ['articles' => $product] );
    }

}
