<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SunMovie | Better Movie Better Life</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


  <div class="page">

    <!-- Awal SideBar-->
    <div class="sidebar">
      <div class="sidebar-header">
        <div class="sidebar-admin-container">
          <div class="admin-container">
            <svg width="59" height="61" viewBox="0 0 59 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.4375 16.5205C18.4375 22.8264 23.4009 27.958 29.5 27.958C35.5991 27.958 40.5625 22.8264 40.5625 16.5205C40.5625 10.2146 35.5991 5.08301 29.5 5.08301C23.4009 5.08301 18.4375 10.2146 18.4375 16.5205ZM49.1667 53.3747H51.625V50.833C51.625 41.0247 43.9034 33.0413 34.4167 33.0413H24.5833C15.0942 33.0413 7.375 41.0247 7.375 50.833V53.3747H49.1667Z" fill="#F8F8F8"/>
            </svg>
          </div>
          <div class="admin-name">
            <p class="admin">Admin</p>
          </div>
        </div>
      </div>

      <div class="sidebar-body">
        <ul class="nav nav-list">
          <li class="nav-item">
            <a href="/home-admin" class="nav-link text-light text-center navigation-link">kelola</a>
          </li>
          <li class="nav-item active">
            <a href="/home-admin-pesanan" class="nav-link  text-center navigation-link">pesanan Customer</a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link text-light text-center navigation-link">Log Out</a>
          </li>
        </ul>
      </div>
</div>
    <!-- Akhir SideBar-->

    <div class="content">
      <div class="container p-5">
        <table class="table shadow">
          <thead>
            <tr>
              <th scope="col">Invoice ID</th>
              <th scope="col">Acara ID</th>
              <th scope="col">Nomor Rekening</th>
              <th scope="col">Nomor Transaksi</th>
              <th scope="col">Invoice</th>
              <th scope="col">Verification</th>
              <th scope="col">URL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1272311201</th>
              <td>Acara ID</td>
              <td>Nomor Rekening</td>
              <td>Nomor Transaksi</td>
              <td>
                <a href="#">
                  <span class="badge bg-success">Send Invoice</span>
                </a>
              </td>
              <td>
                <span class="badge bg-danger">Not Verified</span>
              </td>
              <td>
                <a href="#">Contoh URL</a>
              </td>
            </tr>
            <tr>
              <th scope="row">1272311201</th>
              <td>Acara ID</td>
              <td>Nomor Rekening</td>
              <td>Nomor Transaksi</td>
              <td>
                <a href="#">
                  <span class="badge bg-secondary">Send Invoice</span>
                </a>
              </td>
              <td>
                <span class="badge bg-primary">Verified</span>
              </td>
              <td>
                <a href="#">Contoh URL</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>