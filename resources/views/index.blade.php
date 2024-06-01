<main>
  <div data-bs-ride="carousel" id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner carrosel">
      <div class="carousel-item active">
        <img src="{{ asset('img/Black.png') }}" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/brand1.png') }}" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/brand2.png') }}" class="d-block w-100" alt="">
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

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

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
            

        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">ID</th>
                <th>Nome da Categoria</th>
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
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

@include('footer')