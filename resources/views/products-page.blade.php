@include('layouts.app')

@include('header')

<main class="w-[80%] mx-auto flex-col flex items-start gap-3 mt-12">
  <h2 class="text-xl text-gray-800 font-bold">Todos os <span class="text-blue-500">produtos:</span></h2>
  <div class="flex justify-center w-full flex-wrap gap-5 max-sm:justify-center">
    @foreach($products as $product)
    <x-bladewind::card id="{{ $product->id }}" class="rounded-xl p-0 pb-4 flex flex-col min-w-[220px] max-w-[250px] min-h-[300px] hover:shadow-gray-400 hover:border-2 hover:border-blue-500 transition-all">
      @if ($product->image)
      <img class="rounded-xl rounded-b-none h-[250px] p-4 object-contain bg-gray-100 w-full" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
      @endif
      <div class="pb-1 mx-3 border-b border-b-gray-200 items-start pt-4 flex flex-col justify-start gap-1">
        <p class="font-semibold text-base line-clamp-1">{{ $product->name }}</p>
        <p class="font-extrabold text-base line-clamp-1">R$ {{ $product->price }}</p>
      </div>
      <form action="{{ route('cart.addToCart', $product->id) }}" method="POST">
        @csrf
      <button type="submit" class="mx-auto flex mt-3 items-center gap-2 hover:bg-blue-500 py-2 px-7 rounded-3xl font-bold hover:text-white transition-all" type="secondary">
      <i class="fa-solid fa-cart-shopping"></i>
       Adicionar
</button>
      </form>
    </x-bladewind::card>
    @endforeach
  </div>
</main>


