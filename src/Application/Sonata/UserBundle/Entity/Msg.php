<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\Sonata\UserBundle\Entity\Msg
 *
 * @ORM\Table(name="msg")
 * @ORM\Entity
 */
class Msg
{
    /**
     * @var integer $msg
     *
     * @ORM\Column(name="msg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msg;

    /**
     * @var integer $idFrom
     *
     * @ORM\Column(name="id_from", type="integer", nullable=true)
     */
    private $idFrom;

    /**
     * @var integer $idTo
     *
     * @ORM\Column(name="id_to", type="integer", nullable=true)
     */
    private $idTo;

    /**
     * @var string $tema
     *
     * @ORM\Column(name="tema", type="string", length=45, nullable=true)
     */
    private $tema;

    /**
     * @var text $letter
     *
     * @ORM\Column(name="letter", type="text", nullable=true)
     */
    private $letter;

    /**
     * @var datetime $time
     *
     * @ORM\Column(name="time", type="datetime", nullable=true)
     */
    private $time;

    /**
     * @var string $reader
     *
     * @ORM\Column(name="reader", type="string", length=45, nullable=true)
     */
    private $reader;



    /**
     * Get msg
     *
     * @return integer 
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Set idFrom
     *
     * @param integer $idFrom
     */
    public function setIdFrom($idFrom)
    {
        $this->idFrom = $idFrom;
    }

    /**
     * Get idFrom
     *
     * @return integer 
     */
    public function getIdFrom()
    {
        return $this->idFrom;
    }

    /**
     * Set idTo
     *
     * @param integer $idTo
     */
    public function setIdTo($idTo)
    {
        $this->idTo = $idTo;
    }

    /**
     * Get idTo
     *
     * @return integer 
     */
    public function getIdTo()
    {
        return $this->idTo;
    }

    /**
     * Set tema
     *
     * @param string $tema
     */
    public function setTema($tema)
    {
        $this->tema = $tema;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set letter
     *
     * @param text $letter
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;
    }

    /**
     * Get letter
     *
     * @return text 
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * Set time
     *
     * @param datetime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * Get time
     *
     * @return datetime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set reader
     *
     * @param string $reader
     */
    public function setReader($reader)
    {
        $this->reader = $reader;
    }

    /**
     * Get reader
     *
     * @return string 
     */
    public function getReader()
    {
        return $this->reader;
    }
}