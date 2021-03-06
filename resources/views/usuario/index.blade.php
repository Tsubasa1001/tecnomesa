@extends('template')
@section('style')

@endsection
@section('title')
<h2>Gestión de usuarios</h2>
@endsection
@section('content')
<div class="row">
    <div class="col">
        <!-- START card-->
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex bd-highlight mb-3">
                    <div class="mr-auto p-2 bd-highlight"> Lista de usuarios</div>
                    <div class="p-2 bd-highlight">
                        <a class="btn btn-primary" href="{{route('usuario.create')}}">
                            <i class="fa fa-book"></i> Registrar
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <!-- START table-responsive-->
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellido}}</td>
                                <td>{{ $user->rol->nombre }}</td>
                                <td>
                                    <a href="{{route('usuario.edit',$user->id)}}"> editar </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- END table-responsive-->
            </div>
        </div><!-- END card-->
    </div>
</div><!-- END row-->

@endsection
@section('script')

@endsection