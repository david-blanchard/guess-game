<?php

namespace Guess\Domain\Game;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Guess\Domain\League\League;
use Guess\Domain\Team\Team;

class Game
{
    private int $id;
    private string $score;
    private Team $homeTeam;
    private Team $awayTeam;
    private DateTimeInterface $createdAt;
    private ArrayCollection $guesses;
    private League $league;
    private DateTimeInterface $gameTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getScore(): string
    {
        return $this->score;
    }

    public function setScore(string $score): void
    {
        $this->score = $score;
    }

    public function getHomeTeam(): Team
    {
        return $this->homeTeam;
    }

    public function setHomeTeam(Team $homeTeam): void
    {
        $this->homeTeam = $homeTeam;
    }

    public function getAwayTeam(): Team
    {
        return $this->awayTeam;
    }

    public function setAwayTeam(Team $awayTeam): void
    {
        $this->awayTeam = $awayTeam;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getGuesses(): ArrayCollection
    {
        return $this->guesses;
    }

    public function setGuesses(ArrayCollection $guesses): void
    {
        $this->guesses = $guesses;
    }

    public function getLeague(): League
    {
        return $this->league;
    }

    public function setLeague(League $league): void
    {
        $this->league = $league;
    }

    public function getGameTime(): DateTimeInterface
    {
        return $this->gameTime;
    }

    public function setGameTime(DateTimeInterface $gameTime): void
    {
        $this->gameTime = $gameTime;
    }


}