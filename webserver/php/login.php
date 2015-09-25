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
        <?php navBarText(); ?>
        <div class="container">
            
            <br>
            <br>
            <br>
            
            <!-- register -->
            <div class="row">
                
                <div class="col-xs-6 col-xs-offset-3 lightBackground bordered">
                    <br>
                    <h2><center> Register: <small> first time users </small></center></h2>
                    
                    <br>
                    
                    <form class="form-horizontal" method="post" action="register.php">
                        <div class="form-group">
                            <label for="username" class="col-xs-4 control-label">Username</label>
                            <div class="col-xs-8">
                                <input name="username" type="text" class="form-control" id="username" placeholder="JaneDoe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-xs-4 control-label">Password</label>
                            <div class="col-xs-8">
                                <input name="password" type="password" class="form-control" id="password" placeholder="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button type="submit" class="btn btn-default">Register</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
            <br>
            <br>
            
             <!-- sign in -->
            <div class="row">
                
                <div class="col-xs-6 col-xs-offset-3 lightBackground bordered">
                    <br>
                    <h2><center> SignIn: <small> returning users </small></center></h2>
                    
                    <br>
                    
                    <form class="form-horizontal" method="post" action="signin.php">
                        <div class="form-group">
                            <label for="username" class="col-xs-4 control-label">Username</label>
                            <div class="col-xs-8">
                                <input name="username" type="text" class="form-control" id="username" placeholder="JaneDoe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-xs-4 control-label">Password</label>
                            <div class="col-xs-8">
                                <input name="password" type="password" class="form-control" id="password" placeholder="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-4 col-xs-8">
                                <button type="submit" class="btn btn-default">SignIn</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
            <br>
            
        </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>

