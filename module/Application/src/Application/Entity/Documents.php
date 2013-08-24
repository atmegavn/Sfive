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


}
