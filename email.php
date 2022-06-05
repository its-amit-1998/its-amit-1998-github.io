<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	mail($_POST['email'], 'contact', $_POST['message']);
?>
<p>Your email has been send.</p>
</body>
</html>

