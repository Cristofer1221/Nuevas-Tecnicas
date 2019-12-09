<div class="form-group {{ $errors->has('gpuID') ? 'has-error' : ''}}">
    <label for="gpuID" class="control-label">{{ 'Gpuid' }}</label>
    <input class="form-control" name="gpuID" type="text" id="gpuID" value="{{ isset($gpus->gpuID) ? $gpus->gpuID : ''}}" >
    {!! $errors->first('gpuID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('arquitectura') ? 'has-error' : ''}}">
    <label for="arquitectura" class="control-label">{{ 'Arquitectura' }}</label>
    <input class="form-control" name="arquitectura" type="text" id="arquitectura" value="{{ isset($gpus->arquitectura) ? $gpus->arquitectura : ''}}" >
    {!! $errors->first('arquitectura', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('frecuencia') ? 'has-error' : ''}}">
    <label for="frecuencia" class="control-label">{{ 'Frecuencia' }}</label>
    <input class="form-control" name="frecuencia" type="text" id="frecuencia" value="{{ isset($gpus->frecuencia) ? $gpus->frecuencia : ''}}" >
    {!! $errors->first('frecuencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('memoria_de_video') ? 'has-error' : ''}}">
    <label for="memoria_de_video" class="control-label">{{ 'Memoria De Video' }}</label>
    <input class="form-control" name="memoria_de_video" type="text" id="memoria_de_video" value="{{ isset($gpus->memoria_de_video) ? $gpus->memoria_de_video : ''}}" >
    {!! $errors->first('memoria_de_video', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    <label for="categoria_id" class="control-label">{{ 'Categoria Id' }}</label>
    <input class="form-control" name="categoria_id" type="text" id="categoria_id" value="{{ isset($gpus->categoria_id) ? $gpus->categoria_id : ''}}" >
    {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Crear' }}">
</div>
