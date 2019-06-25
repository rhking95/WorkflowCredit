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
     * @var int
     *
     * @ORM\Column(name="typeCredit", type="integer")
     */
    private $typeCredit;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="typeCredit",referencedColumnName="IdProduit")
     */

    /**
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer")
     */
    private $idClient;

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="idClient",referencedColumnName="idClient")
     */


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
     * Set typeCredit
     *
     * @param integer $typeCredit
     *
     * @return Credit
     */
    public function setTypeCredit($typeCredit)
    {
        $this->typeCredit = $typeCredit;

        return $this;
    }

    /**
     * Get typeCredit
     *
     * @return int
     */
    public function getTypeCredit()
    {
        return $this->typeCredit;
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
}

