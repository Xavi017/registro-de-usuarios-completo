<?php
// src/AppBundle/Entity/User.php

namespace MMSEBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="administradores")
 */
class User extends BaseUser
{
   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=30,nullable=true)
     */
    private $cedula;
    
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=150,nullable=true)
     */
    private $firstname;
    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=150,nullable=true)
     */
    private $lastname;
    
    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=20,nullable=true)
     */
    private $celular;
    
    /**
     * @var date
     *
     * @ORM\Column(name="creacionAt", type="datetime",nullable=true)
     */
    private $creacionAt;
    /*
    /**
     * @var date
     *
     * @ORM\Column(name="actualizacionAt", type="date")
     */
    /*private $actualizacionAt;*/
    
    /*To String*/
    public function __toString()
    {
        return (string)$this->firstname . ' ' .(string)$this->lastname ;
    }

    /**
     * Set celular
     *
     * @param integer $celular
     * @return Usuario
     */
    public function setCelular($celular) {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return integer 
     */
    public function getCelular() {
        return $this->celular;
    }
        
    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Usuario
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname() {
        return $this->firstname;
    }
    
    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Usuario
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname() {
        return $this->lastname;
    }
    
    /**
     * Set creacionAtAt
     *
     * @param date $creacionAt
     * @return Usuario
     */
    public function setCreacionAt($creacionAt) {
        ini_set('date.timezone','America/Bogota'); 
        $now=new \DateTime("now");
        $now->format('yyyy-mm-dd hh:ii:ss');
        $this->creacionAt = $now;

        return $this;
    }

    /**
     * Get creacionAt
     *
     * @return date 
     */
    public function getCreacionAt() {
        return $this->creacionAt;
    }
    /*
    /**
     * Set actualizacionAt
     *
     * @param date $actualizacionAt
     * @return Usuario
     */
    /*public function setActualizacionAt($actualizacionAt) {
        $this->actualizacionAt = new \DateTime();

        return $this;
    }

    /**
     * Get actualizacionAt
     *
     * @return date 
     */
    /*public function getActualizacionAt() {
        return $this->actualizacionAt;
    }*/
    

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return User
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }
}
