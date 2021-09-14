//Muhammad Rizky Cavendio - 20051397011

<?php
class novel{
    public $judul="Judul",
           $pengarang="Nama",
           $thn_terbit="Tahun Terbit",
           $harga=0;
     
    public function __construct($judul, $pengarang, $thn_terbit, $harga){
        $this->judul=$judul,
        $this->pengarang=$pengarang, 
        $this->thn_terbit=$thn_terbit, 
        $this->harga=$harga;

    }

    public function getLabel(){
        return "$this->judul, $this->pengarang, $this->thn_terbit, $this->harga";
    }
}

$novel1=new novel("Naruto", "Masashi Kishimoto", "2000", 25000);
$novel2=new novel("One Piece", "Eichiiro Oda", "1998", 25000);
$novel3=new novel("Jojo Bizzare Adventure", "Araki", "1986", 35000);

echo "Novel :" . $novel1->getLabel();
echo "<br>";
echo "Novel :" . $novel2->getLabel();
echo "<br>";
echo "Novel :" . $novel3->getLabel();
?>