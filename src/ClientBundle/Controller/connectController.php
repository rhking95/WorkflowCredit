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
        return $this->render('@Client/Default/index.html.twig');
    }

    public function listeClientsAction()
    {
        return $this->render('@Client/Default/listeClients.html.twig');
    }


}
