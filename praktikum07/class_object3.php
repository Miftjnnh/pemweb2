<?php
class Motor
{
    public $merk;
    public $cc;
    public $transmisi;

    function jalan()
    {
        return "Merk motor $this->merk berjalan di jalan raya";
    }

    function turing()
    {
        return "motor $this->merk adalah $this->cc 110 CC";
    }

    function ngerem()
    {
        return "Motor $this->merk bisa ngerem !";
    }

    function ngegas()
    {
        return "Motor $this->merk ini ngegas
                dan transmisinya $this->transmisi";
    }
}

$motor = new Motor;
$motor->merk = "Yamaha F1Z 110";
$motor->xx = 110;
$motor->transmisi = "manual";
echo $motor->jalan();
echo "<br>";
echo $motor->turing();
echo "<br>";
echo $motor->ngerem();
echo "<br>";
echo $motor->ngegas();