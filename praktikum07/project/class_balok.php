<?php
class Balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    function hitungVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    function hitungLuasSisi()
    {
        $luasDepanBelakang = $this->panjang * $this->tinggi;
        $luasSampingKiriKanan = $this->lebar * $this->tinggi;
        $luasAtasBawah = $this->panjang * $this->lebar;

        return 2 * ($luasDepanBelakang + $luasSampingKiriKanan + $luasAtasBawah);
    }
}

$balok = new Balok(12, 6, 3);
echo "Volume balok: " . $balok->hitungVolume() . "<br>";
echo "Luas sisi balok: " . $balok->hitungLuasSisi();