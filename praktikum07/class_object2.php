<?php
class Buah
{
    public $namaBuah;
    public $warnaKulit;
    public $rasa;
    public $aroma;

    function __construct($nama, $warna, $taste, $bau)
    {
        $this->namaBuah = $nama;
        $this->warnaKulit = $warna;
        $this->rasa = $taste;
        $this->aroma = $bau;
    }

    function tumbuh()
    {
        return "Buah $this->namaBuah itu tumbuh !";
    }
    
    function busuk()
    {
        return "Buah $this->namaBuah itu busuk !";
    }
}
$objek = new Buah("Sirsak", "Merah", "Manis", "Harum");
echo $objek->tumbuh();
echo "<br>";
echo $objek->busuk();