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


    public function addAction(Request  $req)
    {
        $cli = new Client();
        $form = $this -> createForm(ClientType::class,$cli);
        $form = $form->handleRequest($req);
        $error1="";
        $error2="";
        if ($form->isValid()){
            $clients = $this->getDoctrine()->getRepository
            (Client::class)->findAll();
            foreach ($clients as &$x){
                $client = new Client();
                $client = $x;
                if ($client->getLogin() == $cli->getLogin()){
                    $error1 = "Login deja existe";
                }
            }

            $pas = $req->get('confpas');
            if ($pas != $cli->getPassword()){
                $error2= 'Veuillez verifier le password';
            }

            if($error1 == "" and $error2 == ""){
                $em = $this->getDoctrine()->getManager();
                $em->persist($cli);
                $em->flush();
            }

            $form = $form->createView();
            return $this->render('@Client/Default/Client.html.twig',array('form'=>$form,'error1'=>$error1,'error2'=>$error2));

        }
        $form = $form->createView();
        return $this->render('@Client/Default/Client.html.twig',array('form'=>$form,'error1'=>$error1,'error2'=>$error2));


    }
}
