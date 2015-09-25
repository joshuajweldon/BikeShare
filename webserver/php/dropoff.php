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
        <title>BikeShare | Dropoff Bike</title>
    </head>

    <body>
        
        <?php navBarText(); ?>
        
        <br><br><br>
        <div class="container">
            
            <!--Left Column-->
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                
                    

                    <div class="col-xs-7 whiteBackground bordered">
                        <h1> Dropoff Deal Bike <br><br></h1>
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
                    
                    $sql = "UPDATE bikes SET rackid='" . $_GET['rackid'] . "', userid=NULL WHERE id=" . $_SESSION['bikeid'];
                    
                    unset($_SESSION['bikeid']); 
                    
                    $conn->query($sql);
                    
                    $sql = "UPDATE racks SET count=count+1 WHERE id=" . $_GET['rackid'];
                    
                    $conn->query($sql);
                    
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
                                    <h3> Thank-you! </small></h3>
                                    <p>Bike <?php echo $_GET['bikeid']; ?> has been returned to Bike Station <?php echo $_GET['rackid'] ?>. <br>See <a href="redeem.php"> Redeem</a> to access your deal.</p>
                                    
                                        
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

