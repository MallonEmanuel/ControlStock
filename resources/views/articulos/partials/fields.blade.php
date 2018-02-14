
<div class="row">

    <div class="form-group col-md-3">
        {!! Form::label('codigo', 'Codigo', ['for' => 'codigo'] ) !!}
        {!! Form::text('codigo', null , ['class' => 'form-control', 'id' => 'codigo', 'placeholder' => 'Codigo de barras','autofocus'=>'autofocus','required' => 'required']  ) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('descripcion', 'Descripcion', ['for' => 'descripcion'] ) !!}
        {!! Form::text('descripcion', null , ['class' => 'form-control','id' => 'descripcion','placeholder' => 'Descripcion' ,'required' => 'required' ]  ) !!}
    </div>

    <div class="form-group col-md-1">
        {!! Form::label('stock', 'Stock', ['for' => 'stock'] ) !!}
        {!! Form::number('stock', null , ['class' => 'form-control','id' => 'stock','placeholder' => 'Stock' ,'required' => 'required' ,'min'=>0 ]  ) !!}
    </div>
    <div class="form-group col-md-1">
        {!! Form::label('stock_minimo', 'Minimo', ['for' => 'stock_minimo'] ) !!}
        {!! Form::number('stock_minimo', null , ['class' => 'form-control','id' => 'stock_minimo','placeholder' => 'Min' ,'required' => 'required', 'min'=>1 ]  ) !!}
    </div>
    <div class="form-group col-md-1">
        {!! Form::label('costo', 'Costo', ['for' => 'costo'] ) !!}
        {!! Form::number('costo', null , ['class' => 'form-control','id' => 'costo', 'placeholder' => 'Costo' , 'min'=>0 ]  ) !!}
    </div>
    <div class="form-group col-md-1">
        {!! Form::label('precio', 'Precio', ['for' => 'precio'] ) !!}
        {!! Form::number('precio', null , ['class' => 'form-control','id' => 'precio','placeholder' => 'Precio', 'required' => 'required' , 'min'=>0 ]  ) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('unidad_medida', 'Unidad de medida', ['for' => 'unidad_medida','placeholder' => 'Unidad' ] ) !!}
        <select name="unidad_medida" class="form-control">
        {{-- <option value="" disabled selected>Elige una unidad...</option> --}}
            <option value="unidad" selected="">Unidad</option>
            <option value="kg">Kg</option>
            <option value="litro">Litro</option>
            <option value="cm3">Cm3</option>
            <option value="g">Gramo</option>
            <option value="mg">Miligramo</option>
        </select>
    </div>

    @include('articulos.partials.fields_events')
</div>
