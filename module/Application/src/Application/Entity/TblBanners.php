<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBanners
 *
 * @ORM\Table(name="tbl_banners", indexes={@ORM\Index(name="idx_state", columns={"state"}), @ORM\Index(name="idx_own_prefix", columns={"own_prefix"}), @ORM\Index(name="idx_metakey_prefix", columns={"metakey_prefix"}), @ORM\Index(name="idx_banner_catid", columns={"catid"}), @ORM\Index(name="idx_language", columns={"language"})})
 * @ORM\Entity
 */
class TblBanners
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
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=false)
     */
    private $alias = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="imptotal", type="integer", nullable=false)
     */
    private $imptotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="impmade", type="integer", nullable=false)
     */
    private $impmade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clicks", type="integer", nullable=false)
     */
    private $clicks = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="clickurl", type="string", length=200, nullable=false)
     */
    private $clickurl = '';

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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="custombannercode", type="string", length=2048, nullable=false)
     */
    private $custombannercode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sticky", type="boolean", nullable=false)
     */
    private $sticky = '0';

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
     * @ORM\Column(name="params", type="text", nullable=false)
     */
    private $params;

    /**
     * @var boolean
     *
     * @ORM\Column(name="own_prefix", type="boolean", nullable=false)
     */
    private $ownPrefix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="metakey_prefix", type="string", length=255, nullable=false)
     */
    private $metakeyPrefix = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="purchase_type", type="boolean", nullable=false)
     */
    private $purchaseType = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="track_clicks", type="boolean", nullable=false)
     */
    private $trackClicks = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="track_impressions", type="boolean", nullable=false)
     */
    private $trackImpressions = '-1';

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
     * @var \DateTime
     *
     * @ORM\Column(name="reset", type="datetime", nullable=false)
     */
    private $reset = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=7, nullable=false)
     */
    private $language = '';

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
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version = '1';



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
     * Set cid
     *
     * @param integer $cid
     * @return TblBanners
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TblBanners
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TblBanners
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
     * @return TblBanners
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
     * Set imptotal
     *
     * @param integer $imptotal
     * @return TblBanners
     */
    public function setImptotal($imptotal)
    {
        $this->imptotal = $imptotal;

        return $this;
    }

    /**
     * Get imptotal
     *
     * @return integer 
     */
    public function getImptotal()
    {
        return $this->imptotal;
    }

    /**
     * Set impmade
     *
     * @param integer $impmade
     * @return TblBanners
     */
    public function setImpmade($impmade)
    {
        $this->impmade = $impmade;

        return $this;
    }

    /**
     * Get impmade
     *
     * @return integer 
     */
    public function getImpmade()
    {
        return $this->impmade;
    }

    /**
     * Set clicks
     *
     * @param integer $clicks
     * @return TblBanners
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer 
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set clickurl
     *
     * @param string $clickurl
     * @return TblBanners
     */
    public function setClickurl($clickurl)
    {
        $this->clickurl = $clickurl;

        return $this;
    }

    /**
     * Get clickurl
     *
     * @return string 
     */
    public function getClickurl()
    {
        return $this->clickurl;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return TblBanners
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
     * @return TblBanners
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
     * Set description
     *
     * @param string $description
     * @return TblBanners
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
     * Set custombannercode
     *
     * @param string $custombannercode
     * @return TblBanners
     */
    public function setCustombannercode($custombannercode)
    {
        $this->custombannercode = $custombannercode;

        return $this;
    }

    /**
     * Get custombannercode
     *
     * @return string 
     */
    public function getCustombannercode()
    {
        return $this->custombannercode;
    }

    /**
     * Set sticky
     *
     * @param boolean $sticky
     * @return TblBanners
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;

        return $this;
    }

    /**
     * Get sticky
     *
     * @return boolean 
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return TblBanners
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
     * @return TblBanners
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
     * Set params
     *
     * @param string $params
     * @return TblBanners
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
     * Set ownPrefix
     *
     * @param boolean $ownPrefix
     * @return TblBanners
     */
    public function setOwnPrefix($ownPrefix)
    {
        $this->ownPrefix = $ownPrefix;

        return $this;
    }

    /**
     * Get ownPrefix
     *
     * @return boolean 
     */
    public function getOwnPrefix()
    {
        return $this->ownPrefix;
    }

    /**
     * Set metakeyPrefix
     *
     * @param string $metakeyPrefix
     * @return TblBanners
     */
    public function setMetakeyPrefix($metakeyPrefix)
    {
        $this->metakeyPrefix = $metakeyPrefix;

        return $this;
    }

    /**
     * Get metakeyPrefix
     *
     * @return string 
     */
    public function getMetakeyPrefix()
    {
        return $this->metakeyPrefix;
    }

    /**
     * Set purchaseType
     *
     * @param boolean $purchaseType
     * @return TblBanners
     */
    public function setPurchaseType($purchaseType)
    {
        $this->purchaseType = $purchaseType;

        return $this;
    }

    /**
     * Get purchaseType
     *
     * @return boolean 
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * Set trackClicks
     *
     * @param boolean $trackClicks
     * @return TblBanners
     */
    public function setTrackClicks($trackClicks)
    {
        $this->trackClicks = $trackClicks;

        return $this;
    }

    /**
     * Get trackClicks
     *
     * @return boolean 
     */
    public function getTrackClicks()
    {
        return $this->trackClicks;
    }

    /**
     * Set trackImpressions
     *
     * @param boolean $trackImpressions
     * @return TblBanners
     */
    public function setTrackImpressions($trackImpressions)
    {
        $this->trackImpressions = $trackImpressions;

        return $this;
    }

    /**
     * Get trackImpressions
     *
     * @return boolean 
     */
    public function getTrackImpressions()
    {
        return $this->trackImpressions;
    }

    /**
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return TblBanners
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
     * @return TblBanners
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
     * @return TblBanners
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
     * @return TblBanners
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
     * Set reset
     *
     * @param \DateTime $reset
     * @return TblBanners
     */
    public function setReset($reset)
    {
        $this->reset = $reset;

        return $this;
    }

    /**
     * Get reset
     *
     * @return \DateTime 
     */
    public function getReset()
    {
        return $this->reset;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return TblBanners
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
     * Set language
     *
     * @param string $language
     * @return TblBanners
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
     * Set createdBy
     *
     * @param integer $createdBy
     * @return TblBanners
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
     * @return TblBanners
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
     * @return TblBanners
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
     * @return TblBanners
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
     * Set version
     *
     * @param integer $version
     * @return TblBanners
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
}
