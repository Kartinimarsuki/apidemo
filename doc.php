<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apple API Documentation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9a7ca3">
    <div class="container">
      <!-- <a class="navbar-brand" href="#">Logo</a> -->
      <img src="../image/logo.png" alt="Logo" width="30rem">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="">Documentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="index.php#products">Products</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color:white" href="akun.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Product Section -->
  <section class="products" id="products">
    <div class="container">
      <h2 class="text-center mb-4">Explore Apple Products Documentation</h2>
      <div class="row justify-content-center">
        <div class="col-sm-3">
          <div class="list-group list-group-flush ">
            <a href="#section1" class="list-group-item list-group-item-dark fw-bold" style="background-color: #c8b7c9;">iPhone</a>
            <a href="#section2" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Endpoint iPhone<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section3" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Parameter iPhone<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section4" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh Request iPhone<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section5" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh Response iPhone<i class="pull-right fas fa-solid fa-chevron-right"></i></a>

            <a href="#section6" class="list-group-item list-group-item-dark fw-bold" style="background-color: #c8b7c9;">iPad</a>
            <a href="#section7" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Endpoint iPad<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section8" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Parameter iPad<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section9" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh Request iPad<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section10" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh Response iPad<i class="pull-right fas fa-solid fa-chevron-right"></i></a>

            <a href="#section11" class="list-group-item list-group-item-dark fw-bold" style="background-color: #c8b7c9;">MacBook</a>
            <a href="#section12" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Endpoint MacBook<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section13" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Parameter MacBook<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section14" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh Request MacBook<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
            <a href="#section15" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh Response MacBook<i class="pull-right fas fa-solid fa-chevron-right"></i></a>

          </div>
        </div>
        <div class="col-sm-9">
            <div id="section1">
              <h4 class="fw-bold">iPhone</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo recusandae optio quos obcaecati praesentium ducimus rerum dolorem excepturi eos labore quae, debitis doloremque sed. Eos laboriosam quos nam fuga alias!</p>
            </div>
            <div id="section2">
              <h4>Endpoint iPhone</h4>
              <ul class="list-group">
                <li class="list-group-item list-group-item-dark" style="background-color: #c8b7c9;">Endpoint</code></pre></li>
                <li class="list-group-item list-group-item-secondary" style="background-color: #f4e6f5"><pre><code>http://localhost/api-apple/get-all-data-iphone.php</code></pre></li>
              </ul>
            </div>
            <br>
            <div id="section3">
              <h4>Parameter iPhone</h4>
              <table class="table table table-hover">
                <thead>
                  <tr style="background-color: #c8b7c9;">
                    <th>Method</th>
                    <th>Parameter</th>
                    <th>Type</th>
                    <th>Require</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody class="table table-hover" style="background-color: #f4e6f5">
                  <tr>
                    <td>GET/HEAD</td>
                    <td>Key</td>
                    <td>String</td>
                    <td>Required</td>
                    <td>API Key</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>Id</td>
                    <td>String</td>
                    <td>Optional</td>
                    <td>Id iphone</td>
                  </tr>
                </tbody>
            </table>
            </div>
            <div id="section4">
              <h4>Contoh Request iPhone</h4>
              <div class="card">
                <div class="card-header" style="background-color: #c8b7c9;">Request</div>
                <div class="card-body"><pre><code>&lt;?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/api-apple/get-all-data-iphone.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: your-api-key"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?&gt;</code></pre>
                </div>
              </div>
            </div>
            <div id="section5">
              <h4>Contoh Response iPhone</h4>
              <div class="card">
                <div class="card-header" style="background-color: #c8b7c9;">Response</div>
                <div class="card-body"><pre><code>
{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "results": [
        {
            "id_iphone": "1",
            "nama": "iPhone 11",
            "warna": "Hitam, Putih, Ungu, Hijau, Kuning, (PRODUCT)RED",
            "kapasitas": "64 GB | 128 GB",
            "harga": "Rp 6.999.000, Rp 8.999.000",
            "ukuran_layar": "Layar Liquid Retina HD 6,1 inci",
            "kamera": "Kamera ganda 12 MP (Utama dan Ultra Wide) dan kamera depan TrueDepth 12 MP",
            "prosesor": "Chip A13 Bionic",
            "baterai": "Pemutaran video hingga 17 jam; pemutaran video hingga 10 jam (streaming)",
            "gambar": "https://drive.google.com/file/d/1cheQ08Iky7-_-9YJFGPAaDjy0RPvuLng/view"
        },
        {
            "id_iphone": "2",
            "nama": "iPhone SE Gen 3",
            "warna": "Midnight, Starlight, (PRODUCT)RED",
            "kapasitas": "64 GB | 128 GB | 256 GB",
            "harga": "Rp 7.999.000, Rp 9.499.000, Rp 10.999.000",
            "ukuran_layar": "Layar Retina HD 4,7 inci",
            "kamera": "Kamera tunggal 12 MP (Utama) dan Kamera FaceTime HD 7 MP",
            "prosesor": "Chip A15 Bionic",
            "baterai": "Pemutaran video hingga 15 jam; pemutaran video hingga 10 jam (streaming)",
            "gambar": "https://drive.google.com/file/d/1pgb8rhFS3n30pwtJPbEUcJ6uS-ajffuZ/view"
        }
    ]
}
</pre></code>
                </div>
              </div>
            </div>
            <div id="section6" class="mt-5">
              <h4 class="fw-bold">iPad</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo recusandae optio quos obcaecati praesentium ducimus rerum dolorem excepturi eos labore quae, debitis doloremque sed. Eos laboriosam quos nam fuga alias!</p>
            </div>
            <div id="section7">
              <h4>Endpoint iPad</h4>
              <ul class="list-group">
              <li class="list-group-item list-group-item-dark" style="background-color: #c8b7c9;">Endpoint</li>
                <li class="list-group-item list-group-item-secondary" style="background-color: #f4e6f5"><pre><code>http://localhost/api-apple/get-all-data-ipad.php</code></pre></li>
              </ul>
            </div>
            <br>
            <div id="section8">
              <h4>Parameter iPad</h4>
              <table class="table table-hover">
                <thead style="background-color: #c8b7c9;">
                  <tr>
                    <th>Method</th>
                    <th>Parameter</th>
                    <th>Type</th>
                    <th>Require</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody class="table table-hover" style="background-color: #f4e6f5">
                  <tr>
                    <td>GET/HEAD</td>
                    <td>Key</td>
                    <td>String</td>
                    <td>Required</td>
                    <td>API Key</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>Id</td>
                    <td>String</td>
                    <td>Optional</td>
                    <td>Id ipad</td>
                  </tr>
                </tbody>
            </table>
            </div>
            <div id="section9">
              <h4>Contoh Request iPad</h4>
              <div class="card">
                <div class="card-header" style="background-color: #c8b7c9;">Request</div>
                <div class="card-body"><pre><code>&lt;?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/api-apple/get-all-data-ipad.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: your-api-key"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?&gt;</code></pre>
                </div>
              </div>
            </div>
            <div id="section10">
              <h4>Contoh Response iPad</h4>
              <div class="card">
                <div class="card-header" style="background-color: #c8b7c9;">Response</div>
                <div class="card-body"><pre><code>
{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "results": [
        {
            "id_ipad": "1",
            "nama": "iPad mini Generasi 6",
            "warna": "Ungu, pink, starlight, abu-abu",
            "kapasitas": "64 GB | 256 GB",
            "konektivitas": "Wi-Fi, Wi-Fi+Cellular",
            "harga": "Rp 9.299.000, Rp 12.299.000, Rp 15.399.000",
            "ukuran_layar": "Layar Liquid Retina 8,3 inci",
            "prosesor": "Chip A15 Bionic",
            "kamera": "Kamera Wide 12 MP dan Kamera depan Ultra Wide 12 MP",
            "gambar": "https://drive.google.com/file/d/1i6m3PVUZ239N687ZTwddEEg9mURDtTBq/view"
        },
        {
            "id_ipad": "2",
            "nama": "iPad Generasi 9",
            "warna": "Perak, abu-abu",
            "kapasitas": "65 GB | 256 GB",
            "konektivitas": "Wi-Fi, Wi-Fi+Cellular",
            "harga": "Rp 5.699.000, Rp 8.499.000, Rp 10.999.000",
            "ukuran_layar": "Layar Retina 10,2 inci",
            "prosesor": "Chip A13 Bionic",
            "kamera": "Kamera Wide 8 MP dan Kamera depan Ultra Wide 12 MP",
            "gambar": "https://drive.google.com/file/d/1BxxPs27BHMpZhrNBueEDPcxxSoJH7wUY/view"
        }
    ]
}
</pre></code>
                </div>
              </div>
            </div>
            <div id="section11" class="mt-5">
              <h4 class="fw-bold">MacBook</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo recusandae optio quos obcaecati praesentium ducimus rerum dolorem excepturi eos labore quae, debitis doloremque sed. Eos laboriosam quos nam fuga alias!</p>
            </div>
            <div id="section12">
              <h4>Endpoint MacBook</h4>
              <ul class="list-group">
              <li class="list-group-item list-group-item-dark" style="background-color: #c8b7c9;">Endpoint</li>
                <li class="list-group-item list-group-item-secondary" style="background-color: #f4e6f5"><pre><code>http://localhost/api-apple/get-all-data-macbook.php</code></pre></li>
              </ul>
            </div>
            <br>
            <div id="section13">
              <h4>Parameter MacBook</h4>
              <table class="table table-hover">
                <thead style="background-color: #c8b7c9;">
                  <tr>
                    <th>Method</th>
                    <th>Parameter</th>
                    <th>Type</th>
                    <th>Require</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody class="table table-hover" style="background-color: #f4e6f5">
                  <tr>
                    <td>GET/HEAD</td>
                    <td>Key</td>
                    <td>String</td>
                    <td>Required</td>
                    <td>API Key</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>Id</td>
                    <td>String</td>
                    <td>Optional</td>
                    <td>Id macbook</td>
                  </tr>
                </tbody>
            </table>
            </div><div id="section14">
              <h4>Contoh Request MacBook</h4>
              <div class="card">
                <div class="card-header" style="background-color: #c8b7c9;">Request</div>
                <div class="card-body"><pre><code>&lt;?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/api-apple/get-all-data-macbook.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: your-api-key"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?&gt;</code></pre>
                </div>
              </div>
            </div><div id="section15">
              <h4>Contoh Response MacBook</h4>
              <div class="card">
                <div class="card-header" style="background-color: #c8b7c9;">Response</div>
                <div class="card-body"><pre><code>
{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "results": [
        {
            "id_macbook": "1",
            "nama": "MacBook Pro 14 inci (M1)",
            "warna": "Space Grey, Silver",
            "penyimpanan": "512 GB | 1 TB",
            "harga": "Rp 26.999.000, Rp 34.499.000",
            "ukuran_layar": "Layar Liquid Retina XDR 14,2”",
            "prosesor": "Chip Apple M1 Pro atau chip Apple M1 Max",
            "cpu_core": "CPU 10-core",
            "gpu_core": "GPU 16-core",
            "gambar": "https://drive.google.com/file/d/1qUFIhNCRp2ev59Y-PWDta2zgn9O2MnDQ/view"
        },
        {
            "id_macbook": "2",
            "nama": "MacBook Pro 16 inci (M1)",
            "warna": "Space Grey, Silver",
            "penyimpanan": "512 GB | 1 TB",
            "harga": "Rp 36.499.000, Rp 48.999.000",
            "ukuran_layar": "Layar Liquid Retina XDR 16,2”",
            "prosesor": "Chip Apple M1 Pro atau chip Apple M1 Max",
            "cpu_core": "CPU 10-core",
            "gpu_core": "GPU 32-core",
            "gambar": "https://drive.google.com/file/d/1uXYKw3S8dUov_4eLCCLc3nbQ-Tlt0QNM/view"
        }
    ]
}
</pre></code>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Apple. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

</body>

</html>