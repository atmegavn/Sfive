<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSchemas
 *
 * @ORM\Table(name="tbl_schemas")
 * @ORM\Entity
 */
class TblSchemas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="extension_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $extensionId;

    /**
     * @var string
     *
     * @ORM\Column(name="version_id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $versionId;



    /**
     * Set extensionId
     *
     * @param integer $extensionId
     * @return TblSchemas
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
     * Set versionId
     *
     * @param string $versionId
     * @return TblSchemas
     */
    public function setVersionId($versionId)
    {
        $this->versionId = $versionId;

        return $this;
    }

    /**
     * Get versionId
     *
     * @return string 
     */
    public function getVersionId()
    {
        return $this->versionId;
    }
}
