<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUserProfiles
 *
 * @ORM\Table(name="tbl_user_profiles", uniqueConstraints={@ORM\UniqueConstraint(name="idx_user_id_profile_key", columns={"user_id", "profile_key"})})
 * @ORM\Entity
 */
class TblUserProfiles
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
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="profile_key", type="string", length=100, nullable=false)
     */
    private $profileKey;

    /**
     * @var string
     *
     * @ORM\Column(name="profile_value", type="string", length=255, nullable=false)
     */
    private $profileValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering = '0';



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
     * @return TblUserProfiles
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
     * Set profileKey
     *
     * @param string $profileKey
     * @return TblUserProfiles
     */
    public function setProfileKey($profileKey)
    {
        $this->profileKey = $profileKey;

        return $this;
    }

    /**
     * Get profileKey
     *
     * @return string 
     */
    public function getProfileKey()
    {
        return $this->profileKey;
    }

    /**
     * Set profileValue
     *
     * @param string $profileValue
     * @return TblUserProfiles
     */
    public function setProfileValue($profileValue)
    {
        $this->profileValue = $profileValue;

        return $this;
    }

    /**
     * Get profileValue
     *
     * @return string 
     */
    public function getProfileValue()
    {
        return $this->profileValue;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return TblUserProfiles
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
}
