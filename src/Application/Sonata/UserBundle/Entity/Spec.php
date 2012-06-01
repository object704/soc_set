<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Sonata\UserBundle\Entity\Spec
 *
 * @ORM\Table(name="Spec")
 * @ORM\Entity
 */
class Spec
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string $longName
     *
     * @ORM\Column(name="long_name", type="string", length=255, nullable=false)
     */
    private $longName;

    /**
     * @var string $infoSpec
     *
     * @ORM\Column(name="info_spec", type="string", length=255, nullable=false)
     */
    private $infoSpec;

    /**
     * @var string $sroc
     *
     * @ORM\Column(name="sroc", type="string", length=255, nullable=false)
     */
    private $sroc;

    /**
     * @var string $vipuskKaf
     *
     * @ORM\Column(name="vipusk_kaf", type="string", length=255, nullable=false)
     */
    private $vipuskKaf;



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
     * Set longName
     *
     * @param string $longName
     */
    public function setLongName($longName)
    {
        $this->longName = $longName;
    }

    /**
     * Get longName
     *
     * @return string 
     */
    public function getLongName()
    {
        return $this->longName;
    }

    /**
     * Set infoSpec
     *
     * @param string $infoSpec
     */
    public function setInfoSpec($infoSpec)
    {
        $this->infoSpec = $infoSpec;
    }

    /**
     * Get infoSpec
     *
     * @return string 
     */
    public function getInfoSpec()
    {
        return $this->infoSpec;
    }

    /**
     * Set sroc
     *
     * @param string $sroc
     */
    public function setSroc($sroc)
    {
        $this->sroc = $sroc;
    }

    /**
     * Get sroc
     *
     * @return string 
     */
    public function getSroc()
    {
        return $this->sroc;
    }

    /**
     * Set vipuskKaf
     *
     * @param string $vipuskKaf
     */
    public function setVipuskKaf($vipuskKaf)
    {
        $this->vipuskKaf = $vipuskKaf;
    }

    /**
     * Get vipuskKaf
     *
     * @return string 
     */
    public function getVipuskKaf()
    {
        return $this->vipuskKaf;
    }
    function __toString()
    {
        return $this->getName();
    }
}