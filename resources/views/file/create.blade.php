@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Añadir Archivo</div>
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
                    {!! Form::open(['route' => 'file.store', 'method' => 'POST', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('Archivo:') !!}
                            {!! Form::file('file') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Usuario asociado:') !!}
                            {!! Form::select('user_id',$users,null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar Archivo', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
