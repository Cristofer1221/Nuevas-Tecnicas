@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Mouse {{ $mouse->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/mouse') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/mouse/' . $mouse->id . '/edit') }}" title="Edit Mouse"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('mouse' . '/' . $mouse->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Mouse" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mouse->id }}</td>
                                    </tr>
                                    <tr><th> MouseID </th><td> {{ $mouse->mouseID }} </td></tr><tr><th> DPI Max </th><td> {{ $mouse->DPI_Max }} </td></tr><tr><th> DPI Ajustable </th><td> {{ $mouse->DPI_Ajustable }} </td></tr><tr><th> Diseño </th><td> {{ $mouse->Diseño }} </td></tr><tr><th> Categoria Id </th><td> {{ $mouse->categoria_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
