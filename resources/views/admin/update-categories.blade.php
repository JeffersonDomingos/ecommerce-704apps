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
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar Categoria</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('categorias.update', ['id'=>$category->id]) }}" method="post">
                        @csrf <!-- Token de proteção CSRF -->
                        @method('PUT') <!-- Para indicar o método PUT -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nome da categoria</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da categoria" value="{{ old('name', $category->name) }}" required>
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
