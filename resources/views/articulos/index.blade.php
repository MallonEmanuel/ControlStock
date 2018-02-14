@extends('layouts.master')

@section('content')
  <div class="col-md-10 col-md-offset-1">
    @include('articulos.partials.table')
    <a class="btn btn-success pull-left" href="{{ url('/articulos/create') }}" role="button">Nuevo</a>
  </div>
@stop
