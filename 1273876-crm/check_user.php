<?php

require_once('db_config.php');


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
