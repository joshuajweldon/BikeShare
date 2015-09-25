<?php 
    session_start(); 
    include 'text.php'; 
    include 'func.php';
    start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../graphics/favicon.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>Mock-Twitter</title>
    </head>

    <body style="background:transparent">
        <div class="container">
            
                                
                        <!--tweet form-->
                        <div class="row">
                            <div class="col-xs-12 medBackground bordered">
                                <br>
                                <form class="form-horizontal" method="post" action="tweet.php">
                                    <div class="col-xs-2">
                                        <img src="../graphics/<?php echo $id % 10; ?>.png" alt="User<?php echo $id; ?>" style="width:35px;height:35px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-8">
                                        <input name="tweet" type="text" class="form-control" id="tweet" placeholder="What's happening?">
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="submit" class="btn btn-default">tweet</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-12 lightBackground bordered">
                                <center>view new tweets <a href="tweetflow.php">here</a></center>
                            </div>
                        </div>
                        <br>
                        
                        <!--Right Column Tweet-->
                        <div class="row">
                            <div class="col-xs-12 whiteBackground bordered">
                                
                                <!-- post 1 with Comments-->
                                <!-- the post -->
                                <div class="row"><br>
                                    <div class="col-xs-2">
                                        <img src="../graphics/2.png" alt="User2" style="width:50px;height:50px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-10">
                                        <b>Sammi Akuna</b> @sakuna &middot; 1m <br>
                                        This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.<br><br>
                                        
                                    
                                        <div class="col-xs-4">
                                            <a href="#"> &#11013;  </a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="#"> &#128257;</a> 0
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="#"> &#11088;</a> 0
                                        </div>
                                    </div>
                                </div>
                                <!-- Buttons-->
                                <div class="row">
                                    
                                    
                                </div>
                                
                                <!-- reply window -->
                                <div class="row medBackground">
                                    <form class="form-horizontal" method="post" action="reply.php">
                                    <div class="col-xs-2">
                                        <img src="../graphics/<?php echo $id % 10; ?>.png" alt="User<?php echo $id; ?>" style="width:35px;height:35px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-8">
                                        <input name="tweet" type="text" class="form-control" id="tweet" placeholder="Reply to @sakuna ">
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="submit" class="btn btn-default">reply</button>
                                    </div>
                                </form>
                                </div>
                                <!-- replies -->
                                <div class="row lightBackground"><br>
                                    <div class="col-xs-2">
                                        <img src="../graphics/5.png" alt="User5" style="width:35px;height:35px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-10">
                                        <b>Tim Burton</b> @burton &middot; 1m <br>
                                        @sakuna This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.<br><br>
                                    </div>
                                </div>
                                <center> &middot;&middot; </center>
                            </div>
                        </div>
                        <br>
                        
                        
                        
                        
        

                        
                        
                        
                        
                         <div class="row">
                            <div class="col-xs-12 whiteBackground bordered">
                                <br>
                                <!-- post 1 -->
                                <div class="row hover">
                                    <div class="col-xs-2">
                                        <img src="../graphics/3.png" alt="User3" style="width:50px;height:50px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-10">
                                        <b>Blake Vilas</b> @bvilas &middot; 2m <br>
                                        This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.<br><br>
                                        <div class="col-xs-4">
                                            <a href="#"> &#11013;  </a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="#"> &#128257;</a> 0
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="#"> &#11088;</a> 0
                                        </div>

                                    </div>
                                </div>
                                
                                <hr>
                
                                 <!-- post 1 -->
                                <div class="row hover">
                                    <div class="col-xs-2">
                                        <img src="../graphics/3.png" alt="User3" style="width:50px;height:50px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-10">
                                        <b>Blake Vilas</b> @bvilas &middot; 2m <br>
                                        This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.<br><br>
                                        <div class="col-xs-4">
                                            <a href="#"> &#11013;  </a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="#"> &#128257;</a> 0
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="#"> &#11088;</a> 0
                                        </div>

                                    </div>
                                </div>
                                <center>&middot;&middot;</center>
                            </div>
                        </div>
                        <br>
    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--Right Column Tweet-->
                        <div class="row">
                            <div class="col-xs-12 whiteBackground bordered">
                                
                                <!-- post 1 with Comments-->
                                <!-- the post -->
                                <div class="row"><br>
                                    <div class="col-xs-2">
                                        <img src="../graphics/2.png" alt="User2" style="width:50px;height:50px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-10">
                                        <b>Sammi Akuna</b> @sakuna &middot; 1m <br>
                                        This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
                                        <hr>
                                    
                                    <div class="col-xs-4">
                                        <a href="#"> &#11013;  </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="#"> &#128257;</a> 1
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="#"> &#11088;</a> 1
                                    </div>
                                    </div>
                                </div>
                                <!-- Buttons-->
                                <div class="row">
                                    
                                    
                                </div>
                                
                                <!-- reply window -->
                                <div class="row medBackground">
                                    <form class="form-horizontal" method="post" action="tweet.php">
                                    <div class="col-xs-1">
                                        <img src="../graphics/<?php echo $id % 10; ?>.png" alt="User<?php echo $id; ?>" style="width:35px;height:35px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-9">
                                        <input name="tweet" type="text" class="form-control" id="tweet" placeholder="Reply to @sakuna ">
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="submit" class="btn btn-default">reply</button>
                                    </div>
                                </form>
                                </div>
                                <!-- replies -->
                                <div class="row lightBackground"><br>
                                    <div class="col-xs-2">
                                        <img src="../graphics/5.png" alt="User5" style="width:35px;height:35px;border-radius: 10px;"> 
                                    </div>
                                    <div class="col-xs-10">
                                        <b>Tim Burton</b> @burton &middot; 1m <br>
                                        @sakuna This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.<br><br>
                                    </div>
                                </div>
                                <center> &middot;&middot; </center>
                            </div>
                        </div>
                        <br>
    
                        
                        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>


