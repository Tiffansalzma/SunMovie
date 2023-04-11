<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SunMovie | Better Movie Better Life</title>

    <link
      rel="stylesheet"
      type="text/css"
      href="C:\xampp\htdocs\bootstrap5.3\css\bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <section class="register d-flex">
      <!--Awal Register Left-->
      <div class="register-left w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <div class="header">
              <h2>Register new account</h2>
              <p>Please enter your details.</p>
            </div>
            <form action="/create" method="POST">
                @csrf
                <div class="register-form">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ Session::get('name') }}"
                        id="name"
                        placeholder="Enter your name"
                    />
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
                    <button class="sign-up" type="submit">Register</button>
                    <div class="text-center">
                        <span class="sign-in d-inline"
                        >Already have an account?
                        <a href="/login" class="d-inline">Login here</a></span
                        >
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Akhir Login Left-->

      <!--Awal Login Right-->
      <div class="login-right w-50 h-100">
        <div
          id="carouselExampleAutoplaying"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/logo.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="image/cover 1.png" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Akhir Login Right-->
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
