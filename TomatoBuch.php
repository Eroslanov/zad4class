<?php
require "Tomato.php";

class TomatoBuch
{
    public array $tomatoes = [];

    public function __construct(int $count)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->tomatoes[] = new Tomato($i + 1);
        }
    }

    public function growAll(): void
    {
        foreach ($this->tomatoes as $tomato) {
            $tomato->grow();
        }
    }

    public function allAreRipe(): bool
    {
        foreach ($this->tomatoes as $tomato) {
            if (!$tomato->isRipe()) {
                return false;
            }
        }
        return true;
    }

    public function giveAwayAll(): array
    {
        return $this->tomatoes = [];
    }
}