<?php

session_start();

// Memeriksa apakah pengguna telah login
if (isset($_SESSION['uname'])) {
    // Pengguna telah login, lakukan tindakan yang sesuai
    $username = $_SESSION['uname'];
} else {
    // Pengguna belum login, arahkan ke halaman login
    header("Location: formlogin.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>API Documentation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar .navbar-brand {
            color: #fff;
            font-size: 24px;
        }

        .navbar .nav-link {
            color: #fff;
            font-size: 16px;
        }

        .content {
            padding: 30px;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            color: #343a40;
            margin-bottom: 20px;
        }

        .content p {
            color: #555;
        }
        .scroll-box {
            height: 150px; /* Tentukan tinggi kotak yang ingin Anda tampilkan */
            overflow: auto; /* Gunakan "auto" agar kotak bergulir muncul hanya ketika diperlukan */
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">API Documentation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apikey.php">API Key</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <?php echo $_SESSION['uname'] ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="products" id="products">
        <div class="container">
            <h2 class="text-center mb-4">Dokumentasi API Demografi Sulawesi</h2>
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="list-group list-group-flush ">
                        <a href="#section1" class="list-group-item list-group-item-dark fw-bold"
                            style="background-color: #66CDAA;">Provinsi dan Kabupaten</a>
                        <a href="#section2"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Endpoint
                            Provinsi dan Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
                        <a href="#section3"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Parameter
                            Provinsi dan Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
                        <a href="#section5"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh
                            Response Provinsi dan Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>

                        <a href="#section6" class="list-group-item list-group-item-dark fw-bold"
                            style="background-color: #66CDAA;">Kabupaten</a>
                        <a href="#section7"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Endpoint
                            Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
                        <a href="#section8"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Parameter
                            Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
                        <a href="#section10"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh
                            Response Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>

                        <a href="#section11" class="list-group-item list-group-item-dark fw-bold"
                            style="background-color: #66CDAA;">Detail Kabupaten</a>
                        <a href="#section12"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Endpoint
                            Detail Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
                        <a href="#section13"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Parameter
                            Detail Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>
                        <a href="#section15"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Contoh
                            Response Detail Kabupaten<i class="pull-right fas fa-solid fa-chevron-right"></i></a>

                    </div>
                </div>
                <div class="col-sm-9">
                    <div id="section1">
                        <h4 class="fw-bold">Provinsi dan Kabupaten</h4>
                        <p>Endpoint ini digunakan untuk menampilkan informasi data Provinsi dan daftar Kabupaten yang ada dalam Provinsi tersebut. </p>
                    </div>
                    <div id="section2">
                        <h4>Endpoint Provinsi dan Kabupaten</h4>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-dark" style="background-color: #66CDAA;">
                                URL</code></pre>
                            </li>
                            <li class="list-group-item list-group-item-secondary" style="background-color: #f4e6f5">
                                <pre><code>http://localhost/demografi/gad2.php</code></pre>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div id="section3">
                        <h4>Parameter Provinsi dan Kabupaten</h4>
                        <table class="table table table-hover">
                            <thead>
                                <tr style="background-color: #66CDAA;">
                                    <th>Method</th>
                                    <th>Parameter</th>
                                    <th>Tipe</th>
                                    <th>Wajib</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="table table-hover" style="background-color: #f4e6f5">
                                <tr>
                                    <td>GET/HEAD</td>
                                    <td>Key</td>
                                    <td>String</td>
                                    <td>Wajib</td>
                                    <td>API Key</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="section4">
                        
                    <div id="section5">
                        <h4>Contoh Response Provinsi dan Kabupaten</h4>
                        <div class="card">
                            <div class="card-header" style="background-color: #66CDAA;">Response Sukses</div>
                            <div class="scroll-box">
                            <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "data": [
        {
            "id_prov": "1",
            "nama_prov": "Sulawesi Selatan",
            "jml_kab": "21",
            "jml_kota": "3",
            "jml_kcmtn": "313",
            "agama_id": {
                "islam": "8359166",
                "kristen": "688910",
                "katholik": "150301",
                "hindu": "63415",
                "buddha": "20169",
                "konghucu": "70"
            },
            "kabupaten": [
                {
                    "kode kabupaten": "10",
                    "nama kabupaten": "Pangkajene dan Kepulauan"
                },
            ]
        }
}
</pre></code>
                            </div>
                        </div> <br>
                        <div class="card">
                            <div class="card-header" style="background-color: #66CDAA;">Response Gagal</div>
                            <div class="scroll-box">
                            <pre><code>{
    "status": {
        "code": 400,
        "description": "Masukkan Api Key Anda"
    }
}
</pre></code>
                            </div>
                        </div>
                    </div>
                    <div id="section6" class="mt-5">
                        <h4 class="fw-bold">Kabupaten</h4>
                        <p>Endpoint ini digunakan untuk menampilkan daftar kode dan nama kabupaten yang ada di Sulawesi.</p>
                    </div>
                    <div id="section7">
                        <h4>Endpoint Kabupaten</h4>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-dark" style="background-color: #66CDAA;">Endpoint
                            </li>
                            <li class="list-group-item list-group-item-secondary" style="background-color: #f4e6f5">
                                <pre><code>http://localhost/demografi/kabupaten_list.php</code></pre>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div id="section8">
                        <h4>Parameter Kabupaten</h4>
                        <table class="table table-hover">
                            <thead style="background-color: #66CDAA;">
                                <tr>
                                    <th>Method</th>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Wajib</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="table table-hover" style="background-color: #f4e6f5">
                                <tr>
                                    <td>GET/HEAD</td>
                                    <td>Key</td>
                                    <td>String</td>
                                    <td>Wajib</td>
                                    <td>API Key</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="section10">
                        <h4>Contoh Response Kabupaten</h4>
                        <div class="card">
                            <div class="card-header" style="background-color: #66CDAA;">Response Sukses</div>
                            <div class="scroll-box">
                                <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "hasil": [
        {
            "id_kab": "1",
            "id_prov": "1",
            "kode_kab": "10",
            "nama_kab": "Pangkajene dan Kepulauan"
        },
        {
            "id_kab": "2",
            "id_prov": "1",
            "kode_kab": "9",
            "nama_kab": "Kabupaten Maros"
        },
    ]
}
</pre></code>
                            </div> <br>
                            <div class="card-header" style="background-color: #66CDAA;">Response Gagal</div>
                            <div class="scroll-box">
                                <pre><code>{
    "status": {
        "code": 400,
        "description": "Masukkan Api Key Anda"
    }
}
</pre></code>
                            </div>
                        </div>
                    </div>
                    <div id="section11" class="mt-5">
                        <h4 class="fw-bold">Detail Kabupaten</h4>
                        <p>Endpoint ini digunakan untuk menampilkan informasi detail dari suatu Kabupaten. Kita dapat menampilkan semua kabupaten secara bersamaan dan dapat juga menampilkan berdasarkan Id Provinsi. Jika menampilkan berdasarkan Id Provinsi maka Kabupaten yang muncul adalah Kabupaten yang berada dalam satu wilayah Provinsi.</p>
                    </div>
                    <div id="section12">
                        <h4>Endpoint Detail Kabupaten</h4>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-dark" style="background-color: #66CDAA;">Endpoint
                            </li>
                            <li class="list-group-item list-group-item-secondary" style="background-color: #f4e6f5">
                                <pre><code>http://localhost/demografi/getonekab.php?id_prov=1</code></pre>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div id="section13">
                        <h4>Parameter Detail Kabupaten</h4>
                        <table class="table table-hover">
                            <thead style="background-color: #66CDAA;">
                                <tr>
                                    <th>Method</th>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Wajib</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="table table-hover" style="background-color: #f4e6f5">
                                <tr>
                                    <td>GET/HEAD</td>
                                    <td>Key</td>
                                    <td>String</td>
                                    <td>Wajib</td>
                                    <td>API Key</td>
                                </tr>
                                <tr>
                                    <td>GET</td>
                                    <td>id_prov</td>
                                    <td>String</td>
                                    <td>Tidak Wajib</td>
                                    <td>Id Provinsi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="section15">
                        <h4>Contoh Response Detail Kabupaten</h4>
                        <div class="card">
                            <div class="card-header" style="background-color: #66CDAA;">Response Sukses</div>
                            <div class="scroll-box">
                                <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "hasil": [
        {
            "id_kab": "1",
            "id_prov": "1",
            "kode_kab": "10",
            "nama_kab": "Pangkajene dan Kepulauan",
            "jml_kcmtn": "13",
            "jml_klrhn": "38",
            "jml_desa": "65",
            "jml_pnddk": "353098",
            "jml_kk": "109419",
            "agama_id": "1"
        },
        {
            "id_kab": "2",
            "id_prov": "1",
            "kode_kab": "9",
            "nama_kab": "Kabupaten Maros",
            "jml_kcmtn": "14",
            "jml_klrhn": "23",
            "jml_desa": "80",
            "jml_pnddk": "391489",
            "jml_kk": "120008",
            "agama_id": "2"
        },
    ]
}

</pre></code>
                            </div>
                        </div><br>
                        <div class="card-header" style="background-color: #66CDAA;">Response Gagal</div>
                            <div class="scroll-box">
                                <pre><code>{
    "status": {
        "code": 400,
        "description": "Masukkan Api Key Anda"
    }
}
</pre></code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p> Create by Wulan & Kartini</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>