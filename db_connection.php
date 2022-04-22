<?php
    function openConnection()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "1234";
        $db = "example";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

        return $conn;
    }
    function closeConnection()
    {
        $conn -> close();
    }
?>