<?php

namespace CreditBundle\Controller;

use ClientBundle\Entity\Client;
use CreditBundle\Entity\Credit;
use CreditBundle\Entity\Echeancier;
use CreditBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CreditController extends Controller
{
    public function AjoutAction(){
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('CreditBundle:Produit')->findAll();

        return $this->render('@Credit/Credit.html.twig',array('produit'=>$produit));
    }

    public function AjaxAction(Request $request){
        $credit = new Credit();
        $valeur_credit = $request->request->get('valeur_credit');
        $duree_credit = $request->request->get('duree_credit');
        $taux_interet = $request->request->get('taux_interet');
        $montant_echeance = $request->request->get('montant_echeance');
        $productid = $request->request->get('productid');
        $em=$this->getDoctrine()->getManager();

        $client = new Client();
        $client=$em->getRepository('ClientBundle:Client')->find(2);

        $produuit = new Produit();
        $produuit=$em->getRepository('CreditBundle:Produit')->find($productid);

        $credit->setMontantCredit($valeur_credit);
        $credit->setDureeCredit($duree_credit);
        $credit->setInteretCredit($taux_interet);
        $credit->setDateCreationCredit(new \DateTime("now"));
        $credit->setIdClient($client);
        $credit->setIdProduit($produuit);
        $credit->setEtatCredit(1);
        $credit->setApprouveAgent(0);
        $credit->setApprouveDirecteur(0);

        $em->persist($credit);
        $em->flush();

        $date = date("Y-m-d");
        $totale_echeance = round($montant_echeance,3);
        $principale = round($valeur_credit/$duree_credit,3);
        $interet = round($principale*$taux_interet*0.01,3);
        $balance = round($valeur_credit,3);
        $idCredit = $em->getRepository('CreditBundle:Credit')->getCreditID();
        $credit->setIdCredit($idCredit[1]);
        while ($balance>1){
            $date = date( "Y-m-d", strtotime("+1 month",strtotime($date)));
            $echeancier = new Echeancier();
            $balance =$balance-$principale;
            $echeancier->setTotaleEcheaance($totale_echeance);
            $echeancier->setPrincipaleEcheance($principale);
            $echeancier->setInteretEcheance($interet);
            $echeancier->setRestePrincipaleEcheance(0);
            $echeancier->setResteInteretEcheance(0);
            $echeancier->setDateEcheance(new \DateTime ($date));
            $echeancier->setPayeEchenace(0);
            $echeancier->setIdCredit($credit);
            $em1 = $this->getDoctrine()->getManager();
            $em1->persist($echeancier);
        }
        $em1->flush();

        $response = new Response(json_encode(array(
            'confirmation' => '/WorkflowCredit/web/app_dev.php/credit/liste'
        )));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function ApprobationAgentAction(){
        $em=$this->getDoctrine()->getManager();
        $credit=$em->getRepository("CreditBundle:Credit")->getCreditAgent();
        $creditap=$em->getRepository("CreditBundle:Credit")->getCreditApprouve();
        $creditan=$em->getRepository("CreditBundle:Credit")->getCreditAnnule();

        return $this->render('@Credit/ApprobationAgent.html.twig',array("credit"=>$credit,"creditap"=>$creditap,"creditan"=>$creditan));
    }

    public  function ConfirmationAgentAction($id){
        $credits = $this->getDoctrine()->getRepository(Credit::class)->findBy(array('idCredit'=>$id));
        $credit = new Credit();
        $credit=$credits[0];
        $credit->setApprouveAgent(1);

        $em= $this->getDoctrine()->getManager();
        $em->persist($credit);
        $em->flush();

        $credit=$em->getRepository("CreditBundle:Credit")->getCreditAgent();
        $creditap=$em->getRepository("CreditBundle:Credit")->getCreditApprouve();
        $creditan=$em->getRepository("CreditBundle:Credit")->getCreditAnnule();

        return $this->render('@Credit/ApprobationAgent.html.twig',array("credit"=>$credit,"creditap"=>$creditap,"creditan"=>$creditan));
    }

    public  function AnnulerAgentAction($id){
        $credits = $this->getDoctrine()->getRepository(Credit::class)->findBy(array('idCredit'=>$id));
        $credit = new Credit();
        $credit=$credits[0];
        $credit->setEtatCredit(0);

        $em= $this->getDoctrine()->getManager();
        $em->persist($credit);
        $em->flush();

        $credit=$em->getRepository("CreditBundle:Credit")->getCreditAgent();
        $creditap=$em->getRepository("CreditBundle:Credit")->getCreditApprouve();
        $creditan=$em->getRepository("CreditBundle:Credit")->getCreditAnnule();

        return $this->render('@Credit/ApprobationAgent.html.twig',array("credit"=>$credit,"creditap"=>$creditap,"creditan"=>$creditan));
    }
}
