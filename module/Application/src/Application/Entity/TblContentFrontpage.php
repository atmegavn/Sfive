<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblContentFrontpage
 *
 * @ORM\Table(name="tbl_content_frontpage")
 * @ORM\Entity
 */
class TblContentFrontpage
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
     * @ORM\Column(name="ordering", type="integer", nullable=false)
     */
    private $ordering = '0';



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
     * Set ordering
     *
     * @param integer $ordering
     * @return TblContentFrontpage
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
