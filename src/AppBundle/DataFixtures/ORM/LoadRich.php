<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Rich;

class LoadRich implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/rich.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $rich = new Rich();
            $rich->setName($item['name']);
            $rich->setArea($item['value']);
            $manager->persist($rich);
        }

        $manager->flush();
    }
}