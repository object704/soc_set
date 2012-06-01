<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Dialog
 *
 * @ORM\Table(name="dialog")
 * @ORM\Entity
 */
class Dialog
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
     * @var string $idUserWith
     *
     * @ORM\Column(name="id_user_with", type="string", length=45, nullable=true)
     */
    private $idUserWith;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUserWith
     *
     * @param string $idUserWith
     */
    public function setIdUserWith($idUserWith)
    {
        $this->idUserWith = $idUserWith;
    }

    /**
     * Get idUserWith
     *
     * @return string 
     */
    public function getIdUserWith()
    {
        return $this->idUserWith;
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
}