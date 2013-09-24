<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paramater
 *
 * @ORM\Table(name="paramater")
 * @ORM\Entity
 */
class Paramater
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idparamater", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparamater;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=45, nullable=false)
     */
    private $key;



    /**
     * Get idparamater
     *
     * @return integer 
     */
    public function getIdparamater()
    {
        return $this->idparamater;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return Paramater
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
