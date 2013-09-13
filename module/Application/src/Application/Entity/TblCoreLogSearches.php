<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCoreLogSearches
 *
 * @ORM\Table(name="tbl_core_log_searches")
 * @ORM\Entity
 */
class TblCoreLogSearches
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
     * @ORM\Column(name="search_term", type="string", length=128, nullable=false)
     */
    private $searchTerm = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';



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
     * Set searchTerm
     *
     * @param string $searchTerm
     * @return TblCoreLogSearches
     */
    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;

        return $this;
    }

    /**
     * Get searchTerm
     *
     * @return string 
     */
    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     * @return TblCoreLogSearches
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits()
    {
        return $this->hits;
    }
}
