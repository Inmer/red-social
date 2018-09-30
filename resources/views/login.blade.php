<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión - red social</title>

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

            
                    <!-- Sing in  Form -->
                    <section class="sign-in">
                        <div class="container">
                            <div class="signin-content">
                                <div class="signin-image">
                                    <figure><img src="images/login.png" alt="sing up image"></figure>
                                    <a class="signup-image-link" href="{{ url('/') }}">Crear una cuenta</a>
                                </div>
            
                                <div class="signin-form">
                                    <h2 class="form-title">Iniciar sesión</h2>
                                    <form method="POST" class="register-form" id="login-form">
                                        <div class="form-group">
                                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="your_name" id="your_name" placeholder="Email"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="your_pass" id="your_pass" placeholder="Contraseña"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Recordarme</label>
                                        </div>
                                        <div class="form-group form-button">
                                            <input type="submit" name="signin" id="signin" class="form-submit" value="Iniciar sesión"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
        </div>
    </body>
</html>
