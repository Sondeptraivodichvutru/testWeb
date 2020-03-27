<?php

$conn = new mysqli('localhost', 'root', '', 'tunesource');
if (!$conn) {
    die("Connecion failed: " . mysqli_connect_error());
}