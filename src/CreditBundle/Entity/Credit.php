<?php

namespace CreditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credit
 *
 * @ORM\Table(name="credit")
 * @ORM\Entity(repositoryClass="CreditBundle\Repository\CreditRepository")
 */
class Credit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCredit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idCredit;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="idProduit",referencedColumnName="IdProduit")
     */
    private $idProduit;

    /**
     * @ORM\ManyToOne(targetEntity="\ClientBundle\Entity\Client")
     * @ORM\JoinColumn(name="idClient",referencedColumnName="idCli")
     */
    private $idClient;

    /**
     * Get IdClient
     *
     * @return \ClientBundle\Entity\Client
     */
    public function getIdClienrt()
    {
        return $this->idClient;
    }

    /**
     * Set IdClient
     *
     * @param \ClientBundle\Entity\Client $idClient
     *
     * @return Credit
     */
    public function setIdClient($idclient = null){
        $this->idClient = $idclient;
    }

    /**
     * @var float
     *
     * @ORM\Column(name="MontantCredit", type="float")
     */
    private $montantCredit;

    /**
     * @var int
     *
     * @ORM\Column(name="DureeCredit", type="integer")
     */
    private $dureeCredit;

    /**
     * @var float
     *
     * @ORM\Column(name="InteretCredit", type="float")
     */
    private $interetCredit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreationCredit", type="datetime")
     */
    private $DateCreationCredit;

    /**
     * @var int
     *
     * @ORM\Column(name="EtatCredit", type="integer")
     */
    private $etatCredit;

    /**
     * @var int
     *
     * @ORM\Column(name="ApprouveAgent", type="integer")
     */
    private $approuveAgent;

    /**
     * @var int
     *
     * @ORM\Column(name="ApprouveDirecteur", type="integer")
     */
    private $approuveDirecteur;



    /**
     * @return integer
     */
    public function getIdCredit()
    {
        return $this->idCredit;
    }

    /**
     * @param integer $idCredit
     */
    public function setIdCredit($idCredit)
    {
        $this->idCredit = $idCredit;
    }

    /**
     * Set montantCredit
     *
     * @param float $montantCredit
     *
     * @return Credit
     */
    public function setMontantCredit($montantCredit)
    {
        $this->montantCredit = $montantCredit;

        return $this;
    }

    /**
     * Get montantCredit
     *
     * @return float
     */
    public function getMontantCredit()
    {
        return $this->montantCredit;
    }

    /**
     * Set dureeCredit
     *
     * @param integer $dureeCredit
     *
     * @return Credit
     */
    public function setDureeCredit($dureeCredit)
    {
        $this->dureeCredit = $dureeCredit;

        return $this;
    }

    /**
     * Get dureeCredit
     *
     * @return int
     */
    public function getDureeCredit()
    {
        return $this->dureeCredit;
    }

    /**
     * Set interetCredit
     *
     * @param float $interetCredit
     *
     * @return Credit
     */
    public function setInteretCredit($interetCredit)
    {
        $this->interetCredit = $interetCredit;

        return $this;
    }

    /**
     * Get interetCredit
     *
     * @return float
     */
    public function getInteretCredit()
    {
        return $this->interetCredit;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreationCredit()
    {
        return $this->DateCreationCredit;
    }

    /**
     * @param \DateTime $DateCreationCredit
     */
    public function setDateCreationCredit($DateCreationCredit)
    {
        $this->DateCreationCredit = $DateCreationCredit;
    }

    /**Get IdProduit
     *
     * @return \CreditBundle\Entity\Produit
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set IdProduit
     *
     * @param \CreditBundle\Entity\Produit $idProduit
     *
     * @return Credit
     */
    public function setIdProduit($idProduit = null)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return int
     */
    public function getEtatCredit()
    {
        return $this->etatCredit;
    }

    /**
     * @param int $etatCredit
     */
    public function setEtatCredit($etatCredit)
    {
        $this->etatCredit = $etatCredit;
    }

    /**
     * @return int
     */
    public function getApprouveAgent()
    {
        return $this->approuveAgent;
    }

    /**
     * @param int $approuveAgent
     */
    public function setApprouveAgent($approuveAgent)
    {
        $this->approuveAgent = $approuveAgent;
    }

    /**
     * @return int
     */
    public function getApprouveDirecteur()
    {
        return $this->approuveDirecteur;
    }

    /**
     * @param int $approuveDirecteur
     */
    public function setApprouveDirecteur($approuveDirecteur)
    {
        $this->approuveDirecteur = $approuveDirecteur;
    }


}

