<!DOCTYPE html>
<html>
<head>
    <title>Scroll Box with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .scroll-box {
            height: 20px; /* Tentukan tinggi kotak yang ingin Anda tampilkan */
            overflow: auto; /* Gunakan "auto" agar kotak bergulir muncul hanya ketika diperlukan */
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="scroll-box">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet turpis nec nisi vehicula tristique. Fusce sagittis sapien ac dui consectetur, nec pharetra lectus consectetur.</p>
                    <p>Vivamus hendrerit sapien a felis laoreet tincidunt. In non cursus nibh, id varius velit. Suspendisse malesuada dolor mauris, at faucibus orci ultricies id. Sed non efficitur lectus.</p>
                    <!-- Tambahkan konten lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
