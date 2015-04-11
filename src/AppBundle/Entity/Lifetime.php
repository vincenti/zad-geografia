<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lifetime
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Lifetime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="mezczyzni", type="integer")
     */
    private $mezczyzni;

    /**
     * @var integer
     *
     * @ORM\Column(name="kobiety", type="integer")
     */
    private $kobiety;


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
     * @return Lifetime
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set mezczyzni
     *
     * @param integer $mezczyzni
     * @return Lifetime
     */
    public function setMezczyzni($mezczyzni)
    {
        $this->mezczyzni = $mezczyzni;

        return $this;
    }

    /**
     * Get mezczyzni
     *
     * @return integer 
     */
    public function getMezczyzni()
    {
        return $this->mezczyzni;
    }

    /**
     * Set kobiety
     *
     * @param integer $kobiety
     * @return Lifetime
     */
    public function setKobiety($kobiety)
    {
        $this->kobiety = $kobiety;

        return $this;
    }

    /**
     * Get kobiety
     *
     * @return integer 
     */
    public function getKobiety()
    {
        return $this->kobiety;
    }
}
