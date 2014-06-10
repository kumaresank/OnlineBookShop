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
class SearchController extends Controller
{    
    public function searchAction(Request $request)
    {
		$session = $this->getRequest()->getSession();
		$find = $request->get('srtxt');
		$val = strtolower($find);
		$pos = strpos($val, ',');
		$value = substr_replace($val, '', $pos, strlen($val));
		$em = $this->getDoctrine()->getEntityManager();
           $bookQuery = $em->createQueryBuilder()
                            ->select('c')
                            ->from('bookshopBundle:bookdetails', 'c')
                            ->where('c.bookname = :bookname')
							->setParameter('bookname', $value);							
           $bookFinalQuery = $bookQuery->getQuery();
           $books = $bookFinalQuery->getArrayResult();
           $id = $bookFinalQuery->getResult();
           $page=0;
           	foreach($id as $bn)
            {
				$page = $bn->getId();
			}
     	
		if($session->has('username'))
		{
			return $this->render('bookshopBundle:Default:index.html.twig', array('name' => $session->get('username'),'cart' => $session->get('cart'),'books'=>$books,'page'=> $page));
		}
           return $this->render('bookshopBundle:Default:index.html.twig', array('books'=>$books,'current_page'=> $page));
         }
		
		
	
	public function autoAction(Request $request)
    {
		$find = $request->get('term');
		$value = '%' . strtolower($find) . '%';
		$em = $this->getDoctrine()->getEntityManager();
		$bookQuery1 = $em->createQueryBuilder()
                            ->select('c')
                            ->from('bookshopBundle:bookdetails', 'c')
                            ->where('c.bookname LIKE :bookname')
							->setParameter('bookname', $value)
							->setMaxResults(5);
        $bookFinalQuery1 = $bookQuery1->getQuery();
        $bookname1 = $bookFinalQuery1->getResult();
        
            foreach($bookname1 as $bn)
            {
				$booknm1 = "=========Search By Book Name==========";
			$books1 = $bn->getBookname() . " , " .$bn->getBookauthor() ." , ".$bn->getBookpublisher() ." , Rs." .$bn->getBookprice();
			$data[] = array('label'=>$books1,'category'=>$booknm1);
            }
            $bookQuery2 = $em->createQueryBuilder()
                            ->select('c')
                            ->from('bookshopBundle:bookdetails', 'c')
                            ->where('c.bookpublisher LIKE :bookpub')
                            ->setParameter('bookpub', $value)                            
                            ->setMaxResults(5);
           $bookFinalQuery2 = $bookQuery2->getQuery();
           $bookname2 = $bookFinalQuery2->getResult();
           foreach($bookname2 as $bn)
            {
		    $booknm2 = "=========Search By Publisher==========";
			$books2 = $bn->getBookname() . " , " .$bn->getBookauthor() ." , ".$bn->getBookpublisher() ." , Rs." .$bn->getBookprice();
			$data[] = array('label'=>$books2,'category'=>$booknm2);
            }
            $bookQuery3 = $em->createQueryBuilder()
                            ->select('c')
                            ->from('bookshopBundle:bookdetails', 'c')
                            ->where('c.bookauthor LIKE :bookaut')
							->setParameter('bookaut', $value)
							->setMaxResults(5);
           $bookFinalQuery3 = $bookQuery3->getQuery();
           $bookname3 = $bookFinalQuery3->getResult(); 
           foreach($bookname3 as $bn)
            {
			$booknm3 = "=========Search By Author==============";     
		    $books3 = $bn->getBookname() . " , " .$bn->getBookauthor() ." , ".$bn->getBookpublisher() ." , Rs." .$bn->getBookprice();
		    $data[] = array('label'=>$books3,'category'=>$booknm3);
            }
            $response = new Response();
			$response->setContent(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
	}
         
	 }
