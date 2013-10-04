<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Register
 *
 * @ORM\Table(name="register")
 * @ORM\Entity
 */
class Register
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idregister", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregister;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="school", type="string", length=100, nullable=true)
     */
    private $school;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=100, nullable=true)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="isnoticed", type="integer", nullable=true)
     */
    private $isnoticed;

    /**
     * @var string
     *
     * @ORM\Column(name="potison", type="string", length=200, nullable=true)
     */
    private $potison;



    /**
     * Get idregister
     *
     * @return integer 
     */
    public function getIdregister()
    {
        return $this->idregister;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Register
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Register
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set school
     *
     * @param string $school
     * @return Register
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Register
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return Register
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Register
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Register
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isnoticed
     *
     * @param integer $isnoticed
     * @return Register
     */
    public function setIsnoticed($isnoticed)
    {
        $this->isnoticed = $isnoticed;

        return $this;
    }

    /**
     * Get isnoticed
     *
     * @return integer 
     */
    public function getIsnoticed()
    {
        return $this->isnoticed;
    }

    /**
     * Set potison
     *
     * @param string $potison
     * @return Register
     */
    public function setFrom($potison)
    {
        $this->potison = $potison;

        return $this;
    }

    /**
     * Get potison
     *
     * @return string 
     */
    public function getFrom()
    {
        return $this->potison;
    }
}
