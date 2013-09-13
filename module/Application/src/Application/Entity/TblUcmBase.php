<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUcmBase
 *
 * @ORM\Table(name="tbl_ucm_base", indexes={@ORM\Index(name="idx_ucm_item_id", columns={"ucm_item_id"}), @ORM\Index(name="idx_ucm_type_id", columns={"ucm_type_id"}), @ORM\Index(name="idx_ucm_language_id", columns={"ucm_language_id"})})
 * @ORM\Entity
 */
class TblUcmBase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ucm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ucmId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ucm_item_id", type="integer", nullable=false)
     */
    private $ucmItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ucm_type_id", type="integer", nullable=false)
     */
    private $ucmTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ucm_language_id", type="integer", nullable=false)
     */
    private $ucmLanguageId;



    /**
     * Get ucmId
     *
     * @return integer 
     */
    public function getUcmId()
    {
        return $this->ucmId;
    }

    /**
     * Set ucmItemId
     *
     * @param integer $ucmItemId
     * @return TblUcmBase
     */
    public function setUcmItemId($ucmItemId)
    {
        $this->ucmItemId = $ucmItemId;

        return $this;
    }

    /**
     * Get ucmItemId
     *
     * @return integer 
     */
    public function getUcmItemId()
    {
        return $this->ucmItemId;
    }

    /**
     * Set ucmTypeId
     *
     * @param integer $ucmTypeId
     * @return TblUcmBase
     */
    public function setUcmTypeId($ucmTypeId)
    {
        $this->ucmTypeId = $ucmTypeId;

        return $this;
    }

    /**
     * Get ucmTypeId
     *
     * @return integer 
     */
    public function getUcmTypeId()
    {
        return $this->ucmTypeId;
    }

    /**
     * Set ucmLanguageId
     *
     * @param integer $ucmLanguageId
     * @return TblUcmBase
     */
    public function setUcmLanguageId($ucmLanguageId)
    {
        $this->ucmLanguageId = $ucmLanguageId;

        return $this;
    }

    /**
     * Get ucmLanguageId
     *
     * @return integer 
     */
    public function getUcmLanguageId()
    {
        return $this->ucmLanguageId;
    }
}
