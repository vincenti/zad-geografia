<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gemstone
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Gemstone
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
     * @ORM\Column(name="weight_of_carats", type="integer")
     */
    private $weight_of_carats;


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
     * @return Gemstone
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
     * Set weight_of_carats
     *
     * @param integer $weight_of_carats
     * @return Gemstone
     */
    public function setCarats($weight_of_carats)
    {
        $this->weight_of_carats = $weight_of_carats;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer 
     */
    public function getCarats()
    {
        return $this->weight_of_carats;
    }
}
