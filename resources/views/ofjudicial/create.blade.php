<x-app-layout>

    Bienvenido a Create Of. Judicial.
    <br>
    
    
    <form action="{{ route('storeOfJudicial') }}" method="POST">
    @csrf

    <label for="">Tipo Doc</label>

    <input name="tipoDoc"  type="text">
   
    
    </form>

</x-app-layout>
