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

            .pagination .page-item {
                margin: 0 2px;
            }

            .pagination .page-link {
                background-color: #f8f9fa;
                border: 1px solid #dee2e6;
                color: #007bff;
            }

            .pagination .page-link:hover {
                background-color: #e2e6ea;
                color: #0056b3;
            }

            .pagination .page-item.active .page-link {
                background-color: #007bff;
                border-color: #007bff;
                color: #fff;
            }
        </style>


        <div class="container-form">

            <div class="flex">
                <a href="{{ route('sder.index') }}" style="background-color: #04527b; width:5%;"
                    class="mx-2 item-center middle none center flex justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                        class="fas fa-home text-lg leading-none" aria-hidden="true"></i></a>
            </div>


            <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                INSTITUTOS DE EDUCACIÓN SUPERIOR
            </h2>

            <p style="font-size: 25px;" class=" text-white/90 md:mt-6 md:text-lg md:leading-relaxed md:block">
                Intitutos con normativa legal 2024
            </p>



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

            </div>


            <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 ">



                @if ($institutos->isEmpty())

                    <body>
                        <div class="flex flex-col justify-center items-center m-10">
                            <div
                                class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-gray-500 bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                                <div class="space-y-4">
                                    <h3 class="text-xl text-white font-bold lead-xl bold">¡No hay documentos con estas
                                        características!</h3>
                                    <div class="text-lg italic text-white font-light">Revise los filtros porfavor.</div>
                                </div>
                            </div>
                        </div>
                    </body>
                @else
                    <h2 class="my-5 text-md font-extrabold text-white text-7xl sm:text-5xl md:text-3xl lg:text-2xl">
                        {{-- {{ $tipo->tipo }} --}}
                    </h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">


                        @foreach ($institutos as $instituto)
                            <!-- component -->
                            <div
                                class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                                <div
                                    class="relative mx-4 mt-4 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                                    <img src="{{ asset($instituto->img_path) }}" alt="ui/ux review check"
                                        style="width:200p                                                                                                                                                                                                                                             x; height:200px; object-fit:fill;" />
                                    <div
                                        class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-tr from-transparent via-transparent to-black/60">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="flex items-center justify-center">


                                        <h1 class="block font-sans text-sm font-medium leading-snug tracking-normal text-blue-gray-900 antialiased cursor-pointer">Nombre:</h1>
                                        <h5
                                            class="block text-xs italic leading-snug tracking-normal text-blue-gray-900 antialiased cursor-pointer">
                                            {{ $instituto->nombre }}
                                        </h5>

                                    </div>

                                </div>
                                {{-- <div class="mt-auto">

                                    @foreach ($bibliografia->archivos as $archivo)
                                        <div class="px-3 pb-3">
                                            <a target="_blank" href="{{ $archivo->path }}"
                                                class="py-1 block w-full cursor-pointer select-none rounded-lg bg-[#04527b] text-center align-middle font-sans text-sm font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                                type="button" data-ripple-light="true">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                        </div>
                                    @endforeach

                                </div> --}}


                            </div>
                        @endforeach
                    </div>
                @endif








            </section>






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
