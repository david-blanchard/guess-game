<?php

namespace Guess\Domain\Guess;

use DateTimeInterface;
use Guess\Domain\Game\Game;
use Guess\Domain\Player\Player;

class Guess
{
    private int $id;
    private string $guess;
    private DateTimeInterface $createdAt;
    private Game $game;
    private Player $player;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getGuess(): string
    {
        return $this->guess;
    }

    public function setGuess(string $guess): void
    {
        $this->guess = $guess;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function setGame(Game $game): void
    {
        $this->game = $game;
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function setPlayer(Player $player): void
    {
        $this->player = $player;
    }

}