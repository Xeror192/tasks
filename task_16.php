<?php

class Warrior {
    public function getBattleCry()
    {
        return "Oooooh";
    }
}

$warrior = new Warrior();

$result = $warrior->getBattleCry();