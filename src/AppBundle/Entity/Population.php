<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Population
 */
class Population
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $continent;

    /**
     * @var integer
     */
    private $population;


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
     * Set continent
     *
     * @param string $continent
     * @return Population
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * Get continent
     *
     * @return string 
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Set population
     *
     * @param integer $population
     * @return Population
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get population
     *
     * @return integer 
     */
    public function getPopulation()
    {
        return $this->population;
    }
}
