<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Paper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.css" media="screen">
    <link rel="stylesheet" href="css/styled-custom.css" media="screen">
	
	<script type='text/javascript' src="js/jquery-1.10.2.js"></script>
	<script type='text/javascript' src="js/jquery-1.10.1.ui.js"></script>
	<script type='text/javascript' src="js/bootstrap.min.js"></script>
		
	<script src="js/jquery.json.min.js?v=2.2"></script>
	<script type="text/javascript">
	
	var base_url = 'http://localhost/bootswatch.id';	
	

		function getLoadContent( id, url_data ){		
			
			var request = $.ajax({
			  url: url_data,
			  type: "GET",
			  cache: false,
			  global: true, 
			  dataType: "html",
			  beforeSend: function () {
				var ajax_loader = '<center><div class="_ani_loading"><span style="clear:both">Memuat...</span></div></center>';
				$("#panel-content-"+id).html(ajax_loader);
			  }
			});
			
			request.fail(function ( data ) {
				$("#panel-content-"+id).html('<div class="padding"><p id="error_no_ani">Request failed: '+data+'</p></div>');
			});
			request.done(function ( data ) {
				$("#panel-content-"+id).html(data);
			});
		}		
		getLoadContent('activity-record','ajax/widgets/activity-record.php');
		getLoadContent('disk-memory-overview','ajax/widgets/resource.php');
		getLoadContent('shoutbox','ajax/widgets/shoutbox.php');
		getLoadContent('feed-news','ajax/widgets/feed-news.php');	 

	function updateWidgetData(){
		var sortorder = new Array();
		$('#dashboard-widgets').each(function(){
			var dwa = $(this);	
			$('.column .meta-box-sortables').each(function(i){		
				var sortorder_by = $(this).attr('id').replace(/-sortables/i,'');
				$('.dragbox', this).each(function(i){
					
					if( 'normal' == sortorder_by )
						sortorder.push( {normal:$(this).attr('id')} );				
					else if( 'side' == sortorder_by )
						sortorder.push( {side:$(this).attr('id')} );
					
				});
			});	
		});
		
		var normal_array = new Array();
		var side_array = new Array();
		for(i=0; i < sortorder.length; i++){
			if( sortorder[i].normal ) normal_array.push( sortorder[i].normal );
			else if( sortorder[i].side ) side_array.push( sortorder[i].side );
		}
		
		var normal_string = '';
		var side_string = '';
		for(i=0; i < normal_array.length; i++){
			normal_string+= normal_array[i]+',';
		}
		
		for(i=0; i < side_array.length; i++){
			side_string+= side_array[i]+',';
		}
		
		var set_sortorder = {normal:normal_string,side:side_string};
		//console.log(set_sortorder);
				
		//Pass sortorder variable to server using ajax to save state
		//$.post('irequest.php?auto', 'sort='+$.toJSON(sortorder));
		//autosave(sortorder);
		$.post( base_url +'/?request=dashboard', 'data='+$.toJSON( set_sortorder ), function(response){});
			/*	   
			var winHeight = $(window).height();
			var winWidth = $(window).width();
			$('#redactor_modal_console').css({
				top: '15%',
				left: winWidth / 2 - $('#redactor_modal_console').width() / 2
			});
			$('#redactor_modal_overlay_loading,#redactor_modal_console').show().fadeOut('slow');*/
		
	}

	function show_empty_container(){
		$(".column .meta-box-sortables").each(function(index, element) {
			var t = $(this);
			if ( !t.children('.panel:visible').length )
				t.addClass('empty-container');
			else
				t.removeClass('empty-container');
		});
	}
	
	</script>
  </head>
  <body>
    
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CMS INDONESIA</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-flash"></span> Plugin <span class="badge">3</span></a>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-book"></span> Help and Guide</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a class="img-name" href="login-profile.php"> <img src="img/cinqueterre.jpg" class="img-circle" alt="Cinque Terre" width="23" height="23"> Eko Azza</a></li>
            <li class="dropdown">
              <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropsetting"><span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="login-profile.php">Pengaturan</a></li>
                <li><a href="login.php">Logout</a></li>
                <li class="divider"></li>
                <li><a id="link-modal" href="#">Help?</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container">
    	<div class="row">
        	<div class="col-md-2">
            
            
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="index.php">Dashboard</a></li>
    <li class="nav-header">Actions</li>
    <li class="nav-divider"></li>
    <li><a href="single.php">Single</a></li>
    <li class="nav-header">Tips</li>
    <li class="nav-divider"></li>
    <li><span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span></li>
    <li class="nav-header">Copyright</li>
    <li><span class="help-block">@CMS.id - 2015</span></li>
  </ul>
            
            </div>
            <div class="col-md-10">
			
				<!--ROW COLUMN FIRST END-->
				<!--QUICK PANEL END-->
            	<div class="row">	
				
                	<div class="col-md-12">
                    	<div class="panel panel-default">
						
  <div class="panel-body panel-quick">

	<div class="col-md-3 panel-quick-start">
        <div class="cols">
        	<strong>Memulai</strong>
            <div class="clearfix"></div>
            <a href="?admin=single&amp;sys=appearance&amp;go=theme-editor&amp;theme=portal" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Custom situs</a>
            <div class="clearfix clr2"></div>or <a href="?admin&amp;sys=appearance">ubah tampilan</a>
        </div>
	</div>
	<div class="col-md-2 panel-quick-second">
        <div class="cols">
        	<strong>Versions</strong>
            <div class="clearfix"></div>
			<span>Current Version 3.00 build 100</span>
            <a title="" data-original-title="Information Pembaruan" href="#" data-url="/ajax/latest.php" data-type="show" class="btn btn-info btn-xs modal-show"><span class="glyphicon glyphicon-refresh"></span> Check Updates</a>
            <div class="clearfix"></div>
        </div>
	</div>
	<div class="col-md-3 panel-quick-three">
        <div class="cols">
        	<strong>Langkah berikutnya</strong>
            <div class="clearfix"></div>
            <ul>
            <li><a href="?admin=single&amp;apps=post&amp;go=add&amp;type=post">Tulis sebuah posting</a></li>
            <li><a href="?admin=single&amp;apps=post&amp;go=add&amp;type=page">Tulis sebuah halaman</a></li>
            <li><a href="http://localhost/cmsid/build/1.4.sample">Lihat situs</a></li>
            </ul>
        </div>
	</div>
	<div class="col-md-4 panel-quick-four">
        <div class="cols">
        	<strong>Lainnya</strong>
            <div class="clearfix"></div>
            <ul>
            <li>Atur <a href="?admin&amp;sys=options">option</a> atau <a href="?admin&amp;sys=appearance&amp;go=widgets">widget</a> atau <a href="?admin&amp;sys=appearance&amp;go=menus">menu</a></li>
            <li><a id="popup" data-type="edit" href="?request&amp;apps=yes&amp;load=post/setting.php" title="Pengaturan Post">Mati atau hidupkan komentar</a></li>
            <li><a href="http://cmsid.org/page-langkah-pertama-menggunakan-cmsid.html">Pelajari lebih lanjut untuk memulai</a></li>
            </ul>
    	</div>
	</div>
    
                        
                        </div>
                        </div>
                        
                        
                    </div>
					
                </div>
				<!--QUICK PANEL END-->
				<!--ROW COLUMN FIRST END-->
				<!--ROW COLUMN SECOND-->
            	<div id="dashboard-widgets" class="metabox-holder row">				
				<!--COLOMN 0-->
					<div id="column0" class="column column0">
                	<div id="normal-sortables" class="meta-box-sortables col-md-6">
					<!--SORT-->
					
					<div id="panel-activity-record" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Activity Record</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body" id="panel-content-activity-record">
						</div>
					</div>
					
					
					<div id="panel-disk-memory-overview" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Disk & Memory Overview</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Info Panel" class="pull-right to-info modal-show" data-url="/ajax/user.php" data-type="show" ><i class="glyphicon glyphicon-info-sign"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body" id="panel-content-disk-memory-overview">
						</div>
					</div>
										
					
					
					<div id="panel-shoutbox" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Shoutbox</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Info Panel" class="pull-right to-info"><i class="glyphicon glyphicon-info-sign"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body" id="panel-content-shoutbox">						 
						</div>
					</div>
					
					<div id="panel-feed-news" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Feed News</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Info Panel" class="pull-right to-info"><i class="glyphicon glyphicon-info-sign"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body" id="panel-content-feed-news">                   
						</div>
					</div>
					
					<div id="panel-refering" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Refering</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Info Panel" class="pull-right to-info"><i class="glyphicon glyphicon-info-sign"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body">
						a
						</div>
					</div>
						
					<!--SORT END-->
                    </div>
					</div>
				<!--COLOMN 0 END-->
				<!--COLOMN 1-->
				<div id="column1" class="column column1">
                	<div id="side-sortables" class="meta-box-sortables col-md-6">
					<!--SORT-->
					
					
					<div id="panel-quick-post" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Quick Posting Article</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Info Panel" class="pull-right to-info"><i class="glyphicon glyphicon-info-sign"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body">
						
						<form class="form-horizontal">
							<input class="form-control" id="focusedInput" value="Judul artikel..." type="text">
							<textarea class="form-control" rows="3" id="textArea"></textarea>
							<div class="row form-group">
								<div class="col-xs-8">
								
									 <select class="form-control" id="select">
									  <option>Kategori</option>
									</select>
								
								</div>
								<div class="col-xs-4">
									<input class="form-control" id="inputEmail" placeholder="Tags etc,dll" type="text">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-xs-8">
									<button type="submit" class="btn btn-info">Save a Draf</button>
									<button type="reset" class="btn btn-default">Cancel</button>
								</div>
								<div class="col-xs-4">
									<button type="submit" class="btn btn-primary pull-right">Publish</button>
								</div>
							</div>
						</form>						
						
						</div>
					</div>
					
					
					
					<div id="panel-recent-registration" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Recent Registration</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Info Panel" class="pull-right to-info"><i class="glyphicon glyphicon-info-sign"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body">                  
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#rr-new" data-toggle="tab">Terbaru</a></li>
                          <li><a href="#rr-country" data-toggle="tab">Negara</a></li>
                        </ul>
                        <div id="recentRegistration" class="tab-content">
                          <div class="tab-pane fade active in" id="rr-new">
                            
							<div class="list-group">
							<a title="" data-original-title="Profile Akun" href="#" data-url="/ajax/user.php" data-type="show" class="list-group-item modal-show">
								<div class="row">
									<div class="col-xs-1">
										<img src="img/cinqueterre.jpg" class="img-circle" alt="Cinque Terre" height="23" width="23">
									</div>
									<div class="col-xs-11">
										<div class="pull-left">
										<span class="label label-info"><i class="glyphicon glyphicon-briefcase"></i> Mr.Eko</span>
										</div>												
										<div class="pull-right">
										<span class="label label-primary">Male</span><span class="label label-default">2015/05/19</span><span class="label label-success"><i class="glyphicon glyphicon-ok"></i></span>
										</div>
									</div>	
								</div>
							</a>
							<a class="list-group-item modal-show" title="" data-original-title="Profile Akun" href="#" data-url="/ajax/user.php" data-type="show" >
								<div class="row">
									<div class="col-xs-1">
										<img src="img/cinqueterre.jpg" class="img-circle" alt="Cinque Terre" height="23" width="23">
									</div>
									<div class="col-xs-11">
										<div class="pull-left">
										<span class="label label-success"><i class="glyphicon glyphicon-user"></i> Joko Susilo</span>
										</div>													
										<div class="pull-right">
										<span class="label label-primary">Male</span><span class="label label-default">2015/05/19</span><span class="label label-success"><i class="glyphicon glyphicon-ok"></i></span>
										</div>
									</div>	
								</div>
							</a>
							<a class="list-group-item modal-show" title="" data-original-title="Profile Akun" href="#" data-url="/ajax/user.php" data-type="show" >
								<div class="row">
									<div class="col-xs-1">
										<img src="img/cinqueterre.jpg" class="img-circle" alt="Cinque Terre" height="23" width="23">
									</div>
									<div class="col-xs-11">
										<div class="pull-left">
										<span class="label label-success"><i class="glyphicon glyphicon-user"></i> Sisilia Parter</span>
										</div>													
										<div class="pull-right">
										<span class="label label-primary">Female</span><span class="label label-default">2015/05/19</span><span class="label label-success"><i class="glyphicon glyphicon-ok"></i></span>
										</div>
									</div>	
								</div>
							</a>
							</div>							
							
                          </div>
                          <div class="tab-pane fade" id="rr-country">
                          b
                          </div>
                         </div>
						                         
						</div>
						<div class="panel-footer">
							Total member: 1 users, Tertunda: 0 users, dari 1 negara
						</div>
					</div>
					
					<div id="panel-static-monitor" class="panel panel-default dragbox">
                        <div class="panel-heading"> 
						  <strong>Static Monitor</strong>
							  <div class="pull-right"> 
							  <a href="#" data-perform="panel-collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Resize Panel" class="pull-right tp-resize"><i class="glyphicon glyphicon-resize-small"></i></a> 
							  <a href="#" data-perform="panel-move" data-toggle="tooltip" data-placement="left" title="" data-original-title="Moved Panel" class="pull-right to-move"><i class="glyphicon glyphicon-move"></i></a> 
							  <a href="#" data-perform="panel-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Info Panel" class="pull-right to-info"><i class="glyphicon glyphicon-info-sign"></i></a> 
							  <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove Panel" class="pull-right to-remove" style="visibility: hidden;"><i class="glyphicon glyphicon-remove"></i></a> 
							  <a href="#" data-perform="panel-config" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit the configuration Panel" class="pull-right to-config" style="visibility: hidden;"><i class="glyphicon glyphicon-pencil"></i></a> 
							  </div>						  
						</div>
						<div class="panel-body">
						</div>
					</div>
					
					<!--SORT END-->
                    </div>
					</div>
				<!--COLOMN 1 END-->					
                </div>				
				<!--ROW COLUMN SECOND END-->
				
            </div>
			
			
        </div>
    </div>
	
	  
	<script src="js/widget-home.dev.js"></script>
    <script src="js/bootswatch.js"></script>
</body>
</html>