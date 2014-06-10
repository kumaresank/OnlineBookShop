<?php

namespace bookshop\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bookdetails
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class bookdetails
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
     * @ORM\Column(name="bookname", type="string", length=255)
     */
    private $bookname;

    /**
     * @var string
     *
     * @ORM\Column(name="bookpublisher", type="string", length=255)
     */
    private $bookpublisher;

    /**
     * @var string
     *
     * @ORM\Column(name="bookauthor", type="string", length=255)
     */
    private $bookauthor;

    /**
     * @var float
     *
     * @ORM\Column(name="bookprice", type="float")
     */
    private $bookprice;

    /**
     * @var string
     *
     * @ORM\Column(name="bookpath", type="string", length=255)
     */
    private $bookpath;


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
     * Set bookname
     *
     * @param string $bookname
     * @return bookdetails
     */
    public function setBookname($bookname)
    {
        $this->bookname = $bookname;

        return $this;
    }

    /**
     * Get bookname
     *
     * @return string 
     */
    public function getBookname()
    {
        return $this->bookname;
    }

    /**
     * Set bookpublisher
     *
     * @param string $bookpublisher
     * @return bookdetails
     */
    public function setBookpublisher($bookpublisher)
    {
        $this->bookpublisher = $bookpublisher;

        return $this;
    }

    /**
     * Get bookpublisher
     *
     * @return string 
     */
    public function getBookpublisher()
    {
        return $this->bookpublisher;
    }

    /**
     * Set bookauthor
     *
     * @param string $bookauthor
     * @return bookdetails
     */
    public function setBookauthor($bookauthor)
    {
        $this->bookauthor = $bookauthor;

        return $this;
    }

    /**
     * Get bookauthor
     *
     * @return string 
     */
    public function getBookauthor()
    {
        return $this->bookauthor;
    }

    /**
     * Set bookprice
     *
     * @param float $bookprice
     * @return bookdetails
     */
    public function setBookprice($bookprice)
    {
        $this->bookprice = $bookprice;

        return $this;
    }

    /**
     * Get bookprice
     *
     * @return float 
     */
    public function getBookprice()
    {
        return $this->bookprice;
    }

    /**
     * Set bookpath
     *
     * @param string $bookpath
     * @return bookdetails
     */
    public function setBookpath($bookpath)
    {
        $this->bookpath = $bookpath;

        return $this;
    }

    /**
     * Get bookpath
     *
     * @return string 
     */
    public function getBookpath()
    {
        return $this->bookpath;
    }
}
