@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="px-0 pt-3">
  <h2>
    Lista de Usuários
  </h2>
  
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">ID</th>
                <th>Nome do usuário</th>
                <th>E-mail:</th>
                <th>Data de Cadastro:</th>
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ (new DateTime($user->created_at, new DateTimeZone('UTC')))
                ->setTimezone(new DateTimeZone('America/Sao_Paulo'))  
                ->format('d/m/Y - H:i:s') }}</td>
                
                
                <td>
                  <a href="/admin/usuarios/{{$user->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display:inline;">
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