<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUsers
 *
 * @ORM\Table(name="tbl_users", indexes={@ORM\Index(name="idx_name", columns={"name"}), @ORM\Index(name="idx_block", columns={"block"}), @ORM\Index(name="username", columns={"username"}), @ORM\Index(name="email", columns={"email"})})
 * @ORM\Entity
 */
class TblUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=150, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="block", type="boolean", nullable=false)
     */
    private $block = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sendEmail", type="boolean", nullable=true)
     */
    private $sendemail = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registerDate", type="datetime", nullable=false)
     */
    private $registerdate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastvisitDate", type="datetime", nullable=false)
     */
    private $lastvisitdate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="activation", type="string", length=100, nullable=false)
     */
    private $activation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", nullable=false)
     */
    private $params;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastResetTime", type="datetime", nullable=false)
     */
    private $lastresettime = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="resetCount", type="integer", nullable=false)
     */
    private $resetcount = '0';



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
     * Set name
     *
     * @param string $name
     * @return TblUsers
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
     * Set username
     *
     * @param string $username
     * @return TblUsers
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TblUsers
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
     * Set password
     *
     * @param string $password
     * @return TblUsers
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
     * Set block
     *
     * @param boolean $block
     * @return TblUsers
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return boolean 
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set sendemail
     *
     * @param boolean $sendemail
     * @return TblUsers
     */
    public function setSendemail($sendemail)
    {
        $this->sendemail = $sendemail;

        return $this;
    }

    /**
     * Get sendemail
     *
     * @return boolean 
     */
    public function getSendemail()
    {
        return $this->sendemail;
    }

    /**
     * Set registerdate
     *
     * @param \DateTime $registerdate
     * @return TblUsers
     */
    public function setRegisterdate($registerdate)
    {
        $this->registerdate = $registerdate;

        return $this;
    }

    /**
     * Get registerdate
     *
     * @return \DateTime 
     */
    public function getRegisterdate()
    {
        return $this->registerdate;
    }

    /**
     * Set lastvisitdate
     *
     * @param \DateTime $lastvisitdate
     * @return TblUsers
     */
    public function setLastvisitdate($lastvisitdate)
    {
        $this->lastvisitdate = $lastvisitdate;

        return $this;
    }

    /**
     * Get lastvisitdate
     *
     * @return \DateTime 
     */
    public function getLastvisitdate()
    {
        return $this->lastvisitdate;
    }

    /**
     * Set activation
     *
     * @param string $activation
     * @return TblUsers
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;

        return $this;
    }

    /**
     * Get activation
     *
     * @return string 
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * Set params
     *
     * @param string $params
     * @return TblUsers
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string 
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set lastresettime
     *
     * @param \DateTime $lastresettime
     * @return TblUsers
     */
    public function setLastresettime($lastresettime)
    {
        $this->lastresettime = $lastresettime;

        return $this;
    }

    /**
     * Get lastresettime
     *
     * @return \DateTime 
     */
    public function getLastresettime()
    {
        return $this->lastresettime;
    }

    /**
     * Set resetcount
     *
     * @param integer $resetcount
     * @return TblUsers
     */
    public function setResetcount($resetcount)
    {
        $this->resetcount = $resetcount;

        return $this;
    }

    /**
     * Get resetcount
     *
     * @return integer 
     */
    public function getResetcount()
    {
        return $this->resetcount;
    }
}
