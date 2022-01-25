<?php


namespace App\Controller;

use App\Entity\Product;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ShoeShopController  extends AbstractController
{
    private $view_data = [];
    private $entityManager;
    public function index(Request $request, $code =null)
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        $session = new Session();
        $cart=[];
        switch ($code) {
            case "adidas":
                $this->view_data['list_adidas']=$this->entityManager->getRepository(Product::class)->getAllByType('adidas');
                return $this->render('partial/category.html.twig',$this->view_data);
                break;
            case "add-to-cart":
                $items_id=$request->get("items_id");
                $cart =$session->get('cart');
                array_push($cart,$items_id);
                $session->set('cart',$cart);
                return $this->OutputJson(true, count($session->get('cart')), "");
            default:
                //$session->set('cart', $cart );
                $this->view_data['cart']= count($session->get('cart'));
                $this->view_data['list_adidas']=$this->entityManager->getRepository(Product::class)->getFourByType('adidas');
//                dd($this->view_data['list_adidas']);
                $this->view_data['list_nike']=$this->entityManager->getRepository(Product::class)->getFourByType('nike');
                $this->view_data['list_vans']=$this->entityManager->getRepository(Product::class)->getFourByType('vans');
                return $this->render('index.html.twig',$this->view_data);
                break;
        }
    }
    protected function OutputJson($success, $data, $message = false)
    {
        return $success ? new JsonResponse([
            'success' => $success,
            'data' => $data,
            'message' => $message
        ]) : new JsonResponse([
            'success' => $success,
            'message' => $message
        ]);
    }
}