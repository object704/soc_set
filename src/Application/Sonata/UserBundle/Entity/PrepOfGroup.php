<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Sonata\UserBundle\Entity\PrepOfGroup
 *
 * @ORM\Table(name="prep_of_group")
 * @ORM\Entity
 */
class PrepOfGroup
{
    /**
     * @var integer $idPrepOfGroup
     *
     * @ORM\Column(name="id_prep_of_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPrepOfGroup;

    /**
     * @var Predmet
     *
     * @ORM\ManyToOne(targetEntity="Predmet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predmet_id", referencedColumnName="id")
     * })
     */
    private $predmet;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var Grouppa
     *
     * @ORM\ManyToOne(targetEntity="Grouppa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Grouppa_id", referencedColumnName="id")
     * })
     */
    private $grouppa;



    /**
     * Get idPrepOfGroup
     *
     * @return integer 
     */
    public function getIdPrepOfGroup()
    {
        return $this->idPrepOfGroup;
    }

    /**
     * Set predmet
     *
     * @param Application\Sonata\UserBundle\Entity\Predmet $predmet
     */
    public function setPredmet(\Application\Sonata\UserBundle\Entity\Predmet $predmet)
    {
        $this->predmet = $predmet;
    }

    /**
     * Get predmet
     *
     * @return Application\Sonata\UserBundle\Entity\Predmet
     */
    public function getPredmet()
    {
        return $this->predmet;
    }

    /**
     * Set user
     *
     * @param Application\Sonata\UserBundle\Entity\User $user
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Application\Sonata\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set grouppa
     *
     * @param Application\Sonata\UserBundle\Entity\Grouppa $grouppa
     */
    public function setGrouppa(\Application\Sonata\UserBundle\Entity\Grouppa $grouppa)
    {
        $this->grouppa = $grouppa;
    }

    /**
     * Get grouppa
     *
     * @return Application\Sonata\UserBundle\Entity\Grouppa
     */
    public function getGrouppa()
    {
        return $this->grouppa;
    }
}