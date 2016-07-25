<html>
<head>
<title>insert data</title>
</head>
<body>
<div id="container">
<?php echo form_open ('insert_ctrl');?>
<h1>insert data</h1>
<?php echo form_label('student name:');?><?php echo form_error('dname');?>
<?php echo form_input(array('id'=>'dname','name'=>'dname'));?>

<?php echo form_label('student email:');?><?php echo form_error('demail');?>
<?php echo form_input(array('id'=>'demail','name'=>'demail'));?>

<?php echo form_label('student mobile no. :');?><?php echo form_error('dmobile');?>
<?php echo form_input(array('id'=>'dmobile','name'=>'dmobile'));?>

<?php echo form_label('student adresses:');?><?php echo form_error('daddress');?>
<?php echo form_input(array('id'=>'daddress','name'=>'daddress'));?>

<?php echo form_submit(array('id'=>'submit','value'=>'submit'));?>

<?php echo form_close();?>
</div>
</body>
</html>
