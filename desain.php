<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data profile</title>

    <!-- Load CSS dari Bootstrap -->
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href=""><h2>CRUD OOP PHP</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="tambah_data.php">Add Data</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link " href="#" data-bs-toggle="dropdown" aria-expanded="false">Detail Pengguna</a>
              </li>
            </ul>
            <form role="search">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">logout</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- Load JavaScript dari Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>