<x-app-layout>

    Bienvenido a Show Of. Repar.

    <div class="card">
        <div class="card-body">
            {{!! Form::open(['route' => 'storeOfJudicial']) !!}}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese dato...']) !!}

            </div>
                {!! Form::submit('Crear Dato', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>


    </div>

 
</x-app-layout>
