<?php

namespace CreditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echeancier
 *
 * @ORM\Table(name="echeancier")
 * @ORM\Entity(repositoryClass="CreditBundle\Repository\EcheancierRepository")
 */
class Echeancier
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEcheance", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idEcheance;

    /**
     * @var float
     *
     * @ORM\Column(name="TotaleEcheaance", type="float")
     */
    private $totaleEcheaance;

    /**
     * @ORM\ManyToOne(targetEntity="Credit")
     * @ORM\JoinColumn(name="IdCredit",referencedColumnName="idCredit")
     */

    private $idCredit;

    /**
     * Get IdCredit
     *
     * @return \CreditBundle\Entity\Credit
     */
    public function getIdCredit()
    {
        return $this->idCredit;
    }

    /**
     * Set IdCredit
     *
     * @param \CreditBundle\Entity\Credit $idCredit
     *
     * @return Echeancier
     */
    public function setIdCredit($idCredit = null)
    {
        $this->idCredit = $idCredit;
    }



    /**
     * @var float
     *
     * @ORM\Column(name="PrincipaleEcheance", type="float")
     */
    private $principaleEcheance;

    /**
     * @var float
     *
     * @ORM\Column(name="InteretEcheance", type="float")
     */
    private $interetEcheance;

    /**
     * @var float
     *
     * @ORM\Column(name="RestePrincipaleEcheance", type="float")
     */
    private $restePrincipaleEcheance;

    /**
     * @var float
     *
     * @ORM\Column(name="ResteInteretEcheance", type="float")
     */
    private $resteInteretEcheance;

    /**
     * @var \Date
     *
     * @ORM\Column(name="DateEcheance", type="date")
     */
    private $dateEcheance;

    /**
     * @var bool
     *
     * @ORM\Column(name="PayeEchenace", type="boolean")
     */
    private $payeEchenace;


    /**
     * Set idEcheance
     *
     * @param integer $idEcheance
     *
     * @return Echeancier
     */
    public function setIdEcheance($idEcheance)
    {
        $this->idEcheance = $idEcheance;

        return $this;
    }

    /**
     * Get idEcheance
     *
     * @return int
     */
    public function getIdEcheance()
    {
        return $this->idEcheance;
    }

    /**
     * Set totaleEcheaance
     *
     * @param float $totaleEcheaance
     *
     * @return Echeancier
     */
    public function setTotaleEcheaance($totaleEcheaance)
    {
        $this->totaleEcheaance = $totaleEcheaance;

        return $this;
    }

    /**
     * Get totaleEcheaance
     *
     * @return float
     */
    public function getTotaleEcheaance()
    {
        return $this->totaleEcheaance;
    }

    /**
     * Set principaleEcheance
     *
     * @param float $principaleEcheance
     *
     * @return Echeancier
     */
    public function setPrincipaleEcheance($principaleEcheance)
    {
        $this->principaleEcheance = $principaleEcheance;

        return $this;
    }

    /**
     * Get principaleEcheance
     *
     * @return float
     */
    public function getPrincipaleEcheance()
    {
        return $this->principaleEcheance;
    }

    /**
     * Set interetEcheance
     *
     * @param float $interetEcheance
     *
     * @return Echeancier
     */
    public function setInteretEcheance($interetEcheance)
    {
        $this->interetEcheance = $interetEcheance;

        return $this;
    }

    /**
     * Get interetEcheance
     *
     * @return float
     */
    public function getInteretEcheance()
    {
        return $this->interetEcheance;
    }

    /**
     * Set restePrincipaleEcheance
     *
     * @param float $restePrincipaleEcheance
     *
     * @return Echeancier
     */
    public function setRestePrincipaleEcheance($restePrincipaleEcheance)
    {
        $this->restePrincipaleEcheance = $restePrincipaleEcheance;

        return $this;
    }

    /**
     * Get restePrincipaleEcheance
     *
     * @return float
     */
    public function getRestePrincipaleEcheance()
    {
        return $this->restePrincipaleEcheance;
    }

    /**
     * Set resteInteretEcheance
     *
     * @param float $resteInteretEcheance
     *
     * @return Echeancier
     */
    public function setResteInteretEcheance($resteInteretEcheance)
    {
        $this->resteInteretEcheance = $resteInteretEcheance;

        return $this;
    }

    /**
     * Get resteInteretEcheance
     *
     * @return float
     */
    public function getResteInteretEcheance()
    {
        return $this->resteInteretEcheance;
    }

    /**
     * Set dateEcheance
     *
     * @param \Date $dateEcheance
     *
     * @return Echeancier
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return \Date
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set payeEchenace
     *
     * @param boolean $payeEchenace
     *
     * @return Echeancier
     */
    public function setPayeEchenace($payeEchenace)
    {
        $this->payeEchenace = $payeEchenace;

        return $this;
    }

    /**
     * Get payeEchenace
     *
     * @return bool
     */
    public function getPayeEchenace()
    {
        return $this->payeEchenace;
    }


}

