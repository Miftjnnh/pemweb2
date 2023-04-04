<?php
class Mamalia
{
    public $jumlahKaki;
    public $berekor;

    function menyusui()
    {
        return "Hewan Menyusui";
    }

    function melahirkan()
    {
        return "Hewan Melahirkan";
    }
}

$objekMamalia = new Mamalia();
echo $objekMamalia->melahirkan();
echo "<br>";
echo $objekMamalia->Menyusui();
echo "<br>";
echo $objekMamalia->jumlahKaki = 2;