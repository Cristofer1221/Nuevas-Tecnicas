@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Gpus {{ $gpus->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/gpus') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/gpus/' . $gpus->id . '/edit') }}" title="Edit Gpus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('gpus' . '/' . $gpus->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Gpus" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $gpus->id }}</td>
                                    </tr>
                                    <tr><th> GpuID </th><td> {{ $gpus->gpuID }} </td></tr><tr><th> Arquitectura </th><td> {{ $gpus->arquitectura }} </td></tr><tr><th> Frecuencia </th><td> {{ $gpus->frecuencia }} </td></tr><tr><th> Memoria De Video </th><td> {{ $gpus->memoria_de_video }} </td></tr><tr><th> Categoria Id </th><td> {{ $gpus->categoria_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
