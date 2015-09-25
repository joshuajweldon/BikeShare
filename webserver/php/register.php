<?php

include 'text.php';

// define variables and set to empty values
$error = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "Both Full Name and Password are required.";
        errorPage();
        exit;
    }
    else {
       
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        
        if (!preg_match("/^[a-zA-Z0-9]*$/",$username) || !preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
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

        $sql = "INSERT INTO users (username, password) VALUES ('" . $username . "', '" . $password . "');";
        
        if(!$conn->query($sql)){
            $conn->close();
            $error = "Could not register " . $fullname . " as " . $password;
            errorPage();
            exit;
        }
        
        $sql = "SELECT id FROM users WHERE username = '" . $username . "';";
        
        $result = $conn->query($sql);
        
        $row = $result->fetch_assoc();
        
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["id"]       = $row["id"];
                    
        $conn->close();
                
        /* Redirect to a different page in the current directory that was requested */
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'deals.php';
        header("Location: http://$host$uri/$extra");
        exit;
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
            <?php navBarText(); ?>
            <div class="container">
                
                <br>
                <br>
                <br>
                
                <!-- error page -->
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 lightBackground bordered">
                        <br>
                        <h2><center> Sorry, <small> could not register </small></center></h2>
                        
                        <p><center><span class="error"> <?php echo $error; ?> </span></center></p> 
                        
                        <p><center> back to login <a href="login.php"> here</a>.</center></p>                       
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