<div class="form-group {{ $errors->has('ramID') ? 'has-error' : ''}}">
    <label for="ramID" class="control-label">{{ 'Ramid' }}</label>
    <input class="form-control" name="ramID" type="text" id="ramID" value="{{ isset($ram->ramID) ? $ram->ramID : ''}}" >
    {!! $errors->first('ramID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($ram->tipo) ? $ram->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('frecuencia') ? 'has-error' : ''}}">
    <label for="frecuencia" class="control-label">{{ 'Frecuencia' }}</label>
    <input class="form-control" name="frecuencia" type="text" id="frecuencia" value="{{ isset($ram->frecuencia) ? $ram->frecuencia : ''}}" >
    {!! $errors->first('frecuencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacidad') ? 'has-error' : ''}}">
    <label for="capacidad" class="control-label">{{ 'Capacidad' }}</label>
    <input class="form-control" name="capacidad" type="text" id="capacidad" value="{{ isset($ram->capacidad) ? $ram->capacidad : ''}}" >
    {!! $errors->first('capacidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    <label for="categoria_id" class="control-label">{{ 'Categoria Id' }}</label>
    <input class="form-control" name="categoria_id" type="text" id="categoria_id" value="{{ isset($ram->categoria_id) ? $ram->categoria_id : ''}}" >
    {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Crear' }}">
</div>
