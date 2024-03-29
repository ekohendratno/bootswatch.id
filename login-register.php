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
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
					<a href="login.php"><i class="glyphicon glyphicon-chevron-left"></i> Register</a>
					<div class="pull-right"> 
						<a href="index.php" class="pull-right"><i class="glyphicon glyphicon-th-list"></i> Manage Dashboard</a> 
					</div>
					</div>
                    <div class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="dashboard.html" method="post">
                            <div class="form-group">
                                <label for="username" class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                                    <input type="username" class="form-control" name="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="passwd" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Retry Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="retrypasswd" placeholder="Retry Password">
                                </div>
                            </div>
							<div class="form-group">
							  <label for="inputEmail" class="col-md-3 control-label">Email</label>
							  <div class="col-md-9">
								<input class="form-control" id="inputEmail" placeholder="Email" type="text">
							  </div>
							</div>
							<div class="form-group">
								<label for="select" class="col-md-3 control-label">Saya seorang</label>
								<div class="col-md-9">
									<select class="form-control" id="select">
									  <option>Laki-laki</option>
									  <option>Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="select" class="col-md-3 control-label">Saya di</label>
								<div class="col-md-9">
									<select class="form-control" id="select">
									  <option>Indonesia</option>
									  <option>Luar negeri</option>
									</select>
									<div class="checkbox">
									<label>
										<input id="login-remember" type="checkbox" name="remember" value="1"> Saya setuju <a href="login-peraturan.php">peraturan</a> ini?
									</label>
									</div>
								</div>
							</div>  
							
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                        </form>   



                    </div>                     
            </div>  
        </div>
		 
    </div>
    
</body>
</html>
