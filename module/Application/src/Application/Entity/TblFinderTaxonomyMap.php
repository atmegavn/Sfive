<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFinderTaxonomyMap
 *
 * @ORM\Table(name="tbl_finder_taxonomy_map", indexes={@ORM\Index(name="link_id", columns={"link_id"}), @ORM\Index(name="node_id", columns={"node_id"})})
 * @ORM\Entity
 */
class TblFinderTaxonomyMap
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
     * @ORM\Column(name="node_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nodeId;



    /**
     * Set linkId
     *
     * @param integer $linkId
     * @return TblFinderTaxonomyMap
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
     * Set nodeId
     *
     * @param integer $nodeId
     * @return TblFinderTaxonomyMap
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;

        return $this;
    }

    /**
     * Get nodeId
     *
     * @return integer 
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }
}
