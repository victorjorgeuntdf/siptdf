<x-app-layout>
    @auth
        <section class="bg-cover" style="background-image: url({{ asset('img/hd-wallpaper1280.jpg') }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <h1 class="text-white font-fold text-4xl">
                    SIPTDF
                    <p>
                        Bienvenido
                    </p>
                </h1>
            </div>
        </section>
    @else
        <div>
            <section class="bg-cover" style="background-image: url({{ asset('img/logo_policiatdf.jpg') }})">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                    <h1 class="text-blue-700 font-fold text-4xl">
                        Policia de Tierra del Fuego.
                    </h1>    
                </div>
            </section>
        </div>
    @endauth
</x-app-layout>
