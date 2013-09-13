<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblExtensions
 *
 * @ORM\Table(name="tbl_extensions", indexes={@ORM\Index(name="element_clientid", columns={"element", "client_id"}), @ORM\Index(name="element_folder_clientid", columns={"element", "folder", "client_id"}), @ORM\Index(name="extension", columns={"type", "element", "folder", "client_id"})})
 * @ORM\Entity
 */
class TblExtensions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="extension_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extensionId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=100, nullable=false)
     */
    private $element;

    /**
     * @var string
     *
     * @ORM\Column(name="folder", type="string", length=100, nullable=false)
     */
    private $folder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="client_id", type="boolean", nullable=false)
     */
    private $clientId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="protected", type="boolean", nullable=false)
     */
    private $protected = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="manifest_cache", type="text", nullable=false)
     */
    private $manifestCache;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", nullable=false)
     */
    private $params;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_data", type="text", nullable=false)
     */
    private $customData;

    /**
     * @var string
     *
     * @ORM\Column(name="system_data", type="text", nullable=false)
     */
    private $systemData;

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
     * @ORM\Column(name="ordering", type="integer", nullable=true)
     */
    private $ordering = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state = '0';



    /**
     * Get extensionId
     *
     * @return integer 
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TblExtensions
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
     * Set type
     *
     * @param string $type
     * @return TblExtensions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set element
     *
     * @param string $element
     * @return TblExtensions
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element
     *
     * @return string 
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set folder
     *
     * @param string $folder
     * @return TblExtensions
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get folder
     *
     * @return string 
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Set clientId
     *
     * @param boolean $clientId
     * @return TblExtensions
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return boolean 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return TblExtensions
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return TblExtensions
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
     * Set protected
     *
     * @param boolean $protected
     * @return TblExtensions
     */
    public function setProtected($protected)
    {
        $this->protected = $protected;

        return $this;
    }

    /**
     * Get protected
     *
     * @return boolean 
     */
    public function getProtected()
    {
        return $this->protected;
    }

    /**
     * Set manifestCache
     *
     * @param string $manifestCache
     * @return TblExtensions
     */
    public function setManifestCache($manifestCache)
    {
        $this->manifestCache = $manifestCache;

        return $this;
    }

    /**
     * Get manifestCache
     *
     * @return string 
     */
    public function getManifestCache()
    {
        return $this->manifestCache;
    }

    /**
     * Set params
     *
     * @param string $params
     * @return TblExtensions
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
     * Set customData
     *
     * @param string $customData
     * @return TblExtensions
     */
    public function setCustomData($customData)
    {
        $this->customData = $customData;

        return $this;
    }

    /**
     * Get customData
     *
     * @return string 
     */
    public function getCustomData()
    {
        return $this->customData;
    }

    /**
     * Set systemData
     *
     * @param string $systemData
     * @return TblExtensions
     */
    public function setSystemData($systemData)
    {
        $this->systemData = $systemData;

        return $this;
    }

    /**
     * Get systemData
     *
     * @return string 
     */
    public function getSystemData()
    {
        return $this->systemData;
    }

    /**
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return TblExtensions
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
     * @return TblExtensions
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
     * @return TblExtensions
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
     * Set state
     *
     * @param integer $state
     * @return TblExtensions
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }
}
