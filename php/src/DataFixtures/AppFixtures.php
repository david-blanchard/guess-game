<?php

namespace Guess\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Guess\Domain\League\League;
use Guess\Domain\Player\Player;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
       $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $league = (new League())->setId(1);
        $league->setName('Premier League');
        $league->setLeagueNameSlugged('premier-league');
        $league->setLeagueApiId(123);
        $league->setLogo('premier-league-logo.png');

        $manager->persist($league);

        $player = new Player();
        $player->setUsername('mrdemo');
        $player->setEmail('mrdemo@example.com');
        $player->setPassword($this->encoder->hashPassword($player, '123123'));

        $manager->persist($player);

        $manager->flush();
    }
}
