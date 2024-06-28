@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="container-fluid pt-3">
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            704Pay
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <form action="{{ route('adquires.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="id">ID</label>
              <input type="text" class="form-control" id="id" value="{{$adquires->type?$adquires->id_production:$adquires->id_homologation}}" name="id" required>
            </div>
            <div class="form-group">
              <label for="secret">Secret</label>
              <input type="text" class="form-control" id="secret" value="{{$adquires->type?$adquires->secret_production:$adquires->secret_homologation}}" name="secret" required>
            </div>
            <div class="form-group">
              <label for="url">URL</label>
              <input type="text" class="form-control" id="url" value="{{$adquires->type?$adquires->url_production:$adquires->url_homologation}}" name="url" required>
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <select class="form-control" id="type" name="type" required>
                <option value="1" {{$adquires->type == 1 ? 'selected' : '' }}>Production</option>
                <option value="0" {{$adquires->type == 0 ? 'selected' : '' }}>Homologation</option>
              </select>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" value="1" {{$adquires->active == 1 ? 'checked' : '' }} class="form-check-input" id="active" name="active">
              <label class="form-check-label" for="active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@if(session('error'))
<script>
  alert("{{ session('error') }}");
</script>
@endif
<!-- /.content -->

<!-- /.content-wrapper -->
@stop