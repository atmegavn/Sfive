<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblContent
 *
 * @ORM\Table(name="tbl_content", indexes={@ORM\Index(name="idx_access", columns={"access"}), @ORM\Index(name="idx_checkout", columns={"checked_out"}), @ORM\Index(name="idx_state", columns={"state"}), @ORM\Index(name="idx_catid", columns={"catid"}), @ORM\Index(name="idx_createdby", columns={"created_by"}), @ORM\Index(name="idx_featured_catid", columns={"featured", "catid"}), @ORM\Index(name="idx_language", columns={"language"}), @ORM\Index(name="idx_xreference", columns={"xreference"})})
 * @ORM\Entity
 */
class TblContent
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
     * @ORM\Column(name="asset_id", type="integer", nullable=false)
     */
    private $assetId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="introtext", type="text", nullable=false)
     */
    private $introtext;

    /**
     * @var string
     *
     * @ORM\Column(name="fulltext", type="text", nullable=false)
     */
    private $fulltext;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer", nullable=false)
     */
    private $catid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="created_by_alias", type="string", length=255, nullable=false)
     */
    private $createdByAlias = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", nullable=false)
     */
    private $modifiedBy = '0';

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
     * @var \DateTime
     *
     * @ORM\Column(name="publish_up", type="datetime", nullable=false)
     */
    private $publishUp = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_down", type="datetime", nullable=false)
     */
    private $publishDown = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="text", nullable=false)
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="urls", type="text", nullable=false)
     */
    private $urls;

    /**
     * @var string
     *
     * @ORM\Column(name="attribs", type="string", length=5120, nullable=false)
     */
    private $attribs;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering = '0';

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
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="metadata", type="text", nullable=false)
     */
    private $metadata;

    /**
     * @var boolean
     *
     * @ORM\Column(name="featured", type="boolean", nullable=false)
     */
    private $featured = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=7, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="xreference", type="string", length=50, nullable=false)
     */
    private $xreference;



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
     * Set assetId
     *
     * @param integer $assetId
     * @return TblContent
     */
    public function setAssetId($assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * Get assetId
     *
     * @return integer 
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TblContent
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
     * @return TblContent
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
     * Set introtext
     *
     * @param string $introtext
     * @return TblContent
     */
    public function setIntrotext($introtext)
    {
        $this->introtext = $introtext;

        return $this;
    }

    /**
     * Get introtext
     *
     * @return string 
     */
    public function getIntrotext()
    {
        return $this->introtext;
    }

    /**
     * Set fulltext
     *
     * @param string $fulltext
     * @return TblContent
     */
    public function setFulltext($fulltext)
    {
        $this->fulltext = $fulltext;

        return $this;
    }

    /**
     * Get fulltext
     *
     * @return string 
     */
    public function getFulltext()
    {
        return $this->fulltext;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return TblContent
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
     * Set catid
     *
     * @param integer $catid
     * @return TblContent
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return TblContent
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return TblContent
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdByAlias
     *
     * @param string $createdByAlias
     * @return TblContent
     */
    public function setCreatedByAlias($createdByAlias)
    {
        $this->createdByAlias = $createdByAlias;

        return $this;
    }

    /**
     * Get createdByAlias
     *
     * @return string 
     */
    public function getCreatedByAlias()
    {
        return $this->createdByAlias;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return TblContent
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set modifiedBy
     *
     * @param integer $modifiedBy
     * @return TblContent
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return integer 
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return TblContent
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
     * @return TblContent
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
     * Set publishUp
     *
     * @param \DateTime $publishUp
     * @return TblContent
     */
    public function setPublishUp($publishUp)
    {
        $this->publishUp = $publishUp;

        return $this;
    }

    /**
     * Get publishUp
     *
     * @return \DateTime 
     */
    public function getPublishUp()
    {
        return $this->publishUp;
    }

    /**
     * Set publishDown
     *
     * @param \DateTime $publishDown
     * @return TblContent
     */
    public function setPublishDown($publishDown)
    {
        $this->publishDown = $publishDown;

        return $this;
    }

    /**
     * Get publishDown
     *
     * @return \DateTime 
     */
    public function getPublishDown()
    {
        return $this->publishDown;
    }

    /**
     * Set images
     *
     * @param string $images
     * @return TblContent
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set urls
     *
     * @param string $urls
     * @return TblContent
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * Get urls
     *
     * @return string 
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Set attribs
     *
     * @param string $attribs
     * @return TblContent
     */
    public function setAttribs($attribs)
    {
        $this->attribs = $attribs;

        return $this;
    }

    /**
     * Get attribs
     *
     * @return string 
     */
    public function getAttribs()
    {
        return $this->attribs;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return TblContent
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return TblContent
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

    /**
     * Set metakey
     *
     * @param string $metakey
     * @return TblContent
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
     * @return TblContent
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
     * Set access
     *
     * @param integer $access
     * @return TblContent
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
     * Set hits
     *
     * @param integer $hits
     * @return TblContent
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
     * Set metadata
     *
     * @param string $metadata
     * @return TblContent
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return string 
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set featured
     *
     * @param boolean $featured
     * @return TblContent
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Get featured
     *
     * @return boolean 
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return TblContent
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
     * Set xreference
     *
     * @param string $xreference
     * @return TblContent
     */
    public function setXreference($xreference)
    {
        $this->xreference = $xreference;

        return $this;
    }

    /**
     * Get xreference
     *
     * @return string 
     */
    public function getXreference()
    {
        return $this->xreference;
    }
}
