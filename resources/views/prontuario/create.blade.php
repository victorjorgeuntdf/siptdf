<x-app-layout>

    <div class="container">
        <div class="p-4 font-sans font-bold">
                Crear un Prontuario
        </div>
    </div>    
    
    <form action="{{ route('storeProntuario') }}" method="POST">
    @csrf
        <div class="container">
            <div class="py-4">

                
            </div>
        </div>
    </form>




</x-app-layout>
