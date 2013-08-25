<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemUsers
 *
 * @ORM\Table(name="system_users")
 * @ORM\Entity
 */
class SystemUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_NAME", type="string", length=45, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=500, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRIORITY", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONE", type="string", length=45, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="FULL_NAME", type="string", length=45, nullable=false)
     */
    private $fullName;



    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return SystemUsers
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return SystemUsers
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

    /**
     * Set priority
     *
     * @param integer $priority
     * @return SystemUsers
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return SystemUsers
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return SystemUsers
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
     * Set email
     *
     * @param string $email
     * @return SystemUsers
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
     * Set fullName
     *
     * @param string $fullName
     * @return SystemUsers
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
}