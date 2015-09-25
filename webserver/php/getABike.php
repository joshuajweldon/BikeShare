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
        <title>BikeShare | GetABike</title>
    </head>

    <body>
        
        <?php navBarText(); ?>
        
        <br><br><br>
        <div class="container">
            
            <!--Left Column-->
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                
                   

                    <div class="col-xs-7 whiteBackground bordered">
                        <h1> GetABike <br></h1>
                        <p> Take a healthy, fun, and affordable form of transformation! <br><br> </p>
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
                    
                    
                    $sql = "Select * From racks";
                    
                    $result = $conn->query($sql);
                    
                    while($row = $result->fetch_assoc()){
                        ?>
                        
                        <div class="row">
                        <div class="col-xs-12 whiteBackground bordered">
                            <br>
                            <!-- post 1 -->
                            <div class="row hover bordered">
                                <div class="col-xs-2">
                                    <img src="bicycle-clipart-bike.png" alt="User3" style="width:50px;height:50px;border-radius: 10px;"> 
                                </div>  
                                <div class="col-xs-10">
                                    <h3><?php echo $row['addr']; ?> </small></h3>
                                    <p>Bike Station <?php echo $row['id'] ?> <br> <br> <small> 
                                        Available Bikes: <?php echo $row['count']; ?> <br> 
                                        Unavailable Bikes: <?php echo ($row['max'] - $row['count']); ?> </small></p>
                                        <?php if($row['count'] != 0 && empty($_SESSION['bikeid'])){ ?>
                                            <a class="btn btn-primary btn-md" href="getBike.php?rackid=<?php echo $row['id'];?>">Get Bike</a>
                                        <?php } ?>
                                    <p><small>Empty Bike Docks: <?php echo ($row['max'] - $row['count']); ?> <br> 
                                        Unavailable Bike Docks: <?php echo $row['count']; ?> </small></p>
                                        <?php if($row['count'] != $row['max'] && !empty($_SESSION['bikeid'])){ ?>
                                            <a class="btn btn-primary btn-md" href="returnBike.php?rackid=<?php echo $row['id'];?>&bikeid=<?php echo $_SESSION['bikeid'];?>">Return Bike</a>
                                        <?php } ?>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>

                        
                        <?php
                    }
                    
               
                      
                    ?>
                    
                    <br><br><br>
                    
                    
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

