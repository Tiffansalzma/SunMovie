<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SunMovie | Better Movie Better Life</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/login.css"/>
  </head>
  <body class="antialiased">
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
    @if (Session::has('success'))
    <div class="pt-3">
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div> 
    @endif
    <section class="login">
      <!--Awal Login Left-->
      <div class="login-left w-100 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-3">
            <div class="header">
              <img src="image/logo3.jpg" alt="logo SUN-MOVIE">
              <p>Please enter your details.</p>
            </div>
            <form action="/login" method="POST">
                @csrf
                <div class="login-form">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ Session::get('email') }}"
                        id="email"
                        placeholder="Enter your email"
                    />
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        id="password"
                        placeholder="Enter your password"
                    />                    
                    <button class="sign-in" type="submit">Sign in</button>
                    <div class="text-center">
                        <span class="sign-up d-inline"
                        >Don't have an account?
                        <a href="/register" class="d-inline">Sign up for free</a></span
                        >
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Akhir Login Left-->

    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
