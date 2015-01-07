<?php include_once('functions.php');
	
	if($_POST['action'] == 'shuffle'){
		
		$new_string = print_list(generate_numbers(10));
		$return['num_str'] = $new_string;
		$return['num_data'] = str_replace(' ','',$new_string);
		
		output_json($return);
	}
	
	if($_POST['action'] == 'step'){
		
		$step = $_POST['step'];
		$num_str = $_POST['num_str'];
		
		$numbers = split(',',$num_str);
		
		$set = sort_step($step,$numbers);
		
		$is_sorted = true;
		$sort_key = is_sorted($set);
		
		if(is_int($sort_key)) $is_sorted = false;
		
		$return['num_str'] = print_list($set);
		$return['num_data'] = str_replace(' ','',print_list($set));
		$return['step']  = $sort_key;
		$return['sorted'] = $is_sorted;
		
		output_json($return);
		
		
		
	}

?>