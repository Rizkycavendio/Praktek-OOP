<?php
//Muhammad Rizky Cavendio-20051397011

class GameCharacter{
    private $name;
    private $lifePoint;
    private $attackHitPoint;
    private $attackKickPoint;

    public function GameCharacter($nama=string, $attackHitPoint=int, $attackKickPoint=int){
        $this->name=$name;
        $this->lifePoint=100;
        $this->attackHitPoint=$attackHitPoint;
        $this->attackKickPoint=$attackKickPoint;
    }
    public function hit(GameCharacter KarB){
        KarB.lifePoint-=$this->attackHitPoint;
    }
    public function kick(GameCharacter KarB){
        KarB.lifepoint-=$this->attackKickPoint;
    }
    public function getLifePoint(){
        return $this->lifePoint();
    }
    public function getName(){
        return $this->name();
    }
}

    $Raiden=new GameCharacter("Raiden",10,20);
    $Sub_zero=new GameCharacter("Sub-zero",5,25);

    echo "Game Character 1";
    echo "Name:" +$Raiden->getName();
    echo "LifePoint:" +$Raiden->getLifePoint();
    echo "Name:" +$Sub_zero->getName();
    echo "LifePoint:" +$Sub_zero->getLifePoint();

    echo "Raiden memulai pertrungan dengan melakukan tendangan pada objek Sub-Zero";$Raiden->kick($Sub_zero);
    echo "Life Point Raiden: "; $Raiden->getLifePoint();
    echo "Life Point Sub-Zero: "; $Sub_zero->getLifePoint();

    echo "Objek Sub-Zero melakukan perlawanan dengan menendang balik objek Raiden:";$Sub_zero->kick($Raiden);
    echo "Life Point Raiden: "; $Raiden->getLifePoint();
    echo "Life Point Sub-Zero: "; $Sub_zero->getLifePoint();

    echo "Objek Sub-Zero menyerang Raiden dengan pukulan berturut-turut sebanyak 3x (gunakan
    perulangan).";
    for (int i=0; i<3; i++){
        $Sub_zero->hit($Raiden);

        echo "Life Point Raiden:"; $Raiden->getLifePoint();
        echo "Life Point Sub-Zero:"; $Sub_zero->getLifePoint(); 
    }

    echo "Pertarungan diakhiri oleh Raiden dengan melakukan tendangan beruntun 4x pada objek
    Sub-Zero (gunakan perulangan)";
    for (int i=0; i<4; i++){
        $Raiden->kick($Sub_zero);

        echo "Life Point Raiden:"; $Raiden->getLifePoint();
        echo "Life Point Sub-Zero:"; $Sub_zero->getLifePoint(); 
    }

    echo "Hasil Akhir:";
    $winner=$raiden->getLifePoint()>$Sub_zero->getLifePoint();
    "raiden" : "Sub-Zero";

    echo "Pemenangnya adalah: "; $winner;
    echo "Dengan Life Point:"; $Raiden->getLifePoint();



    

    
