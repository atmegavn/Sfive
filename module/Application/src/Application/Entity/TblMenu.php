<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMenu
 *
 * @ORM\Table(name="tbl_menu", uniqueConstraints={@ORM\UniqueConstraint(name="idx_client_id_parent_id_alias_language", columns={"client_id", "parent_id", "alias", "language"})}, indexes={@ORM\Index(name="idx_componentid", columns={"component_id", "menutype", "published", "access"}), @ORM\Index(name="idx_menutype", columns={"menutype"}), @ORM\Index(name="idx_left_right", columns={"lft", "rgt"}), @ORM\Index(name="idx_alias", columns={"alias"}), @ORM\Index(name="idx_path", columns={"path"}), @ORM\Index(name="idx_language", columns={"language"})})
 * @ORM\Entity
 */
class TblMenu
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
     * @ORM\Column(name="menutype", type="string", length=24, nullable=false)
     */
    private $menutype;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note = '';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=1024, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=1024, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="component_id", type="integer", nullable=false)
     */
    private $componentId = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="browserNav", type="boolean", nullable=false)
     */
    private $browsernav = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="template_style_id", type="integer", nullable=false)
     */
    private $templateStyleId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", nullable=false)
     */
    private $params;

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private $lft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private $rgt = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="home", type="boolean", nullable=false)
     */
    private $home = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=7, nullable=false)
     */
    private $language = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client_id", type="boolean", nullable=false)
     */
    private $clientId = '0';



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
     * Set menutype
     *
     * @param string $menutype
     * @return TblMenu
     */
    public function setMenutype($menutype)
    {
        $this->menutype = $menutype;

        return $this;
    }

    /**
     * Get menutype
     *
     * @return string 
     */
    public function getMenutype()
    {
        return $this->menutype;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TblMenu
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
     * Set alias
     *
     * @param string $alias
     * @return TblMenu
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return TblMenu
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return TblMenu
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return TblMenu
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
     * Set type
     *
     * @param string $type
     * @return TblMenu
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return TblMenu
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
     * Set parentId
     *
     * @param integer $parentId
     * @return TblMenu
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return TblMenu
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set componentId
     *
     * @param integer $componentId
     * @return TblMenu
     */
    public function setComponentId($componentId)
    {
        $this->componentId = $componentId;

        return $this;
    }

    /**
     * Get componentId
     *
     * @return integer 
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return TblMenu
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
     * @return TblMenu
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
     * Set browsernav
     *
     * @param boolean $browsernav
     * @return TblMenu
     */
    public function setBrowsernav($browsernav)
    {
        $this->browsernav = $browsernav;

        return $this;
    }

    /**
     * Get browsernav
     *
     * @return boolean 
     */
    public function getBrowsernav()
    {
        return $this->browsernav;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return TblMenu
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return TblMenu
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set templateStyleId
     *
     * @param integer $templateStyleId
     * @return TblMenu
     */
    public function setTemplateStyleId($templateStyleId)
    {
        $this->templateStyleId = $templateStyleId;

        return $this;
    }

    /**
     * Get templateStyleId
     *
     * @return integer 
     */
    public function getTemplateStyleId()
    {
        return $this->templateStyleId;
    }

    /**
     * Set params
     *
     * @param string $params
     * @return TblMenu
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
     * Set lft
     *
     * @param integer $lft
     * @return TblMenu
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return TblMenu
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set home
     *
     * @param boolean $home
     * @return TblMenu
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return boolean 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return TblMenu
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set clientId
     *
     * @param boolean $clientId
     * @return TblMenu
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
}
