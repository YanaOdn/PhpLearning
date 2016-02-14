<?php

$surname = $_GET ["surname"];

        $connect = mysql_connect("localhost", 'root', 123);

        mysql_select_db('asdfasdf');

        $query = "insert into student (name) value ('$surname')";

        $result = mysql_query($query);

