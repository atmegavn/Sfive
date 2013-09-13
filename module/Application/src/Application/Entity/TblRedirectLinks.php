<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblRedirectLinks
 *
 * @ORM\Table(name="tbl_redirect_links", uniqueConstraints={@ORM\UniqueConstraint(name="idx_link_old", columns={"old_url"})}, indexes={@ORM\Index(name="idx_link_modifed", columns={"modified_date"})})
 * @ORM\Entity
 */
class TblRedirectLinks
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
     * @ORM\Column(name="old_url", type="string", length=255, nullable=false)
     */
    private $oldUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="new_url", type="string", length=255, nullable=false)
     */
    private $newUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="referer", type="string", length=150, nullable=false)
     */
    private $referer;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_date", type="datetime", nullable=false)
     */
    private $modifiedDate = '0000-00-00 00:00:00';



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
     * Set oldUrl
     *
     * @param string $oldUrl
     * @return TblRedirectLinks
     */
    public function setOldUrl($oldUrl)
    {
        $this->oldUrl = $oldUrl;

        return $this;
    }

    /**
     * Get oldUrl
     *
     * @return string 
     */
    public function getOldUrl()
    {
        return $this->oldUrl;
    }

    /**
     * Set newUrl
     *
     * @param string $newUrl
     * @return TblRedirectLinks
     */
    public function setNewUrl($newUrl)
    {
        $this->newUrl = $newUrl;

        return $this;
    }

    /**
     * Get newUrl
     *
     * @return string 
     */
    public function getNewUrl()
    {
        return $this->newUrl;
    }

    /**
     * Set referer
     *
     * @param string $referer
     * @return TblRedirectLinks
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Get referer
     *
     * @return string 
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return TblRedirectLinks
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     * @return TblRedirectLinks
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return TblRedirectLinks
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return TblRedirectLinks
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set modifiedDate
     *
     * @param \DateTime $modifiedDate
     * @return TblRedirectLinks
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return \DateTime 
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }
}
