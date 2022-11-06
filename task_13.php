<?php
class Warrior
{
    public $health;

    public $stamina;

    public function attack()
    {
        echo 'Воин атакует';
    }
    public function heal()
    {
        echo 'Здоровье война увеличено';
    }
    public function rest()
    {
        echo 'Воин присел восстановить силы';
    }
}

$boost = rand(0, 10);

$warrior = new Warrior();

if ($boost >= 5) {
    $warrior->attack();
} else {
    $warrior->rest();
}