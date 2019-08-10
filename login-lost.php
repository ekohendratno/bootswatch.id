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
                    <div class="panel-heading">
					<a href="login.php"><i class="glyphicon glyphicon-chevron-left"></i> Lost</a>
					</div>
                    <div class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="index.php" method="post">
                                    
                            <div class="form-group-lg">
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Masukkan pengguna / email"><br>
							<button id="btn-login" class="btn btn-primary btn-info btn-lg btn-block" type="submit">Sended</button>
							</div>  
                        </form>   



                    </div>                     
            </div>  
        </div>
		 
    </div>
    
</body>
</html>
