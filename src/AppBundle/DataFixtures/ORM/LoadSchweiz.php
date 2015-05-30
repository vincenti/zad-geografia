<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Schweiz;

class LoadSchweiz implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/schweiz.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $schweiz = new Schweiz();
            $schweiz->setName($item['name']);
            $schweiz->setPercent($item['percent']);
            $manager->persist($schweiz);
        }

        $manager->flush();
    }
}