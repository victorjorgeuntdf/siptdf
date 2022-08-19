<x-app-layout>

    Bienvenido a Create At. Publico.
    <br>
    
    
    <form action="{{ route('storeAtPublico') }}" method="POST">
    @csrf

    <label for="">Tipo Doc</label>

    <input name="tipoDoc"  type="text">
   
    
    </form>

</x-app-layout>
