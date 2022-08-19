<x-app-layout>

    Bienvenido a Create Of. Citaciones.
    <br>
    
    
    <form action="{{ route('storeOfCitaciones') }}" method="POST">
    @csrf

    <label for="">Tipo Doc</label>

    <input name="tipoDoc"  type="text">
   
    
    </form>

</x-app-layout>
