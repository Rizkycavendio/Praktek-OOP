<?php
//Muhammad Rizky Cavendio-20051397011
class Pecahan{
    private $pembilang;
    private $penyebut;

    public function Pecahan($pembilang=[3, 2], $penyebut=[5, 6]){
        $this->pembilang=$pembilang;
        $this->penyebut=$penyebut;
    }
    public function getPembilang($pembilang){
        return $this->pembilang;
    }
    public function getPenyebut($penyebut){
        return $this->penyebut;
    }
    public function tambah(){
        
    }
}

$objek1=new Pecahan()
$objek1->Pecahan(3);
$objek1->Pecahan(2);

$objek2=new Pecahan()
$objek2->pecahan(5);
$objek2->pecahan(6);

echo $objek1->getPembilang();
echo $objek1->getPenyebut();

echo $objek2->getPembilang();
echo $objek2->getPenyebut();