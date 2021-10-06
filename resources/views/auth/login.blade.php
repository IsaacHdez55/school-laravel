<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="School World">
      {{-- <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects"> --}}
      <meta name="author" content="Isaac Hernandez">
      <meta name="robots" content="noindex, nofollow">

      <title>School World - Log in</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.ico') }}">
    
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    
      <!-- Fontawesome CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
      
      <!-- Main CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    
    </head>

    <body class="account-page">
  
      <!-- Main Wrapper -->
      <div class="main-wrapper">
        
        <div class="account-content">
          
          <div class="container">
        
            <!-- Account Logo -->
            {{-- <div class="account-logo">
              <a href="index.html"><img src="{{ asset('backend/img/logo.png') }}" alt="Dreamguy's Technologies"></a>
            </div> --}}
            <!-- /Account Logo -->
          
            <div class="account-box">
              <div class="account-wrapper">
                <h3 class="account-title">Iniciar Sesión</h3>
                <p class="account-subtitle">Acceso al dashboard</p>
                
                <!-- Account Form -->
                <form action="{{ route('login') }}" method="post">

                  @csrf

                  <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input class="form-control" type="email" id="email" name="email">
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label>Contraseña</label>
                      </div>
                      <div class="col-auto">

                        @if (Route::has('password.request'))

                        <a class="text-muted" href="{{ route('password.request') }}">
                          Forgot password?
                        </a>

                        @endif

                      </div>
                    </div>
                    <input class="form-control" type="password"  name="password">
                  </div>

                  <div class="form-group text-center">
                    <button class="btn btn-primary account-btn" type="submit">Acceder</button>
                  </div>

                </form>
                <!-- /Account Form -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="{{ asset('backend/js/jquery-3.5.1.min.js') }}"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('backend/js/app.js') }}"></script>
    
    </body>
</html>