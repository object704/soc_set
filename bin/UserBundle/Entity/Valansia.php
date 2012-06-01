<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Valansia
 *
 * @ORM\Table(name="valansia")
 * @ORM\Entity
 */
class Valansia
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
     * @var string $opisanie
     *
     * @ORM\Column(name="opisanie", type="string", length=255, nullable=true)
     */
    private $opisanie;

    /**
     * @var string $navikOpit
     *
     * @ORM\Column(name="navik_opit", type="string", length=255, nullable=true)
     */
    private $navikOpit;

    /**
     * @var date $timeRazmech
     *
     * @ORM\Column(name="time_razmech", type="date", nullable=true)
     */
    private $timeRazmech;

    /**
     * @var string $tipRab
     *
     * @ORM\Column(name="tip_rab", type="string", length=255, nullable=true)
     */
    private $tipRab;

    /**
     * @var string $obazannosti
     *
     * @ORM\Column(name="obazannosti", type="string", length=255, nullable=true)
     */
    private $obazannosti;

    /**
     * @var Compania
     *
     * @ORM\ManyToOne(targetEntity="Compania")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compania_id", referencedColumnName="id")
     * })
     */
    private $compania;
    /**
     * @var string $zarplata
     *
     * @ORM\Column(name="zarplata", type="string", length=255, nullable=true)
     */
    private $zarplata;


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
     * Set opisanie
     *
     * @param string $opisanie
     */
    public function setOpisanie($opisanie)
    {
        $this->opisanie = $opisanie;
    }

    /**
     * Get opisanie
     *
     * @return string 
     */
    public function getOpisanie()
    {
        return $this->opisanie;
    }

    /**
     * Set navikOpit
     *
     * @param string $navikOpit
     */
    public function setNavikOpit($navikOpit)
    {
        $this->navikOpit = $navikOpit;
    }

    /**
     * Get navikOpit
     *
     * @return string 
     */
    public function getNavikOpit()
    {
        return $this->navikOpit;
    }

    /**
     * Set timeRazmech
     *
     * @param datetime $timeRazmech
     */
    public function setTimeRazmech($timeRazmech)
    {
        $this->timeRazmech = $timeRazmech;
    }

    /**
     * Get timeRazmech
     *
     * @return datetime 
     */
    public function getTimeRazmech()
    {
        return $this->timeRazmech;
    }

    /**
     * Set tipRab
     *
     * @param string $tipRab
     */
    public function setTipRab($tipRab)
    {
        $this->tipRab = $tipRab;
    }

    /**
     * Get zarplata
     *
     * @return string 
     */
    public function getZarplata()
    {
        return $this->zarplata;
    }
    /**
     * Set zarplata
     *
     * @param string $zarplata
     */
    public function setZarplata($zarplata)
    {
        $this->zarplata = $zarplata;
    }

    /**
     * Get tipRab
     *
     * @return string
     */
    public function getTipRab()
    {
        return $this->tipRab;
    }

    /**
     * Set obazannosti
     *
     * @param string $obazannosti
     */
    public function setObazannosti($obazannosti)
    {
        $this->obazannosti = $obazannosti;
    }

    /**
     * Get obazannosti
     *
     * @return string 
     */
    public function getObazannosti()
    {
        return $this->obazannosti;
    }

    /**
     * Set compania
     *
     * @param Acme\UserBundle\Entity\Compania $compania
     */
    public function setCompania(\Acme\UserBundle\Entity\Compania $compania)
    {
        $this->compania = $compania;
    }

    /**
     * Get compania
     *
     * @return Acme\UserBundle\Entity\Compania 
     */
    public function getCompania()
    {
        return $this->compania;
    }
}