<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ShoeShopController  extends AbstractController
{
    public function index(Request $request)
    {
        $name ="";
        return $this->render('index.html.twig');
    }
}