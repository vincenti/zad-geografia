<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Lifetime;

class LoadLifetime implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/lifetime.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $lifetime = new Lifetime();
            $lifetime->setName($item['name']);
            $lifetime->setMezczyzni($item['mezczyzni']);
            $lifetime->setKobiety($item['kobiety']);
            $manager->persist($lifetime);
        }

        $manager->flush();
    }
}