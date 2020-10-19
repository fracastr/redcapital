@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                        {!! Form::open(['route' => ['user.update', $user], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('Nombre:') !!}
                            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Ingrese un nombre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Email:') !!}
                            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Ingrese un email']) !!}
                        </div>
                        {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
