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
                        <h3 class="box-title">Nova Produto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('produtos.store') }}" method="post">
                        @csrf <!-- Token de proteção CSRF -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nome do Produto</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do Produto" required>
                                <label for="name">Preço</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Digite o preço do Produto" required>
                                <label for="name">Largura</label>
                                <input type="text" class="form-control" id="vlwidth" name="vlwidth" placeholder="Digite a largura do Produto" required>
                                <label for="name">Altura</label>
                                <input type="text" class="form-control" id="vlheigth" name="vlheigth" placeholder="Digite a altura do produto" required>
                                <label for="name">Comprimento</label>
                                <input type="text" class="form-control" id="vllength" name="vllength" placeholder="Digite o comprimento do Produto" required>
                                <label for="name">Peso</label>
                                <input type="text" class="form-control" id="vlweigth" name="vlweigth" placeholder="Digite o peso do Produto" required>
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
