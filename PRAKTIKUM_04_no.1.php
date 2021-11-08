//Muhammad Rizky Cavendio-20051397011

<?php
   class Orang{
       protected string $nama;
       protected int $umur;

       public function __construct($nama, $umur){
           $this->nama=$nama;
           $this->umur=$umur;
       }
       public function setUmur(){ 
           $this->umur=$umur;
       }
       public function getUmur(){
           return $this->umur;
       }
       public function setNama(){
           $this->nama=$nama;
       }
       public function getNama(){
           return $this->nama;
       }
    }   

   class Dosen extends Orang{
       private int $nip;

       public function __construct($nama, $umur, $nip){
           $this->nip=$nip;
       }
       public function getUmur(){
        return $this->umur;
      }
       public function getNama(){
        return $this->nama;
      }  
      public function info(){
          return $this->nama.$this->umur.$this->nip;
      }
    }

    $dosen=new Dosen("Pak Andi", 30, 29986162367);
    echo $dosen->info();
?>