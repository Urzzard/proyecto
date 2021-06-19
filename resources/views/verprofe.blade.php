@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PROFESIONALES') }}</div>
                    @foreach ($verprofe as $profe)
                        <hgroup class="container">
                            <a style="font-size: 25px" href="">{{$profe["name"]}}</a>
                            <h5>{{$profe["usuario"]}}</h5>
                            <p>E-mail: {{$profe["email"]}}</p>
                            <p>{{$profe["categoria"]}}</p>
                        </hgroup>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection