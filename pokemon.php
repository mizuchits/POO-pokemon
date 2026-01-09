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
        $this->ko = $ko;
    }

    public function pokedex()
    {
        echo $this->name .'<br>';
        echo $this->hp . '<br>';
        echo $this->attack . '<br>';
        echo $this->type . '<br>';
    }

    public function getHit($damage)
    {
        $this->attack = $damage;
        $this->hp -= $damage;
        echo $this->name . ' a pris ' . $damage . ' points de dégat<br> '.$this->hp.' hp restant <br>';

        if ($this->hp <= 0) {
            echo 'ce pokémon est hors de combat <br>';
            $this->ko = true;
        }
    }

    public function hit($cible)
    {
        $damage = 0;
        $maxDamage = $this->attack += 5;
        $minDamage = $this->attack -= 5;
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
        while ($pokemon1->hp > 0 or $pokemon2->hp > 0) {
            $whoHit = rand(1, 2);
            if ($whoHit == 1) {
                $pokemon1->hit($pokemon2);
            } else if ($whoHit == 2) {
                $pokemon2->hit($pokemon1);
            }
        }
    }
}