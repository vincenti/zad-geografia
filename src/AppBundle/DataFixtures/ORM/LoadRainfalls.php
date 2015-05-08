<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Rainfall;

class LoadRainfalls implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/rainfalls.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $rainfall = new Rainfall();
            $rainfall->setName($item['city']);
            $rainfall->setRain($item['rain']);
            $manager->persist($rainfall);
        }

        $manager->flush();
    }
}