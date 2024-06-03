@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Editar Categoria</h1>
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
                <form role="form" action="{{ route('categorias.update', $category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nome da categoria</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da categoria" value="{{ $category->name }}">
                            <label class="mt-4" for="image">Imagem da Categoria:</label>
                            <input type="file" name="category_image" id="category_image">
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