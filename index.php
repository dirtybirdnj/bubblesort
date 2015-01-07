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
    
        echo "$second > $first, swapping \n"; 

        $set[$iter] = $second;
        $set[$iter + 1] = $first;

    }
    else { echo "$first > $second, no swap \n"; }

    return $set;

}

function print_list($numbers){

    echo "\n";

    $iter = count($numbers) -1;
    
    for($i = 0;$i<=$iter;$i++){

        echo $numbers[$i];

        if($i != $iter){ echo ', ';}

    }

    echo "\n\n";

}

function is_sorted($numbers){

    $sorted = true;

    $steps = count($numbers)-1;

    for($i=0; $i<$steps; $i++){

        $first = $numbers[$i];
        $second = $numbers[$i + 1];

        echo "$first - $second\n";

        if($first > $second){ 

            //break;
            $sorted = false; 
            break;
        }

    }

    return $sorted;
}


function sort_list($numbers){


}


$numbers = generate_numbers(10);

//var_dump($numbers);

//sort_step(0,$numbers);

print_list($numbers);

var_dump(is_sorted($numbers));

?>