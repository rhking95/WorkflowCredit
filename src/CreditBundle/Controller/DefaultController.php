<?php

namespace CreditBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CreditBundle:Default:index.html.twig');
    }

    public function listeCreditAction()
    {
        return $this->render('@Credit/Default/listeCredits.html.twig');

    }
}
