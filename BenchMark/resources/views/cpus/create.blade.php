
<form action="{{url('/cpus')}}" method="post" enctype="multipart/form-data">
@csrf
<label for="ClockSpeed">{{'ClockSpeed'}}</label>
<input type="number" name="ClockSpeed" id="ClockSpeed" value="" min="1" max="5" step="0.1">
<br>
<label for="turbo">{{'TurboClockSpeed'}}</label>
<input type="number" name="TurboClockSpeed" id="TurboClockSpeed" value="" min="1" max="5" step="0.1">
<br>
<label for="Cores">{{'Cores'}}</label>
<input type="text" name="Cores"  id="Cores"value="">
<br>
<label for="Socket">{{'Socket'}}</label>
<input type="text" name="Socket" id="Socket"value="">
<br>
<label for="Foto">{{'Foto'}}</label>
<input type="file" name="Foto" id="Foto" value="">
<br>
<label for="categoria_id">{{'categoria_id'}}</label>
<input type="text" name="categoria_id" id="categoria_id" value="">
<br>
<input type="submit" value="Agregar">







</form>