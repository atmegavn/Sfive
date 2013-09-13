<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFinderTaxonomy
 *
 * @ORM\Table(name="tbl_finder_taxonomy", indexes={@ORM\Index(name="parent_id", columns={"parent_id"}), @ORM\Index(name="state", columns={"state"}), @ORM\Index(name="ordering", columns={"ordering"}), @ORM\Index(name="access", columns={"access"}), @ORM\Index(name="idx_parent_published", columns={"parent_id", "state", "access"})})
 * @ORM\Entity
 */
class TblFinderTaxonomy
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
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ordering", type="boolean", nullable=false)
     */
    private $ordering = '0';



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
     * Set parentId
     *
     * @param integer $parentId
     * @return TblFinderTaxonomy
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
     * Set title
     *
     * @param string $title
     * @return TblFinderTaxonomy
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
     * Set state
     *
     * @param boolean $state
     * @return TblFinderTaxonomy
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
     * Set access
     *
     * @param boolean $access
     * @return TblFinderTaxonomy
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return boolean 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set ordering
     *
     * @param boolean $ordering
     * @return TblFinderTaxonomy
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return boolean 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }
}
