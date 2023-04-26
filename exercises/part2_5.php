<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">5.   Using a PHP POST method, ask the user to input 2 numbers</h3>
    <ul class="list-disc list-inside text-gray-700 text-lg">
        <li>Create a Grid using 2 inputs as the length and width.</li>
        <li>Insert random CONSONANT letters into the grid</li>
        <li>Display the grid in table</li>
    </ul>
    <br/>    
</div>

<div class="flex justify-start items-end">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="part2_5.php" method="POST" class="space-y-4">
            <div>
                <label for="input" class="block text-gray-800 font-semibold mb-1">Length</label>
                <input type="number" id="input" name="length" value="<?php echo isset($_POST['length']) ? $_POST['length'] : '' ?>" class="w-full border-gray-400 border-solid border-2 p-3 rounded-lg focus:outline-none focus:border-teal-500" required>
            </div>
            <div>
                <label for="input" class="block text-gray-800 font-semibold mb-1">Width</label>
                <input type="number" id="input" name="width" value="<?php echo isset($_POST['width']) ? $_POST['width'] : '' ?>" class="w-full border-gray-400 border-solid border-2 p-3 rounded-lg focus:outline-none focus:border-teal-500" required>
            </div>
            <button type="submit" class="w-full bg-teal-500 text-white font-semibold py-3 rounded-lg hover:bg-teal-600 transition duration-300">Generate</button>
        </form>
    </div>
</div>
<br/>
<p class="text-gray-700 text-lg">Result</p>
<?php
    if(isset($_POST['length'])){
        $length = $_POST['length'];
        $width = $_POST['width'];

        $grid = [[]];

        $consonants = Array
        (
            0 => 'b',
            1 => 'c',
            2 => 'd',
            3 => 'f',
            4 => 'g',
            5 => 'h',
            6 => 'j',
            7 => 'k',
            8 => 'l',
            9 => 'm',
            10 => 'n',
            11 => 'p',
            12 => 'q',
            13 => 'r',
            14 => 's',
            15 => 't',
            16 => 'v',
            17 => 'w',
            18 => 'x',
            19 => 'y',
            20 => 'z'
        );
        
        for ($i=0; $i < $length; $i++) { 
            for ($j=0; $j < $width; $j++) { 
                $grid[$i][$j] = $consonants[rand(0, 20)];
            }
        }       

    }
    else{
        $length = 0;
        $width = 0;
        $grid = [[]];
    }
?>

<table class="border-collapse border border-gray-400">
    <?php for($i=0; $i < $length; $i++): ?>
        <tr>
            <?php for ($j=0; $j < $width; $j++): ?>
                <td class="border border-gray-400 px-6 py-2 font-bold"><?= $grid[$i][$j]; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<br/>

<?php require_once('../layout/footer.php'); ?>