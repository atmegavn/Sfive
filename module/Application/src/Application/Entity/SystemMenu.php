<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemMenu
 *
 * @ORM\Table(name="system_menu")
 * @ORM\Entity
 */
class SystemMenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MENU_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="MENU_NAME", type="string", length=100, nullable=false)
     */
    private $menuName;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARENT_ID", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="MENU_TYPE", type="integer", nullable=false)
     */
    private $menuType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISONWEB", type="integer", nullable=false)
     */
    private $isonweb;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=500, nullable=true)
     */
    private $description;


}
