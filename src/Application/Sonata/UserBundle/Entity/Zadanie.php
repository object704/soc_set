<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Sonata\UserBundle\Entity\Zadanie
 *
 * @ORM\Table(name="zadanie")
 * @ORM\Entity
 */
class Zadanie
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
     * @var string $text
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var PrepOfGroup
     *
     * @ORM\ManyToOne(targetEntity="PrepOfGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prep_of_group_id_prep_of_group", referencedColumnName="id_prep_of_group")
     * })
     */
    private $prepOfGroupPrepOfGroup;



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
     * Set text
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set prepOfGroupPrepOfGroup
     *
     * @param Application\Sonata\UserBundle\Entity\PrepOfGroup $prepOfGroupPrepOfGroup
     */
    public function setPrepOfGroupPrepOfGroup(\Application\Sonata\UserBundle\Entity\PrepOfGroup $prepOfGroupPrepOfGroup)
    {
        $this->prepOfGroupPrepOfGroup = $prepOfGroupPrepOfGroup;
    }

    /**
     * Get prepOfGroupPrepOfGroup
     *
     * @return Application\Sonata\UserBundle\Entity\PrepOfGroup
     */
    public function getPrepOfGroupPrepOfGroup()
    {
        return $this->prepOfGroupPrepOfGroup;
    }
}