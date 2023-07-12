<!DOCTYPE html>
<html>
<head>
    <title>Sala de Cine - Compra de Boletos</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('css/movieSeat.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
@if($error != null)
<div class="alert alert-primary" role="alert">
    Solo puede seleccionar 4 hacientos para hacer la reserva
  </div>
@endif
  
<body style="background-color: #eee;">
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="text-black card rounded-3">
                        <div class="row g-0">
                            <div class="col-lg-6 gradient-custom-2" style="height: 600px">
                                <div class="card-body p-md-5 mx-md-4">
                                    
                                    
                @if ($movie)
                  <div class="text-center">
                    <div class="card-body">
                        <div class=" d-flex justify-content-center">
                            <div class="mb-1 rounded shadow card bg-dark" style="width: 214px; height: 390px">
                                <h5 class="pt-2 text-center card-title" style="color: #eee">{{ $movie->name }}</h5>
                                <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                                    <div class="gap-2 d-grid">
                                        <div class="mb-4 form-outline">
                                            <br><div class="mt-4 text-center">
                                                <form method="post" action="/reservation/cancel">
                                                    @csrf
                                                    <input type="hidden" name="chair" value="{{$movie->name}}">
                                                    <button type="submit" class="custom-button color-3">Cancelar reserva</button>  
                                                </form>
                                            </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center">
                <div class="container py-5 h-100">
                    <div class="mb-4 col d-flex justify-content-center">
                        <div class="mb-1 rounded shadow card bg-dark" style="width: 214px; height: 480px">
                            <h5 class="pt-2 text-center card-title" style="color: #eee">Recibo</h5>
                          <div class="card-body">
                            <div class="gap-2 d-grid">
                            <div class="mb-4 form-outline">
                                @if($chairs)
                                <p class="pt-2 text-center" style="color: #eee">
                                    Hora: {{$movie->schedule}} <br>
                                    Sala: {{$movie->room}} <br>
                                    Sillas: {{implode(', ', $chairs)}}
                                </p>
                                @endif
                              <form method="post" action="/return">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>