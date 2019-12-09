@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @include('admin.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">cpu # {{ $cpu->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/cpu') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/cpu/' . $cpu->id . '/edit') }}" title="Edit cpu"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('cpu' . '/' . $cpu->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete cpu" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cpu->id }}</td>
                                    </tr>
                                    <tr><th> ClockSpeed </th><td> {{ $cpu->ClockSpeed }} </td></tr><tr><th> TurboClockSpeed </th><td> {{ $cpu->TurboClockSpeed }} </td></tr><tr>
                                        <th> Cores </th><td> {{ $cpu->Cores }} </td></tr>
                                        <th> Socket </th><td> {{ $cpu->Socket }} </td></tr>
                                        <th> Marca </th><td> {{ $cpu->Marca }} </td></tr>
                                        <th> Foto </th><td><img src="{{asset('storage').'/'.$cpu->Foto }}" alt="" width="200"></td></tr>
                                        <th> categoria_id </th><td> {{ $cpu->categoria_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
