@include('layouts.app')

@include('header')

<main>
  @section('content')
  <!-- Content Wrapper. Contains page content -->

  <!-- Content Header (Page header) -->
  <main class="w-[80%] mx-auto flex-col flex items-start gap-3 mt-12">
    <h2 class="text-xl text-gray-800 font-bold">Todos os <span class="text-blue-500">produtos:</span></h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6">
      @foreach($products as $product)
      <x-bladewind::card id="{{ $product->id }}" class="rounded-xl p-0 pb-4 flex flex-col cursor-pointer min-w-[220px] max-w-[220px] min-h-[300px] hover:shadow-gray-300">
        @if ($product->image)
        <img class="rounded-xl rounded-b-none h-[65%] p-4 object-contain bg-gray-300 w-full" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        @endif
        <div class="pb-1 mx-3 border-b border-b-gray-200 items-start pt-4 flex flex-col justify-start gap-1">
          <p class="font-semibold text-base line-clamp-1">{{ $product->name }}</p>
          <p class="font-extrabold text-base line-clamp-1">R$ {{ $product->price }}</p>
        </div>
        <x-bladewind::button class="mx-auto flex py-2 mt-3" type="secondary">
          <div class="flex items-center justify-center gap-3">
            <x-gmdi-local-grocery-store class="w-4 h-4" />
            Adicionar
          </div>

        </x-bladewind::button>
      </x-bladewind::card>
      @endforeach
    </div>
  </main>
