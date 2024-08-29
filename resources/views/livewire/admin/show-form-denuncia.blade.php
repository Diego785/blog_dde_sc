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

            header,
            h5 {
                color: white;
            }


            .container-form {
                /* background-color: #152e4d; */
                background: url('{{ asset('img/bg.png') }}'), -webkit-linear-gradient(bottom, #0250c5, #152e4d);
                /* height:max-content; */
                text-align: center;
                border-radius: 5px;
                /* padding: 18% 35px 0 35px; */
                padding: 10px 35px 0 35px;
            }

            .container-form header {
                font-size: 24px;
                font-weight: 700;
            }

            .container-form .form-outer {
                width: 100%;
                overflow: hidden;
            }

            .container-form .form-outer .form {
                display: flex;
                width: 300%;
                margin: 20px 0;
            }

            .form-outer .form .page {
                width: 33.33%;
                height: 100%;
                margin: 0 0.10px;
                transition: margin-left 0.3s ease-in-out;
            }

            .form-outer .form .page .title {
                text-align: left;
                font-size: 20px;
                font-weight: 500;
                color: white;
            }

            .form-outer .form .page .field {
                width: 100%;
                display: flex;
                position: relative;
            }

            .form .page .field .label {
                position: absolute;
                top: -18px;
                font-size: 15px;
                font-weight: 500;
                margin-top: 20px;
                color: white;
            }

            .form .page .field input,
            textarea {
                width: 100%;
                box-sizing: border-box;
                border: 1px solid lightgrey;
                border-radius: 5px;
                font-size: 18px;
                color: black;
                margin-top: 23px;
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


            .input-nombre-denunciante {
                text-transform: uppercase;
            }
        </style>




        <!-- component -->
        <!-- This is an example component -->

        @if ($denunciante != null)
            <x-dialog-modal wire:model="show_modal_seguimiento_denuncia">
                <x-slot name="title">
                    Nuevos Comentarios a {{ $denunciante['correo_electronico'] }}
                </x-slot>
                <x-slot name="content">
                    <div class="grid grid-cols-1 gap-6 mb-4">
                        <div>
                            <x-label class="mb-1">
                                Título
                            </x-label>
                            <x-input wire:model="title" class="w-full text-black" placeholder="Falta de Información" />

                        </div>
                        <div>
                            <x-label class="">
                                Descripción
                            </x-label>
                            <textarea type="text" wire:model="description" class="w-full text-black" rows="3"
                                placeholder="Se le solicita al interesado..."></textarea>
                        </div>
                    </div>
                </x-slot>
                <x-slot name="footer">
                    <x-danger-button class="btn btn-blue mx-2"
                        wire:click.prevent="$set('show_modal_seguimiento_denuncia', false)">
                        Cerrar
                    </x-danger-button>
                    <x-button class="btn btn-blue mx-2" onclick="confirmDialog({{ $is_valid_form }})">
                        Enviar
                    </x-button>

                </x-slot>
            </x-dialog-modal>
        @endif




        <!-- component -->
        <div class="container-form">
            <div class="flex">

                <a href="{{ route('show-denuncias') }}" style="background-color: #04527b; width:5%;"
                    class="mx-2 rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                        class="fas fa-eye text-lg leading-none" aria-hidden="true"></i></a>
                <a href="{{ route('generate-pdf', $formulario_denuncia_model->id) }}"
                    style="background-color: green; width:5%;"
                    class="mx-2 rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                        class="fa-solid fa-download text-lg leading-none" aria-hidden="true"></i></a>

            </div>
            <header>FORMULARIO DE DENUNCIA # {{ $formulario_denuncia['id'] }}</header>
            <div class="form-outer">
                <div class="form">
                    <div class="page slide-page">
                        <div class="title">Datos del Denunciante:</div>

                        @if ($denunciante == null)

                            <body>
                                <div class="flex flex-col justify-center items-center m-10">
                                    <div
                                        class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-gray-500 bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                                        <div class="space-y-4">
                                            <h3 class="text-xl text-white font-bold lead-xl bold">Denunciante Anónimo
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </body>
                        @else
                            <div class="field">
                                <div class="label">Apellidos y Nombres:</div>
                                <input disabled wire:model="denunciante.nombre" type="text"
                                    class="input-nombre-denunciante">
                            </div>


                            <div class="field" style="display: flex; align-items: center;">
                                <div class="field">
                                    <div class="label">CI:</div>
                                    <input disabled wire:model="denunciante.carnet" type="text">
                                </div>
                            </div>


                            <div class="field">
                                <div class="label">Domicilio:</div>
                                <input disabled wire:model="denunciante.direccion" type="text" />
                            </div>
                            <div class="field">
                                <div class="label">
                                    ¿Desea mantener su identidad en reserva?:</div>

                                <div
                                    style="margin-top: 30px; display: flex; justify-content: space-around; width: 100%;">
                                    <label class="custom-radio">
                                        <input disabled
                                            {{ $denunciante['mantener_identidad_reserva'] === '1' ? 'checked' : '' }}
                                            type="radio" name="opcionIdentidad" value="true">
                                        <span class="radiomark"></span>
                                        <h5 class="label-text">Sí</h5>
                                    </label>
                                    <label class="custom-radio">
                                        <input disabled
                                            {{ $denunciante['mantener_identidad_reserva'] === '0' ? 'checked' : '' }}
                                            type="radio" name="opcionIdentidad" value="false">
                                        <span class="radiomark"></span>
                                        <h5 class="label-text">No</h5>
                                    </label>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center;">


                                <div class="field" style="padding-right: 5px;">
                                    <div class="label">Correo Electrónico:</div>
                                    <div class="w-full block">
                                        <input disabled wire:model="denunciante.correo_electronico" type="text">

                                    </div>

                                </div>


                                <div class="field" style="padding-left: 5px;">
                                    <div class="label">Teléfono:</div>


                                    <div class="w-full block">
                                        <input disabled wire:model="denunciante.telefono" type="text">

                                    </div>
                                    <!-- <input type="text"> -->

                                </div>
                            </div>
                            <div class="field">
                                <div class="label"
                                    style="text-align: start; padding-bottom: 100px; margin-bottom: 100px;">
                                    Seguimiento por Email/Teléfono:</div>

                                <div
                                    style="margin-top: 30px; display: flex; justify-content: space-around; width: 100%;">
                                    <label class="custom-radio">
                                        <input disabled {{ $denunciante['seguimiento'] === '1' ? 'checked' : '' }}
                                            type="radio" name="opcionSeguimiento" value="true">
                                        <span class="radiomark"></span>
                                        <h5 class="label-text">Sí</h5>
                                    </label>
                                    <label class="custom-radio">
                                        <input disabled {{ $denunciante['seguimiento'] === '0' ? 'checked' : '' }}
                                            type="radio" name="opcionSeguimiento" value="false">
                                        <span class="radiomark"></span>
                                        <h5 class="label-text">No</h5>
                                    </label>
                                </div>

                            </div>
                        @endif








                        <div class="title"> Datos de la Denuncia:</div>



                        <div class="field">
                            <div class="label">Dirección General:</div>
                            <input disabled wire:model="denuncia.direccion_general" type="text">
                        </div>


                        <div class="field">
                            <div class="label">Unidad Educativa:</div>
                            <input disabled wire:model="denuncia.unidad_educativa" type="text">

                        </div>

                        <div class="field">
                            <div class="label">Distrito:</div>
                            <input disabled wire:model="denuncia.distrito" type="text">
                        </div>

                        <div class="field">
                            <div class="label">Zona:</div>

                            <input disabled wire:model="denuncia.zona" type="text">
                            <!-- <input type="text"> -->

                        </div>

                        <div class="field">
                            <div class="label">Barrio:</div>
                            <input disabled wire:model="denuncia.barrio" type="text">
                        </div>

                        <div class="field">
                            <div class="label">Referencia:</div>

                            <input disabled wire:model="denuncia.referencia" type="text">
                            <!-- <input type="text"> -->

                        </div>

                        <div class="title">Relación de los hechos en que se basa la denuncia:</div>
                        <div style="display: flex; align-items: center;">
                            <div class="field" style="padding-right: 5px;">
                                <div class="label">Fecha:</div>
                                <div class="block w-full">

                                    <input disabled wire:model="relacion_hecho_denuncia.fecha_hecho" type="date">

                                </div>

                            </div>
                            <div class="field" style="padding-left: 5px;">
                                <div class="label">Hora:</div>

                                <div class="block w-full">

                                    <input disabled wire:model="relacion_hecho_denuncia.hora_hecho" type="time">


                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="label">Lugar:</div>
                            <input disabled wire:model="relacion_hecho_denuncia.lugar_hecho" type="text">
                        </div>

                        <div class="field">
                            <!-- <input type="text"> -->
                            <div class="label">Descripción:</div>
                            <textarea type="text" class="mt-6 text-lg" disabled wire:model="relacion_hecho_denuncia.descripcion_hecho"
                                rows="3" placeholder="Inserte la descripción de los hechos..."></textarea>
                        </div>


                        <div style="display: flex;">
                            <div class="field" style="padding-right: 5px;  flex: 1;">
                                <div class="label">Fecha de Denuncia:</div>
                                <div class="block w-full">

                                    <input disabled wire:model="relacion_hecho_denuncia.fecha_denuncia"
                                        type="date">

                                </div>
                            </div>
                            <div class="field" style="padding-left: 5px;  flex:1 ;">
                                <div class="label">Hora de Denuncia:</div>
                                <div class="block w-full">
                                    <input disabled wire:model="relacion_hecho_denuncia.hora_denuncia" type="time">

                                </div>
                            </div>
                        </div>
                        <div class="title"> Denunciados:</div>

                        <!-- component -->
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                                <div class="py-2 inline-block min-w-full ">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="bg-white border-b">
                                                <tr>
                                                    {{-- <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        #
                                    </th> --}}
                                                    <th scope="col"
                                                        class="text-sm font-medium text-gray-900 px-6 py-4">
                                                        Nombre
                                                    </th>
                                                    <th scope="col"
                                                        class="text-sm font-medium text-gray-900 px-6 py-4">
                                                        Cargo
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($denuncia['personas_denunciadas'] as $persona)
                                                    <tr
                                                        class="{{ $loop->even ? 'bg-white' : 'bg-gray-100' }} border-b">
                                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td> --}}
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $persona['nombre'] }}
                                                        </td>
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $persona['cargo'] }}
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




                        @role('Superadministrador')

                            @if ($formulario_denuncia['es_valido'] == '4')
                                <div class="flex justify-center my-5">

                                    @if ($denunciante != null && $denunciante['seguimiento'] === '1')
                                        <button wire:click="openModalSeguimientoDenuncia(2)" {{-- onclick="confirmDialog(2)" --}}
                                            class="middle none center mr-4 flex items-center justify-center rounded-lg bg-green-500 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            data-ripple-light="true">
                                            <i class="fas fa-check text-lg leading-none"></i>
                                        </button>
                                        <button wire:click="openModalSeguimientoDenuncia(3)" {{-- onclick="confirmDialog(3)" --}}
                                            class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-red-600 to-red-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            data-ripple-light="true">
                                            <i class="fas fa-x text-lg leading-none"></i>
                                        </button>
                                    @else
                                        <button onclick="confirmDialog(2)"
                                            class="middle none center mr-4 flex items-center justify-center rounded-lg bg-green-500 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            data-ripple-light="true">
                                            <i class="fas fa-check text-lg leading-none"></i>
                                        </button>
                                        <button onclick="confirmDialog(3)"
                                            class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-red-600 to-red-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            data-ripple-light="true">
                                            <i class="fas fa-x text-lg leading-none"></i>
                                        </button>
                                    @endif


                                </div>
                            @else
                                @if ($formulario_denuncia['es_valido'] == '2')

                                    <body>
                                        <div class="flex flex-col justify-center items-center m-10">
                                            <div
                                                class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-green-500 bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                                                <div class="space-y-4">
                                                    <h3 class="text-xl text-white font-bold lead-xl bold">¡Formulario
                                                        #{{ $formulario_denuncia['id'] }} Aceptado Correctamente!</h3>
                                                    <div class="text-lg italic text-white font-light">Todos los datos
                                                        son
                                                        válidos.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </body>
                                @elseif($formulario_denuncia['es_valido'] == '3')

                                    <body>
                                        <div class="flex flex-col justify-center items-center m-10">
                                            <div
                                                class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-red-500 bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                                                <div class="space-y-4">
                                                    <h3 class="text-xl text-white font-bold lead-xl bold">¡Formulario
                                                        #{{ $formulario_denuncia['id'] }} Rechazado!</h3>
                                                    <div class="text-lg italic text-white font-light">Contactar con el
                                                        denunciante para la verificación del caso.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </body>
                                @endif
                            @endif
                        @endrole


                    </div>


                </div>

            </div>




        </div>
    </div>

    @push('js')
        <script>
            function confirmDialog(value) {
                // event.preventDefault();
                // if(confirm('Estas seguro que deseas eliminar la familia?')){
                //     document.getElementById('delete-form').submit();
                // }
                Swal.fire({
                    title: value ? "¿Está seguro que desea aceptar el formulario?" :
                        "¿Está seguro que desea rechazar el formulario?",
                    text: "¡No podrá revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: value ? "¡Sí, aceptar!" : "¡Sí, rechazar!",
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // document.getElementById('delete-form').submit();
                        @this.call('confirmValidation', value);


                    }
                });
            }
        </script>

        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    @endpush
</div>
