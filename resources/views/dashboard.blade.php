<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex d-flex flex-wrap" style="justify-content: center;">


        @foreach($tarjetas as $tarjeta)
            <!-- Cafetería -->
            <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000; padding: 10px; margin: 10px;  max-width: 25%; width: 100%;">
                <div style="justify-content: center;display: flex;">
                    <a href="categorias" style="text-decoration: none;">
                        <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                        <h5 style="margin-top: 5px; font-size: 1.2em;">{{ $tarjeta->nombre_categoria }}</h5>
                    </a>
                </div>
            </div>
        @endforeach

        {{-- <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;  max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div>
        
        <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;    max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div>
        
        <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;    max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div>

        <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;    max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div>

        <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;    max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div>

        <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;    max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div>

        <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;    max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div>

        <!-- Cafetería -->
        <div style="background-color: antiquewhite;border-radius: 20px;box-shadow: 5px 5px 20px 5px #000;padding: 10px; margin: 10px;    max-width: 25%; width: 100%;">
            <div style="justify-content: center;display: flex;">
                <a href="categorias" style="text-decoration: none;">
                    <img src="https://ipage.ar/cartaonline/css_personalizado/logos52/CAFETERIA.png" alt="category" style="max-width: 100%; height: auto;">
                    <h5 style="margin-top: 5px; font-size: 1.2em;">Cafetería</h5>
                </a>
            </div>
        </div> --}}
        
    </div>


</x-app-layout>
