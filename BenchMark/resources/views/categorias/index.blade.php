Despligue de Datos
<table> 
 <thead class="thead-light">    
    <tr>    
        <th>   # </th>
        <th>   Categoría </th>
        <th>   Acciones </th>
    </tr>
 </thead>
<tbody> 
@foreach($categorias as $categoria)
      <tr>
      
      <td> {{$loop->iteration}} </td>
      <td> {{$categoria->categoria}} </td>
      <td> Editar|
        <form method="post"action="{{url('/categorias/'.$categoria->id)}}">
        @csrf
        <button>Borrar</button>
        </form>
      </td>
      </tr>  
@endforeach
</tbody>


</table>