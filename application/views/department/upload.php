<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo $error;?>
<?php echo form_open_multipart('upload/do_upload');?>
<?php
$data_form= array(
  'name'=>'userfile'
);
echo form_upload($data_form);
 ?>
<?php echo form_submit('choose','upload')
?>
<?php echo form_close(); ?>
</body>
</html>
