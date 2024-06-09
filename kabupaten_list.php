<?php
header("Content-Type: application/json");
//untuk menegcek apakah api key ada atau tidak
if (!isset($_SERVER['HTTP_KEY'])) {
    http_response_code(401);
    $result['status'] = [
        "code" => 400,
        "description" => 'Masukkan Api Key Anda'
    ];
    echo json_encode($result);
    exit;
}

$key = $_SERVER['HTTP_KEY'];

//tangkap key
$header = apache_request_headers();
$key = $header['key'];

$method = $_SERVER['REQUEST_METHOD'];

$result = array();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demografi";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user WHERE api_key='$key'";
$hasil_query = $conn->query($sql);

if($hasil_query->num_rows > 0){
    if ($method == 'GET') {
        $result['status'] = [
            "code" => 200,
            "description" => 'Request Valid'
        ];
    
        
    
        $sql = "SELECT id_kab, id_prov, kode_kab, nama_kab FROM kabupaten";
    
        $hasil_query = $conn->query($sql);
    
        $result['hasil'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
    
    } else {
        $result['status'] = [
            "code" => 400,
            "description" => 'Request Not Valid'
        ];
    }
}else {
    $result['status'] = [
        "code" => 400,
        "description" => 'Api Key Not Valid'
    ];
}



echo json_encode($result);

?>