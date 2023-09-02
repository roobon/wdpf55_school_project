<?php 

    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DATABASE", "project");

    $db = new mysqli (HOST, USER, PASS, DATABASE) or die("Something wrong");

?>