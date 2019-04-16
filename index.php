<?php
require("./src/process.php");
?>
<!DOCTYPE HTML>
<html lang="en">
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Drone Delivery Test App">
        <meta name="author" content="Olive Ogbo">
        <title>Drone Delivery Test App</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     </head>
     <body class="container">
             
        <h1>Drone Delivery Form</h1>

        <!-- Input form HTML -->
        <form method="post" action="">
                
        <h3>Drone</h3>

           <div class="form-group row">
              <div class="col-sm-4">
                <input type="text" class="form-control" name="drone_name" placeholder="Drone Name" value="" required>
                <input type="number" class="form-control" name="max_weight" placeholder="Max weight in lbs" value="" required>
              </div>
           </div>
                <h3>Delivery Locations</h3>

           <div class="form-group row">
              <div class="col-sm-4">
                <input type="text" name="location_1" placeholder="Location 1" value="" required>
                <input type="number" name="package_1" placeholder="Package weight in lbs" value="" required>
              </div>
           </div>
                
           <div class="form-group row">
              <div class="col-sm-4">          
                <input type="text" class="form-control" name="location_2" placeholder="Location 2" value="">
                <input type="number" class="form-control" name="package_2" placeholder="Package weight in lbs" value="" required>
              </div>
           </div>
                      
           <div class="form-group row">
              <div class="col-sm-4">
                <input type="text" class="form-control" name="location_3" placeholder="Location 3" value="" required>
                <input type="number" class="form-control" name="package_3" placeholder="Package weight in lbs" value="" required>
              </div>
           </div>
                      
   <div class="form-group row">
      <div class="col-sm-2">
                <input type="submit" class="btn btn-primary" name="submit" value="Get Trips">
        </form>
                   
        <form>
                <input type="submit" class="btn btn-secondary" name="reset" value="Reset">
        </form>
           
      </div>
   </div>

        
        # output div block
        <div <?php echo $style;?>>
            <h2>Most Efficient Delivery Routes</h2>

                <!--Output Trip #1 -->
                <h4>Trip #1</h4> <br />
                <?php echo $trip_1->setLocations($loc_2) . ", " . $trip_1->setLocations($loc_3);?>

                # Output Trip #2
                <h4>Trip #2</h4>
                <?php echo $trip_2->setLocations($loc_1);?>
        </div>
             
    </body>
</html>
