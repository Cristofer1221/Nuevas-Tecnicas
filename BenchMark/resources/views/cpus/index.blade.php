Despligue de Datos
<table> 
 <thead class="thead-light">    
    <tr>    
        <th>   # </th>
        <th> ClockSpeed </th>
        <th> TurboClockSpeed </th>
        <th> Cores </th>
        <th> Socket </th>
        <th> Foto </th>
        <th> CategoriaID </th>
        <th> Acciones </th>
    </tr>
 </thead>
<tbody> 
@foreach($cpus as $cpu)
      <tr>
      
      <td> {{$loop->iteration}} </td>
      <td> {{$cpu->ClockSpeed}} </td>
      <td> {{$cpu->TurboClockSpeed}} </td>
      <td>{{$cpu->Cores}}</td>
      <td>{{$cpu->Socket}}</td>
      <td>{{$cpu->Foto}}</td>
      <td>{{$cpu->categoria_id}}</td>
      <td> Editar|Borrar</td>
      </tr>  
@endforeach
</tbody>


</table>