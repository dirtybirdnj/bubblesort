<?php include_once('functions.php'); ?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<title>Bubble Sort - PHP Backend / jQuery Front End</title>

</head>

<body>
<?php
	
$numbers = generate_numbers(10);

//var_dump($numbers);

//sort_step(0,$numbers);

print_list($numbers);

var_dump(is_sorted($numbers));

	
?>	
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="main.js"></script>
</body>

</html>
