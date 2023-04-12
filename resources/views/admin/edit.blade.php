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

@if ($errors->any())
<div class='pt-3'>
    <div class='alert alert-danger'>
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>                
            @endforeach
        </ul>
    </div>
</div>
@endif

<!-- START FORM -->
<form action='{{ url("home-admin/".$data->judul_film) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href= "{{ url('home-admin') }}" class="btn btn-secondary"><< Back</a>
            <div class="mb-3 row">
                <label for="judul_film" class="col-sm-2 col-form-label">Judul FIlm</label>
                <div class="col-sm-10">
                    {{$data->judul_film}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='genre' value="{{$data->genre}}" id="genre">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="durasi" class="col-sm-2 col-form-label">Durasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='durasi' value="{{$data->durasi}}" id="durasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bioskop" class="col-sm-2 col-form-label">Bioskop</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bioskop' value="{{$data->bioskop}}" id="bioskop">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
<!-- AKHIR FORM -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>