<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{

    /**
     * @Route("/product", name="product")
     */
    public function product()
    {

        $product = $this->getDoctrine()
                ->getRepository(Product::class)
                ->findAll();


        return $this->render('front/products.html.twig', ['products' => $product]);

    }

/*    public function menu()
    {

        $menu = $this->getDoctrine()
                ->getRepository(Product::class)
                ->findAll();

        return $this->render('menu.html.twig', ['menus' => $menu]);
    }*/

}
