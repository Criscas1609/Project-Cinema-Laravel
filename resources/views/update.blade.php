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
                                    <img src="https://user-images.githubusercontent.com/102967338/252713059-16826ea2-06a0-489b-93cd-15af3a764109.png" style="width: 185px;" alt="logo">
                                    <h4 class="pb-1 mt-1 mb-5">Actualizar información</h4>
                                </div>
      
                                <form method="POST" action="/update/user" onsubmit="return validateForm()">
                                    @csrf
      
                                    <div class="mb-4 form-outline">
                                        <label for="name">Nombre:</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
                                        <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <label for="username">Nombre de usuario:</label>
                                        <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}" required>
                                        <div class="invalid-feedback">Por favor, ingrese su usuario.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <label for="birthdate">Fecha de nacimiento:</label>
                                        <input type="date" id="birthdate" name="birthdate" class="form-control" value="{{ $user->birthdate }}" required>
                                        <div class="invalid-feedback">Por favor, ingrese su fecha de nacimiento.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <label for="phone">Teléfono:</label>
                                        <input type="tel" id="phone" name="phone" class="form-control" value="{{ $user->phone }}" required>
                                        <div class="invalid-feedback">Por favor, ingrese su número de teléfono.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
                                        <div class="invalid-feedback">Por favor, ingrese un correo electrónico válido.</div>
                                    </div>
      
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="px-3 py-4 text-white p-md-5 mx-md-4">
                                <img src="https://media1.giphy.com/media/iFn4KACWTYcx6CmVHl/source.gif" style="width: 450px;" alt="logo">  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function validateForm() {
        var name = document.getElementById('name').value;
        var username = document.getElementById('username').value;
        var birthdate = document.getElementById('birthdate').value;
        var phone = document.getElementById('phone').value;
        var email = document.getElementById('email').value;
      
        // Validar campos vacíos
        if (name.trim() === '') {
            showInvalidFeedback('name', 'Por favor, ingrese su nombre.');
            return false;
        }
      
        if (username.trim() === '') {
            showInvalidFeedback('username', 'Por favor, ingrese su usuario.');
            return false;
        }
      
        if (birthdate.trim() === '') {
            showInvalidFeedback('birthdate', 'Por favor, ingrese su fecha de nacimiento.');
            return false;
        }
      
        if (phone.trim() === '') {
            showInvalidFeedback('phone', 'Por favor, ingrese su número de teléfono.');
            return false;
        }
      
        if (email.trim() === '') {
            showInvalidFeedback('email', 'Por favor, ingrese un correo electrónico válido.');
            return false;
        }
      
        return true;
    }
  
    function showInvalidFeedback(inputId, message) {
        var input = document.getElementById(inputId);
        input.classList.add('is-invalid');
        var feedback = input.nextElementSibling;
        feedback.innerText = message;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
