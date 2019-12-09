<div class="form-group {{ $errors->has('discoID') ? 'has-error' : ''}}">
    <label for="discoID" class="control-label">{{ 'Discoid' }}</label>
    <input class="form-control" name="discoID" type="text" id="discoID" value="{{ isset($disco->discoID) ? $disco->discoID : ''}}" >
    {!! $errors->first('discoID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($disco->tipo) ? $disco->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacidad') ? 'has-error' : ''}}">
    <label for="capacidad" class="control-label">{{ 'Capacidad' }}</label>
    <input class="form-control" name="capacidad" type="text" id="capacidad" value="{{ isset($disco->capacidad) ? $disco->capacidad : ''}}" >
    {!! $errors->first('capacidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vellectura') ? 'has-error' : ''}}">
    <label for="vellectura" class="control-label">{{ 'Vellectura' }}</label>
    <input class="form-control" name="vellectura" type="text" id="vellectura" value="{{ isset($disco->vellectura) ? $disco->vellectura : ''}}" >
    {!! $errors->first('vellectura', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('velescritura') ? 'has-error' : ''}}">
    <label for="velescritura" class="control-label">{{ 'Velescritura' }}</label>
    <input class="form-control" name="velescritura" type="text" id="velescritura" value="{{ isset($disco->velescritura) ? $disco->velescritura : ''}}" >
    {!! $errors->first('velescritura', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    <label for="categoria_id" class="control-label">{{ 'Categoria Id' }}</label>
    <input class="form-control" name="categoria_id" type="text" id="categoria_id" value="{{ isset($disco->categoria_id) ? $disco->categoria_id : ''}}" >
    {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Crear' }}">
</div>
