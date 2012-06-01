<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Sonata\UserBundle\Entity\Dialog
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
     * @var integer $id_user
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    public $idUser;

    /**
     * @var integer $id_user_with
     *
     * @ORM\Column(name="id_user_with", type="integer", nullable=true)
     */
    public $idUserWith;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }



}