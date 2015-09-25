<?php

function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);
  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}



include 'text.php';

// define variables and set to empty values
$error = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"]) || empty($_POST["lat"]) || empty($_POST["long"]) || empty($_POST["item"]) || empty($_POST["description"]) || empty($_POST["price"]) ) {
        $error = "All fields are required to be filled in.";
        errorPage();
        exit;
    }
    else {
       
        $name = test_input($_POST["name"]);
        $lat = $_POST["lat"];
        $long = $_POST["long"];
        $item = test_input($_POST["item"]);
        $description = test_input($_POST["description"]);
        $price = test_input($_POST["price"]);
        
        
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$name)) {
            $error = "Only letters and digits allowed"; 
            errorPage();
            exit;
        }
        
        $servername = "173.194.81.188";
        $user       = "joshua";
        $pass       = "impact!!";
        $dbname     = "BikeShare";
            
        $conn = new mysqli($servername, $user, $pass, $dbname);
            
        if ($conn->connect_error) {
            $error = "Connection failed: " . $conn->connect_error;
            errorPage();
            exit;
        }
        
        $sql = "Select * From racks";
        $result = $conn->query($sql);
        
        $minid = 0;
        $mindist = 10000;
        while($row = $result->fetch_assoc()){
            $tempdist = sqrt(($lat - $row['lat'])*($lat - $row['lat'])+($long - $row['longt'])*($long - $row['longt']));
            
            
            if($tempdist< $mindist){
                $mindist = $tempdist;
                $minid = $row['id'];
            }
        }
        
        
        $sql = "INSERT INTO businesses (name, lat, longt, item, description, price, fromt, tot) VALUES ('$name', $lat, $long, '$item', '$description', $price, 1, $minid)";
        
        if(!($result = $conn->query($sql))){
            $conn->close();
            $error = "Unable to Register";
            errorPage();
            exit;
        }
        
        $conn->close();
        ?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" href="favicon.ico">
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet">
        </head>
    
        <body>
            <div class="container">
                    
                <br>
                <br>
                <br>
                
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 lightBackground bordered">
                        <br>
                        <h2><center> Thank you for registering! <small> We are looking forward to working with you. </small></center></h2>
                        <p><center> Return to the Homepage <a href="../index.php"> here</a>.</center></p>                       
                    </div>
                </div>
                <br>
                <br>                
            </div>
            
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
        </body>
    </html>
        <?php 
            
            
            
    }   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function errorPage(){
    
    global $error;
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" href="favicon.ico">
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet">
        </head>
    
        <body>
            <div class="container">
                
                <br>
                <br>
                <br>
                
                <!-- error page -->
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 lightBackground bordered">
                        <br>
                        <h2><center> Sorry, <small> could not sign-in </small></center></h2>
                        
                        <p><center><span class="error"> <?php echo $error; ?> </span></center></p> 
                        
                        <p><center> Return to the Business Registration form <a href="business.php"> here</a>.</center></p>                       
                    </div>
                </div>
                <br>
                <br>                
            </div>
            
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
        </body>
    </html>
    
    <?php
    
}
?>