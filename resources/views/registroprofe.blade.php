@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SER PROFESIONAL') }}</div>
                    <p>Para poder convertirse en profesional y poder brindar servicios en la plataforma, necesita rellenar el siguiente formulario.</p>
                    <form action="{{ route('store')}}" method="post">
                        @csrf
                        <div class="form-group ">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">USUARIO</label>
                            <input id="usuario" name="usuario" class="form-control" type="text" placeholder="Usuario">
                        </div>
                        
                        <label for="edad" class="col-md-4 col-form-label text-md-right">EDAD</label>
                        <input id="edad" name="edad" class="form-control" type="text" placeholder="Edad">
                        <label for="telefono" class="col-md-4 col-form-label text-md-right">TELEFONO</label>
                        <input id="telefono" name="telefono" class="form-control" type="text" placeholder="Telefono">
                        <label for="categoria" class="col-md-4 col-form-label text-md-right">CATEGORIA</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="Programacion">Programacion</option>
                            <option value="Diseño">Diseño</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Transporte">Transporte</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Animacion">Animacion</option>
                            <option value="Traduccion">Traduccion</option>
                            <option value="Belleza">Belleza</option>
                            <option value="Construccion">Construccion</option>
                            <option value="Reparacion">Reparacion</option>
                        </select>
                        <label for="descripcion" class="col-md-4 col-form-label text-md-right">DESCRIPCION</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="10" placeholder="agregue una breve descripcion de su trabajo..."></textarea>
                        <button type="submit" class="btn btn-primary">
                            Terminar Registro
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection