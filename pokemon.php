<?php

class pokemon
{

    private $name;
    private $hpMax;
    private $hp;
    private $attack;
    private $type;
    private $ko;

    public function __construct($name, $hpMax, $attack, $type, $ko)
    {
        $this->name = $name;
        $this->hpMax = $hpMax;
        $this->hp = $hpMax;
        $this->attack = $attack;
        $this->type = $type;
        $this->ko = false;
    }

    public function pokedex()
    {
        echo $this->hp . '<br>';
        echo $this->attack . '<br>';
        echo $this->type . '<br>';
    }

    public function getHit($damage)
    {
        $this->attack = $damage;
        $this->hp -= $damage;
        echo $this->name . ' a pris ' . $damage . ' points de dégat<br>';

        if ($this->hp <= 0) {
            echo 'ce pokémon est hors de combat <br>';
            $this->ko = true;
        }
    }

    public function hit($cible)
    {
        $maxDamage = $this->attack + 5;
        $minDamage = $this->attack - 5;
        $damage = rand($maxDamage, $minDamage);
        if ($damage <= 0) {
            $damage = 0;
            echo 'l\'attaque de ' . $this->name . ' est innéficace';
        }
        $cible->getHit($damage);
    }

    public function arene($pokemon1, $pokemon2)
    {
        $pokemon1->pokedex();
        $pokemon2->pokedex();
        while ($pokemon1->ko != true or $pokemon2->ko != true) {
            $pokemon1->hit($pokemon2);
            echo $pokemon2->hp . ' hp restant a ' . $pokemon2->name . '<br>';
            if ($pokemon1->ko = true) {
                echo $pokemon2->name . ' remporte le combat';
            } elseif ($pokemon2->ko = true) {
                echo $pokemon1->name . ' remporte le combat';
            }

            $pokemon2->hit($pokemon1);
            echo $pokemon1->hp . ' hp restant a ' . $pokemon1->name . '<br>';
            if ($pokemon1->ko = true) {
                echo $pokemon2->name . ' remporte le combat';
            } elseif ($pokemon2->ko = true) {
                echo $pokemon1->name . ' remporte le combat';
            }
        }
    }
}