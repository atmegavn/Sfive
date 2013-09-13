<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewsfeeds
 *
 * @ORM\Table(name="tbl_newsfeeds", indexes={@ORM\Index(name="idx_access", columns={"access"}), @ORM\Index(name="idx_checkout", columns={"checked_out"}), @ORM\Index(name="idx_state", columns={"published"}), @ORM\Index(name="idx_catid", columns={"catid"}), @ORM\Index(name="idx_createdby", columns={"created_by"}), @ORM\Index(name="idx_language", columns={"language"}), @ORM\Index(name="idx_xreference", columns={"xreference"})})
 * @ORM\Entity
 */
class TblNewsfeeds
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
     * @ORM\Column(name="catid", type="integer", nullable=false)
     */
    private $catid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=200, nullable=false)
     */
    private $link = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="numarticles", type="integer", nullable=false)
     */
    private $numarticles = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="cache_time", type="integer", nullable=false)
     */
    private $cacheTime = '3600';

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
     * @var integer
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rtl", type="boolean", nullable=false)
     */
    private $rtl = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=7, nullable=false)
     */
    private $language = '';

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", nullable=false)
     */
    private $params;

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
     * @ORM\Column(name="metadata", type="text", nullable=false)
     */
    private $metadata;

    /**
     * @var string
     *
     * @ORM\Column(name="xreference", type="string", length=50, nullable=false)
     */
    private $xreference;

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
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="text", nullable=false)
     */
    private $images;



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
     * Set catid
     *
     * @param integer $catid
     * @return TblNewsfeeds
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
     * Set name
     *
     * @param string $name
     * @return TblNewsfeeds
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return TblNewsfeeds
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
     * Set link
     *
     * @param string $link
     * @return TblNewsfeeds
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
     * Set published
     *
     * @param boolean $published
     * @return TblNewsfeeds
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
     * Set numarticles
     *
     * @param integer $numarticles
     * @return TblNewsfeeds
     */
    public function setNumarticles($numarticles)
    {
        $this->numarticles = $numarticles;

        return $this;
    }

    /**
     * Get numarticles
     *
     * @return integer 
     */
    public function getNumarticles()
    {
        return $this->numarticles;
    }

    /**
     * Set cacheTime
     *
     * @param integer $cacheTime
     * @return TblNewsfeeds
     */
    public function setCacheTime($cacheTime)
    {
        $this->cacheTime = $cacheTime;

        return $this;
    }

    /**
     * Get cacheTime
     *
     * @return integer 
     */
    public function getCacheTime()
    {
        return $this->cacheTime;
    }

    /**
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return TblNewsfeeds
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
     * @return TblNewsfeeds
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
     * Set ordering
     *
     * @param integer $ordering
     * @return TblNewsfeeds
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
     * Set rtl
     *
     * @param boolean $rtl
     * @return TblNewsfeeds
     */
    public function setRtl($rtl)
    {
        $this->rtl = $rtl;

        return $this;
    }

    /**
     * Get rtl
     *
     * @return boolean 
     */
    public function getRtl()
    {
        return $this->rtl;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return TblNewsfeeds
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
     * Set language
     *
     * @param string $language
     * @return TblNewsfeeds
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
     * Set params
     *
     * @param string $params
     * @return TblNewsfeeds
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
     * Set created
     *
     * @param \DateTime $created
     * @return TblNewsfeeds
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
     * @return TblNewsfeeds
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
     * @return TblNewsfeeds
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
     * @return TblNewsfeeds
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
     * @return TblNewsfeeds
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
     * Set metakey
     *
     * @param string $metakey
     * @return TblNewsfeeds
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
     * @return TblNewsfeeds
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
     * Set metadata
     *
     * @param string $metadata
     * @return TblNewsfeeds
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
     * Set xreference
     *
     * @param string $xreference
     * @return TblNewsfeeds
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

    /**
     * Set publishUp
     *
     * @param \DateTime $publishUp
     * @return TblNewsfeeds
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
     * @return TblNewsfeeds
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
     * Set description
     *
     * @param string $description
     * @return TblNewsfeeds
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
     * Set version
     *
     * @param integer $version
     * @return TblNewsfeeds
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
     * Set hits
     *
     * @param integer $hits
     * @return TblNewsfeeds
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
     * Set images
     *
     * @param string $images
     * @return TblNewsfeeds
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
}
