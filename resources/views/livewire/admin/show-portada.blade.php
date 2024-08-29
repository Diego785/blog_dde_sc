<!-- modal.blade.php -->

<!-- Modal backdrop -->
<div>
    <div>
        <style>
            /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); */

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
                display: flex;
                align-items: center;
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


            /*  */
        </style>

        <x-dialog-modal wire:model="show_modal_add_portada">
            <x-slot name="title">
                Nueva Portada
            </x-slot>
            <x-slot name="content">
            <x-validation-errors class="mb-4" />
                
                {{-- <figure class="relative mb-4">
                    <div class="absolute top-8 right-8">
                        <label class="flex items-center px-4 py-2 rounded-lg bg-white cursor-pointer text-gray-700">
                            <i class="fas fa-camera mr-2"></i>
                            Actualizar imágen
        
                            <input wire:model="imagen" type="file" class="hidden" accept="image/*" name="image" onchange="previewImage(event, '#imgPreview')">
                        </label>
                    </div>
                    <img id="imgPreview" src="{{ asset('img/no-image.jpg') }}" alt="Portada"
                        class="w-full aspect-[3/1] object-cover object-center">
                </figure> --}}

                <figure class="relative mb-4">
                    <div class="absolute top-8 right-8">
                        <label class="flex items-center px-4 py-2 rounded-lg bg-white cursor-pointer text-gray-700">
                            <i class="fas fa-camera mr-2"></i>
                            Actualizar imagen
        
                            <input wire:model="imagen" type="file" class="hidden" accept="image/*" name="image">
                        </label>
                    </div>
                    <img id="imgPreview" src="{{ $temporary_url ?? asset('img/no-image.jpg') }}" alt="Portada" class="w-full aspect-[3/1] object-cover object-center">
        
                <div class="mb-4">
                    <x-label>
                        Título
                    </x-label>
                    <x-input wire:model="titulo" name="title" value="{{old('title')}}" class="w-full" placeholder="Por favor ingrese el título de la portada" />
                </div>
        
                <div class="mb-4">
                    <x-label>
                        Fecha de inicio
                    </x-label>
                    <x-input wire:model="fecha_inicio" type="date" name="start_at" value="{{old('start_at', now()->format('Y-m-d'))}}" class="w-full" />
                </div>
                <div class="mb-4">
                    <x-label>
                        Fecha fin (opcional)
                    </x-label>
                    <x-input wire:model="fecha_fin" type="date" name="end_at" value="{{old('end_at', now()->format('Y-m-d'))}}" class="w-full" />
                </div>
                <div class="mb-4 flex space-x-2">
                    <label>
                        <x-input wire:model="esta_activo" type="radio" name="is_active" value="1" checked/>
                        Activo
                    </label>
                    <label>
                        <x-input wire:model="esta_activo" type="radio" name="is_active" value="0"/>
                        Inactivo
                    </label>
                </div>

            </x-slot>
            <x-slot name="footer">
                <x-danger-button class="btn btn-blue mx-2" wire:click.prevent="$set('show_modal_add_portada', false)">
                    Cerrar
                </x-danger-button>
                <x-button class="btn btn-blue mx-2" wire:click.prevent="savePortada()">
                    Agregar
                </x-button>

            </x-slot>
        </x-dialog-modal>


        <div class="container-form">


            <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                PORTADAS
            </h2>

            <div class="flex justify-between my-7 mx-8">

                <div class="relative w-96">
                    <input wire:model.live="search"
                        class="border-2 border-primary bg-red transition h-12 px-5 pr-16 rounded-md focus:outline-none w-full text-black text-lg "
                        type="search" name="search" placeholder="Buscar..." />

                    <button class="absolute right-2 top-3 mr-4">
                        <svg class="text-black h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>


                </div>
                <div class="relative w-52">


                    <select
                        style="width: 100%;
                border: 1px solid lightgrey;
                border-radius: 5px;
                padding-left: 15px;"
                        wire:model.live="status" class="dark:text-gray-800">
                        <option disabled selected value="0">Selecciona un Estado</option>
                        <option value="1">Todos</option>
                        <option value="2">Aceptado</option>
                        <option value="3">Rechazado</option>
                        <option value="4">En espera</option>
                    </select>


                </div>
            </div>



            <ul class="space-y-4" id="covers">
                {{-- @foreach ($covers as $cover) --}}
                    <li class="bg-white rounded-lg shadow-lg overflow-hidden lg:flex cursor-move"
                        data-id="">

                        <img src="" alt=""
                            class="w-full lg:w-64 aspect-[3/1] object-cover object-center">
                        <div class="p-4 lg:flex-1 lg:flex lg:justify-between lg:items-center space-y-3 lg:space-y-0">
                            <div>
                                <h1 class="font-semibold">
                                    {{-- {{ $cover->title }} --}}
                                </h1>
                                <p>
                                    {{-- @if ($cover->is_active) --}}
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Activo</span>
                                    {{-- @else
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactivo</span>
                                    @endif --}}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">
                                    Fecha de inicio
                                </p>
                                <p>
                                    {{-- {{ $cover->start_at->format('d/m/Y') }} --}}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-bold">
                                    Fecha de finalización
                                </p>
                                <p>
                                    {{-- {{ $cover->end_at ? $cover->end_at->format('d/m/Y') : '-' }} --}}
                                </p>
                            </div>
                            <div>
                                <a class="btn btn-blue" href="">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </li>
                {{-- @endforeach --}}
            </ul>



        </div>


    </div>
    <div class="fab-container pr-5">

        <div class="fab-wrapper">
            <button wire:click="openModalAddPortada()"
                class="fab {{ $show_modal_add_portada ? 'bg-gray-500 cursor-not-allowed' : 'bg-[#25D366] hover:bg-[#1DA851]' }} transition-colors duration-200"
                id="fab1" {{ $show_modal_add_portada ? 'disabled' : '' }}>
                <i class="fab fa-plus"></i>
            </button>
            <span class="tooltip">Crear Usuario</span>
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
         <script>
            function previewImage(event, querySelector) {

                //Recuperamos el input que desencadeno la acción
                const input = event.target;

                //Recuperamos la etiqueta img donde cargaremos la imagen
                $imgPreview = document.querySelector(querySelector);

                // Verificamos si existe una imagen seleccionada
                if (!input.files.length) return

                //Recuperamos el archivo subido
                file = input.files[0];

                //Creamos la url
                objectURL = URL.createObjectURL(file);

                //Modificamos el atributo src de la etiqueta img
                $imgPreview.src = objectURL;

            }
        </script>
    @endpush
</div>
