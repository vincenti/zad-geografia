<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rainfall
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Rainfall
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
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="rain", type="integer")
     */
    private $rain;


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
     * Set city
     *
     * @param string $city
     * @return Rainfall
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set rain
     *
     * @param integer $rain
     * @return Rainfall
     */
    public function setRain($rain)
    {
        $this->rain = $rain;

        return $this;
    }

    /**
     * Get rain
     *
     * @return integer 
     */
    public function getRain()
    {
        return $this->rain;
    }
}
