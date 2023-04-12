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
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  @if (Session::has('success'))
    <div class="pt-3">
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div> 
  @endif
  <!-- Awal SideBar-->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home-admin">Admin-SunMovie</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Pesanan</a>
            </li>
          </ul>
          <a class="logout d-flex" href="/logout">logout</a>
        </div>
      </div>
    </nav>
  <!-- Akhir SideBar-->

    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('home-admin') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url("home-admin/create") }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Judul Film</th>
                            <th class="col-md-2">Genre</th>
                            <th class="col-md-2">Durasi</th>
                            <th class="col-md-2">Bioskop</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i = $data->firstItem()?>
                      @foreach ( $data as $item )
                      <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->judul_film }}</td>
                            <td>{{ $item->genre }}</td>
                            <td>{{ $item->durasi }}</td>
                            <td>{{ $item->bioskop }}</td>
                            <td>
                                <a href='{{ url("home-admin/".$item->judul_film."/edit") }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('home-admin/'.$item->judul_film) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                      </tr>
                      <?php $i++?>
                      @endforeach
                        
                    </tbody>
                </table>
                {{ $data -> links()}}
               
     </div>
    <!-- AKHIR DATA -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>