<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUpdateSitesExtensions
 *
 * @ORM\Table(name="tbl_update_sites_extensions")
 * @ORM\Entity
 */
class TblUpdateSitesExtensions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="update_site_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $updateSiteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extension_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $extensionId = '0';



    /**
     * Set updateSiteId
     *
     * @param integer $updateSiteId
     * @return TblUpdateSitesExtensions
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
     * @return TblUpdateSitesExtensions
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
}
