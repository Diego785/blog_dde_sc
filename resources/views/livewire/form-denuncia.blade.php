<div>
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); */

        .subtitle {
            font-size: 18px;
            color: white;
            font-weight: bold;
        }

        .error {
            color: #f44336;
            font-size: 10px;
            background-color: #fdd;
            border: 1px solid #f44336;
            border-radius: 5px;
        }


        .container-form {
            min-height: 100vh;
            min-width: 100%;
            height: 100%;
            /* background-color: #152e4d; */
            background: url('{{ asset('img/bg.png') }}'), -webkit-linear-gradient(bottom, #0250c5, #152e4d);
            /* height:max-content; */
            text-align: center;
            border-radius: 5px;
            /* padding: 18% 35px 0 35px; */
            padding: 10px 35px 50px 35px;

        }
    </style>
    <style>
        /* FLOAT BUTTON  */
        .fab-container {
            position: fixed;
            bottom: 20px;
            right: 40px;
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

    <style>
        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;

        }

        .dropdown-toggle:checked~.dropdown-content {
            max-height: 300vh;
            /* Adjust this value based on content */
        }

        .dropdown-toggle:checked~.dropdown-label .rotate-icon {
            transform: rotate(180deg);
        }

        .transition-transform {
            transition: transform 0.5s ease-out;
        }
    </style>

<div wire:loading.flex class="fixed inset-0 bg-gray-800 bg-opacity-75 z-50 items-center justify-center">
    <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-blue-500"></div>
</div>




    <x-dialog-modal wire:model.live="show_modal_denunciado">
        <x-slot name="title">
            Nuevo Denunciado
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-1 gap-6 mb-4">
                <div>
                    <x-label class="mb-1">
                        Nombre
                    </x-label>
                    <x-input wire:model="nombre" class="w-full text-black" placeholder="Diego Hurtado Vargas" />
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
                    <x-input wire:model="cargo" class="w-full text-black"
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
                @if ($editing_index !== null)
                    Actualizar
                @else
                    Agregar
                @endif
            </x-button>
        </x-slot>
    </x-dialog-modal>

    <div class="fab-container">

        <div class="fab-wrapper">

            <button type="button" wire:click="openModalAddDenunciado()" :disabled="$wire.show_modal_denunciado"
                class="fab disabled:bg-gray-500 disabled:cursor-not-allowed bg-[#25D366] hover:bg-[#1DA851] flex items-center">
                <i class="fa-solid fa-user-plus"></i>
            </button>
            <span class="tooltip">Agregar Denunciado</span>
        </div>
        {{-- <div class="fab-wrapper">

            <input type="file" wire:model="images" id="file-upload" class="hidden" multiple accept="image/*" />

            <button type="button" onclick="document.getElementById('file-upload').click()"
                class="fab {{ $show_modal_denunciado ? 'bg-gray-500 cursor-not-allowed' : 'bg-[#25D366] hover:bg-[#1DA851]' }} flex items-center">
                <i class="fa-solid fa-folder-plus"></i>
            </button>

            <span class="tooltip">Anexar Documento</span>
        </div> --}}



    </div>


    <div class="container-form">
        <div class="flex">


            <a href="{{ route('sder.index') }}" style="background-color: #04527b; width:50px;"
                class="mx-2 item-center middle none center flex justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                    class="fas fa-home text-lg leading-none" aria-hidden="true"></i></a>



        </div>


        <header class="text-3xl font-bold text-white my-10">FORMULARIO DE DENUNCIAS EN EL ÁMBITO DE EDUCACIÓN REGULAR
        </header>


        <div class="relative">
            <input type="checkbox" id="dropdownToggle" class="dropdown-toggle hidden">

            <label for="dropdownToggle"
                class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer  dropdown-label">
                <span class="text-xl font-bold">DATOS DEL DENUNCIANTE</span>
                <svg class="ml-2 w-7 h-7 transition-transform transform duration-500 ease-out rotate-icon"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>

            <div class="dropdown-content rounded-md shadow-xl border-2 border-blue-400 ">

                <!-- component -->
                <div class="flex items-center justify-center p-12">
                    <!-- Author: FormBold Team -->
                    <!-- Learn More: https://formbold.com -->
                    <div class="mx-auto w-full max-w-[600px]">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Nombres y Apellidos:
                                    </label>
                                    <input wire:model="nombre_denunciante" {{-- @if ($identidad_reserva_denunciante) disabled @endif --}}
                                        placeholder="Diego Hurtado Vargas" {{-- class="text-black w-full rounded-md border border-[#e0e0e0] {{ $identidad_reserva_denunciante ? 'bg-gray-900' : 'bg-white' }}" --}}
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white" py-3 px-6
                                        outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('nombre_denunciante')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Carnet de Identidad:
                                    </label>
                                    <input wire:model="carnet_denunciante" placeholder="1234567"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white
                                        py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('carnet_denunciante')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label for="guest" class="subtitle mb-3 block">
                                Domicilio:
                            </label>
                            <input wire:model="domicilio_denunciante" type="text" placeholder="Barrio El Fuerte"
                                min="0"
                                class="text-black w-full appearance-none rounded-md border border-[#e0e0e0] bg-white
                                py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('domicilio_denunciante')
                                <div class="error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="subtitle mb-3 block">
                                ¿Desea mantener su identidad en reserva?
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input wire:model.live="identidad_reserva_denunciante" type="radio"
                                        name="opcionIdentidad" value="true"
                                        @if ($seguimiento_email_denunciante === true) checked @endif class="h-5 w-5" />
                                    <label for="radioButton1" class="pl-3 text-white">
                                        Sí
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input wire:model.live="identidad_reserva_denunciante" type="radio"
                                        name="opcionIdentidad" value="false"
                                        @if ($seguimiento_email_denunciante === false) checked @endif class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-white">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Correo Electrónico:
                                    </label>
                                    <input wire:model="correo_denunciante" placeholder="diego@gmail.com"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white
                                        py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('correo_denunciante')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Teléfono:
                                    </label>
                                    <input placeholder="71310964" wire:model="telefono_denunciante"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white
                                        py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('telefono_denunciante')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="subtitle mb-3 block">
                                Seguimiento por Email/Teléfono
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input wire:model="seguimiento_email_denunciante" type="radio"
                                        name="opcionSeguimiento" value="true"
                                        @if ($seguimiento_email_denunciante === true) checked @endif class="h-5 w-5 bg-white" />
                                    <label for="radioButton1" class="pl-3 text-white">
                                        Sí
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input wire:model="seguimiento_email_denunciante" type="radio"
                                        name="opcionSeguimiento" value="false"
                                        @if ($seguimiento_email_denunciante === false) checked @endif class="h-5 w-5 bg-white" />
                                    <label for="radioButton2" class="pl-3 text-white">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="relative">
            <input type="checkbox" id="dropdownToggle2" class="dropdown-toggle hidden">

            <label for="dropdownToggle2"
                class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer  dropdown-label">
                <span class="text-xl font-bold">DATOS DEL DENUNCIADO</span>
                <svg class="ml-2 w-7 h-7 transition-transform transform duration-500 ease-out rotate-icon"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>

            <div class="dropdown-content rounded-md shadow-xl border-2 border-blue-400">


                <div class="flex items-center justify-center p-12">


                    <div class="mx-auto w-full max-w-[600px]">



                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Dirección General:
                                    </label>
                                    <input type="text" wire:model="direccion_general"
                                        placeholder="Barrio Flamingo C/Paraguay #123"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('direccion_general')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Unidad Educativa:
                                    </label>
                                    <input type="text" wire:model="unidad_educativa"
                                        placeholder="Módulo Educativo Flamingo"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('unidad_educativa')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Distrito Educativo:
                                    </label>
                                    <select
                                        style="width: 100%;
                            border: 1px solid lightgrey;
                            border-radius: 5px;
                            padding-left: 15px;"
                                        wire:model.live="distrito" class="text-gray-800">
                                        <option disabled selected value="">Selecciona un Distrito</option>

                                        @foreach ($distritos as $distrito_object)
                                            <option value="{{ $distrito_object->nombre }}">
                                                {{ $distrito_object->nombre }}</option>
                                        @endforeach

                                    </select>
                                    @error('distrito')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Zona:
                                    </label>
                                    <input wire:model="zona" placeholder="Zona Sur"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('zona')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Barrio:
                                    </label>
                                    <input wire:model="barrio" placeholder="Flamingo"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('barrio')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Referencia:
                                    </label>
                                    <input wire:model="referencia" placeholder="A una cuadra de..."
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('referencia')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="relative">
            <input type="checkbox" id="dropdownToggle3" class="dropdown-toggle hidden">

            <label for="dropdownToggle3"
                class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer  dropdown-label">
                <span class="text-xl font-bold">RELACIÓN DE LOS HECHOS EN LOS QUE SE BASA LA DENUNCIA</span>
                <svg class="ml-2 w-7 h-7 transition-transform transform duration-500 ease-out rotate-icon"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </label>

            <div class="dropdown-content rounded-md shadow-xl border-2 border-blue-400">


                <div class="flex items-center justify-center p-12">


                    <div class="mx-auto w-full max-w-[600px]">



                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Fecha del Hecho:
                                    </label>
                                    <input wire:model="fecha" type="date" placeholder="24/12/2000"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('fecha')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Hora del Hecho:
                                    </label>
                                    <input wire:model="hora" type="time" placeholder="18:30:00"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('hora')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="mb-5">
                                <label class="subtitle mb-3 block">
                                    Lugar del Hecho:
                                </label>
                                <input wire:model="lugar" type="text" placeholder="Afuera del colegio..."
                                    class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('lugar')
                                    <div class="error">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="mb-5">
                                <label class="subtitle mb-3 block">
                                    Descripción del Hecho:
                                </label>
                                <textarea wire:model="descripcion" rows="3" placeholder="Afuera del colegio estaban los estudiantes..."
                                    class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md"> </textarea>
                                @error('descripcion')
                                    <div class="error">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                        {{-- <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Fecha de la Denuncia:
                                    </label>
                                    <input wire:model="fecha_denuncia" type="date" placeholder="24/12/2000"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('fecha_denuncia')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="subtitle mb-3 block">
                                        Hora de la Denuncia:
                                    </label>
                                    <input wire:model="hora_denuncia" type="time" placeholder="18:30:00"
                                        class="text-black w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('hora_denuncia')
                                        <div class="error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>






        <header class="text-3xl font-bold text-white my-10">DENUNCIADOS</header>


        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
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
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $persona['nombre'] }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $persona['cargo'] }}
                                            </td>
                                            <td>
                                                <div class='flex items-center justify-center'>
                                                    <div class="m-2">
                                                        <button
                                                            wire:click="openModalEditDenunciado({{ $loop->index }})"
                                                            class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-600 transition-all duration-300 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="m-1">
                                                        <button wire:click="removeDenunciado({{ $loop->index }})"
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
                            <h3 class="text-xl text-black font-bold lead-xl bold">¡No hay denunciados!
                            </h3>
                            <div class="text-lg text-black font-light">Agregue nuevos denunciados por
                                favor.</div>
                        </div>
                    </div>
                </div>
            </body>
        @endif


        <header class="text-3xl font-bold text-white my-10">DOCUMENTOS ANEXADOS</header>


        <!-- File Upload Form -->
        <form wire:submit.prevent="addDoc" class="block items-center space-y-2">
            <input type="file" wire:model="newDoc" id="fileInput" class="hidden">

            <div class="flex items-center w-full border border-gray-300 p-2 focus:ring focus:ring-blue-200 rounded-lg">

                <button type="button" onclick="document.getElementById('fileInput').click()"
                    class="flex items-start px-2 py-1 bg-amber-600 text-white rounded-lg hover:bg-amber-700 focus:outline-none ">
                    Seleccionar Documento
                </button>

                @if ($newDoc)
                    <span class="text-lg text-white ml-2">{{ $newDoc->getClientOriginalName() }}</span>
                @else
                    <span class="text-md text-gray-400 ml-2">Seleccione un archivo</span>
                @endif


            </div>

            <button type="submit" :disabled="!$wire.newDoc"
                class=" bg-blue-600 px-2 py-1 text-white rounded-lg hover:bg-blue-700 disabled:bg-gray-400 disabled:cursor-not-allowed">
                Agregar Documento
            </button>
        </form>
        @error('newDoc')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <!-- Document List -->
        <div style="margin: 15px 0;">

            <ul class="list-disc list-inside mt-2 space-y-1">
                @foreach ($docs as $doc)
                    <li class="flex justify-between items-center bg-gray-100 p-2 rounded-lg">
                        <span>{{ $doc['name'] }}</span>
                        <div>
                            <a href="{{ asset($doc['path']) }}" target="_blank"
                                class="px-2 text-blue-500 hover:underline">
                                <i class="fas fa-eye"></i>
                            </a>
                            
                            <button type="button" wire:click="removeDoc('{{ $doc['path'] }}')"
                                class="px-2 text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>



        <button onclick="confirmDenuncia()"
            class="w-full bg-red-600 mt-8 mx-2 item-center middle none center flex justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true" style="position: relative; overflow: hidden;">
            Enviar Formulario
            <i class="fa-solid fa-paper-plane text-lg leading-none ml-2" aria-hidden="true"></i></button>
    </div>



    @push('js')
        <script>
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    Livewire.emit('fullscreenImage', null); // Close modal on 'Esc'
                }
            });
        </script>
        <script>
            function confirmDenuncia() {
                // event.preventDefault();
                // if(confirm('Estas seguro que deseas eliminar la familia?')){
                //     document.getElementById('delete-form').submit();
                // }
                Swal.fire({
                    title: "¿Enviar el formulario?",
                    text: "¡No podrás revertir esto! Se registrará la denuncia con los datos introducidos.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "¡Sí, enviar!",
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // document.getElementById('delete-form').submit();
                        @this.call('saveDenuncia');


                    }
                });
            }
        </script>
    @endpush

</div>
