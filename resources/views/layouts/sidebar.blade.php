<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        body {
          background-color: #f4f4f4;
        }
        .wrapper {
          min-height: 100vh;
          display: flex;
          flex-direction: column;
        }
    
        a {
          text-decoration: none;
          color: white;
          display: inline-block;
          padding: 10px;
          padding-right: 30px;
          padding-left: 20px;
        }
        a:hover {
          background-color: rgb(138, 138, 138);
          color: white;
        }
    
        #content {
          flex: 1;
        }
    
        #sidebar {
          background-color: #343a40;
          color: #fff;
          width: 200px;
          padding: 20px;
          padding-bottom: 100%;
        }
        #footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: #333;
          color: #fff;
          text-align: center;
          padding: 7px;
        }
      </style>
</head>
<body class="wrapper">
    <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-md-3" id="sidebar">
            <!-- isi sidebar -->
            <h2>Menu</h2>
            <br />
            <ul class="list-group">
              <li type="none" class="mb-2 bi bi-speedometer"><a href="/">Dashboard</a></li>
              <li type="none" class="mb-2 bi bi-credit-card"><a href="/transaksi-kasir">Transaksi</a></li>
              <li type="none" class="mb-2 bi bi-basket-fill"><a href="/barang">Barang</a></li>
              <li type="none" class="mb-2 bi bi-people-fill"><a href="/karyawan">Karyawan</a></li>
              <li type="none" class="mb-2 bi bi-person-check"><a href="/pemasok">Suplier</a></li>
              <li type="none" class="mb-2 bi bi-bar-chart-line"><a href="/transaksi">Data Jual</a></li>
              <li type="none" class="mb-2 bi bi-box-arrow-right"><a href="#">Logout</a></li>

            </ul>
          </div>
  
          <!-- Content -->
          <div class="col-md-9" id="content">
          @yield('content')

            <!-- Footer -->
            {{-- <div class="row mt-3" id="footer">
              <div class="col-md-12 text-center">&copy; 2023 - SamHD</div>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- Load Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

