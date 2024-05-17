<?php


class Gardener
{
    public string $name;
    private TomatoBuch $plant;

    public function __construct(string $name, TomatoBuch $plant)
    {
        $this->name = $name;
        $this->plant = $plant;
    }

    public function  work(): void
    {
        if (!$this->plant->allAreRipe()) {
            $this->plant->growAll();
        }
    }

    public function harvest(): void
    {
        if ($this->plant->allAreRipe()) {
            $this->plant->giveAwayAll();
            print " {$this->name} cобирает урожай " . PHP_EOL;
        } else {
            print "Садовник {$this->name} томаты не все созреты!" . PHP_EOL;
        }
    }

    public function KnowledgeBase(): void
    {
        print "Справка по садоводству:\n";
    }
}
