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
        <title>BikeShare | Get Bike</title>
    </head>

    <body>
        
        <?php navBarText(); ?>
        
        <br><br><br>
        <div class="container">
            
            <!--Left Column-->
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                
                    

                    <div class="col-xs-7 whiteBackground bordered">
                        <h1> GetABike <br><br></h1>
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
                    $sql = "UPDATE users SET points=points+100 WHERE id=" . $id;
                    
                    $conn->query($sql);
                    
                    $sql = "Select * From bikes Where rackid=" . $_GET['rackid'];
                    
                    $result = $conn->query($sql);
                    
                    $row = $result->fetch_assoc();
                    
                    $_SESSION['bikeid'] = $row['id'];
                    
                    $sql = "UPDATE bikes SET rackid=NULL, userid=" . $_SESSION['id'] . " WHERE id=" . $row['id'];
                    
                    $conn->query($sql);
                    
                    $sql = "UPDATE racks SET count=count-1 WHERE id=" . $_GET['rackid'];
                    
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
                                    <h3> Congratulations! </small></h3>
                                    <p>Bike <?php echo $row['id']; ?> at Bike Station <?php echo $row['rackid'] ?> is all yours! <br> <br> Please be sure to return.<br>Back to <a href="getABike.php"> GetABike</a></p>
                                    
                                        
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

