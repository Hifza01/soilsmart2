<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('image/icon.png') }}">
    <title>SoilSmart Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progress.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js"></script>
</head>
<body class="body">
    <!-- Header -->
    <div class="header">
        <nav class="navbar">
            <img src="{{ asset('image/logo_nama.png') }}" alt="" class="logo">
            <div class="header-right">        
                <a data-bs-toggle="modal" data-bs-target="#myModal">
                    <img src="{{ asset('image/icon2.png') }}" alt="">
                </a>
                <a href="#" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img src="{{ asset('image/icon1.png') }}" alt="">
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Notifikasi</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr><td>#</td></tr>
                                    <tr><td>#</td></tr>
                                    <tr><td>#</td></tr>
                                    <tr><td>#</td></tr>
                                    <tr><td>#</td></tr>
                                    <tr><td>#</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Content -->
    <center>
        <div class="space1"></div>
        <div class="card">
            <div class="container">
                <h4>Sensor Pada Tanah</h4>
                <div class="row">
                    <div class="col">
                        <div id="sensor1" class="progress-bar-container"></div>
                    </div>
                    <div class="col">
                        <div id="sensor2" class="progress-bar-container"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="space"></div>
        <div class="card">
            <div class="container">
                <h4>Sensor Pada Tabung</h4>
                <div class="row">
                    <div class="col">
                        <div id="sensorOnCylinder" class="progress-bar-container"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="space1"></div>
    </center>

    <!-- Footer -->
    <footer>
        <p>COPYRIGHT © SOILSMART</p>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/bar.js') }}"></script>
</body>
</html>
