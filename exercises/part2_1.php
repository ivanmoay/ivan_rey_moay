<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">1. Generate a random character from a -k</h3>
    <ul class="list-disc list-inside text-gray-700 text-lg">
        <li>Create a 4 x 5 table</li>
        <li>Display all the random characters inside the table</li>
        <li>Highlight all the character that belongs to the even column</li>
    </ul>
    <br/>
    <p class="text-gray-700 text-lg">(odd/even column)</p>
    <?php require_once('components/p2_1_table.php'); ?>    
</div>

<p class="text-gray-700 text-lg">Result</p>
<?php
    $table_array = array(
        0 => 'a',
        1 => 'b',
        2 => 'c',
        3 => 'd',
        4 => 'e',
        5 => 'f',
        6 => 'g',
        7 => 'h',
        8 => 'i',
        9 => 'j',
        10 => 'k',
    );

    for ($i=0; $i < 4; $i++) { 
        echo '<div class="flex items-center h-full flex-row">';
        for ($j=0; $j < 5; $j++) { 
            $randomNumber = rand(0, 10);
            if($randomNumber % 2 == 0){
                $class = 'bg-green-300';
            }else{
                $class = 'bg-white';
            }

?>
            <!-- <span class="border-solid border-2 border-black h-8 w-8"><?php echo $table_array[$randomNumber] ?></span> -->
            
                <p class="
                    w-12 
                    h-12 
                    text-center 
                    font-bold 
                    text-gray-700
                    border-solid
                    border-2
                    border-black
                    text-2xl
                    <?php echo $class ?>">
                    <?php echo $table_array[$randomNumber] ?>
                </p>
            
<?php
        }
        echo '</div>';
        //echo '<br/>';
    }
?>

<?php require_once('../layout/footer.php'); ?>