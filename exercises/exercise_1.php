<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">1. Create the given pattern.</h3>
</div>
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
    ?>
        <span class="font-bold text-3xl">*</span>
    <?php
        }
        else{
    ?>
        <span class="mx-4"> </span>
    <?php
        }
        if($current_row == $num2 && $num2 != $num1){
    ?>
            <span class="font-bold text-3xl">*</span>
    <?php
        }else{
    ?>
            <span class="mx-4"> </span>
    <?php
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
<?php require_once('../layout/footer.php'); ?>