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
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "demografi";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT * FROM provinsi 
                INNER JOIN prov_agama ON provinsi.agama_id = prov_agama.id_prov 
                INNER JOIN kabupaten ON provinsi.id_prov = kabupaten.id_prov 
                GROUP BY provinsi.id_prov";
    
        $hasil_query = $conn->query($sql);
    
        if ($hasil_query->num_rows > 0) {
            // Membuat array data provinsi
            $provinsiArray = array();
    
            while ($row = $hasil_query->fetch_assoc()) {
                $provinsi = array(
                    "id_prov" => $row["id_prov"],
                    "nama_prov" => $row["nama_prov"],
                    "jml_kab" => $row["jml_kab"],
                    "jml_kota" => $row["jml_kota"],
                    "jml_kcmtn" => $row["jml_kcmtan"],
                    // ... (sisa data provinsi lainnya)
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
    
                $provinsi["agama_id"] = $agamaArray;
    
                $sql_kabupaten = "SELECT id_prov, kode_kab, nama_kab FROM kabupaten WHERE id_prov = " . $row["id_prov"];
                $result_kab = $conn->query($sql_kabupaten);
    
                if ($result_kab->num_rows > 0) {
                    $kabupatenArray = array();
    
                    while ($row_kabupaten = $result_kab->fetch_assoc()) {
                        $kabupaten = array(
                            "kode kabupaten" => $row_kabupaten["kode_kab"],
                            "nama kabupaten" => $row_kabupaten["nama_kab"]
                        );
    
                        $kabupatenArray[] = $kabupaten;
                    }
    
                    $provinsi["kabupaten"] = $kabupatenArray;
                } else {
                    $provinsi["kabupaten"] = array();
                }
    
                $provinsiArray[] = $provinsi;
            }
    
            $result['data'] = $provinsiArray; // Simpan data provinsi dalam kunci "data"
    
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