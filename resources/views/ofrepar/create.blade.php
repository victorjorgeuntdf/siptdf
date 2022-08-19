<x-app-layout>

    Bienvenido a Create Of. Repar.
    <br>
    
    
    <form action="{{ route('storeOfRepar') }}" method="POST">
    @csrf

    <label for="">Tipo Doc</label>

    <input name="tipoDoc"  type="text">
   
    
    </form>

</x-app-layout>
