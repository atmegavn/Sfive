<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUcmContent
 *
 * @ORM\Table(name="tbl_ucm_content", indexes={@ORM\Index(name="tag_idx", columns={"core_state", "core_access"}), @ORM\Index(name="idx_access", columns={"core_access"}), @ORM\Index(name="idx_alias", columns={"core_alias"}), @ORM\Index(name="idx_language", columns={"core_language"}), @ORM\Index(name="idx_title", columns={"core_title"}), @ORM\Index(name="idx_modified_time", columns={"core_modified_time"}), @ORM\Index(name="idx_created_time", columns={"core_created_time"}), @ORM\Index(name="idx_content_type", columns={"core_type_alias"}), @ORM\Index(name="idx_core_modified_user_id", columns={"core_modified_user_id"}), @ORM\Index(name="idx_core_checked_out_user_id", columns={"core_checked_out_user_id"}), @ORM\Index(name="idx_core_created_user_id", columns={"core_created_user_id"}), @ORM\Index(name="idx_core_type_id", columns={"core_type_id"})})
 * @ORM\Entity
 */
class TblUcmContent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="core_content_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coreContentId;

    /**
     * @var string
     *
     * @ORM\Column(name="core_type_alias", type="string", length=255, nullable=false)
     */
    private $coreTypeAlias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="core_title", type="string", length=255, nullable=false)
     */
    private $coreTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="core_alias", type="string", length=255, nullable=false)
     */
    private $coreAlias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="core_body", type="text", nullable=false)
     */
    private $coreBody;

    /**
     * @var boolean
     *
     * @ORM\Column(name="core_state", type="boolean", nullable=false)
     */
    private $coreState = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_checked_out_time", type="string", length=255, nullable=false)
     */
    private $coreCheckedOutTime = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="core_checked_out_user_id", type="integer", nullable=false)
     */
    private $coreCheckedOutUserId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="core_access", type="integer", nullable=false)
     */
    private $coreAccess = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_params", type="text", nullable=false)
     */
    private $coreParams;

    /**
     * @var boolean
     *
     * @ORM\Column(name="core_featured", type="boolean", nullable=false)
     */
    private $coreFeatured = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_metadata", type="string", length=2048, nullable=false)
     */
    private $coreMetadata;

    /**
     * @var integer
     *
     * @ORM\Column(name="core_created_user_id", type="integer", nullable=false)
     */
    private $coreCreatedUserId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_created_by_alias", type="string", length=255, nullable=false)
     */
    private $coreCreatedByAlias = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="core_created_time", type="datetime", nullable=false)
     */
    private $coreCreatedTime = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="core_modified_user_id", type="integer", nullable=false)
     */
    private $coreModifiedUserId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="core_modified_time", type="datetime", nullable=false)
     */
    private $coreModifiedTime = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="core_language", type="string", length=7, nullable=false)
     */
    private $coreLanguage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="core_publish_up", type="datetime", nullable=false)
     */
    private $corePublishUp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="core_publish_down", type="datetime", nullable=false)
     */
    private $corePublishDown;

    /**
     * @var integer
     *
     * @ORM\Column(name="core_content_item_id", type="integer", nullable=true)
     */
    private $coreContentItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="asset_id", type="integer", nullable=true)
     */
    private $assetId;

    /**
     * @var string
     *
     * @ORM\Column(name="core_images", type="text", nullable=false)
     */
    private $coreImages;

    /**
     * @var string
     *
     * @ORM\Column(name="core_urls", type="text", nullable=false)
     */
    private $coreUrls;

    /**
     * @var integer
     *
     * @ORM\Column(name="core_hits", type="integer", nullable=false)
     */
    private $coreHits = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="core_version", type="integer", nullable=false)
     */
    private $coreVersion = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="core_ordering", type="integer", nullable=false)
     */
    private $coreOrdering = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_metakey", type="text", nullable=false)
     */
    private $coreMetakey;

    /**
     * @var string
     *
     * @ORM\Column(name="core_metadesc", type="text", nullable=false)
     */
    private $coreMetadesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="core_catid", type="integer", nullable=false)
     */
    private $coreCatid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_xreference", type="string", length=50, nullable=false)
     */
    private $coreXreference;

    /**
     * @var integer
     *
     * @ORM\Column(name="core_type_id", type="integer", nullable=true)
     */
    private $coreTypeId;



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
     * Set coreTypeAlias
     *
     * @param string $coreTypeAlias
     * @return TblUcmContent
     */
    public function setCoreTypeAlias($coreTypeAlias)
    {
        $this->coreTypeAlias = $coreTypeAlias;

        return $this;
    }

    /**
     * Get coreTypeAlias
     *
     * @return string 
     */
    public function getCoreTypeAlias()
    {
        return $this->coreTypeAlias;
    }

    /**
     * Set coreTitle
     *
     * @param string $coreTitle
     * @return TblUcmContent
     */
    public function setCoreTitle($coreTitle)
    {
        $this->coreTitle = $coreTitle;

        return $this;
    }

    /**
     * Get coreTitle
     *
     * @return string 
     */
    public function getCoreTitle()
    {
        return $this->coreTitle;
    }

    /**
     * Set coreAlias
     *
     * @param string $coreAlias
     * @return TblUcmContent
     */
    public function setCoreAlias($coreAlias)
    {
        $this->coreAlias = $coreAlias;

        return $this;
    }

    /**
     * Get coreAlias
     *
     * @return string 
     */
    public function getCoreAlias()
    {
        return $this->coreAlias;
    }

    /**
     * Set coreBody
     *
     * @param string $coreBody
     * @return TblUcmContent
     */
    public function setCoreBody($coreBody)
    {
        $this->coreBody = $coreBody;

        return $this;
    }

    /**
     * Get coreBody
     *
     * @return string 
     */
    public function getCoreBody()
    {
        return $this->coreBody;
    }

    /**
     * Set coreState
     *
     * @param boolean $coreState
     * @return TblUcmContent
     */
    public function setCoreState($coreState)
    {
        $this->coreState = $coreState;

        return $this;
    }

    /**
     * Get coreState
     *
     * @return boolean 
     */
    public function getCoreState()
    {
        return $this->coreState;
    }

    /**
     * Set coreCheckedOutTime
     *
     * @param string $coreCheckedOutTime
     * @return TblUcmContent
     */
    public function setCoreCheckedOutTime($coreCheckedOutTime)
    {
        $this->coreCheckedOutTime = $coreCheckedOutTime;

        return $this;
    }

    /**
     * Get coreCheckedOutTime
     *
     * @return string 
     */
    public function getCoreCheckedOutTime()
    {
        return $this->coreCheckedOutTime;
    }

    /**
     * Set coreCheckedOutUserId
     *
     * @param integer $coreCheckedOutUserId
     * @return TblUcmContent
     */
    public function setCoreCheckedOutUserId($coreCheckedOutUserId)
    {
        $this->coreCheckedOutUserId = $coreCheckedOutUserId;

        return $this;
    }

    /**
     * Get coreCheckedOutUserId
     *
     * @return integer 
     */
    public function getCoreCheckedOutUserId()
    {
        return $this->coreCheckedOutUserId;
    }

    /**
     * Set coreAccess
     *
     * @param integer $coreAccess
     * @return TblUcmContent
     */
    public function setCoreAccess($coreAccess)
    {
        $this->coreAccess = $coreAccess;

        return $this;
    }

    /**
     * Get coreAccess
     *
     * @return integer 
     */
    public function getCoreAccess()
    {
        return $this->coreAccess;
    }

    /**
     * Set coreParams
     *
     * @param string $coreParams
     * @return TblUcmContent
     */
    public function setCoreParams($coreParams)
    {
        $this->coreParams = $coreParams;

        return $this;
    }

    /**
     * Get coreParams
     *
     * @return string 
     */
    public function getCoreParams()
    {
        return $this->coreParams;
    }

    /**
     * Set coreFeatured
     *
     * @param boolean $coreFeatured
     * @return TblUcmContent
     */
    public function setCoreFeatured($coreFeatured)
    {
        $this->coreFeatured = $coreFeatured;

        return $this;
    }

    /**
     * Get coreFeatured
     *
     * @return boolean 
     */
    public function getCoreFeatured()
    {
        return $this->coreFeatured;
    }

    /**
     * Set coreMetadata
     *
     * @param string $coreMetadata
     * @return TblUcmContent
     */
    public function setCoreMetadata($coreMetadata)
    {
        $this->coreMetadata = $coreMetadata;

        return $this;
    }

    /**
     * Get coreMetadata
     *
     * @return string 
     */
    public function getCoreMetadata()
    {
        return $this->coreMetadata;
    }

    /**
     * Set coreCreatedUserId
     *
     * @param integer $coreCreatedUserId
     * @return TblUcmContent
     */
    public function setCoreCreatedUserId($coreCreatedUserId)
    {
        $this->coreCreatedUserId = $coreCreatedUserId;

        return $this;
    }

    /**
     * Get coreCreatedUserId
     *
     * @return integer 
     */
    public function getCoreCreatedUserId()
    {
        return $this->coreCreatedUserId;
    }

    /**
     * Set coreCreatedByAlias
     *
     * @param string $coreCreatedByAlias
     * @return TblUcmContent
     */
    public function setCoreCreatedByAlias($coreCreatedByAlias)
    {
        $this->coreCreatedByAlias = $coreCreatedByAlias;

        return $this;
    }

    /**
     * Get coreCreatedByAlias
     *
     * @return string 
     */
    public function getCoreCreatedByAlias()
    {
        return $this->coreCreatedByAlias;
    }

    /**
     * Set coreCreatedTime
     *
     * @param \DateTime $coreCreatedTime
     * @return TblUcmContent
     */
    public function setCoreCreatedTime($coreCreatedTime)
    {
        $this->coreCreatedTime = $coreCreatedTime;

        return $this;
    }

    /**
     * Get coreCreatedTime
     *
     * @return \DateTime 
     */
    public function getCoreCreatedTime()
    {
        return $this->coreCreatedTime;
    }

    /**
     * Set coreModifiedUserId
     *
     * @param integer $coreModifiedUserId
     * @return TblUcmContent
     */
    public function setCoreModifiedUserId($coreModifiedUserId)
    {
        $this->coreModifiedUserId = $coreModifiedUserId;

        return $this;
    }

    /**
     * Get coreModifiedUserId
     *
     * @return integer 
     */
    public function getCoreModifiedUserId()
    {
        return $this->coreModifiedUserId;
    }

    /**
     * Set coreModifiedTime
     *
     * @param \DateTime $coreModifiedTime
     * @return TblUcmContent
     */
    public function setCoreModifiedTime($coreModifiedTime)
    {
        $this->coreModifiedTime = $coreModifiedTime;

        return $this;
    }

    /**
     * Get coreModifiedTime
     *
     * @return \DateTime 
     */
    public function getCoreModifiedTime()
    {
        return $this->coreModifiedTime;
    }

    /**
     * Set coreLanguage
     *
     * @param string $coreLanguage
     * @return TblUcmContent
     */
    public function setCoreLanguage($coreLanguage)
    {
        $this->coreLanguage = $coreLanguage;

        return $this;
    }

    /**
     * Get coreLanguage
     *
     * @return string 
     */
    public function getCoreLanguage()
    {
        return $this->coreLanguage;
    }

    /**
     * Set corePublishUp
     *
     * @param \DateTime $corePublishUp
     * @return TblUcmContent
     */
    public function setCorePublishUp($corePublishUp)
    {
        $this->corePublishUp = $corePublishUp;

        return $this;
    }

    /**
     * Get corePublishUp
     *
     * @return \DateTime 
     */
    public function getCorePublishUp()
    {
        return $this->corePublishUp;
    }

    /**
     * Set corePublishDown
     *
     * @param \DateTime $corePublishDown
     * @return TblUcmContent
     */
    public function setCorePublishDown($corePublishDown)
    {
        $this->corePublishDown = $corePublishDown;

        return $this;
    }

    /**
     * Get corePublishDown
     *
     * @return \DateTime 
     */
    public function getCorePublishDown()
    {
        return $this->corePublishDown;
    }

    /**
     * Set coreContentItemId
     *
     * @param integer $coreContentItemId
     * @return TblUcmContent
     */
    public function setCoreContentItemId($coreContentItemId)
    {
        $this->coreContentItemId = $coreContentItemId;

        return $this;
    }

    /**
     * Get coreContentItemId
     *
     * @return integer 
     */
    public function getCoreContentItemId()
    {
        return $this->coreContentItemId;
    }

    /**
     * Set assetId
     *
     * @param integer $assetId
     * @return TblUcmContent
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
     * Set coreImages
     *
     * @param string $coreImages
     * @return TblUcmContent
     */
    public function setCoreImages($coreImages)
    {
        $this->coreImages = $coreImages;

        return $this;
    }

    /**
     * Get coreImages
     *
     * @return string 
     */
    public function getCoreImages()
    {
        return $this->coreImages;
    }

    /**
     * Set coreUrls
     *
     * @param string $coreUrls
     * @return TblUcmContent
     */
    public function setCoreUrls($coreUrls)
    {
        $this->coreUrls = $coreUrls;

        return $this;
    }

    /**
     * Get coreUrls
     *
     * @return string 
     */
    public function getCoreUrls()
    {
        return $this->coreUrls;
    }

    /**
     * Set coreHits
     *
     * @param integer $coreHits
     * @return TblUcmContent
     */
    public function setCoreHits($coreHits)
    {
        $this->coreHits = $coreHits;

        return $this;
    }

    /**
     * Get coreHits
     *
     * @return integer 
     */
    public function getCoreHits()
    {
        return $this->coreHits;
    }

    /**
     * Set coreVersion
     *
     * @param integer $coreVersion
     * @return TblUcmContent
     */
    public function setCoreVersion($coreVersion)
    {
        $this->coreVersion = $coreVersion;

        return $this;
    }

    /**
     * Get coreVersion
     *
     * @return integer 
     */
    public function getCoreVersion()
    {
        return $this->coreVersion;
    }

    /**
     * Set coreOrdering
     *
     * @param integer $coreOrdering
     * @return TblUcmContent
     */
    public function setCoreOrdering($coreOrdering)
    {
        $this->coreOrdering = $coreOrdering;

        return $this;
    }

    /**
     * Get coreOrdering
     *
     * @return integer 
     */
    public function getCoreOrdering()
    {
        return $this->coreOrdering;
    }

    /**
     * Set coreMetakey
     *
     * @param string $coreMetakey
     * @return TblUcmContent
     */
    public function setCoreMetakey($coreMetakey)
    {
        $this->coreMetakey = $coreMetakey;

        return $this;
    }

    /**
     * Get coreMetakey
     *
     * @return string 
     */
    public function getCoreMetakey()
    {
        return $this->coreMetakey;
    }

    /**
     * Set coreMetadesc
     *
     * @param string $coreMetadesc
     * @return TblUcmContent
     */
    public function setCoreMetadesc($coreMetadesc)
    {
        $this->coreMetadesc = $coreMetadesc;

        return $this;
    }

    /**
     * Get coreMetadesc
     *
     * @return string 
     */
    public function getCoreMetadesc()
    {
        return $this->coreMetadesc;
    }

    /**
     * Set coreCatid
     *
     * @param integer $coreCatid
     * @return TblUcmContent
     */
    public function setCoreCatid($coreCatid)
    {
        $this->coreCatid = $coreCatid;

        return $this;
    }

    /**
     * Get coreCatid
     *
     * @return integer 
     */
    public function getCoreCatid()
    {
        return $this->coreCatid;
    }

    /**
     * Set coreXreference
     *
     * @param string $coreXreference
     * @return TblUcmContent
     */
    public function setCoreXreference($coreXreference)
    {
        $this->coreXreference = $coreXreference;

        return $this;
    }

    /**
     * Get coreXreference
     *
     * @return string 
     */
    public function getCoreXreference()
    {
        return $this->coreXreference;
    }

    /**
     * Set coreTypeId
     *
     * @param integer $coreTypeId
     * @return TblUcmContent
     */
    public function setCoreTypeId($coreTypeId)
    {
        $this->coreTypeId = $coreTypeId;

        return $this;
    }

    /**
     * Get coreTypeId
     *
     * @return integer 
     */
    public function getCoreTypeId()
    {
        return $this->coreTypeId;
    }
}
