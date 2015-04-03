<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Population
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Population
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
     * @ORM\Column(name="continent", type="string", length=255)
     */
    private $continent;

     /**
     * @var bigint
     *
     * @ORM\Column(name="population", type="bigint")
     */
    private $population;


    /**
     * Get id
     *
     * @return bigint 
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
     * @param bigint $population
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
     * @return bigint 
     */
    public function getPopulation()
    {
        return $this->population;
    }
}
