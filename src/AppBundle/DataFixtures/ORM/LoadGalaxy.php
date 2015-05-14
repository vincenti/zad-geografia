<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Galaxy;

class LoadGalaxy implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/galaxy.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $galaxy = new Galaxy();
            $galaxy->setName($item['name']);
            $galaxy->setStars($item['stars']);
            $manager->persist($galaxy);
        }

        $manager->flush();
    }
} 
