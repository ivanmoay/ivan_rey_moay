<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">4.  Create a queue of integers using arrays (first in first out )</h3>
    <ul class="list-disc list-inside text-gray-700 text-lg">
        <li>Create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the old value</li>
        <li>Always display the existing queue content</li>
        <li>Do not use pre-defined PHP array function like <span class="font-bold">array_pop</span></li>
    </ul>
    <br/>    
</div>

<p class="text-gray-700 text-lg">Queue</p>
<?php
    session_start();
    if(!isset($_SESSION['queue'])){
        $_SESSION['queue'] = array();        
    }
    if(!isset($_SESSION['head'])){
        $_SESSION['head'] = 0;        
    }
    $queue_max = 10;
    if(isset($_POST['val'])){
        if(count($_SESSION['queue']) < $queue_max){
            $_SESSION['queue'][] = $_POST['val'];
        }else{
            echo 'Queue limit reached(10).';
        }        
    }

    if(isset($_POST['pop'])){
        unset($_SESSION['queue'][$_SESSION['head']]);
        $_SESSION['head']++;
        if(count($_SESSION['queue']) <= 0){
            $_SESSION['head'] = 0;        
        }        
    }
    // print_r($_SESSION['queue']);
    // echo $_SESSION['head'];
    // $_SESSION['queue'] = array();  
    // $_SESSION['head'] = 0;   
?>

<table class="border-collapse border border-gray-400">
  <thead>
    <tr>
        <?php foreach($_SESSION['queue'] as $item): ?>
            <th class="border border-gray-400 px-6 py-2"><?= $item; ?></th>
        <?php endforeach; ?> 
    </tr>
  </thead>
</table>

<div class="flex justify-start items-end">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="part2_4.php" method="POST" class="space-y-4">
            <div>
                <label for="input" class="block text-gray-800 font-semibold mb-1">Value</label>
                <input type="number" id="input" name="val" class="w-full border-gray-400 border-solid border-2 p-3 rounded-lg focus:outline-none focus:border-teal-500" required>
            </div>
            <button type="submit" class="w-full bg-teal-700 text-white font-semibold py-3 rounded-lg hover:bg-teal-600 transition duration-300">Push</button>
        </form>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="part2_4.php" method="POST" class="space-y-4">
            <button type="submit" name="pop" class="w-32 bg-teal-700 text-white font-semibold py-3 rounded-lg hover:bg-teal-600 transition duration-300">Pop</button>
        </form>
    </div>
</div>

<?php require_once('../layout/footer.php'); ?>