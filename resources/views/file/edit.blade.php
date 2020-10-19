@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                        {!! Form::open(['route' => ['file.update', $file], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('Usuario asociado:') !!}
                            {!! Form::select('user_id',$users,null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
                        </div>
                        {!! Form::submit('Actualizar relacion Archivo', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
