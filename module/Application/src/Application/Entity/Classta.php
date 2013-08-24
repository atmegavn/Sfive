<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classta
 *
 * @ORM\Table(name="classta")
 * @ORM\Entity
 */
class Classta
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
     * @var integer
     *
     * @ORM\Column(name="NUMBER_CUS", type="integer", nullable=false)
     */
    private $numberCus;

    /**
     * @var integer
     *
     * @ORM\Column(name="COURSES_ID", type="integer", nullable=false)
     */
    private $coursesId;

    /**
     * @var string
     *
     * @ORM\Column(name="IN_TIME", type="string", length=100, nullable=false)
     */
    private $inTime;

    /**
     * @var string
     *
     * @ORM\Column(name="OUT_TIME", type="string", length=100, nullable=false)
     */
    private $outTime;

    /**
     * @var string
     *
     * @ORM\Column(name="IN_DATE", type="string", length=100, nullable=false)
     */
    private $inDate;

    /**
     * @var string
     *
     * @ORM\Column(name="OUT_DATE", type="string", length=100, nullable=false)
     */
    private $outDate;

    /**
     * @var string
     *
     * @ORM\Column(name="WEEK_SCHEDULE", type="string", length=45, nullable=false)
     */
    private $weekSchedule;

    /**
     * @var integer
     *
     * @ORM\Column(name="TEACHER_ID", type="integer", nullable=false)
     */
    private $teacherId;


}
