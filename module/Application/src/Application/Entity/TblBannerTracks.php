<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBannerTracks
 *
 * @ORM\Table(name="tbl_banner_tracks", indexes={@ORM\Index(name="idx_track_date", columns={"track_date"}), @ORM\Index(name="idx_track_type", columns={"track_type"}), @ORM\Index(name="idx_banner_id", columns={"banner_id"})})
 * @ORM\Entity
 */
class TblBannerTracks
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="track_date", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $trackDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="track_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $trackType;

    /**
     * @var integer
     *
     * @ORM\Column(name="banner_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bannerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count = '0';



    /**
     * Set trackDate
     *
     * @param \DateTime $trackDate
     * @return TblBannerTracks
     */
    public function setTrackDate($trackDate)
    {
        $this->trackDate = $trackDate;

        return $this;
    }

    /**
     * Get trackDate
     *
     * @return \DateTime 
     */
    public function getTrackDate()
    {
        return $this->trackDate;
    }

    /**
     * Set trackType
     *
     * @param integer $trackType
     * @return TblBannerTracks
     */
    public function setTrackType($trackType)
    {
        $this->trackType = $trackType;

        return $this;
    }

    /**
     * Get trackType
     *
     * @return integer 
     */
    public function getTrackType()
    {
        return $this->trackType;
    }

    /**
     * Set bannerId
     *
     * @param integer $bannerId
     * @return TblBannerTracks
     */
    public function setBannerId($bannerId)
    {
        $this->bannerId = $bannerId;

        return $this;
    }

    /**
     * Get bannerId
     *
     * @return integer 
     */
    public function getBannerId()
    {
        return $this->bannerId;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return TblBannerTracks
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }
}
