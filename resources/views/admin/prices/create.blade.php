@extends('adminlte::page')

@section('title', 'Cursos CENEC')

@section('content_header')
    <h1>Agregar nuevo precio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.prices.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => ' Ingrese el nombre de este precio']) !!}
            @error('name')
            <span class="text-danger">No ha agregado ningu nombre del precio...</span>
             @enderror

        </div>

        <div class="form-group">
            {!! Form::label('value', 'Valor') !!}
            {!! Form::text('value', null, ['class' => 'form-control',  'placeholder' => ' Ingrese el valor del precio']) !!}
            @error('value')
            <span class="text-danger">No ha agregado ningun valor del precio ...</span>
             @enderror
        </div>

     

        {!! Form::submit('Crear nuevo precio', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop