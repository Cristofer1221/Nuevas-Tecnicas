<div class="form-group {{ $errors->has('ClockSpeed') ? 'has-error' : ''}}">
    <label for="ClockSpeed" class="control-label">{{ 'Clockspeed' }}</label>
    <input class="form-control" name="ClockSpeed" type="number" id="ClockSpeed" value="{{ isset($cpu->ClockSpeed) ? $cpu->ClockSpeed : ''}}" min="1" step="0.1" max="5" >
    {!! $errors->first('ClockSpeed', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('TurboClockSpeed') ? 'has-error' : ''}}">
    <label for="TurboClockSpeed" class="control-label">{{ 'Turboclockspeed' }}</label>
    <input class="form-control" name="TurboClockSpeed" type="number" id="TurboClockSpeed" value="{{ isset($cpu->TurboClockSpeed) ? $cpu->TurboClockSpeed : ''}}" min="1" step="0.1" max="6">
    {!! $errors->first('TurboClockSpeed', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Cores') ? 'has-error' : ''}}">
    <label for="Cores" class="control-label">{{ 'Cores' }}</label>
    <input class="form-control" name="Cores" type="number" id="Cores" value="{{ isset($cpu->Cores) ? $cpu->Cores : ''}}" min= "1"max="56">
    {!! $errors->first('Cores', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Socket') ? 'has-error' : ''}}">
    <label for="Socket" class="control-label">{{ 'Socket' }}</label>
    <input class="form-control" name="Socket" type="text" id="Socket" value="{{ isset($cpu->Socket) ? $cpu->Socket : ''}}" >
    {!! $errors->first('Socket', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Marca') ? 'has-error' : ''}}">
    <label for="Marca" class="control-label">{{ 'Marca' }}</label>
    <input class="form-control" name="Marca" type="text" id="Marca" value="{{ isset($cpu->Marca) ? $cpu->Marca : ''}}" >
    {!! $errors->first('Marca', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="file" id="Foto" value="{{ isset($cpu->Foto) ? $cpu->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    <label for="categoria_id" class="control-label">{{ 'Categoria Id' }}</label>
    <input class="form-control" name="categoria_id" type="number" id="categoria_id" value="{{ isset($cpu->categoria_id) ? $cpu->categoria_id : ''}}" >
    {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
