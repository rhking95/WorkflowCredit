<?php

namespace ClientBundle\Controller;

use ClientBundle\Entity\Client;
use ClientBundle\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Client/Default/Client.html.twig');
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $cli = new Client();
        $form = $this -> createForm(ClientType::class,$cli);
        $form = $form->handleRequest($request);

        if ($form->isValid()){

            $form = $form->createView();
            return $this->render('@Client/Default/connect.html.twig',array('form'=>$form));

        }
        $form = $form->createView();
        return $this->render('@Client/Default/Client.html.twig',array('form'=>$form));


    }
}
