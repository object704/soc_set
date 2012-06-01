<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Acme\UserBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected  $id;

    /**
     * @var string $firstName
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

    /**
     * @var string $lastName
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string $obrazpvanie
     *
     * @ORM\Column(name="obrazpvanie", type="string", length=255, nullable=true)
     */
    private $obrazpvanie;

    /**
     * @var string $webSait
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $webSait;

    /**
     * @var string $dolzn
     *
     * @ORM\Column(name="dolzn", type="string", length=255, nullable=true)
     */
    private $dolzn;

    /**
     * @var string $put
     *
     * @ORM\Column(name="put", type="string", length=255, nullable=true)
     */
    private $put;

    /**
     * @var string $avatar
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var boolean $status
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    public $status;

    /**
     * @var Grouppa
     *
     * @ORM\ManyToOne(targetEntity="Grouppa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

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
     * @var Spec
     *
     * @ORM\ManyToOne(targetEntity="Spec")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Spec_id", referencedColumnName="id")
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
     * Sets the user's role.
     *
     * @param string $value The role
     */
    public function setRole( $value )
    {
        $this->role = $value;
        if($value=='ROLE_STUDENT')
        {    $this->addRole($value);
        }
        if($value=='ROLE_PREP')
        {    $this->addRole($value);
        }
        if($value=='ROLE_RAB')
        {    $this->addRole($value);
        }
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Sets the username.
     *
     * @param string $username
     */

    public function setUsername($username)
    {
        parent::setUsername($username);
        $this->setEmail($username);
    }
    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set obrazpvanie
     *
     * @param string $obrazpvanie
     */
    public function setObrazpvanie($obrazpvanie)
    {
        $this->obrazpvanie = $obrazpvanie;
    }

    /**
     * Get obrazpvanie
     *
     * @return string 
     */
    public function getObrazpvanie()
    {
        return $this->obrazpvanie;
    }

    /**
     * Set webSait
     *
     * @param string $webSait
     */
    public function setWebSait($webSait)
    {
        $this->webSait = $webSait;
    }

    /**
     * Get webSait
     *
     * @return string 
     */
    public function getWebSait()
    {
        return $this->webSait;
    }

    /**
     * Set dolzn
     *
     * @param string $dolzn
     */
    public function setDolzn($dolzn)
    {
        $this->dolzn = $dolzn;
    }

    /**
     * Get dolzn
     *
     * @return string 
     */
    public function getDolzn()
    {
        return $this->dolzn;
    }

    /**
     * Set put
     *
     * @param string $put
     */
    public function setPut($put)
    {
        $this->put = $put;
    }

    /**
     * Get put
     *
     * @return string 
     */
    public function getPut()
    {
        return $this->put;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set group
     *
     * @param Acme\UserBundle\Entity\Grouppa $group
     */
    public function setGroup(\Acme\UserBundle\Entity\Grouppa $group)
    {
        $this->group = $group;
    }

    /**
     * Get group
     *
     * @return Acme\UserBundle\Entity\Grouppa 
     */
    public function getGroup()
    {
        return $this->group;
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

}