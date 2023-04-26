<?php require_once('../layout/header.php'); ?>
<div class="my-2">
    <a class="text-teal-700 hover:underline" href="../index.php">Home</a>
</div>
<div class="my-2">
    <h3 class="text-gray-700 font-bold text-xl">6.   Fix the code function to output the correct result. Explain your answer</h3>
    <div>
        <pre class="text-teal-400 bg-black">
        function bubbleSort($lists)
        {
            $length = count($lists);
            for ($parent = 0; $parent < $length; $parent++) {
                for ($child = 0; $child < $length - $parent - 1; $child++) {
                    if ($lists[$child] > $lists[$child + 1]) {
                        $temp = $lists[$child + 1];
                        $lists[$child] = $lists[$child + 1];
                        $lists[$child + 1] = $temp;
                    }
                }
            }
        }
        </pre>
    </div>
    <div class="mt-4">
        <span class="font-bold text-xl">Solution(Explanation in comments):</span>
        <pre class="text-teal-400 bg-black">
        function bubbleSort($lists)
        {
            $length = count($lists);
            for ($parent = 0; $parent < $length; $parent++) {
                <span class="text-red-700">for ($child = 0; $child < $length; $child++) { /* <-iterate over all items in list */</span>
                    <span class="text-red-700">if ($lists[$child] > $lists[$parent]) {    /* <-compare all child items to current parent item */</span>
                        <span class="text-red-700">$temp = $lists[$child];                /* <-store child item to temp variable */</span>
                        <span class="text-red-700">$lists[$child] = $lists[$parent];      /* <-replace child item with parent item */</span>
                        <span class="text-red-700">$lists[$parent] = $temp;               /* <-replace parent item with child item stored in temp variable */</span>
                    }
                }
            }
            <span class="text-red-700">return $lists; /* <-return sorted lists */</span>
        }
        </pre>
    </div>
</div>

<?php
    // $lists = [99,44,6,2,1,5,63,87,283,4,0];
    // $lists = bubbleSort($lists);
    // print_r($lists);
    // function bubbleSort($lists)
    // {
    //     $length = count($lists);
    //     for ($parent = 0; $parent < $length; $parent++) {
    //         for ($child = 0; $child < $length; $child++) {
    //             if ($lists[$child] > $lists[$parent]) {
    //                 $temp = $lists[$child];
    //                 $lists[$child] = $lists[$parent];
    //                 $lists[$parent] = $temp;
    //             }
    //         }
    //     }
    //     return $lists;
    // }
?>


<br/>

<?php require_once('../layout/footer.php'); ?>