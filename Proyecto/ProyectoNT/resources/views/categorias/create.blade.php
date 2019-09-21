<form action="{{url('/categorias')}}" method="post">
{{ csrf_field() }}
<label for="Nombre">{{'Nombre de la Categoría'}}</label>
<input type="text" name="Nombre" id="Nombre" value="">
<br/> <br/>
<input type="submit" value="Agregar">
</form>
<!-- Para fotos <form action="" method="post" enctype="multipart/form-data"></form>
<label for="Foto">{{'Foto'}}</label>
<input type="file" name="Foto" id="Foto" value="">
-->
