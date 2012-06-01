<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Grouppa
 *
 * @ORM\Table(name="Grouppa")
 * @ORM\Entity
 */
class Grouppa
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
     * @var string $grName
     *
     * @ORM\Column(name="gr_name", type="string", length=255, nullable=false)
     */
    private $grName;

    /**
     * @var string $kurs
     *
     * @ORM\Column(name="kurs", type="string", length=255, nullable=false)
     */
    private $kurs;

    /**
     * @var string $semestr
     *
     * @ORM\Column(name="semestr", type="string", length=255, nullable=false)
     */
    private $semestr;

    /**
     * @var Spec
     *
     * @ORM\ManyToOne(targetEntity="Spec")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spec_id", referencedColumnName="id")
     * })
     */
    private $spec;



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
     * Set grName
     *
     * @param string $grName
     */
    public function setGrName($grName)
    {
        $this->grName = $grName;
    }

    /**
     * Get grName
     *
     * @return string 
     */
    public function getGrName()
    {
        return $this->grName;
    }

    /**
     * Set kurs
     *
     * @param string $kurs
     */
    public function setKurs($kurs)
    {
        $this->kurs = $kurs;
    }

    /**
     * Get kurs
     *
     * @return string 
     */
    public function getKurs()
    {
        return $this->kurs;
    }

    /**
     * Set semestr
     *
     * @param string $semestr
     */
    public function setSemestr($semestr)
    {
        $this->semestr = $semestr;
    }

    /**
     * Get semestr
     *
     * @return string 
     */
    public function getSemestr()
    {
        return $this->semestr;
    }

    /**
     * Set spec
     *
     * @param Acme\UserBundle\Entity\Spec $spec
     */
    public function setSpec(\Acme\UserBundle\Entity\Spec $spec)
    {
        $this->spec = $spec;
    }

    /**
     * Get spec
     *
     * @return Acme\UserBundle\Entity\Spec 
     */
    public function getSpec()
    {
        return $this->spec;
    }
    function __toString()
    {
        return $this->getGrName();
    }
}