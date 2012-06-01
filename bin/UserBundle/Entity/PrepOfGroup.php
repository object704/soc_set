<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\PrepOfGroup
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
     * @param Acme\UserBundle\Entity\Predmet $predmet
     */
    public function setPredmet(\Acme\UserBundle\Entity\Predmet $predmet)
    {
        $this->predmet = $predmet;
    }

    /**
     * Get predmet
     *
     * @return Acme\UserBundle\Entity\Predmet 
     */
    public function getPredmet()
    {
        return $this->predmet;
    }

    /**
     * Set user
     *
     * @param Acme\UserBundle\Entity\User $user
     */
    public function setUser(\Acme\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Acme\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set grouppa
     *
     * @param Acme\UserBundle\Entity\Grouppa $grouppa
     */
    public function setGrouppa(\Acme\UserBundle\Entity\Grouppa $grouppa)
    {
        $this->grouppa = $grouppa;
    }

    /**
     * Get grouppa
     *
     * @return Acme\UserBundle\Entity\Grouppa 
     */
    public function getGrouppa()
    {
        return $this->grouppa;
    }
}