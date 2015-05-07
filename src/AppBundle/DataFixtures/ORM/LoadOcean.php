<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Ocean;

class LoadOcean implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/ocean.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $ocean = new Ocean();
            $ocean->setName($item['name']);
            $ocean->setDepth($item['depth']);
            $manager->persist($ocean);
        }

        $manager->flush();
    }
}