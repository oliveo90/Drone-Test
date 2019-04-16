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

        # Sanitize POST array to remove unwanted characters for security
        if( $_SERVER['REQUEST_METHOD']=='POST' && isset( $_POST['submit'] ) ){

            $truck_name = filter_input( INPUT_POST, 'truck_name', FILTER_SANITIZE_STRING );
            $max_weight = filter_input( INPUT_POST, 'max_weight', FILTER_SANITIZE_STRING );

            $location_1 = filter_input( INPUT_POST, 'location_1', FILTER_SANITIZE_STRING );
            $location_2 = filter_input( INPUT_POST, 'location_2', FILTER_SANITIZE_STRING );
            $location_3 = filter_input( INPUT_POST, 'location_3', FILTER_SANITIZE_STRING );

            $package_1 = filter_input( INPUT_POST, 'package_1', FILTER_SANITIZE_STRING );
            $package_2 = filter_input( INPUT_POST, 'package_2', FILTER_SANITIZE_STRING );
            $package_3 = filter_input( INPUT_POST, 'package_3', FILTER_SANITIZE_STRING );

                # click reset button to hide output div block
                $style = "";
                if( isset($_POST['reset']) ){
                        $style = "style='display:none;'";
                }

                # set locations
                $drone=new Drone( $drone_name, $max_weight );

                $loc_1=new Location( $location_1, $package_1 );
                $loc_2=new Location( $location_2, $package_2 );
                $loc_3=new Location( $location_3, $package_3 );

                # init Trip #1
                $trip_1 = new Trip;

                # init Trip #2
                $trip_2 = new Trip;
        }
?>
