@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="px-0">
  <h2 class="pt-3">
    Lista de Produtos
  </h2>
  
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header">
          <a href="/admin/produtos/create" class="mb-3 btn btn-success">Cadastrar Produto</a>
        </div>

        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">ID</th>
                <th>Nome do Produto</th>
                <th>Preço R$</th>
                <th>Largura</th>
                <th>Altura</th>
                <th>Comprimento</th>
                <th>Peso</th>
                <th class="text-center">Imagem do Produto</th>
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td style="vertical-align: middle;">{{ $product->id }}</td>
                <td style="vertical-align: middle;">{{ $product->name }}</td>
                <td style="vertical-align: middle;">{{ $product->price }}</td>
                <td style="vertical-align: middle;">{{ $product->vlwidth }}</td>
                <td style="vertical-align: middle;">{{ $product->vlheigth }}</td>
                <td style="vertical-align: middle;">{{ $product->vllength }}</td>
                <td style="vertical-align: middle;">{{ $product->vlweigth }}</td>
                <td style="vertical-align: middle;">
                  @if ($product->image)
                  <img style="display: block; margin-right: auto; margin-left: auto" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                  @endif
                </td>

                <td>
                  <a href="/admin/produtos/{{ $product->id }}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <form action="{{route('produtos.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>

</section>
<!-- /.content -->

<!-- /.content-wrapper -->
@stop