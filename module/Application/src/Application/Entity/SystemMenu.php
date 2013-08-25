<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemMenu
 *
 * @ORM\Table(name="system_menu")
 * @ORM\Entity
 */
class SystemMenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MENU_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="MENU_NAME", type="string", length=100, nullable=false)
     */
    private $menuName;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARENT_ID", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="MENU_TYPE", type="integer", nullable=false)
     */
    private $menuType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISONWEB", type="integer", nullable=false)
     */
    private $isonweb;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=500, nullable=true)
     */
    private $description;



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
     * Set menuName
     *
     * @param string $menuName
     * @return SystemMenu
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    
        return $this;
    }

    /**
     * Get menuName
     *
     * @return string 
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return SystemMenu
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
     * Set menuType
     *
     * @param integer $menuType
     * @return SystemMenu
     */
    public function setMenuType($menuType)
    {
        $this->menuType = $menuType;
    
        return $this;
    }

    /**
     * Get menuType
     *
     * @return integer 
     */
    public function getMenuType()
    {
        return $this->menuType;
    }

    /**
     * Set isonweb
     *
     * @param integer $isonweb
     * @return SystemMenu
     */
    public function setIsonweb($isonweb)
    {
        $this->isonweb = $isonweb;
    
        return $this;
    }

    /**
     * Get isonweb
     *
     * @return integer 
     */
    public function getIsonweb()
    {
        return $this->isonweb;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SystemMenu
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}