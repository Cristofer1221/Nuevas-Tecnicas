<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorías</title>
    <!-- Font Awesome https://mdbootstrap.com/md-bootstrap-cdn/-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</head>
<body>
    <style>
        .container{
            padding:0.5%;
        }
    
    
    </style>
    <div class="container">
    <h2 class="alert alert-success">HardWare Categorías</h2>

    <div class="row">
        <a href="categorias/create" class="btn btn-info" style="margin-left:75%" data-toggle="modal" data-target="#exampleModal">Agregar Nueva Categoría</a>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                    <tbody>
                    @foreach($categorias as $key=>$categoria)    
                    <tr>
                            <td>{{++$key}}</td>
                            <td>{{$categoria->nombre}}</td>
                            <td>
                                <a href="" type="button" class="btn btn-success btn-sm"> Ver</a>
                                <a data-toggle="modal" data-target="#exampleModal-edit" type="button" class="btn btn-info btn-sm"> Editar</a>
                                <a href="" type="button" class="btn btn-danger btn-sm"> Eliminar</a>
                           
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </thead>
            </table>
         <!-----Nueva Categoria----->    
        
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog model-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingreso de Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/categorias')}}" method="post">
{{ csrf_field() }}
<label for="Nombre">{{'Nombre de la Categoría'}}</label>
<input type="text" name="Nombre" id="Nombre" value="">
<br/> <br/>
<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" value="Agregar">Guardar Categoría</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Editar -->
<div class="modal fade left" id="exampleModal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog model-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/categorias')}}" method="post">
{{ csrf_field() }}
<label for="Nombre">{{'Nombre de la Categoría'}}</label>
<input type="text" name="Nombre" id="Nombre" value="">
<br/> <br/>
<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" value="Agregar">Actualizar Categoría</button>
      </div>
      </form>
    </div>
  </div>
</div>


</div>
</div>
</div>
</body>
</html>