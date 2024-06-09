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
    
        // Periksa apakah parameter id_prov telah diberikan dalam permintaan GET
        if (isset($_GET['id_prov'])) {
            $id_prov = $_GET['id_prov'];
            // $kode_kab = $_GET['kode_kab'];
    
            // Lakukan sanitasi pada nilai id_prov untuk mencegah SQL Injection
            $id_prov = mysqli_real_escape_string($conn, $id_prov);
    
            // Query SQL untuk mengambil data kabupaten berdasarkan id_prov
            $sql = "SELECT * FROM kabupaten WHERE id_prov = $id_prov";
    
            $hasil_query = $conn->query($sql);
    
            if ($hasil_query->num_rows > 0) {
                $result['hasil'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
            } else {
                $result['status'] = [
                    "code" => 400,
                    "description" => 'Id Provinsi tidak terdapat dalam Database'
                ];
            }
        } else {
            $sql = "SELECT * FROM kabupaten INNER JOIN kab_agama ON kabupaten.agama_id = kab_agama.id_kab GROUP BY kabupaten.id_kab ";
    
            $hasil_query = $conn->query($sql);
            if ($hasil_query->num_rows > 0) {
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
        
            }
        }
    
        $conn->close();
    } else {
        $result['status'] = [
            "code" => 400,
            "description" => 'Methode is Not Valid'
        ];
    }
}else {
    $result['status'] = [
        "code" => 400,
        "description" => 'Api Key is Not Valid'
    ];
}



echo json_encode($result);
?>