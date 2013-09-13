<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSession
 *
 * @ORM\Table(name="tbl_session", indexes={@ORM\Index(name="userid", columns={"userid"}), @ORM\Index(name="time", columns={"time"})})
 * @ORM\Entity
 */
class TblSession
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=200, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client_id", type="boolean", nullable=false)
     */
    private $clientId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="guest", type="boolean", nullable=true)
     */
    private $guest = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=14, nullable=true)
     */
    private $time = '';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=true)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=150, nullable=true)
     */
    private $username = '';



    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set clientId
     *
     * @param boolean $clientId
     * @return TblSession
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return boolean 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set guest
     *
     * @param boolean $guest
     * @return TblSession
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;

        return $this;
    }

    /**
     * Get guest
     *
     * @return boolean 
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return TblSession
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return TblSession
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return TblSession
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return TblSession
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
}
