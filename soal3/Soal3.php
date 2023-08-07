<?php
interface RaceInterface
{
    public function Genki();
}

class Human implements RaceInterface
{
    public function Genki()
    {
        return 10;
    }
}

class Namekian implements RaceInterface
{
    public function Genki()
    {
        return rand(1, 10) * 10 + 100;
    }
}

class Saiyan implements RaceInterface
{
    private $powerType;

    public function __construct($powerType = 'NormalPower')
    {
        $this->powerType = $powerType;
    }

    public function Genki()
    {
        if ($this->powerType === 'SaiyanPower') {
            return rand(1, 10) * 10 + 500;
        } else {
            return rand(1, 10) * 10 + 100;
        }
    }
}

$gohan = new Saiyan('NormalPower');
echo 'Gohan Genki is : ' . $gohan->Genki() . ' (Gohan is Saiyan race)';
echo '<br>';

$picollo = new Namekian();
echo 'Picollo Genki is : ' . $picollo->Genki() . ' (Picollo is Namekian race)';
echo '<br>';

$krilin = new Human();
echo 'Krillin Genki is : ' . $krilin->Genki() . ' (Krillin is Human race)';
echo '<br>';

$vegeta = new Saiyan('SaiyanPower');
echo 'Vegeta Genki is : ' . $vegeta->Genki() . ' (Vegeta is Saiyan race)';
