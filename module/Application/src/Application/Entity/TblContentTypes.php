<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblContentTypes
 *
 * @ORM\Table(name="tbl_content_types", indexes={@ORM\Index(name="idx_alias", columns={"type_alias"})})
 * @ORM\Entity
 */
class TblContentTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_title", type="string", length=255, nullable=false)
     */
    private $typeTitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type_alias", type="string", length=255, nullable=false)
     */
    private $typeAlias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="table", type="string", length=255, nullable=false)
     */
    private $table = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="text", nullable=false)
     */
    private $rules;

    /**
     * @var string
     *
     * @ORM\Column(name="field_mappings", type="text", nullable=false)
     */
    private $fieldMappings;

    /**
     * @var string
     *
     * @ORM\Column(name="router", type="string", length=255, nullable=false)
     */
    private $router = '';



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
     * Set typeTitle
     *
     * @param string $typeTitle
     * @return TblContentTypes
     */
    public function setTypeTitle($typeTitle)
    {
        $this->typeTitle = $typeTitle;

        return $this;
    }

    /**
     * Get typeTitle
     *
     * @return string 
     */
    public function getTypeTitle()
    {
        return $this->typeTitle;
    }

    /**
     * Set typeAlias
     *
     * @param string $typeAlias
     * @return TblContentTypes
     */
    public function setTypeAlias($typeAlias)
    {
        $this->typeAlias = $typeAlias;

        return $this;
    }

    /**
     * Get typeAlias
     *
     * @return string 
     */
    public function getTypeAlias()
    {
        return $this->typeAlias;
    }

    /**
     * Set table
     *
     * @param string $table
     * @return TblContentTypes
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get table
     *
     * @return string 
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set rules
     *
     * @param string $rules
     * @return TblContentTypes
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string 
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set fieldMappings
     *
     * @param string $fieldMappings
     * @return TblContentTypes
     */
    public function setFieldMappings($fieldMappings)
    {
        $this->fieldMappings = $fieldMappings;

        return $this;
    }

    /**
     * Get fieldMappings
     *
     * @return string 
     */
    public function getFieldMappings()
    {
        return $this->fieldMappings;
    }

    /**
     * Set router
     *
     * @param string $router
     * @return TblContentTypes
     */
    public function setRouter($router)
    {
        $this->router = $router;

        return $this;
    }

    /**
     * Get router
     *
     * @return string 
     */
    public function getRouter()
    {
        return $this->router;
    }
}
