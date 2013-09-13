<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFinderTerms
 *
 * @ORM\Table(name="tbl_finder_terms", uniqueConstraints={@ORM\UniqueConstraint(name="idx_term", columns={"term"})}, indexes={@ORM\Index(name="idx_term_phrase", columns={"term", "phrase"}), @ORM\Index(name="idx_stem_phrase", columns={"stem", "phrase"}), @ORM\Index(name="idx_soundex_phrase", columns={"soundex", "phrase"})})
 * @ORM\Entity
 */
class TblFinderTerms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $termId;

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
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $weight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="soundex", type="string", length=75, nullable=false)
     */
    private $soundex;

    /**
     * @var integer
     *
     * @ORM\Column(name="links", type="integer", nullable=false)
     */
    private $links = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=false)
     */
    private $language = '';



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
     * Set term
     *
     * @param string $term
     * @return TblFinderTerms
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
     * @return TblFinderTerms
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
     * @return TblFinderTerms
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
     * @return TblFinderTerms
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
     * Set weight
     *
     * @param float $weight
     * @return TblFinderTerms
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

    /**
     * Set soundex
     *
     * @param string $soundex
     * @return TblFinderTerms
     */
    public function setSoundex($soundex)
    {
        $this->soundex = $soundex;

        return $this;
    }

    /**
     * Get soundex
     *
     * @return string 
     */
    public function getSoundex()
    {
        return $this->soundex;
    }

    /**
     * Set links
     *
     * @param integer $links
     * @return TblFinderTerms
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get links
     *
     * @return integer 
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return TblFinderTerms
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
