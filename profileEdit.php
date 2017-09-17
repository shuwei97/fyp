<!DOCTYPE HTML> 
<HTML>
	<HEAD>
		<title>
			PROFILE EDIT | MMU FORUM
		</title>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style/FYP_bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="style/custom.css"/>
		
	</HEAD>

	<BODY>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="bootstrap_js.js"></script>

	    <!-- upheader ==================== -->
 		<nav class="navbar navbar-default no-margin padding-5px">
 			<div class="container-fluid">
	 			<!-- logo ==================== -->
			    <div class="navbar-header col-md-8 col-sm-5 col-xs-5">
	 			    <a class="navbar-brand"> 
				    	<a href="HOME(J).HTML">
						<img src="img/mmulogo.png" height="40px" name="Home" alt="Home"/>
						</a>
						<span class="font-size-20px">F<small>ORUM</small></span>
					</a>
				</div>				

				<!-- search and navigate ==================== -->
			    <div class=" nav navbar-nav navbar-right col-md-1 col-sm-7 col-xs-7 no-padding" >
			    	<ul class="nav nav-pills">
			    		<li>
			    			<!--<form class="navbar-form no-margin no-border no-padding" role="search" >
							    <div class="form-group">
							        <input type="text" class="form-control" placeholder="Search">
							    </div>
						    </form>
						</li>
						<li><button type="submit" class="btn btn-default">Search</button></li>-->
			    		<li><a href="HOME(J).HTML" >HOME</a></li>
					</ul>
			    </div>
			</div>
		</nav>

		<!-- breadcrumb ==================== -->
		<div class="row no-margin">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="HOME(J).HTML">HOME</a></li>
					<li class="active">PROFILE</li>
				</ul>
			</div>
		</div>

		<!--body ==================== -->
		<div class="container">
			<!-- page header ==================== -->
			<div class="row">
		 		<div class="col-md-12">
					<div class="page-header">
						<h1>PROFILE EDIT</h1>
					</div>
				</div>
	        </div>

	        <!-- profile edit =================== -->
	        <div class="row">
		 		<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">

							<form class="form-horizontal">
								
								<div class="col-md-4">
									<label class="control-label">PROFILE PICTURE</label>
									<div id="profile_image_preview"></div>
									<br/>
									<input type="file"  name="image" accept=".jpg, .png" id="profile_image"/>
									<br/>
								</div>

								<div class="col-md-7">

									<div class="form-group">
										<label class="control-label">NAME</label>
										<input type="text" class="form-control" name="title" placeholder="Cat"/>
									</div>

									<div class="form-group">
										<label class="control-label">EMAIL</label>
										<input type="text" class="form-control" name="title" placeholder="cat@gmail.com"/>
									</div>
									    
									<div class="form-group">
										<label class="control-label">CHANGE PASSWORD</label>
										<input type="password" class="form-control" name="title" placeholder="Enter your old password"/>
										 <a >Forgot your password?</a>
									</div>
									 
									<div class="form-group">
										<label class="control-label">FACULTY</label>
										<select class="form-control" name="category">
											<option>FOM</option>
											<option>FOE</option>
											<option>FCM</option>
											<option>FCI</option>
											<option>FAC</option>
											<option selected>CDP</option>
										</select>
									</div>

									<div class="form-group">
										<label class="control-label">ABOUT</label>
										<textarea placeholder="I am a cat" class="form-control" rows="3"></textarea>
									</div>

									<div class="form-group">
										<label class="control-label">LINK</label>
										<input type="text" class="form-control" name="title" placeholder="Cat"/>
									</div>

									<div class="form-group">
										STATUS &nbsp&nbsp&nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp&nbsp <span class="label label-warning">STUDENT</span> 
										&nbsp&nbsp&nbsp&nbsp<a href="ID VERIFICATION USER.HTML">Change status</a>
									</div>

								</div>
								
							</form>

						</div>
					</div>
				</div>
			</div>



	    </div>

	    <script>
		    $(document).ready(function() 
		    {
				$("#profile_image").on('change', function() 
				{
					var countFiles = $(this)[0].files.length;
					var imgPath = $(this)[0].value;
					var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
					var image_holder = $("#profile_image_preview");
					image_holder.empty();

					for (var i = 0; i < countFiles; i++) 
					{
						var reader = new FileReader();

						reader.onload = function(e) 
						{
							$("<img />",
							{
								"src": e.target.result,
								"class": "img-circle profile-pic",
								"height": "250px"
							}).appendTo(image_holder);
						}

						image_holder.show();
						reader.readAsDataURL($(this)[0].files[i]);
					}

				});
			});

		</script>
<script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#E4392B" data-apps="JTdCJTIyZmFjZWJvb2slMjI6JTIyMTAwMDAwMzU0Njc5MjA0JTIyLCUyMmVtYWlsJTIyOiUyMnNodXdlaS5wZWhAZ21haWwuY29tJTIyJTdE"></script>
		
	
	</BODY>
</HTML>