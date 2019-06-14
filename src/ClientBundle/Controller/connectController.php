<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class connectController extends Controller
{

    public function connectAction()
    {
        return $this->render('@Client/Default/connect.html.twig');
    }
    public function authentificationAction()
    {


    }

}
