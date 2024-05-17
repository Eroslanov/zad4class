<?php

class Tomato
{
    private const NOTHING = 0;
    private const FLOWER = 1;
    private const GREEN_TOMATO = 2;
    private const RED_TOMATO = 3;


    private int $index;
    private int $state;

    public function __construct(int $index)
    {
        $this->index = $index;
        $this->state = self::NOTHING;
    }

    public function grow(): void
    {
        if ($this->state < self::RED_TOMATO) {
            $this->state++;
        }
    }

    public function isRipe(): bool
    {
        return $this->state == self::RED_TOMATO;
    }
}