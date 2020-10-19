@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de usuarios</div>

                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="{{ route('user.edit', $user->id) }}" class="glyphicon glyphicon-edit"></a>
                                        <a href="{{ route('user.destroy', $user->id) }}" onclick="return confirm('¿Seguro que desea eliminar el usuario?')" class="glyphicon glyphicon-trash"></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <div class="text-center">
                            {!! $users->render() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
