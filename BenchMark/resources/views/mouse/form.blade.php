<div class="form-group {{ $errors->has('mouseID') ? 'has-error' : ''}}">
    <label for="mouseID" class="control-label">{{ 'Mouseid' }}</label>
    <input class="form-control" name="mouseID" type="text" id="mouseID" value="{{ isset($mouse->mouseID) ? $mouse->mouseID : ''}}" >
    {!! $errors->first('mouseID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('DPI_Max') ? 'has-error' : ''}}">
    <label for="DPI_Max" class="control-label">{{ 'Dpi Max' }}</label>
    <input class="form-control" name="DPI_Max" type="text" id="DPI_Max" value="{{ isset($mouse->DPI_Max) ? $mouse->DPI_Max : ''}}" >
    {!! $errors->first('DPI_Max', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('DPI_Ajustable') ? 'has-error' : ''}}">
    <label for="DPI_Ajustable" class="control-label">{{ 'Dpi Ajustable' }}</label>
    <input class="form-control" name="DPI_Ajustable" type="text" id="DPI_Ajustable" value="{{ isset($mouse->DPI_Ajustable) ? $mouse->DPI_Ajustable : ''}}" >
    {!! $errors->first('DPI_Ajustable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Dise単o') ? 'has-error' : ''}}">
    <label for="Dise単o" class="control-label">{{ 'Dise祓o' }}</label>
    <input class="form-control" name="Dise単o" type="text" id="Dise単o" value="{{ isset($mouse->Dise単o) ? $mouse->Dise単o : ''}}" >
    {!! $errors->first('Dise単o', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    <label for="categoria_id" class="control-label">{{ 'Categoria Id' }}</label>
    <input class="form-control" name="categoria_id" type="text" id="categoria_id" value="{{ isset($mouse->categoria_id) ? $mouse->categoria_id : ''}}" >
    {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
