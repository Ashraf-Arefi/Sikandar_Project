<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $key => $value):?>
<li><?php echo $key;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<p><a href="<?php base_url()?>upload">upload another file</a></p>

</body>
</html>
