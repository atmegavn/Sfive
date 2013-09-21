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
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=45, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;



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

    /**
     * Set phone
     *
     * @param string $phone
     * @return SystemUsers
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
     * @return SystemUsers
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
     * @return SystemUsers
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
     * Set email
     *
     * @param string $email
     * @return SystemUsers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return SystemUsers
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return SystemUsers
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}
