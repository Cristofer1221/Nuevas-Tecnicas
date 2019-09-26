

<form action="{{url('/categorias')}}" method="post">
<label for="categoria">{{'categoria'}}</label>
@csrf
<input type="text" name="categoria" value="">
<br>
<input type="submit" value="Agregar">
</form>