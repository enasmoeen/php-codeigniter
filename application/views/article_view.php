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
</head>
<body>


<div class="container">

<?php echo form_open_multipart('article_ctrl/insertdata','id="form_register"');?>


          <div class="row">
		    <div class="col-sm-9 text-center">
                <h2 style="color:#5566AA">Create Article</h2>
				 </div>
				   </div>
                <div class="form-group">
                    <label for="Title" class="col-sm-3 control-label "style="color:#5566AA">Title</label>
                    <div class="col-sm-9">
                        <input type="text" id="title"name="title"placeholder="Enter Title"class="form-control " autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="body" class="col-sm-3 control-label"style="color:#5566AA">Body</label>
                    <div class="col-sm-9">
                        <input type="text"name="body"id="body"  placeholder="Enter Body For Article" class="form-control ">
                    </div>
                </div>
				
          <div class="form-group">
                    <label for="profile" class="col-sm-3 control-label "style="color:#5566AA">Image For Your Article</label>
                    <div class="col-sm-9">
					    <input type="file" id="user_image" name="user_image[]"class="form-control"multiple >
                    </div>
                </div>
				 <div class="form-group">
                    <label for="author" class="col-sm-3 control-label "style="color:#5566AA">Author</label><?php echo form_error('state');?>
                    <div class="col-sm-9">
					<input type="text"id="author"name="author"class="form-control ">
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