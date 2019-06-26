<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DirecteurAgn
 *
 * @ORM\Table(name="directeur_agn")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\DirecteurAgnRepository")
 */
class DirecteurAgn
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
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passord", type="string", length=255)
     */
    private $passord;


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
     * Set iddir
     *
     * @param string $iddir
     *
     * @return DirecteurAgn
     */
    public function setIddir($iddir)
    {
        $this->iddir = $iddir;

        return $this;
    }

    /**
     * Get iddir
     *
     * @return string
     */
    public function getIddir()
    {
        return $this->iddir;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return DirecteurAgn
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set passord
     *
     * @param string $passord
     *
     * @return DirecteurAgn
     */
    public function setPassord($passord)
    {
        $this->passord = $passord;

        return $this;
    }

    /**
     * Get passord
     *
     * @return string
     */
    public function getPassord()
    {
        return $this->passord;
    }
}

