<?php

namespace CreditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="CreditBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdProduit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="NomProduit", type="string", length=255)
     */
    private $nomProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="MantantProdMax", type="float")
     */
    private $mantantProdMax;

    /**
     * @var float
     *
     * @ORM\Column(name="MantantProdMin", type="float")
     */
    private $mantantProdMin;

    /**
     * @return float
     */
    public function getMantantProdMax()
    {
        return $this->mantantProdMax;
    }

    /**
     * @param float $mantantProdMax
     */
    public function setMantantProdMax($mantantProdMax)
    {
        $this->mantantProdMax = $mantantProdMax;
    }

    /**
     * @return float
     */
    public function getMantantProdMin()
    {
        return $this->mantantProdMin;
    }

    /**
     * @param float $mantantProdMin
     */
    public function setMantantProdMin($mantantProdMin)
    {
        $this->mantantProdMin = $mantantProdMin;
    }

    /**
     * @var float
     *
     * @ORM\Column(name="TauxIntProdMax", type="float")
     */
    private $tauxIntProdMax;

    /**
     * @var float
     *
     * @ORM\Column(name="TauxIntProdMin", type="float")
     */
    private $tauxIntProdMin;

    /**
     * @var int
     *
     * @ORM\Column(name="DureeProdMax", type="integer")
     */
    private $dureeProdMax;

    /**
     * @var int
     *
     * @ORM\Column(name="DureeProdMin", type="integer")
     */
    private $dureeProdMin;

    /**
     * @return int
     */
    public function getDureeProdMax()
    {
        return $this->dureeProdMax;
    }

    /**
     * @param int $dureeProdMax
     */
    public function setDureeProdMax($dureeProdMax)
    {
        $this->dureeProdMax = $dureeProdMax;
    }

    /**
     * @return int
     */
    public function getDureeProdMin()
    {
        return $this->dureeProdMin;
    }

    /**
     * @param int $dureeProdMin
     */
    public function setDureeProdMin($dureeProdMin)
    {
        $this->dureeProdMin = $dureeProdMin;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreationProduit", type="date")
     */
    private $dateCreationProduit;


    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return Produit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set tauxIntProdMax
     *
     * @param float $tauxIntProdMax
     *
     * @return Produit
     */
    public function setTauxIntProdMax($tauxIntProdMax)
    {
        $this->tauxIntProdMax = $tauxIntProdMax;

        return $this;
    }

    /**
     * Get tauxIntProdMax
     *
     * @return float
     */
    public function getTauxIntProdMax()
    {
        return $this->tauxIntProdMax;
    }

    /**
     * Set tauxIntProdMin
     *
     * @param float $tauxIntProdMin
     *
     * @return Produit
     */
    public function setTauxIntProdMin($tauxIntProdMin)
    {
        $this->tauxIntProdMin = $tauxIntProdMin;

        return $this;
    }

    /**
     * Get tauxIntProdMin
     *
     * @return float
     */
    public function getTauxIntProdMin()
    {
        return $this->tauxIntProdMin;
    }

    /**
     * Set dateCreationProduit
     *
     * @param \DateTime $dateCreationProduit
     *
     * @return Produit
     */
    public function setDateCreationProduit($dateCreationProduit)
    {
        $this->dateCreationProduit = $dateCreationProduit;

        return $this;
    }

    /**
     * Get dateCreationProduit
     *
     * @return \DateTime
     */
    public function getDateCreationProduit()
    {
        return $this->dateCreationProduit;
    }
}

