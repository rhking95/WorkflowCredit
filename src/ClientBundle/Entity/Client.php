<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCli", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idCli;

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
     * @ORM\Column(name="dateNaiCli", type="date")
     */
    private $dateNaiCli;


    /**
     * Set idCli
     *
     * @param integer $idCli
     *
     * @return Client
     */
    public function setIdCli($idCli)
    {
        $this->idCli = $idCli;

        return $this;
    }

    /**
     * Get idCli
     *
     * @return int
     */
    public function getIdCli()
    {
        return $this->idCli;
    }

    /**
     * Set nomCli
     *
     * @param string $nomCli
     *
     * @return Client
     */
    public function setNomCli($nomCli)
    {
        $this->nomCli = $nomCli;

        return $this;
    }

    /**
     * Get nomCli
     *
     * @return string
     */
    public function getNomCli()
    {
        return $this->nomCli;
    }

    /**
     * Set prenomCli
     *
     * @param string $prenomCli
     *
     * @return Client
     */
    public function setPrenomCli($prenomCli)
    {
        $this->prenomCli = $prenomCli;

        return $this;
    }

    /**
     * Get prenomCli
     *
     * @return string
     */
    public function getPrenomCli()
    {
        return $this->prenomCli;
    }

    /**
     * Set dateNaiCli
     *
     * @param \DateTime $dateNaiCli
     *
     * @return Client
     */
    public function setDateNaiCli($dateNaiCli)
    {
        $this->dateNaiCli = $dateNaiCli;

        return $this;
    }

    /**
     * Get dateNaiCli
     *
     * @return \DateTime
     */
    public function getDateNaiCli()
    {
        return $this->dateNaiCli;
    }
}

