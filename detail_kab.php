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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user WHERE api_key='$key'";
$hasil_query = $conn->query($sql);

if($hasil_query->num_rows > 0){
    if ($method == 'GET') {
        $result['status'] = [
            "code" => 200,
            "description" => 'Request Valid'
        ];
              
        $sql = "SELECT * FROM kabupaten 
                INNER JOIN kab_agama ON kabupaten.agama_id = kab_agama.id_kab
                GROUP BY kabupaten.id_kab";
    
        $hasil_query = $conn->query($sql);
    
        if ($hasil_query->num_rows > 0) {
            // Membuat array data kabupaten
            $kabupatenArray = array();
    
            while ($row = $hasil_query->fetch_assoc()) {
                $kabupaten = array(
                    "id_kab" => $row["id_kab"],
                    "id_prov" => $row["id_prov"],
                    "kode_kab" => $row["kode_kab"],
                    "nama_kab" => $row["nama_kab"],
                    "jml_kcmtn" => $row["jml_kcmtn"],
                    "jml_klrhn" => $row["jml_klrhn"],
                    "jml_desa" => $row["jml_desa"],
                    "jml_pnddk" => $row["jml_pnddk"],
                    "jml_kk" => $row["jml_kk"],
                );
    
                // Membuat array untuk menyimpan data agama
                $agamaArray = array(
                    "islam" => $row["islam"],
                    "kristen" => $row["kristen"],
                    "katholik" => $row["katholik"],
                    "hindu" => $row["hindu"],
                    "buddha" => $row["buddha"],
                    "konghucu" => $row["konghucu"]
                );
    
                $kabupaten["agama_id"] = $agamaArray;
    
                $kabupatenArray[] = $kabupaten;
            }
    
            $result['data'] = $kabupatenArray; // Simpan data kabupaten dalam kunci "data"
    
            echo json_encode($result);
        } else {
            $result['status'] = [
                "code" => 404,
                "description" => 'Data Not Found'
            ];
            echo json_encode($result);
        }
    
        $conn->close();
    } else {
        $result['status'] = [
            "code" => 400,
            "description" => 'Request Not Valid'
        ];
        echo json_encode($result);
    }
}else {
    $result['status'] = [
        "code" => 400,
        "description" => 'Api Key Not Valid'
    ];
    echo json_encode($result);
}


?>