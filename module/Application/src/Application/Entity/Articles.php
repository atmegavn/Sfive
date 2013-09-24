<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="fk_articles_menu_idx", columns={"menu"}), @ORM\Index(name="fk_articles_system_users1_idx", columns={"system_users"})})
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=500, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="text", nullable=false)
     */
    private $contents;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_hotnew", type="integer", nullable=true)
     */
    private $isHotnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_public", type="integer", nullable=true)
     */
    private $isPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="img_link", type="text", nullable=true)
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
     * @ORM\Column(name="link", type="string", length=200, nullable=true)
     */
    private $link;

    /**
     * @var \Application\Entity\Menu
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu", referencedColumnName="idmenu")
     * })
     */
    private $menu;

    /**
     * @var \Application\Entity\SystemUsers
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\SystemUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_users", referencedColumnName="idsystem_users")
     * })
     */
    private $systemUsers;



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

    /**
     * Set isHotnew
     *
     * @param integer $isHotnew
     * @return Articles
     */
    public function setIsHotnew($isHotnew)
    {
        $this->isHotnew = $isHotnew;

        return $this;
    }

    /**
     * Get isHotnew
     *
     * @return integer 
     */
    public function getIsHotnew()
    {
        return $this->isHotnew;
    }

    /**
     * Set isPublic
     *
     * @param integer $isPublic
     * @return Articles
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic
     *
     * @return integer 
     */
    public function getIsPublic()
    {
        return $this->isPublic;
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
     * Set link
     *
     * @param string $link
     * @return Articles
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set menu
     *
     * @param \Application\Entity\Menu $menu
     * @return Articles
     */
    public function setMenu(\Application\Entity\Menu $menu = null)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \Application\Entity\Menu 
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set systemUsers
     *
     * @param \Application\Entity\SystemUsers $systemUsers
     * @return Articles
     */
    public function setSystemUsers(\Application\Entity\SystemUsers $systemUsers = null)
    {
        $this->systemUsers = $systemUsers;

        return $this;
    }

    /**
     * Get systemUsers
     *
     * @return \Application\Entity\SystemUsers 
     */
    public function getSystemUsers()
    {
        return $this->systemUsers;
    }
}
