@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PERFIL DEL USUARIO') }}</div>
                    @foreach ($verperfil as $usuario)
                        <hgroup>
                            <h1>{{$usuario["name"]}}</h1>
                            <p>E-mail: {{$usuario["email"]}}</p>
                        </hgroup>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection