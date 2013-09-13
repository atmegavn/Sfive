<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMenuTypes
 *
 * @ORM\Table(name="tbl_menu_types", uniqueConstraints={@ORM\UniqueConstraint(name="idx_menutype", columns={"menutype"})})
 * @ORM\Entity
 */
class TblMenuTypes
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
     * @ORM\Column(name="title", type="string", length=48, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';



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
     * @return TblMenuTypes
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
     * @return TblMenuTypes
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
     * Set description
     *
     * @param string $description
     * @return TblMenuTypes
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
