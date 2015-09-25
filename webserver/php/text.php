<?php
    
    function headerText(){
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../graphics/favicon.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <?php
    }
    
    function navBarText(){
        ?>
        
        
        
        
        
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <!--  Display three horizontal lines when navbar collapsed. -->
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> BikeShare </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="getABike.php">Get A Bike</a></li>
                        <li><a href="deals.php">Deals</a></li>
                        <li><a href="redeem.php">Redeem</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        
        
        
        <?php
    }
    
    function userInfoText(){
        
        global $username, $id;
        ?>
        <div class="col-xs-4 col-xs-offset-1 whiteBackground bordered">
            <div class="row">
                <div class="col-sm-4">
                    <img src="../graphics/<?php echo $id % 10; ?>.png" alt="User<?php echo $id; ?>" style="width:70px;height:70px;border-radius: 10px;">
                </div>
                <div class="col-sm-8">
                    <h3> <?php echo $username; ?> <br></h3>
                </div>  
            </div>  
            <div class="col-sm-4">
                POINTS <br> <?php getPoints(); ?>   <!--<?php echo numOfTweets($username); ?>-->
            </div>
            
            <?php if(!empty($_SESSION['bikeid'])){?>
                <div class="col-sm-4">
                    CURRENT BIKE <br> <?php echo $_SESSION['bikeid'];?> 
                </div>  
            <?php }?> 
            <div class="col-sm-4">
                REDEEM <br> <?php getRedeemCount(); ?>   <!--<?php echo numOfTweets($username); ?>-->
            </div>
            
        </div>
        <?php
    }
?>