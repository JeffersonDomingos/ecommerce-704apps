@include('layouts.app')

@include('header')

@extends('layouts.app')

@section('content')
<main class="w-[80%] mx-auto flex-col flex items-start gap-3 mt-20">
  <h2 class="text-2xl text-gray-800 font-bold border-b-2 pb-2 mb-4 w-full text-left border-b-blue-500">Meu Carrinho</h2>
  <table class="w-full border-collapse border border-gray-300">
    <thead>
      <tr class="bg-gray-100">
        <th class="border border-gray-300 p-2">Produto</th>
        <th class="border border-gray-300 p-2">Nome</th>
        <th class="border border-gray-300 p-2">Preço</th>
        <th class="border border-gray-300 p-2">Quantidade</th>
        <th class="border border-gray-300 p-2">Subtotal</th>
        <th class="border border-gray-300 p-2">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cartData as $item)
        <tr>
          <td class="border border-gray-300 p-2">
            <img src="{{ asset('storage/' . $item['product']->image) }}" alt="{{ $item['product']->name }}" class="w-16 h-16 object-cover">
          </td>
          <td class="border border-gray-300 p-2">{{ $item['product']->name }}</td>
          <td class="border border-gray-300 p-2">R$ {{ $item['product']->price }}</td>
          <td class="border border-gray-300 p-2">{{ $item['quantity'] }}</td>
          <td class="border border-gray-300 p-2">R$ {{ $item['product']->price * $item['quantity'] }}</td>
          <td class="border border-gray-300 p-2">
            <form action="{{ route('cart.increaseQuantity', $item['product']->id) }}" method="POST" style="display:inline;">
              @csrf
              <button type="submit" class="bg-blue-500 text-white px-2 py-1">+</button>
            </form>
            <form action="{{ route('cart.decreaseQuantity', $item['product']->id) }}" method="POST" style="display:inline;">
              @csrf
              <button type="submit" class="bg-red-500 text-white px-2 py-1">-</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
   <!-- Botão de Finalizar Compra -->
   <button class="bg-green-500 text-white px-4 py-2 mt-4" onclick="document.getElementById('confirmModal').classList.remove('hidden')">Finalizar Compra</button>

<!-- Modal de Confirmação -->
<div id="confirmModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
  <div class="bg-white rounded-lg p-6 w-1/3">
    <h3 class="text-xl font-bold mb-4">Confirmação de Compra</h3>
    <p class="mb-4">Tem certeza de que deseja finalizar a compra?</p>
    <form action="{{ route('cart.checkout') }}" method="POST">
      @csrf
      <button type="submit" class="bg-green-500 text-white px-4 py-2">Confirmar</button>
      <button type="button" class="bg-red-500 text-white px-4 py-2" onclick="document.getElementById('confirmModal').classList.add('hidden')">Cancelar</button>
    </form>
  </div>
</div>

</main>
@endsection

  
</section>



