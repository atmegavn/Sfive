<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFinderTokensAggregate
 *
 * @ORM\Table(name="tbl_finder_tokens_aggregate", indexes={@ORM\Index(name="token", columns={"term"}), @ORM\Index(name="keyword_id", columns={"term_id"})})
 * @ORM\Entity
 */
class TblFinderTokensAggregate
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
     * @ORM\Column(name="term_id", type="integer", nullable=false)
     */
    private $termId;

    /**
     * @var string
     *
     * @ORM\Column(name="map_suffix", type="string", length=1, nullable=false)
     */
    private $mapSuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="term", type="string", length=75, nullable=false)
     */
    private $term;

    /**
     * @var string
     *
     * @ORM\Column(name="stem", type="string", length=75, nullable=false)
     */
    private $stem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="common", type="boolean", nullable=false)
     */
    private $common = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="phrase", type="boolean", nullable=false)
     */
    private $phrase = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="term_weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $termWeight;

    /**
     * @var boolean
     *
     * @ORM\Column(name="context", type="boolean", nullable=false)
     */
    private $context = '2';

    /**
     * @var float
     *
     * @ORM\Column(name="context_weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $contextWeight;

    /**
     * @var float
     *
     * @ORM\Column(name="total_weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=false)
     */
    private $language = '';



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
     * Set termId
     *
     * @param integer $termId
     * @return TblFinderTokensAggregate
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
     * Set mapSuffix
     *
     * @param string $mapSuffix
     * @return TblFinderTokensAggregate
     */
    public function setMapSuffix($mapSuffix)
    {
        $this->mapSuffix = $mapSuffix;

        return $this;
    }

    /**
     * Get mapSuffix
     *
     * @return string 
     */
    public function getMapSuffix()
    {
        return $this->mapSuffix;
    }

    /**
     * Set term
     *
     * @param string $term
     * @return TblFinderTokensAggregate
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set stem
     *
     * @param string $stem
     * @return TblFinderTokensAggregate
     */
    public function setStem($stem)
    {
        $this->stem = $stem;

        return $this;
    }

    /**
     * Get stem
     *
     * @return string 
     */
    public function getStem()
    {
        return $this->stem;
    }

    /**
     * Set common
     *
     * @param boolean $common
     * @return TblFinderTokensAggregate
     */
    public function setCommon($common)
    {
        $this->common = $common;

        return $this;
    }

    /**
     * Get common
     *
     * @return boolean 
     */
    public function getCommon()
    {
        return $this->common;
    }

    /**
     * Set phrase
     *
     * @param boolean $phrase
     * @return TblFinderTokensAggregate
     */
    public function setPhrase($phrase)
    {
        $this->phrase = $phrase;

        return $this;
    }

    /**
     * Get phrase
     *
     * @return boolean 
     */
    public function getPhrase()
    {
        return $this->phrase;
    }

    /**
     * Set termWeight
     *
     * @param float $termWeight
     * @return TblFinderTokensAggregate
     */
    public function setTermWeight($termWeight)
    {
        $this->termWeight = $termWeight;

        return $this;
    }

    /**
     * Get termWeight
     *
     * @return float 
     */
    public function getTermWeight()
    {
        return $this->termWeight;
    }

    /**
     * Set context
     *
     * @param boolean $context
     * @return TblFinderTokensAggregate
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return boolean 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set contextWeight
     *
     * @param float $contextWeight
     * @return TblFinderTokensAggregate
     */
    public function setContextWeight($contextWeight)
    {
        $this->contextWeight = $contextWeight;

        return $this;
    }

    /**
     * Get contextWeight
     *
     * @return float 
     */
    public function getContextWeight()
    {
        return $this->contextWeight;
    }

    /**
     * Set totalWeight
     *
     * @param float $totalWeight
     * @return TblFinderTokensAggregate
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return float 
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return TblFinderTokensAggregate
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
