<!-- Content Header (Page header) -->
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title pt-3">Nova Categoria</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('categorias.store') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- Token de proteção CSRF -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nome da categoria</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da categoria" required>
                            <label class="mt-4" for="image">Imagem da Categoria:</label>
                            <input type="file" name="category_image" id="category_image">
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