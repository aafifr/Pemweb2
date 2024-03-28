<?php
class Hero1
{
    // atribut
    public $name = 'Alucard';
    public $hp = 3200;
    public $damage = 240;

    // method
    public function getDetail()
    {
        echo "<br> Name: " . $this->name;
        echo "<br> Healt Point: " . $this->hp;
        echo "<br> Damage: " . $this->damage;
        echo "<br> ===============================";
    }
}

// instansiasi object hero
$hero1 = new Hero1();
$hero1->getDetail();

$hero2 = new Hero1();
$hero2->name = 'Baxia';
$hero2->hp = 5600;
$hero2->damage = 70;
$hero2->getDetail();
