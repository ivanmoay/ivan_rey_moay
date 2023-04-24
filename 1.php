<?php

$mid = 4;
$num1 = $mid;
$num2 = $mid;
$max_row = 7;
$current_row = 1;
$max_column = 13;
$current_column = 1;
$d = 0;

while($current_column <= $max_column){

    if($current_row == $num1){
        echo '*';
    }
    else{
        echo '&nbsp;&nbsp;&nbsp;';
    }
    if($current_row == $num2 && $num2 != $num1){
        echo '*';
    }else{
        echo '&nbsp;&nbsp;&nbsp;';
    }

    $current_row++;
    if($current_row > $max_row){
        $current_row = 1;
        $current_column++;
        echo '<br/>';

        if($d == 0){
            $num1--;
            $num2++;
            if($num1 == 0){
                $d = 1;
                $num1 += 2;
                $num2 -=2;
            }
        }else{
            $num1++;
            $num2--;
            if($num1 == $mid){
                $d = 0;
            }
        }   
    }

    
}


?>