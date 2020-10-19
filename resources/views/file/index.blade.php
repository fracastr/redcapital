@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de archivos</div>

                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->name }}</td>
                                    <td>{{ $file->user->name }}</td>
                                    <td><a href="{{ route('file.edit', $file->id) }}" class="glyphicon glyphicon-edit"></a>
                                        <a href="{{ route('file.destroy', $file->id) }}" onclick="return confirm('¿Seguro que desea eliminar el usuario?')" class="glyphicon glyphicon-trash"></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <div class="text-center">
                            {!! $files->render() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
