{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    @vite(['resources/css/page-not-found.css'])

    <title>Página no encontrada</title>
</head>
<body>
   <section class="page_404">
       <div class="container">
           <div class="row">
               <div class="col-sm-12">
                   <div class="col-sm-10 col-sm-offset-1 text-center">
                       <div class="four_zero_four_bg">
                           <h1 class="text-center">404</h1>
                       </div>
                       <div class="content_box_404">
                           <h3 class="h2">Página no encontrada</h3>
                           <p>La ruta que estás buscando no se encuentra disponible</p>
                           <a href="{{route('inicio')}}">Ir al inicio</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
</body>
</html>
