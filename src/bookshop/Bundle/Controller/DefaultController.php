<?php

namespace bookshop\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use bookshop\Bundle\Entity\bookdetails;
use bookshop\Bundle\Entity\userdetails;
use bookshop\Bundle\Modals\Login;
use bookshop\Bundle\Modals\cartData;

class DefaultController extends Controller
{
	 public function indexAction(Request $request)
    {   
		$session = $this->getRequest()->getSession();
		$page = $request->get('page');
		$count_per_page = 5;
        $total_count = $this->getTotalbooks();
        $total_pages=ceil($total_count/$count_per_page);
        if(!is_numeric($page))
        {
           $page=1;
        }
        else
        {
           $page=floor($page);
        }
        if($total_count<=$count_per_page)
        {
           $page=1;
        }
        if(($page*$count_per_page)>$total_count)
        {
           $page=$total_pages;
        }
        $offset=0;
        if($page>1)
        {
           $offset = $count_per_page * ($page-1);
        }
           $em = $this->getDoctrine()->getEntityManager();
           $bookQuery = $em->createQueryBuilder()
                            ->select('c')
                            ->from('bookshopBundle:bookdetails', 'c')
                            ->setFirstResult($offset)
                            ->setMaxResults($count_per_page);
           $bookFinalQuery = $bookQuery->getQuery();
           $books = $bookFinalQuery->getArrayResult();
           if($session->has('username'))
		{
			return $this->render('bookshopBundle:Default:index.html.twig', array('name' => $session->get('username'),'cart' => $session->get('cart'),'books'=>$books,'total_pages'=>$total_pages,'current_page'=> $page));
		}
           return $this->render('bookshopBundle:Default:index.html.twig', array('books'=>$books,'total_pages'=>$total_pages,'current_page'=> $page));
         }
         
    public function getTotalbooks()
     {
        $em = $this->getDoctrine()->getEntityManager();
        $countQuery = $em->createQueryBuilder()
                ->select('Count(c)')
                ->from('bookshopBundle:bookdetails', 'c');
        $finalQuery = $countQuery->getQuery();
        $total = $finalQuery->getSingleScalarResult();
        return $total;
     }
     
    public function signupAction(Request $request)
    {
		$session = $this->getRequest()->getSession();
		if($request->getMethod() == 'POST')
        {
		    $session->clear();
			$user = new userdetails();
			$name = $request->get('name');
			$user->setUsername($request->get('name'));
			$user->setUseremail($request->get('email'));
			$user->setUserpassword(md5($request->get('new_pass')));
			$em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
		}
		return $this->render('bookshopBundle:Default:signupsuccess.html.twig',array("name"=>$name));
	}
		public function loginAction(Request $request)
    {
		$session = $this->getRequest()->getSession();
		$login = new Login();
		$login->setUsername($request->get('username'));
		$login->setPassword(md5($request->get('pass')));
	    $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('bookshopBundle:userdetails');
        $user = $repository->findOneBy(array('useremail' => $login->getUsername(), 'userpassword' => $login->getPassword()));
            if($user)
            {
				$session->set('username', $login->getUsername());
				$session->set('cart',"0");
				$session->set('cartitems',"");
             	return $this->redirect($this->generateUrl('bookshop_homepage'));
			}
			else
			{
						return $this->render('bookshopBundle:Default:loginerror.html.twig');
			}			   
	}
	
	public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        $page = 1;
        return $this->redirect($this->generateUrl('bookshop_homepage'));
    }
   public function cartAction(Request $request)
    {   
		$cartitems = "";
		$session = $this->getRequest()->getSession();
		$cart = new cartData();
		if($request->isXmlHttpRequest()) 
         {
		$request->getPreferredLanguage(array('en', 'fr'));
		$cart->setPage($request->request->get('page'));
		$cart->setId($request->request->get('id'));
	     }		
		if(($session->has('cart')) && ($session->has('username')))
		{
		$count = (int)$session->get('cart');
		$count=$count+1;
		$session->set('cart',(string)$count);
		$itemid= (string)(($cart->getPage() - 1) * 5) + $cart->getId();
		$cartitems = $session->get('cartitems');
		$cartitems = $cartitems . $itemid ." ";
		$session->set('cartitems',$cartitems);
		$response = new Response();
        $response->setContent(json_encode($count));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
   }
   else
   {
	   $response = new Response();
       $response->setContent(json_encode("Please Login First"));
       $response->headers->set('Content-Type', 'application/json');
	   return $response; 
   }
	}
	
	public function productsAction(Request $request) 
	{
		$session = $this->getRequest()->getSession();
		if($session->has('username'))
		{
			$cartitems = array();
			$str = $session->get('cartitems');
			$trmstr = trim($str);
			$cartitems = explode(" ",$trmstr);
			$count = sizeof($cartitems);
			$rmd = array_unique($cartitems);
			$books = array();
			$occur = 0;
			$qtyprice = array();
			$qty = array();
			foreach($rmd as $value)
			{
			$occur = count(array_keys($cartitems, $value));					
			$qty[] = $occur;
			$em = $this->getDoctrine()->getEntityManager();
           $bookQuery = $em->createQueryBuilder()
                            ->select('c')
                            ->from('bookshopBundle:bookdetails', 'c')
                            ->where('c.id = :id')
							->setParameter('id', $value);
           $bookFinalQuery = $bookQuery->getQuery();
           $books[] = $bookFinalQuery->getArrayResult();
           $price = $bookFinalQuery->getResult();
           foreach($price as $p)
           {
            $qtyprice[] = $occur * ($p->getBookprice());
		   }
		   }
		$totalprice = array_sum($qtyprice);
			return $this->render('bookshopBundle:Default:productdetails.html.twig', array('name' => $session->get('username'),'cart' => $session->get('cart'),'books' => $books, 'price' => $totalprice,'qty' => $qty,'qtyprice' => $qtyprice));
		}
	}
	public function removecartAction(Request $request)
    {   
		$session = $this->getRequest()->getSession();
		$cartitems = array();
			$str = $session->get('cartitems');
			$id = $request->get('id');
		if(($session->has('cart')) && ($session->has('username')))
		{
		$count = (int)$session->get('cart');
		$count=$count-1;
		$session->set('cart',(string)$count);
		$str = $session->get('cartitems');
		$trmstr = trim($str);
		$cartitems = explode(" ",$trmstr);
		$itemchange = "";
		foreach($cartitems as $key => $value)
		{
		  if($key == $id)
		  {
			  continue;
		  }	
		  else
		  {
		  $itemchange = $itemchange . $value . " ";
	      }
		 }
		$session->set('cartitems',$itemchange);
		}
		return $this->redirect($this->generateUrl('bookshop_products'));
	}
}
