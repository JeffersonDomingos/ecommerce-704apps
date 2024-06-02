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
                    <h3 class="box-title pt-3">Novo Produto</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('produtos.store') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- Token de proteção CSRF -->
                    <div class="box-body">
                        <div class="form-group space-y-3">
                            <label class="mt-4"  for="name">Nome do Produto</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do Produto" required>
                            <label class="mt-4"  for="name">Preço</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Digite o preço do Produto" required>
                            <label class="mt-4"  for="name">Largura</label>
                            <input type="text" class="form-control" id="vlwidth" name="vlwidth" placeholder="Digite a largura do Produto" required>
                            <label class="mt-4"  for="name">Altura</label>
                            <input type="text" class="form-control" id="vlheigth" name="vlheigth" placeholder="Digite a altura do produto" required>
                            <label class="mt-4"  for="name">Comprimento</label>
                            <input type="text" class="form-control" id="vllength" name="vllength" placeholder="Digite o comprimento do Produto" required>
                            <label class="mt-4"   for="name">Peso</label>
                            <input type="text" class="form-control" id="vlweigth" name="vlweigth" placeholder="Digite o peso do Produto" required>
                            <label class="mt-4" for="image">Imagem do Produto:</label>
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success mb-3">Cadastrar Produto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

@stop