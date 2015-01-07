<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jumbotron-narrow.css">
	
	<title>Bubble Sort - PHP Backend / jQuery Front End</title>
	
	</head>

<body>

<div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Shuffle</a></li>
            <li role="presentation"><a href="#">Step</a></li>
            <li role="presentation"><a href="#">Play</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">BubbleSort</h3>
      </div>

      <div class="jumbotron">
        <h1>Let's Get Sorted!</h1>
        <small><em><strong>Bubble sort:</strong> Sometimes referred to as sinking sort, is a simple sorting algorithm that repeatedly steps through the list to be sorted, compares each pair of adjacent items and swaps them if they are in the wrong order. The pass through the list is repeated until no swaps are needed, which indicates that the list is sorted.</em></small>       
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
  
<?php
			
$numbers = generate_numbers(10);

//var_dump($numbers);
//sort_step(0,$numbers);
//print_list($numbers);
//$sorted = is_sorted($numbers);
//var_dump($sorted);

sort_list($numbers);		
			
?>	
  
        </div>


      </div>

      <footer class="footer">
        <p>&copy; Mat Gilbert 2014</p>
      </footer>

    </div> <!-- /container -->


	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
