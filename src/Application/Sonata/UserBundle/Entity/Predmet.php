<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Sonata\UserBundle\Entity\Predmet
 *
 * @ORM\Table(name="predmet")
 * @ORM\Entity
 */
class Predmet
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
     * @var string $kolChas
     *
     * @ORM\Column(name="kol_chas", type="string", length=255, nullable=true)
     */
    private $kolChas;



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
     * Set kolChas
     *
     * @param string $kolChas
     */
    public function setKolChas($kolChas)
    {
        $this->kolChas = $kolChas;
    }

    /**
     * Get kolChas
     *
     * @return string 
     */
    public function getKolChas()
    {
        return $this->kolChas;
    }
}