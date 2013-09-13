<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMessages
 *
 * @ORM\Table(name="tbl_messages", indexes={@ORM\Index(name="useridto_state", columns={"user_id_to", "state"})})
 * @ORM\Entity
 */
class TblMessages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="message_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $messageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_from", type="integer", nullable=false)
     */
    private $userIdFrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_to", type="integer", nullable=false)
     */
    private $userIdTo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="folder_id", type="boolean", nullable=false)
     */
    private $folderId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=false)
     */
    private $dateTime = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="priority", type="boolean", nullable=false)
     */
    private $priority = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;



    /**
     * Get messageId
     *
     * @return integer 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set userIdFrom
     *
     * @param integer $userIdFrom
     * @return TblMessages
     */
    public function setUserIdFrom($userIdFrom)
    {
        $this->userIdFrom = $userIdFrom;

        return $this;
    }

    /**
     * Get userIdFrom
     *
     * @return integer 
     */
    public function getUserIdFrom()
    {
        return $this->userIdFrom;
    }

    /**
     * Set userIdTo
     *
     * @param integer $userIdTo
     * @return TblMessages
     */
    public function setUserIdTo($userIdTo)
    {
        $this->userIdTo = $userIdTo;

        return $this;
    }

    /**
     * Get userIdTo
     *
     * @return integer 
     */
    public function getUserIdTo()
    {
        return $this->userIdTo;
    }

    /**
     * Set folderId
     *
     * @param boolean $folderId
     * @return TblMessages
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     * Get folderId
     *
     * @return boolean 
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return TblMessages
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return TblMessages
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set priority
     *
     * @param boolean $priority
     * @return TblMessages
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return boolean 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return TblMessages
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return TblMessages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
