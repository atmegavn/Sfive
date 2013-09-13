<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLanguages
 *
 * @ORM\Table(name="tbl_languages", uniqueConstraints={@ORM\UniqueConstraint(name="idx_sef", columns={"sef"}), @ORM\UniqueConstraint(name="idx_image", columns={"image"}), @ORM\UniqueConstraint(name="idx_langcode", columns={"lang_code"})}, indexes={@ORM\Index(name="idx_access", columns={"access"}), @ORM\Index(name="idx_ordering", columns={"ordering"})})
 * @ORM\Entity
 */
class TblLanguages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lang_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $langId;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_code", type="string", length=7, nullable=false)
     */
    private $langCode;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_native", type="string", length=50, nullable=false)
     */
    private $titleNative;

    /**
     * @var string
     *
     * @ORM\Column(name="sef", type="string", length=50, nullable=false)
     */
    private $sef;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=512, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="metakey", type="text", nullable=false)
     */
    private $metakey;

    /**
     * @var string
     *
     * @ORM\Column(name="metadesc", type="text", nullable=false)
     */
    private $metadesc;

    /**
     * @var string
     *
     * @ORM\Column(name="sitename", type="string", length=1024, nullable=false)
     */
    private $sitename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", nullable=false)
     */
    private $published = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering = '0';



    /**
     * Get langId
     *
     * @return integer 
     */
    public function getLangId()
    {
        return $this->langId;
    }

    /**
     * Set langCode
     *
     * @param string $langCode
     * @return TblLanguages
     */
    public function setLangCode($langCode)
    {
        $this->langCode = $langCode;

        return $this;
    }

    /**
     * Get langCode
     *
     * @return string 
     */
    public function getLangCode()
    {
        return $this->langCode;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TblLanguages
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
     * Set titleNative
     *
     * @param string $titleNative
     * @return TblLanguages
     */
    public function setTitleNative($titleNative)
    {
        $this->titleNative = $titleNative;

        return $this;
    }

    /**
     * Get titleNative
     *
     * @return string 
     */
    public function getTitleNative()
    {
        return $this->titleNative;
    }

    /**
     * Set sef
     *
     * @param string $sef
     * @return TblLanguages
     */
    public function setSef($sef)
    {
        $this->sef = $sef;

        return $this;
    }

    /**
     * Get sef
     *
     * @return string 
     */
    public function getSef()
    {
        return $this->sef;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return TblLanguages
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TblLanguages
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

    /**
     * Set metakey
     *
     * @param string $metakey
     * @return TblLanguages
     */
    public function setMetakey($metakey)
    {
        $this->metakey = $metakey;

        return $this;
    }

    /**
     * Get metakey
     *
     * @return string 
     */
    public function getMetakey()
    {
        return $this->metakey;
    }

    /**
     * Set metadesc
     *
     * @param string $metadesc
     * @return TblLanguages
     */
    public function setMetadesc($metadesc)
    {
        $this->metadesc = $metadesc;

        return $this;
    }

    /**
     * Get metadesc
     *
     * @return string 
     */
    public function getMetadesc()
    {
        return $this->metadesc;
    }

    /**
     * Set sitename
     *
     * @param string $sitename
     * @return TblLanguages
     */
    public function setSitename($sitename)
    {
        $this->sitename = $sitename;

        return $this;
    }

    /**
     * Get sitename
     *
     * @return string 
     */
    public function getSitename()
    {
        return $this->sitename;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return TblLanguages
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return TblLanguages
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
     * Set ordering
     *
     * @param integer $ordering
     * @return TblLanguages
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }
}
