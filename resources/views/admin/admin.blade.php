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
          <li class="nav-item active">
            <a href="/home-admin" class="nav-link text-center navigation-link">kelola</a>
          </li>
          <li class="nav-item">
            <a href="/home-admin-pesanan" class="nav-link text-light text-center navigation-link">pesanan Customer</a>
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
        <div class="row">
          <div class="col">
            <div class="card">
              <img src="assets/wediing.jpg" class="card-img-top" alt="...">
              <div class="card-footer bg-info text-center">
                Bohemian
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="assets/wediing.jpg" class="card-img-top" alt="...">
              <div class="card-footer bg-info text-center">
                Islamic
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="assets/wediing.jpg" class="card-img-top" alt="...">
              <div class="card-footer bg-info text-center">
                Islamic
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 mb-5">
          <div class="col">
            <div class="card">
              <img src="assets/wediing.jpg" class="card-img-top" alt="...">
              <div class="card-footer bg-info text-center">
                Rustic
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="assets/wediing.jpg" class="card-img-top" alt="...">
              <div class="card-footer bg-info text-center">
                Minimalis
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="assets/wediing.jpg" class="card-img-top" alt="...">
              <div class="card-img-overlay text-center m-5">
                <a href="tambah.html" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"">Tambah Template</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Template</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
                <label for="namaTemplate" class="form-label">Nama Template</label>
                <input type="text" class="form-control" id="namaTemplate">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Template</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Long
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Short
                    </label>
                </div>
            </div>
            <div class="mb-3">
              <label for="namaTemplate" class="form-label">Harga Template</label>
              <input type="number" class="form-control" id="namaTemplate">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Insert Template</label>
                <input class="form-control" type="file" id="formFile">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan Template</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>