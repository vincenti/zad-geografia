<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Gemstone;

class LoadGemstone implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/gemstone.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $gemstone = new Gemstone();
            $gemstone->setName($item['name']);
            $gemstone->setWeight_of_carats($item['weight_of_carats']);
            $manager->persist($gemstone);
        }

        $manager->flush();
    }
}