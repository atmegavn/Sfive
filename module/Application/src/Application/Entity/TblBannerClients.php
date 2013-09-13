<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBannerClients
 *
 * @ORM\Table(name="tbl_banner_clients", indexes={@ORM\Index(name="idx_own_prefix", columns={"own_prefix"}), @ORM\Index(name="idx_metakey_prefix", columns={"metakey_prefix"})})
 * @ORM\Entity
 */
class TblBannerClients
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=false)
     */
    private $contact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="extrainfo", type="text", nullable=false)
     */
    private $extrainfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

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
     * @var string
     *
     * @ORM\Column(name="metakey", type="text", nullable=false)
     */
    private $metakey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="own_prefix", type="boolean", nullable=false)
     */
    private $ownPrefix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="metakey_prefix", type="string", length=255, nullable=false)
     */
    private $metakeyPrefix = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="purchase_type", type="boolean", nullable=false)
     */
    private $purchaseType = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="track_clicks", type="boolean", nullable=false)
     */
    private $trackClicks = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="track_impressions", type="boolean", nullable=false)
     */
    private $trackImpressions = '-1';



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
     * Set name
     *
     * @param string $name
     * @return TblBannerClients
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
     * Set contact
     *
     * @param string $contact
     * @return TblBannerClients
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TblBannerClients
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set extrainfo
     *
     * @param string $extrainfo
     * @return TblBannerClients
     */
    public function setExtrainfo($extrainfo)
    {
        $this->extrainfo = $extrainfo;

        return $this;
    }

    /**
     * Get extrainfo
     *
     * @return string 
     */
    public function getExtrainfo()
    {
        return $this->extrainfo;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return TblBannerClients
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set checkedOut
     *
     * @param integer $checkedOut
     * @return TblBannerClients
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
     * @return TblBannerClients
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
     * Set metakey
     *
     * @param string $metakey
     * @return TblBannerClients
     */
    public function setMetakey($metakey)
    {
        $this->metakey = $metakey;

        return $this;
    }

    /**
     * Get metakey
     *
     * @return string 
     */
    public function getMetakey()
    {
        return $this->metakey;
    }

    /**
     * Set ownPrefix
     *
     * @param boolean $ownPrefix
     * @return TblBannerClients
     */
    public function setOwnPrefix($ownPrefix)
    {
        $this->ownPrefix = $ownPrefix;

        return $this;
    }

    /**
     * Get ownPrefix
     *
     * @return boolean 
     */
    public function getOwnPrefix()
    {
        return $this->ownPrefix;
    }

    /**
     * Set metakeyPrefix
     *
     * @param string $metakeyPrefix
     * @return TblBannerClients
     */
    public function setMetakeyPrefix($metakeyPrefix)
    {
        $this->metakeyPrefix = $metakeyPrefix;

        return $this;
    }

    /**
     * Get metakeyPrefix
     *
     * @return string 
     */
    public function getMetakeyPrefix()
    {
        return $this->metakeyPrefix;
    }

    /**
     * Set purchaseType
     *
     * @param boolean $purchaseType
     * @return TblBannerClients
     */
    public function setPurchaseType($purchaseType)
    {
        $this->purchaseType = $purchaseType;

        return $this;
    }

    /**
     * Get purchaseType
     *
     * @return boolean 
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * Set trackClicks
     *
     * @param boolean $trackClicks
     * @return TblBannerClients
     */
    public function setTrackClicks($trackClicks)
    {
        $this->trackClicks = $trackClicks;

        return $this;
    }

    /**
     * Get trackClicks
     *
     * @return boolean 
     */
    public function getTrackClicks()
    {
        return $this->trackClicks;
    }

    /**
     * Set trackImpressions
     *
     * @param boolean $trackImpressions
     * @return TblBannerClients
     */
    public function setTrackImpressions($trackImpressions)
    {
        $this->trackImpressions = $trackImpressions;

        return $this;
    }

    /**
     * Get trackImpressions
     *
     * @return boolean 
     */
    public function getTrackImpressions()
    {
        return $this->trackImpressions;
    }
}
