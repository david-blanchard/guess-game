<?php

namespace Guess\Domain\League;

class League
{
    private int $id;
    private string $name;
    private string $slug;
    private string $logo;
    private int $leagueApiId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): League
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): League
    {
        $this->name = $name;
        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): League
    {
        $this->slug = $slug;
        return $this;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): League
    {
        $this->logo = $logo;
        return $this;
    }

    public function getLeagueApiId(): int
    {
        return $this->leagueApiId;
    }

    public function setLeagueApiId(int $leagueApiId): League
    {
        $this->leagueApiId = $leagueApiId;
        return $this;
    }


}