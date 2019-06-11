<?php

namespace CreditBundle\Controller;

use CreditBundle\Entity\Credit;
use CreditBundle\Form\CreditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class CreditController extends Controller
{
    public function AjoutAction(Request $request){
        $credit = new Credit();
        $form = $this->createFormBuilder($credit)
            ->add('typeCredit')
            ->add('dureeCredit')
            ->add('InteretCredit')
            ->add('Enregistrer',SubmitType::class)
            ->getForm();

        return $this->render('@Credit/Credit.html.twig',array('form'=>$form->createView()));
    }

}
