<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login &amp; Signup forms in panel - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    
    </style>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>   

<div class="container">    
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">                    
            <div class="panel panel-default" >
                    <div class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="index.php" method="post">
                                    
							<center>
							<img src="img/cinqueterre.jpg" class="img-circle" alt="Cinque Terre" height="100" width="100" style="margin-bottom:20px;" >
							
                            <div class="form-group-lg input-group">
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Masukkan pengguna / email">
							<input id="login-password" type="password" class="form-control" name="password" placeholder="Masukkan sandi">
							<div class="checkbox pull-left">
							<label>
								<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                            </div>
							<button id="btn-login" class="btn btn-primary btn-success btn-lg btn-block" type="submit">Login</button>
							
							<center>OR</center>
							<button id="btn-fblogin" class="btn btn-primary btn-lg btn-block">Login with Facebook</button>
							
							</div>
							<div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="padding-top:15px;" >
                                            Don't have an account! 
                                        <a href="login-register.php">
                                            Sign Up Here
                                        </a>
										or
                                        <a href="login-lost.php">
                                            Lost
                                        </a>
                                        </div>
                                    </div>
                                </div>   
							</center> 
                        </form>   



                    </div>                     
            </div>  
        </div>
		 
    </div>
    
</body>
</html>
