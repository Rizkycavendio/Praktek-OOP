<?php
//Muhammad Rizky Cavendio-20051397011
   class Pegawai{
       protected $nama;
       protected $gaji;

       public function Pegawai(){
           $this->nama=$nama;
           $this->gaji=$gaji;
       }
       public function infoGaji(){
           return $this->gaji;
       }
   }

   class Manajer extends Pegawai{
       private $tunjangan;

       public function Pegawai(){
           $this->nama=$nama;
           $this->gaji=$gaji;
           $this->tunjangan=$tunjangan;
       }
       public function infoGaji(){
           return $this->gaji;
       }
       public function infoTunjangan(){
           return $this->tunjangan;
       }
   }

   class Programmer extends Pegawai{
       private $bonus;

       public function Pegawai(){
           $this->nama=$nama;
           $this->gaji=$gaji;
           $this->bonus=$bonus;
       }
       public function infoGaji(){
           return $this->gaji;
       }
       public function infoBonus(){
           return $this->bonus;
       }
   }

   $manajer=new Manajer("Dio", 15000000, 2500000);
   $programmer=new Programmer("Asep", 30000000, 10000000);

   echo $manajer;
   echo "<br/>";
   echo $programmer;
?>