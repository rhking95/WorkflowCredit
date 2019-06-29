<?php
// src/AppBundle/Entity/User.php

 namespace AppBundle\Entity;
 use FOS\UserBundle\Model\User as BaseUser;
 use Doctrine\ORM\Mapping as ORM;

 /**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
 class User extends BaseUser
 {
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;


     /**
      * @var string
      *
      * @ORM\Column(name="nomCli", type="string", length=255)
      */
     private $nomCli;

     /**
      * @var string
      *
      * @ORM\Column(name="prenomCli", type="string", length=255)
      */
     private $prenomCli;

     /**
      * @var \DateTime
      *
      * @ORM\Column(name="datecli", type="date")
      */
     private $dateNaiCli;


     public function __construct()
        {
         parent::__construct();
     // your own logic
        }

     /**
      * @return \DateTime
      */
     public function getDateNaiCli()
     {
         return $this->dateNaiCli;
     }

     /**
      * @param \DateTime $dateNaiCli
      */
     public function setDateNaiCli($dateNaiCli)
     {
         $this->dateNaiCli = $dateNaiCli;
     }

     /**
      * @return string
      */
     public function getNomCli()
     {
         return $this->nomCli;
     }

     /**
      * @param string $nomCli
      */
     public function setNomCli($nomCli)
     {
         $this->nomCli = $nomCli;
     }

     /**
      * @return string
      */
     public function getPrenomCli()
     {
         return $this->prenomCli;
     }

     /**
      * @param string $prenomCli
      */
     public function setPrenomCli($prenomCli)
     {
         $this->prenomCli = $prenomCli;
     }


     public function setEmail($email)
     {
         $this->setusername($email);
         return parent::setEmail($email); // TODO: Change the autogenerated stub
     }


 }