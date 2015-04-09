<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waterfall
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Waterfall
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
     * @ORM\Column(name="$number_of_drops", type="integer")
     */
    private $number_of_drops;


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
     * @return Waterfall
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
     * Set length
     *
     * @param integer $number_of_drops
     * @return Waterfall
     */
    public function setNumber_of_drops($number_of_drops)
    {
        $this->number_of_drops = $number_of_drops;

        return $this;
    }

    /**
     * Get number_of_drops
     *
     * @return integer 
     */
    public function getNumber_of_drops()
    {
        return $this->number_of_drops;
    }
}
