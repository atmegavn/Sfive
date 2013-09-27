<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menuposition
 *
 * @ORM\Table(name="menuposition")
 * @ORM\Entity
 */
class Menuposition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmenuposition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenuposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="positionId", type="integer", nullable=true)
     */
    private $positionid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;



    /**
     * Get idmenuposition
     *
     * @return integer 
     */
    public function getIdmenuposition()
    {
        return $this->idmenuposition;
    }

    /**
     * Set positionid
     *
     * @param integer $positionid
     * @return Menuposition
     */
    public function setPositionid($positionid)
    {
        $this->positionid = $positionid;

        return $this;
    }

    /**
     * Get positionid
     *
     * @return integer 
     */
    public function getPositionid()
    {
        return $this->positionid;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Menuposition
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
}
