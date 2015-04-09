<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flora
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Flora
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
    private $tree;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer")
     */
    private $height;


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
     * Set tree
     *
     * @param string $tree
     * @return Flora
     */
    public function setTree($tree)
    {
        $this->tree = $tree;

        return $this;
    }

    /**
     * Get tree
     *
     * @return string 
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Flora
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }
}
