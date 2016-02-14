<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="/calc.php" method="post">
    <div  style="border: 1px solid red;">
        <input type=text name="argA">
    </div>
    <div  style="border: 1px solid blue;">
        <select name = 'operation'>
            <option value = 'sum'>сложить</option>
            <option value = 'substruct'>отнять</option>
            <option value = 'multiplication'>умножить</option>
            <option value = 'division'>делить</option>
        </select>
    </div>
    <div  style="border: 1px solid green;">
        <input type=text name="argB">
    </div>
    <div  style="border: 1px solid green;">
        <input type="submit">
    </div>
    <div  style="border: 1px solid green;">
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
        ?>
</div>
</form>
</body>
</html>