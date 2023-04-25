<?php

//echo round(($max_columns/2)-1);
$max_columns = 11;
$current_column = 0;
$max_rows = 11;
$current_row = 0;

while($current_column < $max_columns){ 
    
    if($current_row < 5){
        echo $current_row;
    }else{
        echo $current_row;
    }
    
    $current_row++;
     if($current_row == $max_rows){
        echo '<br/>';
        $current_row = 0;
        $current_column++;
    }    
}


?>