<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
  <body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="text-black card rounded-3">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="https://user-images.githubusercontent.com/102967338/252713059-16826ea2-06a0-489b-93cd-15af3a764109.png"
                          style="width: 185px;" alt="logo">
                        <h4 class="pb-1 mt-1 mb-5">Cineverso</h4>
                      </div>
      
                      <form method="POST" action="/login/send">
                        @csrf
                        <p>Bienvenido al apartado de registro</p>
      
                        <div class="mb-4 form-outline">
                          <input type="text" name="username" class="form-control"><br>
                          <label name="username">Ingrese su usuario</label><br>
                         </div>
                        <div class="mb-4 form-outline">
                          <input type="password" name="password" class="form-control"><br>
                          <label name="password">Ingrese su contraseña</label><br>
                        </div>
                        <div class="pt-1 pb-1 mb-5 text-center">
                          <button class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-2" type="submit">Ingrese</button>
                         </div>
                        </form>
      
                        <div class="pb-4 d-flex align-items-center justify-content-center">
                          <p class="mb-0 me-2">¿No tienes cuenta?</p>
                          <form method="get" action="/register">
                          <button type="submit" class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-2">Registrate</button>
                        </form>
                        </div>
      
                
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="px-3 py-4 text-white p-md-5 mx-md-4">
                    <img src="https://raw.githubusercontent.com/Criscas1609/ProyectCinema/master/src/main/resources/co/edu/cue/proyectofinalcorte3/Photos/offerte-toste-offerte.gif" 
                    style="width: 450px;" alt="logo">  
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