@include('layouts.app')

@include('header')

<main>
    <h1>Categorias</h1>
    <p>Aqui está a lista de categorias.</p>
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
