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
        //$this->view_data['total_price']=0;
        switch ($code) {
            case "adidas":
                $this->view_data['list_shoe']=$this->entityManager->getRepository(Product::class)->getAllByType('adidas');
                return $this->render('partial/category.html.twig',$this->view_data);
                break;
            case "nike":
                $this->view_data['list_shoe']=$this->entityManager->getRepository(Product::class)->getAllByType('nike');
                return $this->render('partial/category.html.twig',$this->view_data);
                break;
            case "vans":
                $this->view_data['list_shoe']=$this->entityManager->getRepository(Product::class)->getAllByType('vans');
                return $this->render('partial/category.html.twig',$this->view_data);
                break;
            case "add-to-cart":
                $items_id=$request->get("items_id");
                $cart =$session->get('cart');
                array_push($cart,$items_id);
                $session->set('cart',$cart);
                return $this->OutputJson(true, count($session->get('cart')), "");
            case "remove-one":
                $items_id=$request->get("items_id");
                $cart =$session->get('cart');
                if(($key = array_search($items_id, $cart)) !== FALSE) {
                    unset($cart[$key]);
                }
                $session->set('cart',$cart);
                return $this->OutputJson(true, count($session->get('cart')), "");
                break;
            case "remove-type":
                $items_id=$request->get("items_id");
                $cart =$session->get('cart');
                while(true){
                    if(($key = array_search($items_id, $cart)) !== FALSE) {
                        unset($cart[$key]);
                    }else{
                        break;
                    }
                }
                $session->set('cart',$cart);
                return $this->OutputJson(true, count($session->get('cart')), "");
                break;
                break;
            case "remove-all":
                $session->set('cart',[]);
                return $this->OutputJson(true, count($session->get('cart')), "");
                break;
            case "view-cart":
                $cart=$session->get('cart');
                $items = [];
                $cart=array_unique($cart);
                foreach ($cart as $item){
                    $shoe= $this->entityManager->getRepository(Product::class)->getProduct($item);
                    $shoe->setNumber(0);
                    $items[$shoe->getId()]=$shoe;
                }
                //dd($items);
                $cart=$session->get('cart');
                $total_price=0;
                foreach ($cart as $item){
                    $shoe= $this->entityManager->getRepository(Product::class)->getProduct($item);
                    $items[$shoe->getId()]->setNumber($shoe->getNumber()+1);
                    $total_price += $items[$shoe->getId()]->getPrice();
                }
                //dd($items);
                $this->view_data['shoe_Cart']=$items;
                $this->view_data['total_price']=$total_price;
                //dd($items);
                return $this->render('partial/cart.html.twig',$this->view_data);
                break;
            case "item-detail":
                $items_id=$request->get("items_id");
                $this->entityManager->getRepository(Product::class)->addViewTime($items_id);
                $this->view_data['shoe']=$shoe= $this->entityManager->getRepository(Product::class)->getProduct($items_id);
                $this->view_data['list_img']= explode("|", $shoe->getImgList());
                return $this->render('partial/product-detail.html.twig',$this->view_data);
                break;
            case "process":
                $price=$request->get("total_price");
                $this->view_data['price']=$price;
                return $this->render('partial/order.html.twig',$this->view_data);
                break;
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