<?php

include 'Gardener.php';
include 'TomatoBuch.php';


$bush = new TomatoBuch(5);
$gardener = new Gardener("ДядяВаня", $bush);

$gardener->KnowledgeBase();

$gardener->harvest();

while (!$bush->allAreRipe()) {
    $gardener->work();
    $gardener->harvest();
}