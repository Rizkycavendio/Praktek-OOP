<?php
//Muhammad Rizky Cavendio-20051397011
  class Pegawai{
      protected $nama;

      public function Pegawai(){
          $this->nama=$nama;
      }
      public function Hobby(){
      }
  }
  class Manajer extends Pegawai{
      public function Pegawai(){
          return $this->nama;
      }
      public function Hobby(){
          return "Manajer memiliki hobby olahraga";
      }
  }
  class Kurir extends Pegawai{
      public function Pegawai(){
          return $this->nama;
      }
      public function Hobby(){
          return "Kurir memiliki hobby main PS";
      }
  }

  $manajer=new Manajer("Dio")
  $kurir-new Kurir("Asep")

  echo $manajer;
  echo "<br/>"
  echo $kurir;
  
?>