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
        <title>BikeShare | Deals</title>
    </head>

    <body>
        
        <?php navBarText(); ?>
        
        <br><br><br>
        <div class="container">
            
            <!--Left Column-->
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                
                    

                    <div class="col-xs-7 whiteBackground bordered">
                        <h1> Deals </h1>
                        <p> Transport a bike to a needed spot and receive a reward! <br><br><br> </p>
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
                            
                        $sql = "Select * From businesses b Join racks r On b.tot=r.id where count<=5";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            ?>
                            <div class="row">
                            <div class="col-xs-12 whiteBackground bordered">
                                <br>
                                <!-- post 1 -->
                                <div class="row hover bordered">
                                    <div class="col-xs-2">
                                        <img src="Double-barred_dollar_sign.svg.png" alt="User3" style="width:50px;height:50px;border-radius: 10px;"> 
                                    </div>  
                                    <div class="col-xs-10">
                                        <h3><?php echo $row['name']; ?> </h3>
                                        <p> Deal <?php echo $row['id'] ?> : <?php echo $row['item'] ?> <br> <br> <small> 
                                            <?php echo $row['description'] ?> <br><br> From: Bike Station <?php echo $row['fromt'] ?> <br> To: Bike Station <?php echo $row['tot'] ?> </small><br><br>
                                            
                                            <?php  if(empty($_SESSION['bikeid'])) {
                                                ?>
                                                <a class="btn btn-primary btn-md" href="getDeal.php?rackid=<?php echo $row['fromt']; ?>&businessid=<?php echo $row['id']; ?>&to=<?php echo $row['tot']; ?>&from=<?php echo $row['fromt']; ?>&name=<?php echo $row['name']; ?>">Get Deal</a> 
                                                <?php
                                            } 
                                            ?>
                                        </p>
                                                  
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
        </div>
      
                          
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