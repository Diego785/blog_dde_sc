<!-- modal.blade.php -->

<!-- Modal backdrop -->
<div>
    <div>
        <style>
            /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); */


            .error {
                color: #f44336;
                font-size: 10px;
                background-color: #fdd;
                border: 1px solid #f44336;
                border-radius: 5px;
            }


            .container-form {
                /* background-color: #152e4d; */
                background: url('{{ asset('img/bg.png') }}'), -webkit-linear-gradient(bottom, #0250c5, #152e4d);
                /* height:max-content; */
                text-align: center;
                border-radius: 5px;
                /* padding: 18% 35px 0 35px; */
                padding: 10px 35px 0 35px;
                height: 100% !important;
                min-height: 100vh;
            }

            .container-form header {
                font-size: 20px;
                font-weight: 600;
            }

            .container-form .form-outer {
                width: 100%;
                overflow: hidden;
            }

            .container-form .form-outer form {
                display: flex;
                width: 300%;
            }

            .form-outer form .page {
                width: 33.33%;
                height: 90vh;
                margin: 0 0.10px;
                transition: margin-left 0.3s ease-in-out;
            }

            .form-outer form .page .title {
                text-align: left;
                font-size: 20px;
                font-weight: 500;
            }

            .form-outer form .page .field {
                width: 100%;
                display: flex;
                position: relative;
            }

            form .page .field .label {
                position: absolute;
                top: -15px;
                font-size: 15px;
                font-weight: 500;
                margin-top: 20px;
            }

            form .page .field input,
            textarea {
                width: 100%;
                box-sizing: border-box;
                border: 1px solid lightgrey;
                border-radius: 5px;
                font-size: 18px;
                color: black;
                margin-top: 23px;
            }

            form .page .field select {
                width: 100%;
                height: 39px;

                padding: 5px;
                font-size: 17px;
                font-weight: 500;
            }

            form .page .field button {
                width: 100%;
                height: calc(100% + 5px);
                border: none;
                background: #04527b;
                margin-top: 10px;
                border-radius: 5px;
                color: #fff;
                cursor: pointer;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: 0.5s ease;
            }

            form .page .field button:hover {
                background: #000;
            }


            form .page .btns button {
                margin-top: 10px !important;
            }

            form .page .btns button.prev {
                margin-right: 3px;
            }

            form .page .btns button.next {
                margin-left: 3px;

            }

            .container-form .progress-bar {
                display: flex;
                margin: 5px 0;
                user-select: none;
            }

            .container-form .progress-bar .step {
                text-align: center;
                width: 100%;
                position: relative;
            }

            .container-form .progress-bar .step p {
                font-weight: 500;
                font-size: 12px;
                margin-bottom: 8px;
            }

            .progress-bar .step .bullet {
                height: 25px;
                width: 25px;
                border: 2px solid #000;
                display: inline-block;
                border-radius: 50%;
                position: relative;
                transition: 0.2s;
                font-weight: 500;
                font-size: 17px;
                line-height: 25px;
            }

            .progress-bar .step .bullet.active {
                border-color: #04527b;
                background: #04527b;
            }

            .progress-bar .step .bullet span {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }

            .progress-bar .step .bullet.active span {
                display: none;
            }

            .progress-bar .step .bullet:before,
            .progress-bar .step .bullet:after {
                position: absolute;
                content: '';
                bottom: 11px;
                /* right: -100px; */
                right: -390px;
                height: 3px;
                /* width: 90px; */
                width: 380px;
                background: #262626;
            }

            .progress-bar .step .bullet.active:after {
                background: #0250c5;
                transform: scaleX(0);
                transform-origin: left;
                animation: animate 0.3s linear forwards;
            }

            @keyframes animate {
                100% {
                    transform: scaleX(1);
                }
            }

            .progress-bar .step:last-child .bullet:before,
            .progress-bar .step:last-child .bullet:after {
                display: none;
            }

            .progress-bar .step p.active {
                color: #0250c5;
                transition: 0.2s linear;
            }

            .progress-bar .step .check {
                position: absolute;
                left: 50%;
                top: 70%;
                font-size: 15px;
                transform: translate(-50%, -50%);
                display: none;
            }

            .progress-bar .step .check.active {
                display: block;
                color: #fff;
            }


            .container-form1 {
                align-items: center;
                justify-content: center;
            }

            select {
                width: 100%;
                border: 1px solid lightgrey;
                border-radius: 5px;
                padding-left: 15px;
            }

            .custom-radio {
                display: flex;
                align-items: center;
                cursor: pointer;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                font-size: 18px;
                user-select: none;
            }

            .custom-radio input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
            }

            .radiomark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 50%;
                transition: background-color 0.2s;
            }

            .custom-radio:hover input~.radiomark {
                background-color: #ccc;
            }

            .custom-radio input:checked~.radiomark {
                background-color: #4CAF50;
            }

            .radiomark:after {
                content: "";
                position: absolute;
                display: none;
            }

            .custom-radio input:checked~.radiomark:after {
                display: block;
            }

            .custom-radio .radiomark:after {
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }

            .label-text {
                margin-left: 10px;
            }

            .select-city {
                height: 100%;
                width: 100%;
                border: 1px solid lightgrey;
                border-radius: 5px;
                padding-left: 15px;
                margin-top: 10px;
                font-size: 18px;
            }



            .body-crud {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }

            .container-crud {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
            }

            h1 {
                text-align: center;
            }

            .input-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
                margin-bottom: 20px;
            }

            .input-crud {
                width: 70%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            #addBtn {
                padding: 8px 12px;
                background-color: #04527b;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            #addBtn:hover {
                background-color: #000;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            li {
                display: flex;
                justify-content: space-between;
                padding: 8px;
                border-bottom: 1px solid #ccc;
            }

            .edit-btn,
            .delete-btn {
                margin-left: 10px;
                cursor: pointer;
            }

            .edit-btn {
                color: #FFC107;
            }

            .delete-btn {
                color: #F44336;
            }

            .step,
            .title,
            span,
            header,
            .label {
                color: white;
            }


            .body-crud {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }

            .container-crud {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
            }

            h1 {
                text-align: center;
            }

            .input-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
                margin-bottom: 20px;
            }

            .input-crud {
                width: 70%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            #addBtn {
                padding: 8px 12px;
                background-color: #04527b;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            #addBtn:hover {
                background-color: #000;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            li {
                display: flex;
                justify-content: space-between;
                padding: 8px;
                border-bottom: 1px solid #ccc;
            }

            .edit-btn,
            .delete-btn {
                margin-left: 10px;
                cursor: pointer;
            }

            .edit-btn {
                color: #FFC107;
            }

            .delete-btn {
                color: #F44336;
            }

            @media screen and (max-width: 1280px) {

                .progress-bar .step .bullet:before,
                .progress-bar .step .bullet:after {
                    right: -250px;
                    width: 240px;
                }
            }

            @media screen and (max-width: 820px) {

                .progress-bar .step .bullet:before,
                .progress-bar .step .bullet:after {
                    right: -150px;
                    width: 140px;
                }
            }

            @media screen and (max-width: 520px) {

                .progress-bar .step .bullet:before,
                .progress-bar .step .bullet:after {
                    right: -100px;
                    width: 90px;
                }
            }

            .input-nombre-denunciante {
                text-transform: uppercase;
            }


            /* FLOAT BUTTON */

            .fab-container {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: flex;
                flex-direction: column;
                gap: 10px;
                transition: transform 0.5s;
                z-index: 9999;
            }

            .fab-wrapper {
                position: relative;
            }

            .fab {
                width: 56px;
                height: 56px;
                border-radius: 50%;
                border: none;
                color: white;
                font-size: 24px;
                display: flex;
                justify-content: center;
                align-items: center;
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
                cursor: pointer;
                transition: background-color 0.3s;
                text-decoration: none;
            }

            .fab i {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #fab1 {
                background-color: #6200ea;
            }

            #fab1:hover {
                background-color: #3700b3;
            }

            .tooltip {
                position: absolute;
                bottom: 70px;
                left: 50%;
                transform: translateX(-50%);
                background-color: rgba(0, 0, 0, 0.7);
                color: white;
                padding: 5px 10px;
                border-radius: 4px;
                font-size: 14px;
                white-space: nowrap;
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s, visibility 0.3s;
            }

            .fab-wrapper:hover .tooltip {
                opacity: 1;
                visibility: visible;
            }

            .info-button {
                background-color: #04527b;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border-radius: 5px;
                transition: background-color 0.3s, transform 0.3s;
            }

            .info-button .icon {
                margin-right: 10px;
            }

            .info-button:hover {
                background-color: #001a49;
                transform: scale(1.05);
            }

            .info-text {
                display: none;
                margin-top: 20px;
                font-size: 16px;
            }
        </style>


        <x-dialog-modal wire:model="show_modal_denunciado">
            <x-slot name="title">
                Nuevo Denunciado
            </x-slot>
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-6 mb-4">
                    <div>
                        <x-label class="mb-1">
                            Nombre
                        </x-label>
                        <x-input wire:model="nombre" class="w-full" placeholder="Diego Hurtado Vargas" />
                        @error('nombre')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <x-label class="mb-1">
                            Cargo
                        </x-label>
                        <x-input wire:model="cargo" class="w-full"
                            placeholder="Profesora de Secundaria en Literatura" />
                        @error('cargo')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-danger-button class="btn btn-blue mx-2" wire:click.prevent="$set('show_modal_denunciado', false)">
                    Cerrar
                </x-danger-button>
                <x-button class="btn btn-blue mx-2" wire:click.prevent="addDenunciado">
                    Agregar
                </x-button>

            </x-slot>
        </x-dialog-modal>


        <!-- component -->
        <!-- This is an example component -->
        <!-- component -->
        <div class="container-form">
            <div class="flex">
                <a href="{{ route('sder.index') }}" style="background-color: #04527b; width:5%;"
                    class="mx-2 item-center middle none center flex justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                        class="fas fa-home text-lg leading-none" aria-hidden="true"></i></a>
                <a href="{{ route('show-denuncias') }}" style="background-color: #04527b; width:5%;"
                    class="mx-2 item-center middle none center flex justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                        class="fas fa-eye text-lg leading-none" aria-hidden="true"></i></a>
            </div>


            <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                DENUNCIA #{{ $formulario_denuncia->id }}
            </h2>

            <p class="text-white/90 md:mt-6 md:text-lg md:leading-relaxed md:block">
                DENUNCIADOS DE {{ $formulario_denuncia->denunciante->nombre }}
            </p>
            @if (count($personas_denunciadas) > 0)
                <!-- component -->
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="bg-white border-b">
                                        <tr>
                                            {{-- <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        #
                                    </th> --}}
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Nombre
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Cargo
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Acciones
                                            </th>
                                            {{-- <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Handle
                                    </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($personas_denunciadas as $persona)
                                            <tr class="{{ $loop->even ? 'bg-white' : 'bg-gray-100' }} border-b">
                                                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td> --}}
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $persona->nombre }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $persona->cargo }}
                                                </td>
                                                <td>
                                                    <div class='flex items-center justify-center'>
                                                        <div class="m-2">
                                                            <button
                                                                wire:click="openModalEditDenunciado({{ $persona->id }})"
                                                                class="flex p-2.5 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg>
                                                            </button>

                                                        </div>
                                                        <div class="m-1">
                                                            <button onclick="confirmDelete({{$persona->id}})"
                                                                class="flex p-2.5 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                    fill="white" viewBox="0 0 448 512"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path
                                                                        d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                                </svg>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        {{-- <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        Jacob
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        Dillan
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @fat
                                    </td>
                                </tr> --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- component -->


                <body>
                    <div class="flex flex-col justify-center items-center m-10">
                        <div
                            class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                            <div class="space-y-4">
                                <h3 class="text-xl text-black font-bold lead-xl bold">¡No hay denunciados!</h3>
                                <div class="text-lg text-black font-light">Agregue nuevos denunciados por favor.</div>
                            </div>
                        </div>
                    </div>
                </body>
            @endif
        </div>


    </div>
    <div class="fab-container">
        <div class="fab-wrapper">
            <button wire:click="openModalAddDenunciado()" style="display: flex; align-items: center; background-color:#4CAF50" class="fab">
                <i class="fa-solid fa-plus"></i>
            </button>
            <span class="tooltip">Agregar Denunciado</span>
        </div>
    </div>


    @push('js')
        <script>
            function confirmDelete(id) {
                // event.preventDefault();
                // if(confirm('Estas seguro que deseas eliminar la familia?')){
                //     document.getElementById('delete-form').submit();
                // }
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¡No podrás revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "¡Sí, borralo!",
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // document.getElementById('delete-form').submit();
                        @this.call('deleteDenunciado', id);


                    }
                });
            }
        </script>
    @endpush
</div>
