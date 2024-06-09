<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <!-- Import Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles for Documentation */
        body {
            padding-top: 20px;
        }

        .navbar {
            margin-bottom: 20px;
        }

        main {
            padding: 20px;
        }

        .endpoint-section {
            margin-bottom: 40px;
        }

        .endpoint-section h2 {
            margin-bottom: 10px;
        }

        .endpoint-section pre {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">API Documentation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#endpoint1">Endpoint 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#endpoint2">Endpoint 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#endpoint3">Endpoint 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <section id="endpoint1" class="endpoint-section">
            <h2>Endpoint 1</h2>
            <p>Description of Endpoint 1.</p>
            <h3>HTTP Request</h3>
            <pre>GET /api/endpoint1</pre>
            <h3>Parameters</h3>
            <pre>
        {
          "param1": "value",
          "param2": "value"
        }
      </pre>
            <h3>Response</h3>
            <pre>
        {
          "result": "data"
        }
      </pre>
        </section>
        <section id="endpoint2" class="endpoint-section">
            <h2>Endpoint 2</h2>
            <!-- Add content for Endpoint 2 here -->
        </section>
        <section id="endpoint3" class="endpoint-section">
            <h2>Endpoint 3</h2>
            <!-- Add content for Endpoint 3 here -->
        </section>
    </main>

    <!-- Import Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>