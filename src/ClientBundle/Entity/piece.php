<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piece
 *
 * @ORM\Table(name="piece")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\pieceRepository")
 */
class piece
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idpiece", type="integer")
     */
    private $idpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     * @return mixed
     */
    public function getIdcli()
    {
        return $this->idcli;
    }

    /**
     * @param mixed $idcli
     *
     * @return piece
     */
    public function setIdcli($idcli)
    {
        $this->idcli = $idcli;
    }

    /**
     *  @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="idCli",referencedColumnName="idCli")
     */
    private $idcli;




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idpiece
     *
     * @param integer $idpiece
     *
     * @return piece
     */
    public function setIdpiece($idpiece)
    {
        $this->idpiece = $idpiece;

        return $this;
    }

    /**
     * Get idpiece
     *
     * @return int
     */
    public function getIdpiece()
    {
        return $this->idpiece;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return piece
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return piece
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}

