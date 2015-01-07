<?php

function generate_numbers($count){

    $numbers = array();
    $cieling = 100;
    for($i = 0; $i < $count;$i++){ $numbers[$i] = random_unique_number($cieling,$numbers); }
    return $numbers;

}

//Recursively ensures that only unique numbers are returned
function random_unique_number($cieling,$set){

    $rand = rand(0,$cieling);
    if(!in_array($rand, $set)){ return $rand; }
    else { return random_unique_number($cieling,$set); }
}

//Returns true if swap should occur, false if no swap necessary
function compare_numbers($first,$second){

    if($first > $second) return true;
    else return false;

}

function sort_step($iter,$set){

    $first = $set[$iter];
    $second = $set[$iter + 1];

    $should_swap = compare_numbers($first,$second);

    if($should_swap){ 
    
        echo "$second < $first, swapping \n"; 

        $set[$iter] = $second;
        $set[$iter + 1] = $first;

    }
    else { echo "$first < $second, no swap \n"; }

    return $set;

}

function print_list($numbers){

    echo "<p>";

    $iter = count($numbers) -1;
    
    for($i = 0;$i<=$iter;$i++){

        echo $numbers[$i];
        if($i != $iter){ echo ', ';}

    }

    echo "</p>";

}

function is_sorted($numbers){

    $sorted = true;

    $steps = count($numbers)-1;

    for($i=0; $i<$steps; $i++){

        $first = $numbers[$i];
        $second = $numbers[$i + 1];

        echo "<p>Sort Check: $first - $second</p>";

        if($first > $second){ 

            //break;
            $sorted = $i; 
            break;
        }

    }

    return $sorted;
}


function sort_list($numbers){	
	
	$count = count($numbers) -1;
	
	for($i=0;$i<$count;$i++){
		
		echo "<p>Iter: $i</p>";
		
		print_list($numbers);
		
		$numbers = sort_step($i,$numbers);
		
	}
	
	$sorted = is_sorted($numbers);
	if(is_int($sorted)) sort_list($numbers);
	else echo '<p>Sorting Complete!</p>';
	
	print_List($sorted);
	

}


?>