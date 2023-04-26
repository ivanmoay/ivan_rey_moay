<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">2. Create the given pattern.</h3>
</div>
<?php
    $max_columns = 11;
    $current_column = 0;
    $max_rows = 11;
    $current_row = 0;
    $max_num = 6;
    $left_num = $max_num;
    $right_num = 1;
    $modifier = 0;
    $reverse = false;

    while($current_column < $max_columns){ 
        
        if($current_row < 5){   
            if($left_num == $max_num - $modifier)   
            {
                $str = isEven($left_num) ? '*' : $left_num;
                echo '<span class="font-bold text-3xl">'.$str.'</span>';
            }
            echo '<span class="font-bold text-3xl mx-4">&nbsp;</span>';
            $left_num--;         
        }else{
            if($right_num == $max_num - $modifier)   
            {
                $str = isEven($right_num) ? '*' : $right_num;
                echo '<span class="font-bold text-3xl">'.$str.'</span>';
            }
            echo '<span class="font-bold text-3xl mx-4">&nbsp;</span>';
            $right_num++;
        }               
        
        $current_row++;
        if($current_row == $max_rows){
            echo '<br/>';
            $current_row = 0;
            $current_column++;
            $left_num = $max_num;
            $right_num = 1;
            if(!$reverse){
                $modifier++;
            }else{
                $modifier--;
            }            
            if($modifier > 5 && !$reverse){
                $reverse = true;
                $modifier = 4;
            }
        }    
    }    

    function isEven($num){
        if($num % 2 == 0){
            return true;
        }else{
            return false;
        }
    }

?>
<?php require_once('../layout/footer.php'); ?>