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
        <title>BikeShare | Redeem </title>
    </head>

    <body>
        
        <?php navBarText(); ?>
        
        <br><br><br>
        <div class="container">
            
            <!--Left Column-->
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                
                    

                    <div class="col-xs-7 whiteBackground bordered">
                        <h1> Redeem Deals </h1>
                        <p> Here where to redeem the deals you've earned from using BikeShare Hawaii! <br><br><br> </p>
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
                        $sql = "UPDATE redeem SET count=count-1 WHERE userid=" . $id . " and businessid=" . $_GET['businessid'];
                    
                        $conn->query($sql);    
                            
                        $sql = "Select name, item, description From businesses b join redeem r on b.id=r.businessid where b.id=" . $_GET['businessid'];
                        
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
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
                                        <p> You have redeemed this deal! </p>                                                 
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div> 
                        <br>
                           
                           
                        <?php
                            
                        }else{
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
                                        <h3>Non-Earned </h3>
                                        <p> Please go to <a href="deals.php"> Deals</a>, to earn some rewards.
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