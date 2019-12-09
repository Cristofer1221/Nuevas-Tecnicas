@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ram {{ $ram->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/rams') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/rams/' . $ram->id . '/edit') }}" title="Edit Ram"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('rams' . '/' . $ram->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Ram" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ram->id }}</td>
                                    </tr>
                                    <tr><th> RamID </th><td> {{ $ram->ramID }} </td></tr><tr><th> Tipo </th><td> {{ $ram->tipo }} </td></tr><tr><th> Frecuencia </th><td> {{ $ram->frecuencia }} </td></tr><tr><th> Capacidad </th><td> {{ $ram->capacidad }} </td></tr><tr><th> Categoria Id </th><td> {{ $ram->categoria_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
