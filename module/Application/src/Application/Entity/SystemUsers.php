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
     * @ORM\Column(name="idsystem_users", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsystemUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="system_usersname", type="string", length=45, nullable=true)
     */
    private $systemUsersname;

    /**
     * @var string
     *
     * @ORM\Column(name="system_userspassword", type="string", length=45, nullable=true)
     */
    private $systemUserspassword;



    /**
     * Get idsystemUsers
     *
     * @return integer 
     */
    public function getIdsystemUsers()
    {
        return $this->idsystemUsers;
    }

    /**
     * Set systemUsersname
     *
     * @param string $systemUsersname
     * @return SystemUsers
     */
    public function setSystemUsersname($systemUsersname)
    {
        $this->systemUsersname = $systemUsersname;

        return $this;
    }

    /**
     * Get systemUsersname
     *
     * @return string 
     */
    public function getSystemUsersname()
    {
        return $this->systemUsersname;
    }

    /**
     * Set systemUserspassword
     *
     * @param string $systemUserspassword
     * @return SystemUsers
     */
    public function setSystemUserspassword($systemUserspassword)
    {
        $this->systemUserspassword = $systemUserspassword;

        return $this;
    }

    /**
     * Get systemUserspassword
     *
     * @return string 
     */
    public function getSystemUserspassword()
    {
        return $this->systemUserspassword;
    }
}
