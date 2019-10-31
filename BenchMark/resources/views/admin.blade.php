@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" action=>Panel de Administrador</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/categoria">Administrar Categorías</a>
                    <br>
                    <a href="/cpu">Administrar Cpus</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection