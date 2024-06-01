@include('layouts.app')

@include('header')

<main>
@section('content')
      <!-- Content Wrapper. Contains page content -->

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Lista de Produtos
        </h1>
        <ol class="breadcrumb">
          <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="/ecommerce/admin/products">Produtos</a></li>
        </ol>
      </section>

      <!-- Main content -->

    </div>
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">


            <div class="box-body no-padding">
              <table class="table table-striped">

                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->vlwidth }}</td>
                    <td>{{ $product->vlheigth }}</td>
                    <td>{{ $product->vllength }}</td>
                    <td>{{ $product->vlweigth }}</td>
                    <td>
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
</main>
</main>

@include('footer')
