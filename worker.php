<?php

$surname = $_GET ["surname"];
$name = $_GET ["name"];
$middle_name = $_GET ["middle_name"];
$birthday = $_GET ["birthday"];
$sex = $_GET ["sex"];
$year = $_GET ["year"];
$language = $_GET ["language"];
$comment = $_GET ["comment"];
        $connect = mysql_connect("localhost", 'root', 123);

        mysql_select_db('asdfasdf');

        $query = "
                insert into
                student (surname, name, middle_name, birthday, sex, year, language, comment)
                value ('$surname', '$name', '$middle_name', '$birthday', '$sex', '$year', '$language', '$comment' )
        ";

        $result = mysql_query($query);

