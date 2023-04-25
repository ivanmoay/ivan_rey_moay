<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">2. Manipulation of multidimensional array</h3>
    <ul class="list-disc list-inside text-gray-700 text-lg">
        <li>Create a 4x4 table</li>
        <li>Generate a random number from 1 - 100</li>
        <li>The number generated should always be unique</li>
        <li>Sum up the number per column and row</li>
    </ul>
    <br/>   
</div>

<p class="text-gray-700 text-lg">Result</p>
<?php
    $array = array(
        array(0,0,0,0),
        array(0,0,0,0),
        array(0,0,0,0),
        array(0,0,0,0),
    );

    $rows = count($array);
    $cols = count($array[0]);

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $array[$i][$j] = insertUniqueNumberToArray($array);
        }
    }    

    // Generate HTML table
    echo '<table class="border-collapse">';
    $numRows = count($array);
    for ($i = 0; $i < $numRows; $i++) {
        echo "<tr>";
        $numCells = count($array[$i]);
        for ($j = 0; $j < $numCells; $j++) {
            $cell = $array[$i][$j];
            echo '<td class="border border-black px-6 py-2">'.$cell.'</td>';
        }
        $sum = array_sum($array[$i]);
        echo '<td class="font-bold px-6 py-2">'.$sum.'</td>';
        echo '</tr>';        
    }
    echo "<tr>";
        echo '<td class="font-bold px-6 py-2">'.sum([$array[0][0],$array[1][0],$array[2][0],$array[3][0]]).'</td>';
        echo '<td class="font-bold px-6 py-2">'.sum([$array[0][1],$array[1][1],$array[2][1],$array[3][1]]).'</td>';
        echo '<td class="font-bold px-6 py-2">'.sum([$array[0][2],$array[1][2],$array[2][2],$array[3][2]]).'</td>';
        echo '<td class="font-bold px-6 py-2">'.sum([$array[0][3],$array[1][3],$array[2][3],$array[3][3]]).'</td>';
        echo '</tr>';
    echo '</table>';

    function insertUniqueNumberToArray($arr){
        $flatArray = array_merge(...$arr);
        
        $randNumber = rand(1, 100);
        for ($i=0; $i < count($flatArray); $i++) { 
            if($randNumber == $flatArray[$i]){
                $randNumber = rand(1, 100);
                $i=0;
            }
        }

        return $randNumber;        
    }

    function sum(array $numbers){
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
?>

<?php require_once('../layout/footer.php'); ?>