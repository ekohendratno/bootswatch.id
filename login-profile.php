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
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
					<a href="login-status.php"><i class="glyphicon glyphicon-chevron-left"></i> Profile</a>
					<div class="pull-right"> 
						<a href="index.php" class="pull-right"><i class="glyphicon glyphicon-th-list"></i> Manage Dashboard</a> 
					</div>
					</div>
                    <div class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="" method="post">
						
						<div class="col-md-5">
									<div class="btn-group btn-group-justified">
									  <a href="#" class="btn btn-default" onClick="$('#img-gravatar').hide(); $('#img-local').show()">Local</a>
									  <a href="#" class="btn btn-default" onClick="$('#img-local').hide(); $('#img-gravatar').show()">Gravatar</a>
									</div>
							<div id="img-local">
								<center>								
									<img src="img/cinqueterre.jpg" class="img-circle" alt="Cinque Terre" height="100" width="100" style="margin:20px 0;" >
									<h4>Eko Azza</h4>								
								</center>
							
								<div class="form-group">
									<div class="col-md-12">
										<input name="thumb" class="form-control" type="file">
									</div>
								</div>
							</div>
							<div id="img-gravatar" style="display:none">
								<center>
								<a href="http://www.gravatar.com/" title="Clik for Change Gravatar" target="_blank">
									<img class="img-rounded"  height="100" width="100" style="margin:20px 0;" src="http://0.gravatar.com/avatar/8e72e2c28090a7490d2042890c7459e2?s=180&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D180">
								</a>
								</center>
							</div>
							
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-12">
                                    <button id="btn-login" class="btn btn-primary btn-info btn-lg btn-block" type="submit">Update</button>
                                </div>                                           
                                        
                            </div>
						</div>
						<div class="col-md-7" style="border-left:1px solid #f2f2f2;">
                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label">Username</label>
                                <div class="col-md-8">
                                    <input type="username" class="form-control" name="username" placeholder="Username" disabled="" value="ekoazza">
                                </div>
                            </div>
							<div class="form-group">
							  <label for="email" class="col-md-4 control-label">Email</label>
							  <div class="col-md-8">
								<input class="form-control" id="email" placeholder="Email" type="text" value="admin@cmsid.org">
							  </div>
							</div>
							<div class="form-group">
							  <label for="author" class="col-md-4 control-label">Author</label>
							  <div class="col-md-8">
								<input class="form-control" id="author" placeholder="Author" type="text" value="Eko Azza">
							  </div>
							</div>
							<div class="form-group">
								<label for="sex" class="col-md-4 control-label">Saya seorang</label>
								<div class="col-md-8">
									<select class="form-control" id="sex">
									  <option>Laki-laki</option>
									  <option>Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="country" class="col-md-4 control-label">Saya di</label>
								<div class="col-md-8">
									<select class="form-control" id="country">
									  <option>Indonesia</option>
									  <option>Luar negeri</option>
									</select>
								</div>
							</div>  
							<div class="form-group">
							  <label for="province" class="col-md-4 control-label">Provinsi</label>
							  <div class="col-md-8">
								<input class="form-control" id="province" placeholder="Provinsi" type="text" value="Kalianda">
							  </div>
							</div>
							<div class="form-group">
							  <label for="website" class="col-md-4 control-label">Website</label>
							  <div class="col-md-8">
								<textarea class="form-control" rows="3" id="website">http://cmsid.org</textarea>
							  </div>
							</div>
							</div>
                        </form>   



                    </div>                     
            </div>  
        </div>
		 
    </div>
    
</body>
</html>
