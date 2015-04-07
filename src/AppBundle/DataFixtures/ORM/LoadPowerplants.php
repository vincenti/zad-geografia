<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Powerplant;

class LoadPowerplant implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/powerplants.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $powerplant = new Powerplant();
            $powerplant->setLocation($item['location']);
            $powerplant->setPower($item['power']);
            $manager->persist($powerplant);
        }

        $manager->flush();
    }
}