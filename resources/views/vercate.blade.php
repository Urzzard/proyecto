@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CATEGORIAS') }}</div>
                    @foreach ($vercate as $cate)
                        <hgroup>
                            <a style="font-size: 25px" href="">{{$cate["categoria"]}}</a>
                        </hgroup>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection