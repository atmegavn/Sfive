<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFinderLinks
 *
 * @ORM\Table(name="tbl_finder_links", indexes={@ORM\Index(name="idx_type", columns={"type_id"}), @ORM\Index(name="idx_title", columns={"title"}), @ORM\Index(name="idx_md5", columns={"md5sum"}), @ORM\Index(name="idx_url", columns={"url"}), @ORM\Index(name="idx_published_list", columns={"published", "state", "access", "publish_start_date", "publish_end_date", "list_price"}), @ORM\Index(name="idx_published_sale", columns={"published", "state", "access", "publish_start_date", "publish_end_date", "sale_price"})})
 * @ORM\Entity
 */
class TblFinderLinks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="link_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $linkId;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=255, nullable=false)
     */
    private $route;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="indexdate", type="datetime", nullable=false)
     */
    private $indexdate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="md5sum", type="string", length=32, nullable=true)
     */
    private $md5sum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=true)
     */
    private $access = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=8, nullable=false)
     */
    private $language;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_start_date", type="datetime", nullable=false)
     */
    private $publishStartDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_end_date", type="datetime", nullable=false)
     */
    private $publishEndDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=false)
     */
    private $startDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endDate = '0000-00-00 00:00:00';

    /**
     * @var float
     *
     * @ORM\Column(name="list_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $listPrice = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="sale_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $salePrice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false)
     */
    private $typeId;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="blob", nullable=false)
     */
    private $object;



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
     * Set url
     *
     * @param string $url
     * @return TblFinderLinks
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set route
     *
     * @param string $route
     * @return TblFinderLinks
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string 
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TblFinderLinks
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TblFinderLinks
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set indexdate
     *
     * @param \DateTime $indexdate
     * @return TblFinderLinks
     */
    public function setIndexdate($indexdate)
    {
        $this->indexdate = $indexdate;

        return $this;
    }

    /**
     * Get indexdate
     *
     * @return \DateTime 
     */
    public function getIndexdate()
    {
        return $this->indexdate;
    }

    /**
     * Set md5sum
     *
     * @param string $md5sum
     * @return TblFinderLinks
     */
    public function setMd5sum($md5sum)
    {
        $this->md5sum = $md5sum;

        return $this;
    }

    /**
     * Get md5sum
     *
     * @return string 
     */
    public function getMd5sum()
    {
        return $this->md5sum;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return TblFinderLinks
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return TblFinderLinks
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return TblFinderLinks
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return TblFinderLinks
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

    /**
     * Set publishStartDate
     *
     * @param \DateTime $publishStartDate
     * @return TblFinderLinks
     */
    public function setPublishStartDate($publishStartDate)
    {
        $this->publishStartDate = $publishStartDate;

        return $this;
    }

    /**
     * Get publishStartDate
     *
     * @return \DateTime 
     */
    public function getPublishStartDate()
    {
        return $this->publishStartDate;
    }

    /**
     * Set publishEndDate
     *
     * @param \DateTime $publishEndDate
     * @return TblFinderLinks
     */
    public function setPublishEndDate($publishEndDate)
    {
        $this->publishEndDate = $publishEndDate;

        return $this;
    }

    /**
     * Get publishEndDate
     *
     * @return \DateTime 
     */
    public function getPublishEndDate()
    {
        return $this->publishEndDate;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return TblFinderLinks
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return TblFinderLinks
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set listPrice
     *
     * @param float $listPrice
     * @return TblFinderLinks
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;

        return $this;
    }

    /**
     * Get listPrice
     *
     * @return float 
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * Set salePrice
     *
     * @param float $salePrice
     * @return TblFinderLinks
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return float 
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set typeId
     *
     * @param integer $typeId
     * @return TblFinderLinks
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set object
     *
     * @param string $object
     * @return TblFinderLinks
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string 
     */
    public function getObject()
    {
        return $this->object;
    }
}
