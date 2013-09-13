<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblModulesMenu
 *
 * @ORM\Table(name="tbl_modules_menu")
 * @ORM\Entity
 */
class TblModulesMenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="moduleid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $moduleid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="menuid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menuid = '0';



    /**
     * Set moduleid
     *
     * @param integer $moduleid
     * @return TblModulesMenu
     */
    public function setModuleid($moduleid)
    {
        $this->moduleid = $moduleid;

        return $this;
    }

    /**
     * Get moduleid
     *
     * @return integer 
     */
    public function getModuleid()
    {
        return $this->moduleid;
    }

    /**
     * Set menuid
     *
     * @param integer $menuid
     * @return TblModulesMenu
     */
    public function setMenuid($menuid)
    {
        $this->menuid = $menuid;

        return $this;
    }

    /**
     * Get menuid
     *
     * @return integer 
     */
    public function getMenuid()
    {
        return $this->menuid;
    }
}
