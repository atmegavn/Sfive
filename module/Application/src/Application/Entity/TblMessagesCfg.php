<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMessagesCfg
 *
 * @ORM\Table(name="tbl_messages_cfg", uniqueConstraints={@ORM\UniqueConstraint(name="idx_user_var_name", columns={"user_id", "cfg_name"})})
 * @ORM\Entity
 */
class TblMessagesCfg
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cfg_name", type="string", length=100, nullable=false)
     */
    private $cfgName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cfg_value", type="string", length=255, nullable=false)
     */
    private $cfgValue = '';



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
     * Set userId
     *
     * @param integer $userId
     * @return TblMessagesCfg
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set cfgName
     *
     * @param string $cfgName
     * @return TblMessagesCfg
     */
    public function setCfgName($cfgName)
    {
        $this->cfgName = $cfgName;

        return $this;
    }

    /**
     * Get cfgName
     *
     * @return string 
     */
    public function getCfgName()
    {
        return $this->cfgName;
    }

    /**
     * Set cfgValue
     *
     * @param string $cfgValue
     * @return TblMessagesCfg
     */
    public function setCfgValue($cfgValue)
    {
        $this->cfgValue = $cfgValue;

        return $this;
    }

    /**
     * Get cfgValue
     *
     * @return string 
     */
    public function getCfgValue()
    {
        return $this->cfgValue;
    }
}
