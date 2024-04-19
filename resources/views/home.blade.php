@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión correctamente!!') }}
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-5 py-2.5 bg-dark text-white">
        <div class="container text-center">
            Desarrollado por Samantha Ramirez.
        </div>
    </footer>
</div>
@endsection
