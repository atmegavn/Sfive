<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supporter
 *
 * @ORM\Table(name="supporter")
 * @ORM\Entity
 */
class Supporter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsupporter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsupporter;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="skyper", type="string", length=45, nullable=true)
     */
    private $skyper;

    /**
     * @var string
     *
     * @ORM\Column(name="yahoo", type="string", length=45, nullable=true)
     */
    private $yahoo;

    /**
     * @var string
     *
     * @ORM\Column(name="online", type="string", length=45, nullable=false)
     */
    private $online;



    /**
     * Get idsupporter
     *
     * @return integer 
     */
    public function getIdsupporter()
    {
        return $this->idsupporter;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Supporter
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Supporter
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set skyper
     *
     * @param string $skyper
     * @return Supporter
     */
    public function setSkyper($skyper)
    {
        $this->skyper = $skyper;

        return $this;
    }

    /**
     * Get skyper
     *
     * @return string 
     */
    public function getSkyper()
    {
        return $this->skyper;
    }

    /**
     * Set yahoo
     *
     * @param string $yahoo
     * @return Supporter
     */
    public function setYahoo($yahoo)
    {
        $this->yahoo = $yahoo;

        return $this;
    }

    /**
     * Get yahoo
     *
     * @return string 
     */
    public function getYahoo()
    {
        return $this->yahoo;
    }

    /**
     * Set online
     *
     * @param string $online
     * @return Supporter
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return string 
     */
    public function getOnline()
    {
        return $this->online;
    }
}
