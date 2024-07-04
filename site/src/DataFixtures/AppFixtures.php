<?php

namespace Guess\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Guess\Domain\League\League;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $league = new League();
        $league->setId(1)
        ->setName('Premier Leaque')
        ->setSlug('premier-leaque')
        ->setLeagueApiId(123)
        ->setLogo('logo.png');

        $manager->persist($league);
        $manager->flush();
    }
}
