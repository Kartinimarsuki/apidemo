<?php 

$header = apache_request_headers();
$key = $header['key'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demografi";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user WHERE api_key='$key'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "key token valid";
}else {
    "key token no";
}

?>