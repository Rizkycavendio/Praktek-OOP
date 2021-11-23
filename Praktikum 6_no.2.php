<?php

//Muhammad Rizky Cavendio - 20051397011

  public interface Flyer{
      public function takeOff(){
      }
      public function land(){
      }
      public function fly(){
      }
  } 
  class Airplane implements Flyer{
      public function takeOff(){
      }
      public function land(){
      }
      public function fly(){
      }
  }
  class Bird implements Flyer{
      public function takeOff(){
      }
      public function land(){
      }
      public function fly(){
      }
      public function buildNest(){
      }
      public function layEgss(){
      }
 }
   class Superman implements Flyer(){
      public function takeOff(){
      }
      public function land(){
      }
      public function fly(){
      }
      public function leapBuilding(){
      }
      public function stopBullet(){
      }
}
?>