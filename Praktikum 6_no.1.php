<?php

//Muhammad Rizky Cavendio - 20051397011

  class Vehicle{
      public function double calcFuelEfficiency();
      public function double calcTripDistance();
  }
  class Truck extends Vehicle{
      public Truck (double max_load){
      }
      public double calcFuelEfficiency(){
      }
      public double calcTripDistance(){
      }
  }

  class RiverBarge extends Vehicle{
      public RiverBarge (double max_load){
      }
      public double calcFuelEfficiency(){
      }
      public double calcTripDistance(){
      }
  }
?>