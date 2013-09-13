<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFinderTokens
 *
 * @ORM\Table(name="tbl_finder_tokens", indexes={@ORM\Index(name="idx_word", columns={"term"}), @ORM\Index(name="idx_context", columns={"context"})})
 * @ORM\Entity
 */
class TblFinderTokens
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
    private $weight = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="context", type="boolean", nullable=false)
     */
    private $context = '2';

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
     * Set term
     *
     * @param string $term
     * @return TblFinderTokens
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
     * @return TblFinderTokens
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
     * @return TblFinderTokens
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
     * @return TblFinderTokens
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
     * @return TblFinderTokens
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
     * Set context
     *
     * @param boolean $context
     * @return TblFinderTokens
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
     * Set language
     *
     * @param string $language
     * @return TblFinderTokens
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
