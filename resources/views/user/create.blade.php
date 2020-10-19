@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear usuario</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="card-body">
                    {!! Form::open(['route' => 'user.store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('Nombre:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un nombre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Email:') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Password:') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*****']) !!}
                        </div>
                        {!! Form::submit('Guardar Usuario', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
