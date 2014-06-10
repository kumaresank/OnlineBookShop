<?php

namespace bookshop\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * userdetails
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class userdetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="useremail", type="string", length=255)
     */
    private $useremail;

    /**
     * @var string
     *
     * @ORM\Column(name="userpassword", type="string", length=255)
     */
    private $userpassword;


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
     * Set username
     *
     * @param string $username
     * @return userdetails
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set useremail
     *
     * @param string $useremail
     * @return userdetails
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;

        return $this;
    }

    /**
     * Get useremail
     *
     * @return string 
     */
    public function getUseremail()
    {
        return $this->useremail;
    }

    /**
     * Set userpassword
     *
     * @param string $userpassword
     * @return userdetails
     */
    public function setUserpassword($userpassword)
    {
        $this->userpassword = $userpassword;

        return $this;
    }

    /**
     * Get userpassword
     *
     * @return string 
     */
    public function getUserpassword()
    {
        return $this->userpassword;
    }
}
