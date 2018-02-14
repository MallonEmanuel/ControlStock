{{-- Vista de tabla de articulos --}}
<table class="table table-striped table-bordered" id="table" width="100%" data-toggle="dataTable" data-form="deleteForm">
  <thead>
      <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Codigo</th>
          <th class="text-center">Descripcion</th>
          <th class="text-center">Stock</th>
          <th class="text-center">Stock Minimo</th>
          <th class="text-center">Costo</th>
          <th class="text-center">Precio</th>
          <th class="text-center">Unidad de Medida</th>
          <th class="text-center">Acciones</th>
      </tr>
  </thead>
  <tbody>
    @foreach($articulos as $articulo)
      <tr>
          <td class="text-left">{{ $articulo->id }}</td>
          <td class="text-left">{{ $articulo->codigo }}</td>
          <td class="text-left">{{ $articulo->descripcion }}</td>
          <td class="text-center">{{ $articulo->stock }}</td>
          <td class="text-center">{{ $articulo->stock_minimo }}</td>
          <td class="text-center">{{ $articulo->costo }}</td>
          <td class="text-center">{{ $articulo->precio }}</td>
          <td class="text-center">{{ $articulo->unidad_medida }}</td>

          {!! Form::open(['route' => ['articulos.destroy', $articulo->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Seguro que desea eliminar el articulo?")']) !!}

          <td class="text-center">
              {{-- Remove --}}
              <button type="" class="btn btn-danger btn-xs">
                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </button>

              {{-- Edit --}}
              <a href="{{ url('/articulos/'.$articulo->id.'/edit') }}" class="btn btn-info btn-xs">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              </a>
          </td>

          {!! Form::close() !!}

      </tr>
    @endforeach
  </tbody>
</table>
