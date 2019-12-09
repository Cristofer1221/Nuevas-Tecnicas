@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Disco {{ $disco->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/discos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/discos/' . $disco->id . '/edit') }}" title="Edit Disco"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('discos' . '/' . $disco->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Disco" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $disco->id }}</td>
                                    </tr>
                                    <tr><th> DiscoID </th><td> {{ $disco->discoID }} </td></tr><tr><th> Tipo </th><td> {{ $disco->tipo }} </td></tr><tr><th> Capacidad </th><td> {{ $disco->capacidad }} </td></tr><tr><th> Vellectura </th><td> {{ $disco->vellectura }} </td></tr><tr><th> Velescritura </th><td> {{ $disco->velescritura }} </td></tr><tr><th> Categoria Id </th><td> {{ $disco->categoria_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
