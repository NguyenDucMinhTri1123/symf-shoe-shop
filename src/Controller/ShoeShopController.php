<?php


namespace App\Controller;

use App\Entity\Product;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ShoeShopController  extends AbstractController
{
    private $view_data = [];
    private $entityManager;
    public function index(Request $request, $code =null)
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        switch ($code) {
            case "adidas":
                break;
            default:
                $this->view_data['list_adidas']=$this->entityManager->getRepository(Product::class)->getFourByType('adidas');
//                dd($this->view_data['list_adidas']);
                $list_nike=$this->entityManager->getRepository(Product::class)->getFourByType('nike');
                $list_vans=$this->entityManager->getRepository(Product::class)->getFourByType('vans');
                return $this->render('index.html.twig',$this->view_data);
                break;
        }
    }
}