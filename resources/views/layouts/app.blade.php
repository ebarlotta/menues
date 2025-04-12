<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}  <!-- Contenido Estático -->
                <div class="static-content">
                  <!-- Navbar -->
                  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                      <a class="navbar-brand" href="#">Mi Empresa</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                          <li class="nav-item">
                            <a class="nav-link active" href="#inicio">Inicio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
              
                  <!-- Contenido Central -->
                  <div class="container mt-5">
                    <div class="row">
                      <div class="col-lg-8 offset-lg-2 text-center">
                        <h1 class="display-4 text-white fw-bold">Transformamos tus ideas en realidad</h1>
                        <p class="text-white lead">Somos expertos en soluciones innovadoras para tu negocio.</p>
                        <a href="#servicios" class="btn btn-primary btn-lg">Conoce más</a>
                      </div>
                    </div>
                  </div>
                  
                      
                  <div class="py-12">
                      <a href="https://ecosystems.ar/menues/public/login">
                      <div class="col-2 mx-auto sm:px-6 lg:px-8">
                          <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg">
                              <div class="p-6 text-gray-900 dark:text-gray-100">
                                  <div class="max-w-48 rounded overflow-hidden shadow-lg">
                                      <img class="w-full" src="P%C3%A1gina%20con%20Fondo%20Scroll_archivos/menu.webp" alt="Menús">
                                      <div class="px-6 py-4">
                                        <div class="font-bold text-xl text-center mb-2">Menús</div>
                                      </div>
                                    </div>
                              </div>
                          </div>
                      </div>
                      </a>
                  </div>
              
                </div>
              
                <!-- Imágenes de Fondo -->
                <div class="background-images">
                  <div class="background-image" style="background-image: url('assets/images/imagen1.jpg');"></div>
                </div>
              
            </main>
        </div>
    </body>
</html>
