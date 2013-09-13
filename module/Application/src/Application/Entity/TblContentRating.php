<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblContentRating
 *
 * @ORM\Table(name="tbl_content_rating")
 * @ORM\Entity
 */
class TblContentRating
{
    /**
     * @var integer
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rating_sum", type="integer", nullable=false)
     */
    private $ratingSum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rating_count", type="integer", nullable=false)
     */
    private $ratingCount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lastip", type="string", length=50, nullable=false)
     */
    private $lastip = '';



    /**
     * Get contentId
     *
     * @return integer 
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set ratingSum
     *
     * @param integer $ratingSum
     * @return TblContentRating
     */
    public function setRatingSum($ratingSum)
    {
        $this->ratingSum = $ratingSum;

        return $this;
    }

    /**
     * Get ratingSum
     *
     * @return integer 
     */
    public function getRatingSum()
    {
        return $this->ratingSum;
    }

    /**
     * Set ratingCount
     *
     * @param integer $ratingCount
     * @return TblContentRating
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;

        return $this;
    }

    /**
     * Get ratingCount
     *
     * @return integer 
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * Set lastip
     *
     * @param string $lastip
     * @return TblContentRating
     */
    public function setLastip($lastip)
    {
        $this->lastip = $lastip;

        return $this;
    }

    /**
     * Get lastip
     *
     * @return string 
     */
    public function getLastip()
    {
        return $this->lastip;
    }
}
