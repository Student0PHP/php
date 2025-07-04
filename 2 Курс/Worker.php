<?php

namespace App;

abstract class Worker implements WorkerInterface
{
    private int $age;

    private string $name;
    private array $hours;

    private string $position;
    private int $expirience;

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getHours(): array
    {
        return $this->hours;
    }

    public function setHours(array $hours): void
    {
        $this->hours = $hours;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getExpirience(): int
    {
        return $this->expirience;
    }

    public function setExpirience(int $expirience): void
    {
        $this->expirience = $expirience;
    }

/*
    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }
*\




/*
    public function setPosition($value)
    {
        $this->position = $value;
    }
    public function getPosition(): string
    {
        return $this->position;
    }
*/
    /**
     * @param int $age
     * @param string $name
     * @param array $hours
     */
    public function __construct(string $name,int $age, array $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }
}