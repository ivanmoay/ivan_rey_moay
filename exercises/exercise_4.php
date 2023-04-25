<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">1. Create the given pattern.</h3>
</div>
<?php

$max_row = 5;
$max_column = 6;
$row_val = 1;
$current_row = 1;
$current_column = 1;
$m = 2;

while($current_column <= $max_column){
    echo '<span class="font-bold text-2xl mr-4">'.$row_val.'</span>';
    $row_val = $row_val * $m;
    $current_row++;
    if($current_row > $max_row){
        echo '<br/>';
        $current_column++;
        $row_val = $current_column;
        $current_row = 1;
        $m++;
    }
}


?>
<?php require_once('../layout/footer.php'); ?>