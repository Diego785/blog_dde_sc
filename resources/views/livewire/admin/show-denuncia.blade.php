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
        </style>


        <div class="container-form">


            <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                DENUNCIAS
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
                        <option value="2">En proceso</option>
                        <option value="3">Rechazado</option>
                        <option value="4">En espera</option>
                        <option value="5">Finalizado</option>
                    </select>


                </div>
            </div>


            @if ($form_denuncias->isEmpty())

                <body>
                    <div class="flex flex-col justify-center items-center m-10">
                        <div
                            class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-gray-500 bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                            <div class="space-y-4">
                                <h3 class="text-xl text-white font-bold lead-xl bold">¡No existen casos de denuncia con
                                    estas características!</h3>
                                <div class="text-lg italic text-white font-light">Revise los filtros porfavor.</div>
                            </div>
                        </div>
                    </div>
                </body>
            @else
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
                                                Código
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Denunciante
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Unidad Educativa
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Descripción
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Denunciados
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Estado
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Acciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($form_denuncias as $form_denuncia)
                                            <tr class="{{ $loop->even ? 'bg-white' : 'bg-gray-100' }} border-b">

                                                <td class="text-md text-gray-900 font-bold px-6 py-4 whitespace-nowrap">
                                                    {{ $form_denuncia->id }}
                                                </td>

                                                @if ($form_denuncia->denunciante?->nombre != null && $form_denuncia->mantener_identidad_reserva == 0)
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                        {{ $form_denuncia->denunciante->nombre }}
                                                    </td>
                                                @else
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="rounded py-1 px-3 text-xs text-white font-bold bg-gray-400">
                                                            Anónimo
                                                        </span>
                                                    </td>
                                                @endif


                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                    {{ $form_denuncia->denuncia->unidad_educativa }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 italic">
                                                    {{ \Illuminate\Support\Str::limit($form_denuncia->relacionHechoDenuncia->descripcion_hecho, 100) }}
                                                </td>

                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ count($form_denuncia->denuncia->personasDenunciadas) }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="rounded py-1 px-3 text-xs text-white font-bold 
                                                {{ $form_denuncia->es_valido === '2' ? 'bg-orange-400' : '' }}
                                                {{ $form_denuncia->es_valido === '3' ? 'bg-red-400' : '' }}
                                                {{ $form_denuncia->es_valido === '4' ? 'bg-gray-400' : '' }}
                                                {{ $form_denuncia->es_valido === '5' ? 'bg-green-400' : '' }}
                                                ">
                                                        @if ($form_denuncia->es_valido === '2')
                                                            En proceso
                                                        @else
                                                            @if ($form_denuncia->es_valido == '3')
                                                                Rechazado
                                                            @else
                                                                @if ($form_denuncia->es_valido == '4')
                                                                    En espera
                                                                @else
                                                                    @if ($form_denuncia->es_valido == '5')
                                                                        Finalizado
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class='flex items-center justify-center'>
                                                        <div class="m-2">
                                                            <a href="{{ route('show-denuncia', $form_denuncia) }}"
                                                                class="flex p-2.5 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white">
                                                                <i class="fas fa-eye text-lg leading-none"></i>
                                                            </a>

                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="pagination mt-4">
                                    {{ $form_denuncias->links() }}
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- component -->


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