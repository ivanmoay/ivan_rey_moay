<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">1. Create the given pattern.</h3>
</div>
<?php

$max = 5;
$c = 1;
$r = $c;
$reached_max = false;

while($c > 0){
    echo '<span class="font-bold text-2xl mr-4">'.$r.'</span>';
    $r += $c;
    if($r > $c*$c){
        if($reached_max){
            $c--;
        }
        else{
            $c++;
        }        
        $r = $c;
        echo '<br/>';
    }
    
    if($c == $max){
        $reached_max = true;
    }
}


?>
<?php require_once('../layout/footer.php'); ?>