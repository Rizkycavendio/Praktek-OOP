<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <h1>Muhammad Rizky Cavendio-20051397011</h1>
<?php
   class Katak{
       protected int $umur;
       protected string $nama;

       public function __construct(){
         $this->umur=$umur;
         $this->nama=$nama;
       }  
       public function caraBergerak(){
         return "melompat";
       }
       public function setUmur(){
         this->umur=$umur;
       }
       public function getUmur(){
         return this->$umur;
       }
       public function setNama(){
         $this->nama=$nama;
       }
       public function getNama(){
         return this->$nama;
       }
    }
   
   class Kecebong extends Katak{
       protected $panjangEkor;
       
       public function __construct(){
        $this->umur=$umur;
        $this->nama=$nama;
        $this->panjangEkor=$panjangEkor;
      }  
       public function caraBergerak(){
        return "berenang";
      }
       public function setPanjangEkor(){
        $this->setPanjangEkor=$panjangEkor;
      }
       public function getPanjangEkor(){
        return this->$panjangEkor;
      }
       public function getUmur(){
        return this->$umur;
      }
       public function getNama(){
        return this->$nama;
      }
      
   }
   $O1=new Katak(5, "Froggy");
   $O2=new Kecebong(2, "Juior Frog", 10);
?>
  <table border="1">
        <tr>
           <td>Objek</td>
           <td>Umur</td>
           <td>Nama</td>
           <td>panjangEkor</td>
           <td>caraBergerak</td>
        </tr>
        <tr>
           <td><?php echo "O1";?></td>
           <td><?php echo $O1->getUmur();?></td>
           <td><?php echo $O1->getNama();?></td>
           <td></td>
           <td><?php echo $O1->caraBergerak();?></td>
        </tr>
        <tr>
           <td><?php echo "O2";?></td>
           <td><?php echo $O2->getUmur();?></td>
           <td><?php echo $O2->getNama();?></td>
           <td><?php echo $O2->getPanjangEkor();?></td>
           <td><?php echo $O2->caraBergerak();?></td>
        </tr>
      </table>
</body>
</html>