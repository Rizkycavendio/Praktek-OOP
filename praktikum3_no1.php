//Muhammad Rizky Cavendio-20051397011

<?php

class Tabungan {

    public $saldo = 5000;

    public function __construct($saldo, $jumlah){
        $this->saldo= $saldo;
        $this->jumlah= $jumlah;
    }
}

class PengambilanUang extends Tabungan {
    
    private $proteksi=1000;

    public function __construct($saldo, $jumlah){
        parent::__construct($saldo, $jumlah);
    }

    private function setProteksi($proteksi){
        $this->proteksi = $proteksi;
    }

    public function getProteksi(): int{
        return $this->proteksi;
    }

    public function PengambilanUang(int $jumlah)
    {
        if ($jumlah < 4000) {
            $this->saldo -= $jumlah;
        } else{

        }

        return $this;
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }
    
    public function ambilUang(int $jumlah) 
    {
        $this->jumlah = $jumlah;
        return $this->jumlah . "<br>";
    }

}

$ambiluang1 = new PengambilanUang(5000, 4500);
$ambiluang2 = new PengambilanUang(5000, 3000);

echo "Uang yang ditabung : " . $ambiluang1->getSaldo() . "<br>";
echo "Uang yang diproteksi : " . $ambiluang1->getProteksi() . "<br>";

echo ".................". "<br>"; 
//false
echo "Uang yang diambil : " . $ambiluang1->ambilUang(4500);
$ambiluang1->PengambilanUang(4500);
echo "Saldo Sekarang : " .  $ambiluang1->getSaldo() . "<br>";

echo ".................". "<br>";
//true
echo "Uang yang diambil : " . $ambiluang2->ambilUang(3000);
$ambiluang2->PengambilanUang(3000);
echo "Saldo Sekarang : " .  $ambiluang2->getSaldo() . "<br>";
?>