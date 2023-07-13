<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#bla"  />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Cineverso</title>
        <!-- CSS only -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous"
        />
    
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
      </head>
      <body>
          <!-- As a heading -->
          <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="mb-0 navbar-brand h1" style="color: #eee">Peliculas</span>
                <form action="/change" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary">Actualizar información</button>
                </form>
            </div>
        </nav>
        
          <br>
          <div class="container mt-5">
            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
              <!-- Peliculas -->
                @foreach($allMovies as $movie)
                  <div class="mb-4 col d-flex justify-content-center">
                    <div class="mb-1 rounded shadow card bg-dark" style="width: 214px; height: 480px">
                        <h5 class="pt-2 text-center card-title" style="color: #eee">{{ $movie->name }}</h5>
                      <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="gap-2 d-grid">
                        <div class="mb-4 form-outline">
                          <p class="pt-2 text-center" style="color: #eee">Hora: {{$movie->schedule}}</p>
                          <form method="get" action="/movie/show">
                            @csrf
                              <input type="hidden" name="movie" value="{{ $movie->name }}">
                              <div class="pt-1 pb-1 mb-5 text-center">
                              <button type="submit" class="custom-button btn btn-primary">Reservar</button>
                              </div>
                          </form>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                @endforeach
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"
></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
  crossorigin="anonymous"
></script>
<script src="js/main.js"></script>
</body>
</html>
