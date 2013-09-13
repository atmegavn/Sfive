<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAssociations
 *
 * @ORM\Table(name="tbl_associations", indexes={@ORM\Index(name="idx_key", columns={"key"})})
 * @ORM\Entity
 */
class TblAssociations
{
    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $context;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=32, nullable=false)
     */
    private $key;



    /**
     * Set context
     *
     * @param string $context
     * @return TblAssociations
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return TblAssociations
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set key
     *
     * @param string $key
     * @return TblAssociations
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }
}
