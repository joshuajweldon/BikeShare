<?php 
    session_start(); 
    include 'text.php'; 
    include 'func.php';
    start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php headerText(); ?>
        <title>BikeShare | Get Deal</title>
    </head>

    <body>
        
        <?php navBarText(); ?>
        
        <br><br><br>
        <div class="container">
            
            <!--Left Column-->
            <div class="row">
                <div class="col-xs-12 col-sm-8">

                    <div class="col-xs-7 whiteBackground bordered">
                        <h1> Get Deal <br><br></h1>
                    </div>
                   
                   <!-- User Info -->
                    <?php userInfoText(); ?>
                    
                    <!-- map -->
                    <div class="col-xs-12">
                        <br><br>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="map.php"></iframe>
                        </div>
                        <br>
                    </div>
                </div>
                
                <!--Right Column-->
                <div class="col-xs-12 col-sm-4">
                    
                    
                    <?php
                    
                    //get points
                    $sql = "UPDATE users SET points=points+200 WHERE id=" . $id;
                    
                    $conn->query($sql);
                    
                    
                    //get a bike
                    
                    
                    $sql = "Select * From bikes Where rackid=" . $_GET['rackid'];
                    
                    $result = $conn->query($sql);
                    
                    $row = $result->fetch_assoc();
                    
                    $_SESSION['bikeid'] = $row['id'];
                    
                    $sql = "UPDATE bikes SET rackid=NULL, userid=" . $_SESSION['id'] . " WHERE id=" . $row['id'];
                    
                    $conn->query($sql);
                    
                    $sql = "UPDATE racks SET count=count-1 WHERE id=" . $_GET['rackid'];
                    
                    $conn->query($sql);
                    
                    // get a deal
                    $sql = "Select * From redeem Where userid=" . $id . " and businessid=" . $_GET['businessid'];
                    
                    $result = $conn->query($sql);
                    
                    if($result->num_rows == 1){
                        $sql = "UPDATE redeem SET count=count+1 WHERE userid=" . $id . " and businessid=" .  $_GET['businessid'];
                    
                        $conn->query($sql);
                    
                    }
                    else{
                        $sql = "Insert Into redeem (userid, businessid) Values (" . $id . ", " . $_GET['businessid']. ")";
                    
                        $conn->query($sql);
                    }
                    
                    ?>
                        
                                           
                    <br><br><br>
                     <div class="col-xs-12 whiteBackground bordered">
                            <br>
                            <!-- post 1 -->
                            <div class="row hover bordered">
                                <div class="col-xs-2">
                                    <img src="bicycle-clipart-bike.png" alt="User3" style="width:50px;height:50px;border-radius: 10px;"> 
                                </div>  
                                <div class="col-xs-10">
                                    <h3> Congratulations! </small></h3>
                                    <p> Return Bike <?php echo $_SESSION['bikeid'] ;?> from Bike Station <?php echo $_GET['from'] ?> to Bike Station <?php echo $_GET['to'] ?> <br> <br> You will then receive your reward from <?php echo $_GET['name'] ?>. <br> </p>
                                    <a class="btn btn-primary btn-md" href="dropoff.php?rackid=<?php echo $_GET['from']; ?>&bikeid=<?php echo $_SESSION['bikeid'];?>">Drop Off</a>                
                                </div>
                            </div>
                            <br>
                        </div>
                        
                    
                </div>
            </div>
        </div>
      <br><br><br><br><br>
                          
        <footer class="footer">
            <p><center>Built for <a href="http://www.bikesharehawaii.org">BikeShareHawaii</a> by <a href="http://joshuajweldon.com">JoshuaJWeldon</a> and Evelyn Pirnia.</center></p>
            <p><center><a href="#">Back to top</a></center></p>
        </footer>

        <script type="text/javascript" src="../js/functions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>

<?php finish(); ?>

