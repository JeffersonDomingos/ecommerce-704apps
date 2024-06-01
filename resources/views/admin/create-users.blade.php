<!-- Content Header (Page header) -->
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Novo Usuário</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('usuarios.store') }}" method="post">
                        @csrf <!-- Token de proteção CSRF -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nome do Usuário</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do usuário" required>
                                <label for="name">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail do usuário" required>
                                <label for="name">Senha:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha do usuário" required>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

@stop
