@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="px-0">
  <h2 class="pt-3">
    Lista de Categorias
  </h2>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header">
          <a href="/admin/categorias/create" class="mb-3 btn btn-success">Cadastrar Categoria</a>
        </div>

        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px" class="text-center">ID</th>
                <th class="text-center">Nome da Categoria</th>
                <th class="text-center">Imagem da Categoria</th>

              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td class="text-center" style="vertical-align: middle;">{{ $category->id }}</td>
                <td class="text-center" style="vertical-align: middle;">{{ $category->name }}</td>
                <td class="text-center" style="vertical-align: middle;">
                  @if ($category->category_image)
                  <img style="display: block; margin-right: auto; margin-left: auto" src="{{ asset('storage/' . $category->category_image) }}" alt="{{ $category->name }}" width="100">
                  @endif
                </td>
                <td class="text-center" style="vertical-align: middle;">
                  <a href="/admin/categorias/{{$category->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <form action="{{ route('categorias.destroy', $category->id) }}" method="POST" style="display:inline;">
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