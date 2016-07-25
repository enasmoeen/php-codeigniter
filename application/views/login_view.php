




<!DOCTYPE HTML>

<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter-3.0.6/css/styles.css">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- jquery validation plugin //-->

<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script>
  $(document).ready(function(){
	  
  $.validator.addMethod("namevalidate", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-zA-Z]{3,16}$/.test( value );
}, 'Please enter a valid name.');
$("#form_register").validate(

{rules:{
	
'name':{

required: true,

namevalidate: true,
},
'password':{
required: true,
minlength: 6},
},
});
	});
	</script>
	
</head>
<body>

<div class="container">
<?php echo form_open('login_ctrl/login','id="form_register"');?>
<div class="prep">
			  <ul class="nav nav-tabs">
    <li class="active"><a href="LOGIN.php">LOGIN</a></li>
    <li><a href="new.php">CREATE ACOUNT</a></li>
  </ul>
  </div>

  <div class="row">
		    <div class="col-sm-9 text-center">
                <h2 style="color:#5566AA">Login Form</h2>
				</div>
				</div>
            <div class="form-group">
                    <label for="UserName" class="col-sm-3 control-label "style="color:#5566AA">User Name</label><?php echo form_error('name');?>
                    <div class="col-sm-9">
                        <input type="text" id="name"name="name"placeholder="Enter  UserName"class="form-control" >
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label "style="color:#5566AA">Password</label><?php echo form_error('password');?>
                    <div class="col-sm-9">
					<input type="password"name="password"id="password"placeholder="Password" class="form-control">
                    </div>
                </div>
			
				
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block"name="log"id="subm">Login</button>
                    </div>
                </div>
           			<?php echo form_close();?>		<!-- /form -->
        </div> <!-- ./container -->
</body>
</html>