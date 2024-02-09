<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light fw-bold fs-4" href="/">You<span class="text-primary">Book</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active fw-semibold text-light me-5" aria-current="page" href="/">Home</a>
        <a class="nav-link fw-semibold text-light me-5" href="#">books available</a>
        <a class="nav-link fw-semibold text-light me-5 " href="#">about us</a>

        <a href="{{route('login')}}" class="btn btn-primary me-3 px-4">login</a>
        <a href="{{route('register')}}" class="btn btn-primary">Register</a>

      </div>
    </div>
  </div>
</nav>

<section class="container-fluid px-5">
@yield('content')
</section>

  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>


