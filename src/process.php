<?php

        class Drone {
                protected $drone_name;
                protected $drone_weight;

                public function __construct($name=false, $weight=false) {
                        $this->drone_name = $name;
                        $this->max_weight = $weight;
                }
                public function get_name(){
                        return $this->drone_name;
                }
                public function get_max_weight(){
                        return $this->max_weight;
                }
        }

        class Location{
                protected $location_name;
                protected $location_weight;

                public function __construct($name=false, $weight=false) {
                        $this->location_name = $name;
                        $this->location_weight = $weight;
                }
                public function get_location(){
                        return $this->location_name;
                }
                public function get_location_weight(){
                        return $this->location_weight;
                }

        }

        class Trip{

                public function setLocations(Location $trip_loc){
                        return $trip_loc->get_location();
                }
        }
