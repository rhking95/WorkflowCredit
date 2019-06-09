<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentCredit
 *
 * @ORM\Table(name="AgentCredit")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\AgentCreditRepository")
 */
class AgentCredit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAgn", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAgn;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;




    /**
     * Set idAgn
     *
     * @param integer $idAgn
     *
     * @return AgentCredit
     */
    public function setIdAgn($idAgn)
    {
        $this->idAgn = $idAgn;

        return $this;
    }

    /**
     * Get idAgn
     *
     * @return int
     */
    public function getIdAgn()
    {
        return $this->idAgn;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return AgentCredit
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
     * Set password
     *
     * @param string $password
     *
     * @return AgentCredit
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


}

