<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido - red social</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="main">

                    <!-- Formulario de registro -->
                    <section class="signup">
                        <div class="container">
                            <div class="signup-content">
                                <div class="signup-form">
                                    <h2 class="form-title">Registrarse</h2>
                                    <form method="POST" class="register-form" id="register-form" action="inicio">
                                        <div class="form-group">
                                            <label for="nombre"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="nombre" id="nombre" placeholder="Ingresa nombre"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                            <input type="email" name="email" id="email" placeholder="Ingresa correo"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="pass" id="pass" placeholder="Ingresa contraseña"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                            <input type="password" name="re_pass" id="re_pass" placeholder="Repite la contraseña"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Estoy de acuerdo con  <a href="#" class="term-service">Terminos de uso</a></label>
                                        </div>
                                        <div class="form-group form-button">
                                            <input type="submit" name="signup" id="signup" class="form-submit" value="Registrarme"/>
                                        </div>
                                    </form>
                                </div>
                                <div class="signup-image">
                                    <figure><img src="images/registro.png" alt="sing up image"></figure>
                                    <a class="signup-image-link" href="{{ url('/login') }}">Ya tengo cuenta</a>
                                </div>
                            </div>
                        </div>
                    </section>
            
        </div>
    </body>
</html>
