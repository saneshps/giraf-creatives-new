<?php
$servername = "localhost";
$username = "u710565998_girafcreatives";
$password = "fuy~S[2-wo]h";
$database = "u710565998_girafcreatives";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
