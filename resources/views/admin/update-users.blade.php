@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Editar Usuário</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Usuário</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('usuarios.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nome do Usuário</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da Usuário" value="{{ $user->name }}">
                            <label for="name">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o nome da Usuário" value="{{ $user->email }}">
                            <label for="name">Nova Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Digite o nome da Usuário" value="">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@stop