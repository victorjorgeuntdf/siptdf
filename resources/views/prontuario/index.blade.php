<x-app-layout>
    <div>
        <div class="bg-white shadow-xl rounded-lg p-6 mb-4">
            <p class="text-2xl text-center font-semibold mb-2">OFICINA DE PRONTUARIO</p>
        </div>

        <div class="container py-8">
            <div class="grid grid-cols-4">

                <figure class="bg-white mx-2 rounded-lg shadow">
                    <article>
                        <figure class="my-2">
                            <img class="h-64 w-full object-cover object-center" src="{{ asset('storage/of/prontuario.jpg') }}"
                                alt="">
                        </figure>
                        <div class="py-4 px-6">
                            <p class="font-bold text-trueGray-700">OFICINA</p>
                            <h1 class="text-lg font-semibold">
                                <a href="{{ route('createProntuario') }}">
                                    Carga Paso a Paso
                                </a>
                            </h1>
                        </div>
                    </article>
                </figure>

                <figure class="bg-white mx-2 rounded-lg shadow">
                    <article>
                        <figure class="my-2">
                            <img class="h-64 w-full object-cover object-center" src="{{ asset('storage/of/oficina.jpg') }}"
                                alt="">
                        </figure>
                        <div class="py-4 px-6">
                            <p class="font-bold text-trueGray-700">OFICINA</p>
                            <h1 class="text-lg font-semibold">
                                <a href="{{ route('showProntuarios') }}">
                                    Buscar Prontuario
                                </a>
                            </h1>
                        </div>
                    </article>
                </figure>

            </div>
        </div>

</x-app-layout>
