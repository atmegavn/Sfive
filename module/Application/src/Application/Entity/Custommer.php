<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Custommer
 *
 * @ORM\Table(name="custommer")
 * @ORM\Entity
 */
class Custommer
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
     * @ORM\Column(name="FULL_NAME", type="string", length=100, nullable=false)
     */
    private $fullName;

    /**
     * @var integer
     *
     * @ORM\Column(name="AGE", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var integer
     *
     * @ORM\Column(name="SEX", type="integer", nullable=false)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONE", type="string", length=45, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS", type="string", length=100, nullable=false)
     */
    private $address;


}
