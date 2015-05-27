<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Unemployment;

class LoadUnemployment implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/unemployment.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $unemployment = new Unemployment();
            $unemployment->setName($item['name']);
            $unemployment->setPercent($item['percent']);
            $manager->persist($unemployment);
        }

        $manager->flush();
    }
}