<?php

namespace Guess\Domain\Player;

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

class Player implements UserInterface
{
    private int $id;
    private string $username;
    private string $password;
    private string $email;
    private DateTimeInterface $createdAt;
    private int $point;
    private int $avatar;
    private bool $isActive;
    private ArrayCollection $guesses;

    public function __construct()
    {
        $this->avatar = 1;
        $this->point = 0;
        $this->createdAt = new DateTimeImmutable();
        $this->isActive = true;
    }

    public function getGuesses(): ArrayCollection
    {
        return $this->guesses;
    }

    public function setGuesses(ArrayCollection $guesses): void
    {
        $this->guesses = $guesses;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getAvatar(): int
    {
        return $this->avatar;
    }

    public function setAvatar(int $avatar): void
    {
        $this->avatar = $avatar;
    }

    public function getPoint(): int
    {
        return $this->point;
    }

    public function setPoint(int $point): void
    {
        $this->point = $point;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function eraseCredentials(): void
    {
        // TODO: Implement eraseCredentials() method.
        return;
    }

    public function getUserIdentifier(): string
    {
        // TODO: Implement getUserIdentifier() method.
        return $this->username;
    }


}