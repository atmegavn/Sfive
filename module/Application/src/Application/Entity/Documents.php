<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="documents")
 * @ORM\Entity
 */
class Documents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FILENAME", type="string", length=45, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="FILE_TYPE", type="string", length=45, nullable=false)
     */
    private $fileType;

    /**
     * @var string
     *
     * @ORM\Column(name="LINK", type="string", length=500, nullable=false)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISPUBLIC", type="integer", nullable=false)
     */
    private $ispublic;

    /**
     * @var integer
     *
     * @ORM\Column(name="CATALOG_ID", type="integer", nullable=false)
     */
    private $catalogId;



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
     * Set filename
     *
     * @param string $filename
     * @return Documents
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set fileType
     *
     * @param string $fileType
     * @return Documents
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    
        return $this;
    }

    /**
     * Get fileType
     *
     * @return string 
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Documents
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set ispublic
     *
     * @param integer $ispublic
     * @return Documents
     */
    public function setIspublic($ispublic)
    {
        $this->ispublic = $ispublic;
    
        return $this;
    }

    /**
     * Get ispublic
     *
     * @return integer 
     */
    public function getIspublic()
    {
        return $this->ispublic;
    }

    /**
     * Set catalogId
     *
     * @param integer $catalogId
     * @return Documents
     */
    public function setCatalogId($catalogId)
    {
        $this->catalogId = $catalogId;
    
        return $this;
    }

    /**
     * Get catalogId
     *
     * @return integer 
     */
    public function getCatalogId()
    {
        return $this->catalogId;
    }
}