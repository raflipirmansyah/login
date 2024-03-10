<?php
$server = 'https://raflipirmansyah.github.io/';
$username = 'raflipirmansyah';
$password = '251101Dota2511';
$database = 'login_register_db';

if (isset($_POST))

    $conn = new mysqli($server, $username, $password, $database);
if ($conn) {
    // echo 'Server Connected Success';
} else {
    die(mysqli_error($conn));
}
