<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Cave;

class LoadCaves implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/caves.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $cave = new Cave();
            $cave->setName($item['name']);
            $cave->setExample($item['example']);
            $manager->persist($cave);
        }

        $manager->flush();
    }
}