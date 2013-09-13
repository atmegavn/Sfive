<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblContentitemTagMap
 *
 * @ORM\Table(name="tbl_contentitem_tag_map", uniqueConstraints={@ORM\UniqueConstraint(name="uc_ItemnameTagid", columns={"type_id", "content_item_id", "tag_id"})}, indexes={@ORM\Index(name="idx_tag_type", columns={"tag_id", "type_id"}), @ORM\Index(name="idx_date_id", columns={"tag_date", "tag_id"}), @ORM\Index(name="idx_tag", columns={"tag_id"}), @ORM\Index(name="idx_type", columns={"type_id"}), @ORM\Index(name="idx_core_content_id", columns={"core_content_id"})})
 * @ORM\Entity
 */
class TblContentitemTagMap
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
     * @ORM\Column(name="type_alias", type="string", length=255, nullable=false)
     */
    private $typeAlias = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="core_content_id", type="integer", nullable=false)
     */
    private $coreContentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_item_id", type="integer", nullable=false)
     */
    private $contentItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false)
     */
    private $tagId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tag_date", type="datetime", nullable=false)
     */
    private $tagDate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false)
     */
    private $typeId;



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
     * Set typeAlias
     *
     * @param string $typeAlias
     * @return TblContentitemTagMap
     */
    public function setTypeAlias($typeAlias)
    {
        $this->typeAlias = $typeAlias;

        return $this;
    }

    /**
     * Get typeAlias
     *
     * @return string 
     */
    public function getTypeAlias()
    {
        return $this->typeAlias;
    }

    /**
     * Set coreContentId
     *
     * @param integer $coreContentId
     * @return TblContentitemTagMap
     */
    public function setCoreContentId($coreContentId)
    {
        $this->coreContentId = $coreContentId;

        return $this;
    }

    /**
     * Get coreContentId
     *
     * @return integer 
     */
    public function getCoreContentId()
    {
        return $this->coreContentId;
    }

    /**
     * Set contentItemId
     *
     * @param integer $contentItemId
     * @return TblContentitemTagMap
     */
    public function setContentItemId($contentItemId)
    {
        $this->contentItemId = $contentItemId;

        return $this;
    }

    /**
     * Get contentItemId
     *
     * @return integer 
     */
    public function getContentItemId()
    {
        return $this->contentItemId;
    }

    /**
     * Set tagId
     *
     * @param integer $tagId
     * @return TblContentitemTagMap
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;

        return $this;
    }

    /**
     * Get tagId
     *
     * @return integer 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set tagDate
     *
     * @param \DateTime $tagDate
     * @return TblContentitemTagMap
     */
    public function setTagDate($tagDate)
    {
        $this->tagDate = $tagDate;

        return $this;
    }

    /**
     * Get tagDate
     *
     * @return \DateTime 
     */
    public function getTagDate()
    {
        return $this->tagDate;
    }

    /**
     * Set typeId
     *
     * @param integer $typeId
     * @return TblContentitemTagMap
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
}
