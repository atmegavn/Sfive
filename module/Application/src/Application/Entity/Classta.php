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
     * Set numberCus
     *
     * @param integer $numberCus
     * @return Classta
     */
    public function setNumberCus($numberCus)
    {
        $this->numberCus = $numberCus;
    
        return $this;
    }

    /**
     * Get numberCus
     *
     * @return integer 
     */
    public function getNumberCus()
    {
        return $this->numberCus;
    }

    /**
     * Set coursesId
     *
     * @param integer $coursesId
     * @return Classta
     */
    public function setCoursesId($coursesId)
    {
        $this->coursesId = $coursesId;
    
        return $this;
    }

    /**
     * Get coursesId
     *
     * @return integer 
     */
    public function getCoursesId()
    {
        return $this->coursesId;
    }

    /**
     * Set inTime
     *
     * @param string $inTime
     * @return Classta
     */
    public function setInTime($inTime)
    {
        $this->inTime = $inTime;
    
        return $this;
    }

    /**
     * Get inTime
     *
     * @return string 
     */
    public function getInTime()
    {
        return $this->inTime;
    }

    /**
     * Set outTime
     *
     * @param string $outTime
     * @return Classta
     */
    public function setOutTime($outTime)
    {
        $this->outTime = $outTime;
    
        return $this;
    }

    /**
     * Get outTime
     *
     * @return string 
     */
    public function getOutTime()
    {
        return $this->outTime;
    }

    /**
     * Set inDate
     *
     * @param string $inDate
     * @return Classta
     */
    public function setInDate($inDate)
    {
        $this->inDate = $inDate;
    
        return $this;
    }

    /**
     * Get inDate
     *
     * @return string 
     */
    public function getInDate()
    {
        return $this->inDate;
    }

    /**
     * Set outDate
     *
     * @param string $outDate
     * @return Classta
     */
    public function setOutDate($outDate)
    {
        $this->outDate = $outDate;
    
        return $this;
    }

    /**
     * Get outDate
     *
     * @return string 
     */
    public function getOutDate()
    {
        return $this->outDate;
    }

    /**
     * Set weekSchedule
     *
     * @param string $weekSchedule
     * @return Classta
     */
    public function setWeekSchedule($weekSchedule)
    {
        $this->weekSchedule = $weekSchedule;
    
        return $this;
    }

    /**
     * Get weekSchedule
     *
     * @return string 
     */
    public function getWeekSchedule()
    {
        return $this->weekSchedule;
    }

    /**
     * Set teacherId
     *
     * @param integer $teacherId
     * @return Classta
     */
    public function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;
    
        return $this;
    }

    /**
     * Get teacherId
     *
     * @return integer 
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }
}