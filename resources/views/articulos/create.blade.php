@extends('layouts.master')

@section('content')
    {!! Form::open([ 'route' => 'articulos.store', 'method' => 'POST']) !!}
        @include('articulos.partials.fields')

        <div class="row">
            <div class="col-md-3">
                <button type="submit" class="btn btn-success btn-block">Guardar</button>
            </div>

            <div class="col-md-3">
                <button onclick="location.href='{{ url('articulos') }}'" class="btn btn-cancel btn-block" type="button">Cancelar</button>
             {{-- onclick="history.back()" --}}
            </div>
        </div>
    {!! Form::close() !!}
@endsection
