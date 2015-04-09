<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Waterfall;

class LoadWaterfalls implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/waterfalls.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $waterfall = new Waterfall();
            $waterfall->setName($item['name']);
            $waterfall->setNumber_of_drops($item['number_of_drops']);
            $manager->persist($waterfall);
        }

        $manager->flush();
    }
}