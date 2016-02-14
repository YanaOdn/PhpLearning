<pre>



    <?php

//    print_r($_REQUEST);

    ?>

</pre>

<?php
if (!empty($_POST)){
    $a = $_POST['argA'];
    $b = $_POST['argB'];
    $operation = $_POST['operation'];


    if ($operation == 'sum')
        echo $a + $b;
    else if ($operation == 'substruct')
        echo $a - $b;
    else if ($operation == 'multiplication')
        echo $a * $b;
    else if ($operation == 'division')
        echo $a / $b;
}

