<!DOCTYPE html>
<html>

<head>
    <title>API Documentation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dokumentasi API Demografi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#introduction">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#endpoints">Endpoints</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formlogin.php">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container content">
        <section id="introduction">
            <h2>Beranda</h2>
            <p>
                API Demografi merupakan sebuah API yang menyimpan data Provinsi Sulawesi Selatan dan Sulawesi Barat.
                Data yang disimpan merupakan informasi mengenai informasi dan kondisi penduduk di wilayah tersebut.
                API ini dapat digunakan jika kita memiliki <strong>API Key</strong>.
            </p>
        </section><br>
        <section id="endpoints">
            <h2>Endpoints</h2>
            <p>
                Terdapat 3 Endpoint yang digunakan dalam API ini
            </p>
            <h6>1. Menampilkan Semua Data Provinsi dan Kabupaten</h6>
            <p>
                http://localhost/demografi/gad2.php
            </p>
            <h6>2. Menampilkan List Kabupaten</h6>
            <p>
                http://localhost/demografi/kabupaten_list.php
            </p>
            <h6>3. Menampilkan Detail Kabupaten dan Dapat Difilter Berdasarkan Parameter</h6>
            <p>
                http://localhost/demografi/getonekab.php?id_prov=1
            </p>
        </section>

    </div>
    <footer class="footer">
        <div class="container">
            <p> Create by Wulan & Kartini</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>