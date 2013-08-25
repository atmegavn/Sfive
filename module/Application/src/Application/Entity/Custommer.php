<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Custommer
 *
 * @ORM\Table(name="custommer")
 * @ORM\Entity
 */
class Custommer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FULL_NAME", type="string", length=100, nullable=false)
     */
    private $fullName;

    /**
     * @var integer
     *
     * @ORM\Column(name="AGE", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var integer
     *
     * @ORM\Column(name="SEX", type="integer", nullable=false)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONE", type="string", length=45, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS", type="string", length=100, nullable=false)
     */
    private $address;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return Custommer
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    
        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Custommer
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sex
     *
     * @param integer $sex
     * @return Custommer
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return integer 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Custommer
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
     * Set address
     *
     * @param string $address
     * @return Custommer
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
}