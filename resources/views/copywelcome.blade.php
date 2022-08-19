<x-app-layout>
<style>
    
</style>
    @auth
        
        <section >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <h1 class="text-black font-fold text-4xl">
                    SIPTDF               
                    <p>
                        Bienvenido                    
                    </p> 
                </h1>

            </div>

        </section>
    @else
        <div>
            <section class="bg-cover" style="background-image: url({{asset('img/grande_logo_policiatdf_gris.jpg')}})"  >
                    <div class="max-w-7xl my-7 px-4">
                        Policia de Tierra del Fuego.
                    </div>
            </section>
        </div>
    @endauth


    <section class="bg-cover" style="background-image: url({{asset('img/hd-wallpaper1280.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <h1 class="text-white font-fold text-4xl">
                SIPTDF               
                <p>
                    Bienvenido                    
                </p> 
            </h1>

        </div>

    </section>



</x-app-layout>

