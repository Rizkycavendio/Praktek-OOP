 //Nama: Muhammad Rizky Cavendio - 20051397011
<?php
class CekAngka
    {
        private $bilangan;
        
        public function __construct($bil)
        {
            $this->bilangan = $bil;
        }
        
        public function Genap()
        {
            if($this->bilangan % 2 == 0)
                return 1;
            else
                return 0;
        }
        
        public function Ganjil()
        {
            if($this->bilangan % 2 == 1)
                return 1;
            else
                return 0;
        }

        public function Positif()
        {
            if($this->bilangan < 0)
                 return 1;
            else 
                 return 0;     
        }

        public function Negatif(){
            if($this->bilangan > 0)
                 return 1;
            else
                 return 0;

        }
    }
    $bil = 11;
    $a = new CekAngka($bil);
    
    $hasil = $a-> Genap() == 1 ? "bilangan genap":"bukan bilangan genap";
    echo "{$bil} adalah ".$hasil;
    $hasil = $a-> Ganjil() == 1 ? "bilangan ganjil":"bukan bilangan ganjil";
    echo "{$bil} adalah ".$hasil;
    $hasil = $a-> Positif() == 1 ? "bilangan positif":"bukan bilangan positif";
    echo "{$bil} adalah ".$hasil;
    $hasil = $a-> Negatif() == 1 ? "bilangan negatif":"bukan bilangan negatif";
    echo "{$bil} adalah ".$hasil;

?>