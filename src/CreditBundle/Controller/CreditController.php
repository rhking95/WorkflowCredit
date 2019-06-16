<?php

namespace CreditBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CreditController extends Controller
{
    public function AjoutAction(){
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('CreditBundle:Produit')->findAll();

        return $this->render('@Credit/Credit.html.twig',array('produit'=>$produit));

    }

}
