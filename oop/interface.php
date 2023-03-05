<?php

interface Truck {
    // মেথড সমূহ
      public function setTruckModel($name);
  
      public function getTruckModel();

      
  }

  interface Wheels {
    public function setHasWheels($bool);
  
    public function getHasWheels();
  }



  class TruckDetails implements Truck,Wheels{
    private $model;
    private $hasWheels;

    public function setTruckModel($name) {
        $this->model = $name;
      }
    
      public function getTruckModel() {
        return $this->model;
      }

      public function setHasWheels($bool) {
        $this->hasWheels = $bool;
      }

      public function getHasWheels() {
        return ($this->hasWheels)? " Has wheels" : "No wheels";
    }
  }

  $truckdetails = new TruckDetails();
  $truckdetails->setTruckModel("Tesla");
  $truckdetails->setHasWheels(true);

  echo $truckdetails->getTruckModel();

  echo $truckdetails->getHasWheels();