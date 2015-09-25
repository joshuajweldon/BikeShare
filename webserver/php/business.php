<?php 
    include 'text.php';    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php headerText(); ?>
        <title>BikeShare | Login </title>
    </head>

    <body>
        <div class="container">
            
            <br>
            <br>
            <br>
            
            <!-- register -->
            <div class="row">
                
                <div class="col-xs-6 col-xs-offset-3 lightBackground bordered">
                    <br>
                    <h2><center> Register: </center></h2>
                    
                    <br>
                    
                    <form class="form-horizontal" method="post" action="submit.php">
                        <div class="form-group">
                            <label for="name" class="col-xs-4 control-label">Business Name</label>
                            <div class="col-xs-8">
                                <input name="name" type="text" class="form-control" id="name" placeholder="McDonalds">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="lat" class="col-xs-4 control-label">Latitude</label>
                            <div class="col-xs-8">
                                <input name="lat" type="text" class="form-control" id="lat" placeholder="22.387">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="long" class="col-xs-4 control-label">Longitude</label>
                            <div class="col-xs-8">
                                <input name="long" type="text" class="form-control" id="long" placeholder="-157.853900">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="item" class="col-xs-4 control-label">Item</label>
                            <div class="col-xs-8">
                                <input name="item" type="text" class="form-control" id="item" placeholder="50% off a medium-sized meal">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="col-xs-4 control-label">Description </label>
                            <div class="col-xs-8">
                                <input name="description" type="comment" class="form-control" id="description" placeholder="Enjoy a delicious burger from America's beloved fast food chain.">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="price" class="col-xs-4 control-label">Price</label>
                            <div class="col-xs-8">
                                <input name="price" type="text" class="form-control" id="price" placeholder="5.00">
                            </div>
                        </div>
                         
                        <br> 
                        <div class="form-group">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
            
                    </form>
                    
                </div>
            </div>
            <br>
            <br>            
        </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>

