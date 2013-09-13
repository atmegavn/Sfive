<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFinderLinksTermse
 *
 * @ORM\Table(name="tbl_finder_links_termse", indexes={@ORM\Index(name="idx_term_weight", columns={"term_id", "weight"}), @ORM\Index(name="idx_link_term_weight", columns={"link_id", "term_id", "weight"})})
 * @ORM\Entity
 */
class TblFinderLinksTermse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="link_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linkId;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $termId;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $weight;



    /**
     * Set linkId
     *
     * @param integer $linkId
     * @return TblFinderLinksTermse
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;

        return $this;
    }

    /**
     * Get linkId
     *
     * @return integer 
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Set termId
     *
     * @param integer $termId
     * @return TblFinderLinksTermse
     */
    public function setTermId($termId)
    {
        $this->termId = $termId;

        return $this;
    }

    /**
     * Get termId
     *
     * @return integer 
     */
    public function getTermId()
    {
        return $this->termId;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return TblFinderLinksTermse
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
