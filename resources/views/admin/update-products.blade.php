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
                    <h3 class="box-title">Editar Produto</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('produtos.update', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nome do Produto</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do produto" value="{{ $product->name }}">
                            <label for="name">Preço</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Digite o preço do Produto" value="{{ $product->price }}">
                            <label for="name">Largura</label>
                            <input type="text" class="form-control" id="vlwidth" name="vlwidth" placeholder="Digite a largura do Produto" value="{{ $product->vlwidth }}">
                            <label for="name">Altura</label>
                            <input type="text" class="form-control" id="vlheigth" name="vlheigth" placeholder="Digite a altura do produto" value="{{ $product->vlheigth }}">
                            <label for="name">Comprimento</label>
                            <input type="text" class="form-control" id="vllength" name="vllength" placeholder="Digite o Digite o comprimento do Produto" value="{{ $product->vllength }}">
                            <label for="name">Peso</label>
                            <input type="text" class="form-control" id="vlweigth" name="vlweigth" placeholder="Digite o peso do Produto" value="{{ $product->vlweigth }}">
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