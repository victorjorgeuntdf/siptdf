<x-app-layout>

    Bienvenido a Create Ayuda.
    <br>
    
    
    <form action="{{ route('storeAyuda') }}" method="POST">
    @csrf

    <label for="">Tipo Doc</label>

    <input name="tipoDoc"  type="text">
   
    
    </form>

</x-app-layout>
