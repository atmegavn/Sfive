<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUserNotes
 *
 * @ORM\Table(name="tbl_user_notes", indexes={@ORM\Index(name="idx_user_id", columns={"user_id"}), @ORM\Index(name="idx_category_id", columns={"catid"})})
 * @ORM\Entity
 */
class TblUserNotes
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer", nullable=false)
     */
    private $catid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=false)
     */
    private $subject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="checked_out", type="integer", nullable=false)
     */
    private $checkedOut = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checked_out_time", type="datetime", nullable=false)
     */
    private $checkedOutTime = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="created_user_id", type="integer", nullable=false)
     */
    private $createdUserId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_time", type="datetime", nullable=false)
     */
    private $createdTime = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_user_id", type="integer", nullable=false)
     */
    private $modifiedUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_time", type="datetime", nullable=false)
     */
    private $modifiedTime = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="review_time", type="datetime", nullable=false)
     */
    private $reviewTime = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_up", type="datetime", nullable=false)
     */
    private $publishUp = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_down", type="datetime", nullable=false)
     */
    private $publishDown = '0000-00-00 00:00:00';



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
     * Set userId
     *
     * @param integer $userId
     * @return TblUserNotes
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

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
     * Set catid
     *
     * @param integer $catid
     * @return TblUserNotes
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return TblUserNotes
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
     * Set body
     *
     * @param string $body
     * @return TblUserNotes
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return TblUserNotes
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
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return TblUserNotes
     */
    public function setCheckedOut($checkedOut)
    {
        $this->checkedOut = $checkedOut;

        return $this;
    }

    /**
     * Get checkedOut
     *
     * @return integer 
     */
    public function getCheckedOut()
    {
        return $this->checkedOut;
    }

    /**
     * Set checkedOutTime
     *
     * @param \DateTime $checkedOutTime
     * @return TblUserNotes
     */
    public function setCheckedOutTime($checkedOutTime)
    {
        $this->checkedOutTime = $checkedOutTime;

        return $this;
    }

    /**
     * Get checkedOutTime
     *
     * @return \DateTime 
     */
    public function getCheckedOutTime()
    {
        return $this->checkedOutTime;
    }

    /**
     * Set createdUserId
     *
     * @param integer $createdUserId
     * @return TblUserNotes
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->createdUserId = $createdUserId;

        return $this;
    }

    /**
     * Get createdUserId
     *
     * @return integer 
     */
    public function getCreatedUserId()
    {
        return $this->createdUserId;
    }

    /**
     * Set createdTime
     *
     * @param \DateTime $createdTime
     * @return TblUserNotes
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return \DateTime 
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set modifiedUserId
     *
     * @param integer $modifiedUserId
     * @return TblUserNotes
     */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->modifiedUserId = $modifiedUserId;

        return $this;
    }

    /**
     * Get modifiedUserId
     *
     * @return integer 
     */
    public function getModifiedUserId()
    {
        return $this->modifiedUserId;
    }

    /**
     * Set modifiedTime
     *
     * @param \DateTime $modifiedTime
     * @return TblUserNotes
     */
    public function setModifiedTime($modifiedTime)
    {
        $this->modifiedTime = $modifiedTime;

        return $this;
    }

    /**
     * Get modifiedTime
     *
     * @return \DateTime 
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * Set reviewTime
     *
     * @param \DateTime $reviewTime
     * @return TblUserNotes
     */
    public function setReviewTime($reviewTime)
    {
        $this->reviewTime = $reviewTime;

        return $this;
    }

    /**
     * Get reviewTime
     *
     * @return \DateTime 
     */
    public function getReviewTime()
    {
        return $this->reviewTime;
    }

    /**
     * Set publishUp
     *
     * @param \DateTime $publishUp
     * @return TblUserNotes
     */
    public function setPublishUp($publishUp)
    {
        $this->publishUp = $publishUp;

        return $this;
    }

    /**
     * Get publishUp
     *
     * @return \DateTime 
     */
    public function getPublishUp()
    {
        return $this->publishUp;
    }

    /**
     * Set publishDown
     *
     * @param \DateTime $publishDown
     * @return TblUserNotes
     */
    public function setPublishDown($publishDown)
    {
        $this->publishDown = $publishDown;

        return $this;
    }

    /**
     * Get publishDown
     *
     * @return \DateTime 
     */
    public function getPublishDown()
    {
        return $this->publishDown;
    }
}
