<x-app-layout>
    <div>
        Bienvenido a Index Prontuario.

    </div>

    <div>

        <div class="bg-white shadow-xl rounded-lg p-6 mb-4">
            <p class="text-2xl text-center font-semibold mb-2">Paso a Paso Carga Prontuario</p>

            <div class="flex justify-end items-center">


            </div>
        </div>

        <div class="container py-8">
            <div class="grid grid-cols-4 ">

                <figure class="mb-4 mx-2">
                    <img class="w-80 h-80 object-cover object-center rounded-xl"
                        src="{{ asset('storage/of/oficina.jpg') }}" alt="">
                    <x-jet-dropdown-link href="{{ route('showProntuario') }}">
                        Prontuario
                    </x-jet-dropdown-link>
                    <x-jet-label>
                        Prontuario
                    </x-jet-label>

                </figure>

                <figure class="mb-4 mx-2">
                    <img class="w-80 h-80 object-cover object-center rounded-xl"
                        src="{{ asset('storage/of/prontuario.jpg') }}" alt="">
                    <x-jet-dropdown-link href="{{ route('showProntuario') }}">
                        Promtuario
                    </x-jet-dropdown-link>
                    <x-jet-label>
                        Promtuario
                    </x-jet-label>

                </figure>

                <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage/of/prontuario.jpg') }}"
                        alt="">
                </div>

            </div>

            <div class="px-6 py-4 flex items-center">
                <div class="flex items-center">
                    <select wire:model="cant" class="mx-2 form-control">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>


            </div>
        </div>

        <div class="container py-8">
            <div class="grid grid-cols-4">

                <figure class="bg-white mx-2 rounded-lg shadow">
                    <article>
                        <figure>
                            <img class="h-48 w-full object-cover object-center" src="{{ asset('storage/of/oficina.jpg') }}"
                                alt="">
                        </figure>
        
                        <div class="py-4 px-6">
                            <h1 class="text-lg font-semibold">
                                <a href="{{ route('showProntuario') }}">
                                    Mostrar Prontuario
                                </a>
                            </h1>
        
                            <p class="font-bold text-trueGray-700">PRONTUARIO</p>
                        </div>
                    </article>
                </figure>

                <li class="bg-white mx-2 rounded-lg shadow">
                    <article>
                        <figure>
                            <img class="h-48 w-full object-cover object-center" src="{{ asset('storage/of/prontuario.jpg') }}"
                                alt="">
                        </figure>
        
                        <div class="py-4 px-6">
                            <h1 class="text-lg font-semibold">
                                <a href="{{ route('showProntuario') }}">
                                    Mostrar Otros
                                </a>
                            </h1>
        
                            <p class="font-bold text-trueGray-700">OFICINA</p>
                        </div>
                    </article>
                </li>

            </div>

        </div>




</x-app-layout>
