<!-- <main>
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


<main class="w-[80%] mx-auto flex-col flex items-start gap-3 mt-12">
  <h2 class="text-xl text-gray-800 font-bold">Últimos <span class="text-blue-500">lançamentos:</span></h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6">
    @foreach($products as $product)
    <x-bladewind::card id="{{ $product->id }}" class="rounded-xl p-0 flex flex-col cursor-pointer min-w-[220px] max-w-[220px] h-[300px] hover:shadow-gray-300">
      @if ($product->image)
      <img class="rounded-xl rounded-b-none h-[65%] p-4 object-contain bg-gray-300 w-full" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
      @endif
      <div class="items-start px-4 pt-4 flex flex-col justify-start gap-1">
        <p class="font-semibold text-base line-clamp-1">{{ $product->name }}</p>
        <p class="font-extrabold text-base line-clamp-1">R$ {{ $product->price }}</p>
      </div>
    </x-bladewind::card>
    @endforeach
  </div>
</main>

<section class="mt-12 w-[80%] mx-auto flex-col flex items-start gap-3">
  <h2 class="text-xl text-gray-800 font-bold">Top <span class="text-blue-500">Categorias:</span></h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6">
    @foreach($categories as $category)
    <div class="flex-col flex items-center gap-2">
      <x-bladewind::card id="{{ $category->id }}" class="p-0 flex flex-col cursor-pointer min-w-[130px] max-w-[130px] h-[130px] rounded-full hover:shadow-gray-300">
        @if ($category->category_image)
        <img class="h-[130px] rounded-full p-2 object-cover bg-gray-300 w-full" src="{{ asset('storage/' . $category->category_image) }}" alt="{{ $category->name }}">
        @endif
      </x-bladewind::card>
      <div class="items-start px-4 pt-4 flex flex-col justify-start gap-1">
        <p class="font-semibold text-base line-clamp-1">{{ $category->name }}</p>
      </div>
    </div>
    @endforeach
  </div>
</section>

