<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jumbotron-narrow.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />	
	
	<title>Bubble Sort - PHP Backend / jQuery Front End</title>
	
	</head>

<body>

<div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><p class="btn">Mat Gilbert 2015</p></li>
     
          </ul>
        </nav>
        <h3 class="text-muted">BubbleSort</h3>
      </div>

      <div class="jumbotron">
        <h1>Let's Get Sorted!</h1>
        <small><em><strong>Bubble sort:</strong> Sometimes referred to as sinking sort, is a simple sorting algorithm that repeatedly steps through the list to be sorted, compares each pair of adjacent items and swaps them if they are in the wrong order. The pass through the list is repeated until no swaps are needed, which indicates that the list is sorted.</em></small>       
      </div>

      <div class="row marketing">
        <div class="col-lg-12 text-center">
		
		<button id="btnStep" type="button" class="btn btn-primary btn-lg">Step</button>
			
  
		<?php 
			
		//if($_POST['num_str']) $numbers = ; 
		//else $numbers = $_POST['num_str'];
		
		$numbers = isset($_POST['num_str']) ? $_POST['num_str'] : print_list(generate_numbers(10));
		$numbers_val = str_replace(' ','',$numbers);
		
		$step = isset($_POST['step']) ? $_POST['step'] : 0;
		
		?>
		<input type="hidden" id="numSet" value="<?php echo $numbers_val; ?>"/>
		<input type="hidden" id="step" value="<?php echo $step; ?>"/>		
		<h2 id="numLabel"><?php echo $numbers; ?></h2>

		<div id="chartdiv" style="height:400px; width:100%; "></div>

	  
        </div>

      </div>

      <footer class="footer">
        <p>&copy; Mat Gilbert 2014</p>
      </footer>

    </div> <!-- /container -->


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/excanvas.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="js/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="js/jqplot/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="js/jqplot/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="js/jqplot/jqplot.pointLabels.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
