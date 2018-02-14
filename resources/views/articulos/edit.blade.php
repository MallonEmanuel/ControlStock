@extends('layouts.master')

@section('content')
    {!! Form::model($articulo, [ 'route' => ['articulos.update', $articulo], 'method' => 'PUT']) !!}
        @include('articulos.partials.fields')

        <div class="row">
            <div class="col-md-3">
                <button type="submit" class="btn btn-success btn-block">Guardar</button>
            </div>
            <div class="col-md-3">
                <button onclick="history.back()"  class="btn btn-cancel btn-block">Cancelar</button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
