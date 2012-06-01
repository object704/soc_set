<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Sonata\UserBundle\Entity\Compania
 *
 * @ORM\Table(name="compania")
 * @ORM\Entity
 */
class Compania
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $adres
     *
     * @ORM\Column(name="adres", type="string", length=255, nullable=true)
     */
    private $adres;

    /**
     * @var string $site
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;


    /**
     * @var string $telefon
     *
     * @ORM\Column(name="telefon", type="string", length=255, nullable=true)
     */
    private $telefon;



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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set site
     *
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }
    /**
     * Set adres
     *
     * @param string $adres
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }
    /**
     * Set telefon
     *
     * @param string $telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }
    function __toString()
    {
        return $this->getName();
    }
}