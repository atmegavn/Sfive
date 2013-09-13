<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUpdates
 *
 * @ORM\Table(name="tbl_updates")
 * @ORM\Entity
 */
class TblUpdates
{
    /**
     * @var integer
     *
     * @ORM\Column(name="update_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $updateId;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_site_id", type="integer", nullable=true)
     */
    private $updateSiteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extension_id", type="integer", nullable=true)
     */
    private $extensionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=100, nullable=true)
     */
    private $element = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="folder", type="string", length=20, nullable=true)
     */
    private $folder = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client_id", type="boolean", nullable=true)
     */
    private $clientId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=10, nullable=true)
     */
    private $version = '';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="detailsurl", type="text", nullable=false)
     */
    private $detailsurl;

    /**
     * @var string
     *
     * @ORM\Column(name="infourl", type="text", nullable=false)
     */
    private $infourl;



    /**
     * Get updateId
     *
     * @return integer 
     */
    public function getUpdateId()
    {
        return $this->updateId;
    }

    /**
     * Set updateSiteId
     *
     * @param integer $updateSiteId
     * @return TblUpdates
     */
    public function setUpdateSiteId($updateSiteId)
    {
        $this->updateSiteId = $updateSiteId;

        return $this;
    }

    /**
     * Get updateSiteId
     *
     * @return integer 
     */
    public function getUpdateSiteId()
    {
        return $this->updateSiteId;
    }

    /**
     * Set extensionId
     *
     * @param integer $extensionId
     * @return TblUpdates
     */
    public function setExtensionId($extensionId)
    {
        $this->extensionId = $extensionId;

        return $this;
    }

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
     * @return TblUpdates
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
     * Set description
     *
     * @param string $description
     * @return TblUpdates
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
     * Set element
     *
     * @param string $element
     * @return TblUpdates
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
     * Set type
     *
     * @param string $type
     * @return TblUpdates
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
     * Set folder
     *
     * @param string $folder
     * @return TblUpdates
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
     * @return TblUpdates
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
     * Set version
     *
     * @param string $version
     * @return TblUpdates
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return TblUpdates
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set detailsurl
     *
     * @param string $detailsurl
     * @return TblUpdates
     */
    public function setDetailsurl($detailsurl)
    {
        $this->detailsurl = $detailsurl;

        return $this;
    }

    /**
     * Get detailsurl
     *
     * @return string 
     */
    public function getDetailsurl()
    {
        return $this->detailsurl;
    }

    /**
     * Set infourl
     *
     * @param string $infourl
     * @return TblUpdates
     */
    public function setInfourl($infourl)
    {
        $this->infourl = $infourl;

        return $this;
    }

    /**
     * Get infourl
     *
     * @return string 
     */
    public function getInfourl()
    {
        return $this->infourl;
    }
}
