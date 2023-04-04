<?php
class Bola
{
    public $jarijari;

    function __construct($r)
    {
        $this->jarijari = $r;
    }

    function hitungVolume()
    {
        return (4/3) * pi() * pow($this->jarijari, 3);
    }

    function hitungLuasSisi()
    {
        return 4 * pi() * pow($this->jarijari, 2);
    }
}

$bola = new Bola(12);
echo "Volume bola: " . $bola->hitungVolume() . "<br>";
echo "Luas Sisi bola" . $bola->hitungLuasSisi();