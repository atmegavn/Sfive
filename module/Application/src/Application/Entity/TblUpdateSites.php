<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUpdateSites
 *
 * @ORM\Table(name="tbl_update_sites")
 * @ORM\Entity
 */
class TblUpdateSites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="update_site_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $updateSiteId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", nullable=false)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="enabled", type="integer", nullable=true)
     */
    private $enabled = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_check_timestamp", type="bigint", nullable=true)
     */
    private $lastCheckTimestamp = '0';



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
     * Set name
     *
     * @param string $name
     * @return TblUpdateSites
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
     * @return TblUpdateSites
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
     * Set location
     *
     * @param string $location
     * @return TblUpdateSites
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return TblUpdateSites
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set lastCheckTimestamp
     *
     * @param integer $lastCheckTimestamp
     * @return TblUpdateSites
     */
    public function setLastCheckTimestamp($lastCheckTimestamp)
    {
        $this->lastCheckTimestamp = $lastCheckTimestamp;

        return $this;
    }

    /**
     * Get lastCheckTimestamp
     *
     * @return integer 
     */
    public function getLastCheckTimestamp()
    {
        return $this->lastCheckTimestamp;
    }
}
