<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Controlpanel
 *
 * @ORM\Table(name="controlpanel")
 * @ORM\Entity
 */
class Controlpanel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontrolPanel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontrolpanel;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=45, nullable=true)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=45, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;



    /**
     * Get idcontrolpanel
     *
     * @return integer 
     */
    public function getIdcontrolpanel()
    {
        return $this->idcontrolpanel;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return Controlpanel
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

    /**
     * Set value
     *
     * @param string $value
     * @return Controlpanel
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Controlpanel
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
}
