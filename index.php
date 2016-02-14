<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<ul>
        <?php
//
            $connect = mysql_connect("localhost", 'root', 123);

            mysql_select_db('asdfasdf');

        $query = 'SELECT * FROM student';

        $result = mysql_query($query);



        while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                $name = $line['name'];

                echo "<li>$name</li>";
        }
//


        ?>
</ul>

<ul>
    <?php

    // hgkjhgkh
    /*
                $students = [
                    'Ya',
                    'Ti',
                    'on',
                    'oni'
                ];

                for($i = 0; $i < 4; $i++) {
                    $name = $students[$i];
                    echo "<li>$name</li>";
                }


                for($i = 3; $i >= 0; $i--) {
                    $name = $students[$i];
                    echo "<li>$name</li>";
                }
    */
    ?>
</ul>
    <form>
        <div  style="border: 1px solid red;">
            <input type=text>
        </div>
        <div  style="border: 1px solid blue;">
            <select>
                <option>сложить</option>
                <option>отнять</option>
                <option>умножить</option>
                <option>делить</option>
            </select>
        </div>
        <div  style="border: 1px solid green;">
            <input type=text>
        </div>
        <div  style="border: 1px solid green;">
            <input type="submit">
        </div>
        <div  style="border: 1px solid green;">
            result
        </div>
    </form>
</body>
</html>