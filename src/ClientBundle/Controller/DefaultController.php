<?php

namespace ClientBundle\Controller;

use ClientBundle\Entity\AgentCredit;
use ClientBundle\Entity\Client;
use ClientBundle\Entity\DirecteurAgn;
use ClientBundle\Form\AgentCreditType;
use ClientBundle\Form\ClientType;
use ClientBundle\Form\DirecteurAgnType;
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
                $form = $form->createView();
                return $this->render('@Client/Default/connect.html.twig');

            }else{
                $form = $form->createView();
                return $this->render('@Client/Default/client.html.twig',array('form'=>$form,'error1'=>$error1,'error2'=>$error2));
            }


        }
        $form = $form->createView();
        return $this->render('@Client/Default/Client.html.twig',array('form'=>$form,'error1'=>$error1,'error2'=>$error2));


    }

    public function addAgentAction (Request $req){

        $agn = new AgentCredit();
        $form = $this -> createForm(AgentCreditType::class,$agn);
        $form = $form->handleRequest($req);
        $err1="";
        $err2="";
        if ($form->isValid()){
            $agt =$req->get("conf");
            if ($agn->getPassword()!=$agt){
             $err1="veillez vérifier votre mot de passe" ;
            }

            $Agents = $this->getDoctrine()->getRepository
            (AgentCredit::class)->findAll();
            foreach ($Agents as &$x){
                $Agent = new AgentCredit();
                $Agent = $x;
                if ($Agent->getLogin() == $agn->getLogin()){
                    $err2 = "Login deja existe";
                }
            }
            if($err1=="" and  $err2==""){
                $em = $this->getDoctrine()->getManager();
                $em->persist($agn);
                $em->flush();
            }

        }


        $form = $form->createView();

        return $this->render('@Client/Default/addAgent.html.twig',array('form'=>$form,'err1'=>$err1,'err2'=>$err2));
    }
    public function addDirAction (Request $req){

        $dir = new DirecteurAgn();
        $form = $this -> createForm(DirecteurAgnType::class,$dir);
        $form = $form->handleRequest($req);
        $err1="";
        $err2="";

        if ($form->isValid()){
            $d =$req->get("conf");
            if ($dir->getPassord()!=$d){
                $err1="veillez vérifier votre mot de passe" ;
            }

            $Directeurs = $this->getDoctrine()->getRepository
            (DirecteurAgn::class)->findAll();
            foreach ($Directeurs as &$x){
                $Directeur = new DirecteurAgn();
                $Directeur = $x;
                if ($Directeur->getLogin() == $dir->getLogin()){
                    $err2 = "Login deja existe";
                }
            }

            if($err1=="" and  $err2==""){
                $em = $this->getDoctrine()->getManager();
                $em->persist($dir);
                $em->flush();
            }
        }
        $form = $form->createView();
        return $this->render('@Client/Default/addDir.html.twig',array('form'=>$form,'err1'=>$err1,'err2'=>$err2));
    }
    public function LogAgentAction (){
        return $this->render('@Client/Default/logAgent.html.twig',array('err3'=>''));
    }

    public function checkAgentAction(Request $req)
    {
        $login = $req->get("login");
        $password = $req->get("password");
        $err3 = "";
        $Agent = $this->getDoctrine()->getRepository
        (AgentCredit::class)->findBy(array('login' => $login, 'password' => $password));
        if ($Agent == null) {
            $err3 = "veillez vérifier votre Login / Mot de passe";
            return $this->render('@Client/Default/logAgent.html.twig',array('err3'=>$err3));
        } else {
            return $this->render('baseConnect.html.twig');

        }
    }

    public function LogDirAction (){
        return $this->render('@Client/Default/logDir.html.twig',array('err3'=>''));
    }

    public function checkDirAction(Request $req)
    {
        $login = $req->get("login");
        $password = $req->get("password");
        $err3 = "";
        $Directeur = $this->getDoctrine()->getRepository
        (DirecteurAgn::class)->findBy(array('login' => $login, 'passord' => $password));

        if ($Directeur == null) {
            $err3 = "veillez vérifier votre Login / Mot de passe";
            return $this->render('@Client/Default/logDir.html.twig',array('err3'=>$err3));
        } else {
            return $this->render('baseConnect.html.twig');

        }
    }
}
