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


$(document).ready(function()

{
	$.validator.addMethod("namevalidate", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-zA-Z]{3,16}$/.test( value );
}, 'Please enter a valid name.');

$.validator.addMethod("phonevalidate", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^972-[0-9]{4}-[0-9]{4}$/.test( value );
}, 'Please enter a valid phone.');

$(document).ready(function(){
	$('#zipcode').keyup(function(e){
		var zipcode=$(this).val();
		var requestURL='http://ziptasticapi.com/'+zipcode;
		$.getJSON(requestURL,null,function(data){
			console.log(data);
			if(data.city)$('#city').val(data.city);
			if(data.state)$('#state').val(data.state);
		});
	});
});

$("#form_register").validate(

{

rules:{

'dfname':{

required: true,
namevalidate: true,

},
'dlname':{

required: true,
namevalidate: true,
},

'dname':{

required: true,

namevalidate: true,
  usernameCheck:true

},

'demail':{
required: true,
email: true,
},



'dmobile':{

required: true,
phonevalidate:true

},

'reg_pass1':{
required: true,
minlength: 6},

'reg_pass2':{
required:true,
equalTo: '#reg_pass1'}

},
});
 
});
</script>
</head>
<body>

<div class="container">

<?php echo form_open_multipart('insert_ctrl2','id="form_register"');?>

<div class="prep">
  <ul class="nav nav-tabs">
      <li ><a href="LOGIN.php">LOGIN</a></li>
    <li class="active"><a href="new.php">CREATE ACOUNT</a></li>
  </ul>
  </div>

          <div class="row">
		    <div class="col-sm-9 text-center">
                <h2 style="color:#5566AA">Registration Form</h2>
				 </div>
				   </div>
                <div class="form-group">
                    <label for="UserName" class="col-sm-3 control-label "style="color:#5566AA">User Name</label><?php echo form_error('dname');?>
                    <div class="col-sm-9">
                        <input type="text" id="dname"name="dname"placeholder="Enter  UserName"class="form-control " autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"style="color:#5566AA">Email</label><?php echo form_error('demail');?>
                    <div class="col-sm-9">
                        <input type="text"name="demail"id="demail"  placeholder="name@domain.com" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label "style="color:#5566AA">Password</label><?php echo form_error('reg_pass1');?>
                    <div class="col-sm-9">
					<input type="password"name="reg_pass1"id="reg_pass1"placeholder="Password" class="form-control ">
                    </div>
                </div>
				  <div class="form-group">
                    <label for="cpassword" class="col-sm-3 control-label "style="color:#5566AA">Confirm Password</label><?php echo form_error('reg_pass2');?>
                    <div class="col-sm-9">
					<input type="password"name="reg_pass2"id="reg_pass2"placeholder="Repeat Password" class="form-control ">
				
                    </div>
                </div>
				   <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label "style="color:#5566AA">First Name</label><?php echo form_error('dfname');?>
                    <div class="col-sm-9">
					<input type="text"name="dfname"placeholder="Enter  FirstName"id="dfname"class="form-control " autofocus>
                    </div>
                </div>
				 <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label "style="color:#5566AA">Last Name</label><?php echo form_error('dlname');?>
                    <div class="col-sm-9">
					<input type="text"name="dlname"placeholder="Enter  LastName"id="dlname"class="form-control" autofocus>
                    </div>
                </div>
					 <div class="form-group">
                    <label for="PhoneNumber" class="col-sm-3 control-label "style="color:#5566AA">Phone Number</label><?php echo form_error('dmobile');?>
                    <div class="col-sm-9">
					<input type="text"name="dmobile"placeholder="Enter  Phone Number"id="dmobile"class="form-control">
					
                    </div>
                </div>
				
          <div class="form-group">
                    <label for="profile" class="col-sm-3 control-label "style="color:#5566AA">Image For Your Profile</label>
                    <div class="col-sm-9">
					    <input type="file" id="dpic" name="user_image"class="form-control" >
                    </div>
                </div>
				  <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label "style="color:#5566AA">Date of Birth</label>
                    <div class="col-sm-9">
					 <input type="date" name="ddatee" class="form-control">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="zipCode" class="col-sm-3 control-label "style="color:#5566AA">Zip Code</label><?php echo form_error('zipcode');?>
                    <div class="col-sm-9">
						<input type="text"id="zipcode"name="zc"placeholder="#####"class="form-control ">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="city" class="col-sm-3 control-label "style="color:#5566AA">City</label><?php echo form_error('city');?>
                    <div class="col-sm-9">
					<input type="text"id="city"name="ci"class="form-control ">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="state" class="col-sm-3 control-label "style="color:#5566AA">State</label><?php echo form_error('state');?>
                    <div class="col-sm-9">
					<input type="text"id="state"name="stt"class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
								<input type="submit" value="Register" class="btn btn-info btn-block"name="sub"id="submit">
                        
                    </div>
                </div>
				
            </form> <!-- /form -->
			
			<?php echo form_close();?>		
					
        </div> <!-- ./container -->
</body>
</html>
