<!DOCTYPE HTML>
<html lang="en">
        <head>
            <title>Drone Delivery Test App</title>
        </head>
        <body class="container">
 		<h1>Drone Delivery Form</h1>

    		<!-- Input form HTML -->
            <form method="post" action="">
    			<h3>Drone</h3>
                <input type="text" name="drone_name" placeholder="Drone Name" value="" required>
                <input type="number" name="max_weight" placeholder="Max weight in lbs" value="" required>

                <h3>Delivery Locations</h3>

                <input type="text" name="location_1" placeholder="Location 1" value="" required>
                <input type="number" name="package_1" placeholder="Package weight in lbs" value="" required>

                <input type="text" name="location_2" placeholder="Location 2" value="">
                <input type="number" name="package_2" placeholder="Package weight in lbs" value="" required>

                <input type="text" name="location_3" placeholder="Location 3" value="" required>
                <input type="number" name="package_3" placeholder="Package weight in lbs" value="" required>


                <input type="submit" name="submit" value="Get Trips">
            </form>
    		<form>
                <input type="submit" name="reset" value="Reset">
            </form>
            
                   <?php
                    	# click reset button to hide output div block
                    	$style = "";
                        if( isset($_POST['reset']) ){
        						        $style = "style='display:none;'";
                        }

                    	  # output div block
                        echo "<div " . $style . ">";
                        echo '<h2>Most Efficient Delivery Routes</h2>';

                        # set locations
                        $drone=new Drone( $drone_name, $max_weight );

                        $loc_1=new Location( $location_1, $package_1 );
                        $loc_2=new Location( $location_2, $package_2 );
                        $loc_3=new Location( $location_3, $package_3 );

                    	# Output Trip #1
                    	echo '<h4>Trip #1</h4>';

                        $trip_1 = new Trip;
                        echo $trip_1->setLocations($loc_2) . ", " . $trip_1->setLocations($loc_3);

                    	# Output Trip #2
                        echo '<br /> <h4>Trip #2</h4>';

                        $trip_2 = new Trip;
                        echo $trip_2->setLocations($loc_1);;
            			echo "</div>";
                }
        ?>
        </body>
</html>
