<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idarticles", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarticles;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="text", nullable=false)
     */
    private $contents;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_host", type="integer", nullable=false)
     */
    private $isHost;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_online", type="integer", nullable=false)
     */
    private $isOnline;

    /**
     * @var string
     *
     * @ORM\Column(name="img_link", type="text", nullable=false)
     */
    private $imgLink;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=false)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=500, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="poster_id", type="integer", nullable=false)
     */
    private $posterId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=false)
     */
    private $createDate;



    /**
     * Get idarticles
     *
     * @return integer 
     */
    public function getIdarticles()
    {
        return $this->idarticles;
    }

    /**
     * Set menuId
     *
     * @param integer $menuId
     * @return Articles
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * Get menuId
     *
     * @return integer 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set contents
     *
     * @param string $contents
     * @return Articles
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return string 
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set isHost
     *
     * @param integer $isHost
     * @return Articles
     */
    public function setIsHost($isHost)
    {
        $this->isHost = $isHost;

        return $this;
    }

    /**
     * Get isHost
     *
     * @return integer 
     */
    public function getIsHost()
    {
        return $this->isHost;
    }

    /**
     * Set isOnline
     *
     * @param integer $isOnline
     * @return Articles
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

        return $this;
    }

    /**
     * Get isOnline
     *
     * @return integer 
     */
    public function getIsOnline()
    {
        return $this->isOnline;
    }

    /**
     * Set imgLink
     *
     * @param string $imgLink
     * @return Articles
     */
    public function setImgLink($imgLink)
    {
        $this->imgLink = $imgLink;

        return $this;
    }

    /**
     * Get imgLink
     *
     * @return string 
     */
    public function getImgLink()
    {
        return $this->imgLink;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Articles
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Articles
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set posterId
     *
     * @param integer $posterId
     * @return Articles
     */
    public function setPosterId($posterId)
    {
        $this->posterId = $posterId;

        return $this;
    }

    /**
     * Get posterId
     *
     * @return integer 
     */
    public function getPosterId()
    {
        return $this->posterId;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Articles
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}
