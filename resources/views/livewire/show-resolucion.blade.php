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
                min-height: 100vh;
            }



        
        </style>



        <div class="container-form">

            <div class="">
                <a href="{{ route('sder.index') }}" style="background-color: #04527b; width:5%;"
                    class="mx-2 item-center middle none center flex justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                        class="fas fa-home text-lg leading-none" aria-hidden="true"></i></a>
            </div>


            <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                RESOLUCIONES
            </h2>

            {{-- <p style="font-size: 25px;" class=" text-white/90 md:mt-6 md:text-lg md:leading-relaxed md:block">
                Resoluciones Ministeriales
            </p> --}}



            <div class="flex justify-center mt-7 mx-8">

                <div class="relative w-96">
                    <input wire:model.live="search"
                        class="border-2 border-primary bg-red transition h-12 px-5 pr-16 rounded-md focus:outline-none w-full text-black text-lg"
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


            <section class="">


                <section class="questions contenedor" id="questions">
                    {{-- <h2 class="subtitulo">Preguntas Frecuentes</h2> --}}

                    <section class="questions__container">

                        @foreach ($resolutions as $resolution)
                            <article class="questions__padding"
                                style="
                            border: 2px solid #5454d4;
                            ">
                                <div class="questions__answer">
                                    <h3 style="padding: 10px 0; justify-content: space-between;"
                                        class="questions__title text-white font-bold items-center">
                                        {{ $resolution->titulo }}


                                        <span class="questions__arrow">
                                            <img src="{{ asset('img/arrow.svg') }}" class="questions__img">
                                        </span>
                                    </h3>

                                      


                                    <p class="questions__show text-white italic font-extralight">
                                        {{ $resolution->descripcion }}
                                          <a href="{{ $resolution->archivo_path }}"
                                            class="mx-2 bg-green-500 w-[5vw] h-0 middle none center inline-flex justify-center items-center text-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            data-ripple-light="true" style="position: relative; overflow: hidden;"><i
                                                class="fas fa-download text-lg leading-none" aria-hidden="true"></i></a>

                                    </p>




                                </div>
                            </article>
                        @endforeach

                    </section>

                </section>








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
