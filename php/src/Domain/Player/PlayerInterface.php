<?php

namespace Guess\Domain\Player;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Guess\Domain\Game\Game;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
interface PlayerInterface extends UserInterface, PasswordAuthenticatedUserInterface
{
    public function getId(): int;

    public function setId(int $id): self;

    public function getUsername(): string;

    public function setUsername(string $username): self;

    public function getPassword(): string;

    public function setPassword(string $password): self;

    public function getEmail(): string;

    public function setEmail(string $email): self;

    public function getCreatedAt(): DateTimeInterface;

    public function setCreatedAt(DateTimeInterface $createdAt): self;

    public function getPoint(): int;

    public function setPoint(int $point): self;

    public function getAvatar(): int;

    public function setAvatar(int $avatar): self;

    public function isActive(): bool;

    public function setIsActive(bool $isActive): self;

    public function getGuesses(): ArrayCollection;

    public function setGuesses(ArrayCollection $guesses): self;

    public function getRoles(): array;

    public function getSalt(): string;

    public function eraseCredentials(): void;

    public function makeGuesses(Game $game, int $homeTeamGuess, int $awayTeamGuess): void;

    public function pointUp(): void;
}