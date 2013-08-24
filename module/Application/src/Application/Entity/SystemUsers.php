<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemUsers
 *
 * @ORM\Table(name="system_users")
 * @ORM\Entity
 */
class SystemUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_NAME", type="string", length=45, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=500, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRIORITY", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONE", type="string", length=45, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="FULL_NAME", type="string", length=45, nullable=false)
     */
    private $fullName;


}
