<?php
/*
if(empty($_SESSION["username"]) || empty($_SESSION["fullname"]) || empty($_SESSION["id"])){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'login.php';
    header("Location: http://$host$uri/$extra");
    exit;
}
*/

if(empty($_SESSION["username"]) || empty($_SESSION["id"])){

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'login.php';
    header("Location: http://$host$uri/$extra");
    exit;
} 
$username = $_SESSION["username"];
$id       = $_SESSION["id"]; 
$conn;
    
function start(){
    
    global $conn;
    
    $servername = "173.194.81.188";
    $user       = "joshua";
    $pass       = "impact!!";
    $dbname     = "BikeShare";
        
    $conn = new mysqli($servername, $user, $pass, $dbname);
        
    if ($conn->connect_error) {
        $usernameErr = "Connection failed: " . $conn->connect_error;
        errorPage();
        exit;
    }
   
}

function numOfTweets(){
    global $conn, $username;
    
    $sql = "SELECT COUNT(*) as count FROM tweets WHERE username = '" . $username . "';";
            
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
                
        $row = $result->fetch_assoc();
        
        return $row["count"];
                        
    }
    return 'error';
}

function getPoints(){
    
    global $username, $conn;
    
    $sql = "SELECT points FROM users WHERE username = '" . $username . "';";
            
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
                
        $row = $result->fetch_assoc();
        
        echo $row["points"];
                        
    }
    else echo 'error';
}


function finish(){
    global $conn;
    
    $conn->close();
}

function getRedeemCount(){
    global $id, $conn;
    
    $sql = "SELECT SUM(count) as total FROM redeem WHERE userid=" . $id ;
            
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    
    if($row["total"]!=NULL){    
        echo $row["total"];
    }
    else echo 0;
}


?>