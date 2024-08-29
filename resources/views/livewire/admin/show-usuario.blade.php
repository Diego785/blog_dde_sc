<!-- modal.blade.php -->

<!-- Modal backdrop -->
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
    <x-dialog-modal wire:model.live="show_modal_add_user">
        <x-slot name="title">
            Nuevo Usuario
        </x-slot>
        <x-slot name="content">
            <x-validation-errors class="mb-4" />
            <div class="grid grid-cols-1 gap-6 mb-4">
                <div>
                    <x-label class="mb-1">
                        Nombre
                    </x-label>
                    <x-input wire:model="nombre" class="w-full text-black" placeholder="Diego Hurtado Vargas" />
                </div>
                <div>
                    <x-label class="mb-1">
                        Correo
                    </x-label>
                    <x-input wire:model="correo" type="email" class="w-full text-black"
                        placeholder="diego@gmail.com" />
                </div>
                <div>
                    <x-label class="mb-1">
                        Contraseña
                    </x-label>
                    <x-input wire:model="contra" type="password" class="w-full text-black"
                        placeholder="Ingrese su contraseña" />
                </div>

                <div>
                    <x-label class="mb-1">
                        Rol
                    </x-label>
                    <select wire:model="rol"
                        style="border: 1px solid lightgrey;
                    border-radius: 5px;"
                        class="w-full text-black pl-[15px]">
                        <option disabled value="">Seleccione un rol...</option>
                        <option value="Superadministrador">Superadministrador</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
                <div>
                    <x-label class="mb-1">
                        Unidad
                    </x-label>
                    <select wire:model="unidad"
                        style="
                    border: 1px solid lightgrey;
                    border-radius: 5px;"
                        wire:model="rolDenunciado" class="w-full text-black pl-[15px]">
                        <option disabled value="">Seleccione una unidad...</option>
                        <option value="1">Subdirección de Educación Regular</option>
                        <option value="2">Subdirección de Educación Alternativa y Especial</option>
                        <option value="3">Subdirección de Educación Superior</option>
                        <option value="4">Unidad de Asuntos Administrativos</option>
                        <option value="5">Unidad de Asuntos Jurídicos</option>
                        <option value="6">Auditoría Interna</option>
                        <option value="7">Unidad de Transparencia</option>
                    </select>
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-danger-button class="btn btn-blue mx-2" wire:click.prevent="$set('show_modal_add_user', false)">
                Cerrar
            </x-danger-button>
            <x-button class="btn btn-blue mx-2" wire:click.prevent="saveUser()">
                Agregar
            </x-button>

        </x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model.live="show_modal_edit_user">
        <x-slot name="title">
            Editar Usuario
        </x-slot>
        <x-slot name="content">
            <x-validation-errors class="mb-4" />
            <div class="grid grid-cols-1 gap-6 mb-4">
                <div>
                    <x-label class="mb-1">
                        Nombre
                    </x-label>
                    <x-input wire:model="nombre" class="w-full text-black" placeholder="Diego Hurtado Vargas" />
                </div>
                <div>
                    <x-label class="mb-1">
                        Correo
                    </x-label>
                    <x-input wire:model="correo" type="email" class="w-full text-black"
                        placeholder="diego@gmail.com" />
                </div>
                <div>
                    <x-label class="mb-1">
                        Rol
                    </x-label>
                    <select wire:model="rol"
                        style="
                    border: 1px solid lightgrey;
                    border-radius: 5px;"
                        wire:model="rolDenunciado" class="w-full text-black pl-[15px]">
                        <option disabled value="">Seleccione un rol...</option>
                        <option value="Superadministrador">Superadministrador</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
                <div>
                    <x-label class="mb-1">
                        Unidad
                    </x-label>
                    <select wire:model="unidad"
                        style="
                    border: 1px solid lightgrey;
                    border-radius: 5px;"
                        wire:model="rolDenunciado" class="w-full text-black pl-[15px]">
                        <option disabled value="">Seleccione una unidad...</option>
                        <option value="1">Subdirección de Educación Regular</option>
                        <option value="2">Subdirección de Educación Alternativa y Especial</option>
                        <option value="3">Subdirección de Educación Superior</option>
                        <option value="4">Unidad de Asuntos Administrativos</option>
                        <option value="5">Unidad de Asuntos Jurídicos</option>
                        <option value="6">Auditoría Interna</option>
                        <option value="7">Unidad de Transparencia</option>
                    </select>
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-danger-button class="btn btn-blue mx-2" wire:click.prevent="$set('show_modal_edit_user', false)">
                Cerrar
            </x-danger-button>
            <x-button class="btn btn-blue mx-2" wire:click.prevent="updateUser()">
                Actualizar
            </x-button>

        </x-slot>
    </x-dialog-modal>
    <div>


        <div class="container-form">


            <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                USUARIOS
            </h2>

            <div class="flex justify-center my-7 mx-8">

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
                {{-- <div class="relative w-52">


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


                </div> --}}
            </div>


            @if ($users->isEmpty())

                <body>
                    <div class="flex flex-col justify-center items-center m-10">
                        <div
                            class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-gray-500 bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                            <div class="space-y-4">
                                <h3 class="text-xl text-white font-bold lead-xl bold">¡No existen usuarios con
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
                                                Nombre
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Correo
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Rol
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                Unidad
                                            </th>
                                            @role('Superadministrador')
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                    Acciones
                                                </th>
                                            @endrole
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr class="{{ $loop->even ? 'bg-white' : 'bg-gray-100' }} border-b">


                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $user->name }}
                                                </td>


                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $user->email }}
                                                </td>

                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $user->getRoleNames()->first() }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                    {{ $user->unidad->nombre }}
                                                </td>

                                                @role('Superadministrador')
                                                    <td>
                                                        <div class='flex items-center justify-center'>

                                                            <div class="m-2">

                                                                <button wire:click="openModalEditUser({{ $user->id }})"
                                                                    class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-600 transition-all duration-300 text-white">
                                                                    <i class="fas fa-edit text-lg leading-none"></i>
                                                                </button>
                                                            </div>


                                                            <div class="m-2">

                                                                <a onclick="confirmDelete({{ $user->id }})"
                                                                    class="cursor-pointer flex p-2.5 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white">
                                                                    <i class="fas fa-trash text-lg leading-none"></i>
                                                                </a>

                                                            </div>

                                                        </div>
                                                    </td>
                                                @endrole
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="pagination mt-4">
                                    {{ $users->links() }}
                                </div>



                            </div>
                        </div>
                    </div>







                </div>

            @endif





        </div>



        <div class="fab-container pr-5">

            <div class="fab-wrapper">
                <button wire:click="openModalAddUser()"
                    class="fab {{ $show_modal_add_user ? 'bg-gray-500 cursor-not-allowed' : 'bg-[#25D366] hover:bg-[#1DA851]' }} transition-colors duration-200"
                    id="fab1" {{ $show_modal_add_user ? 'disabled' : '' }}>
                    <i class="fab fa-plus"></i>
                </button>
                <span class="tooltip">Crear Usuario</span>
            </div>
        </div>

        @push('js')
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    let lastScrollTop = 0;
                    let isScrolling;
                    const fabContainer = document.querySelector('.fab-container');

                    if (!fabContainer) {
                        console.error('Element with class fab-container not found');
                        return;
                    }

                    window.addEventListener('scroll', () => {
                        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                        // Clear any existing timeout
                        clearTimeout(isScrolling);

                        // Check if the user is scrolling up or down
                        if (scrollTop > lastScrollTop) {
                            // Scrolling Down
                            fabContainer.style.transform = 'translateY(-50px)';
                        } else {
                            // Scrolling Up
                            fabContainer.style.transform = 'translateY(50px)';
                        }

                        // Update lastScrollTop to current scroll position
                        lastScrollTop = scrollTop;

                        // Set a timeout to reset the transform after scrolling stops
                        isScrolling = setTimeout(() => {
                            fabContainer.style.transform = 'translateY(0)';
                        }, 500); // Adjust the delay to your preference
                    });
                });
            </script>
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
                            @this.call('deleteUser', id);


                        }
                    });
                }
            </script>
        @endpush



    </div>
