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
                                    <img src="https://user-images.githubusercontent.com/102967338/252713059-16826ea2-06a0-489b-93cd-15af3a764109.png" style="width: 185px;" alt="logo">
                                    <h4 class="pb-1 mt-1 mb-5">Cineverso</h4>
                                </div>
      
                                <form method="POST" action="/register/send" onsubmit="return validateForm()">
                                    @csrf
                                    <p>Bienvenido al apartado de registro</p>
      
                                    <div class="mb-4 form-outline">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name">Ingrese su nombre</label>
                                        <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <input type="date" id="birthdate" name="birthdate" class="form-control">
                                        <label for="birthdate">Ingrese su fecha de nacimiento</label>
                                        <div class="invalid-feedback">Por favor, ingrese su fecha de nacimiento.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <input type="text" id="phone" name="phone" class="form-control">
                                        <label for="phone">Ingrese su número de teléfono</label>
                                        <div class="invalid-feedback">Por favor, ingrese su número de teléfono.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <input type="text" id="username" name="username" class="form-control">
                                        <label for="username">Ingrese su usuario</label>
                                        <div class="invalid-feedback">Por favor, ingrese su usuario.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email">Ingrese su email</label>
                                        <div class="invalid-feedback">Por favor, ingrese un correo electrónico válido.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <input type="password" id="password" name="password" class="form-control">
                                        <label for="password">Ingrese su contraseña</label>
                                        <div class="invalid-feedback">La contraseña debe tener al menos 8 caracteres.</div>
                                    </div>
      
                                    <div class="mb-4 form-outline">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                        <label for="password_confirmation">Confirme su contraseña</label>
                                        <div class="invalid-feedback">Las contraseñas no coinciden.</div>
                                    </div>
      
                                    <div class="pt-1 pb-1 mb-5 text-center">
                                        <button class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-2" type="submit">Crear cuenta</button>
                                    </div>
                                </form>
      
                                <div class="pb-4 d-flex align-items-center justify-content-center">
                                    <p class="mb-0 me-2">¿Ya tienes cuenta?</p>
                                    <form method="get" action="/login">
                                        <button type="submit" class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-2">Inicia sesión</button>
                                    </form>
                                </div>
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
        var birthdate = document.getElementById('birthdate').value;
        var phone = document.getElementById('phone').value;
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var passwordConfirmation = document.getElementById('password_confirmation').value;
      
        // Validar campos vacíos
        if (name.trim() === '') {
            showInvalidFeedback('name', 'Por favor, ingrese su nombre.');
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
      
        if (username.trim() === '') {
            showInvalidFeedback('username', 'Por favor, ingrese su usuario.');
            return false;
        }
      
        if (email.trim() === '') {
            showInvalidFeedback('email', 'Por favor, ingrese su email.');
            return false;
        }
      
        // Validar formato de correo electrónico
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showInvalidFeedback('email', 'Por favor, ingrese un correo electrónico válido.');
            return false;
        }
      
        // Validar longitud de la contraseña
        if (password.length < 8) {
            showInvalidFeedback('password', 'La contraseña debe tener al menos 8 caracteres.');
            return false;
        }
      
        // Validar coincidencia de contraseñas
        if (password !== passwordConfirmation) {
            showInvalidFeedback('password_confirmation', 'Las contraseñas no coinciden.');
            return false;
        }
      
        // Si todas las validaciones pasan, retornar true
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
