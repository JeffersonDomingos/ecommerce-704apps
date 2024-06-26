@include('layouts.app')

@include('header')

@extends('layouts.app')

@section('content')
<main class="w-[80%] mx-auto flex-col flex items-start gap-3 mt-20">
  <h2 class="text-2xl text-gray-800 font-bold border-b-2 pb-2 mb-4 w-full text-left border-b-blue-500">Meu Carrinho</h2>
  <table class="w-full border-collapse border border-gray-300 rounded-xl">
    <thead class="rounded-xl">
      <tr class="bg-blue-500 text-white">
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
        <td class="border border-gray-300 p-2 flex justify-center">
          <img src="{{ asset('storage/' . $item['product']->image) }}" alt="{{ $item['product']->name }}" class="w-16 h-16 object-cover">
        </td>
        <td class="border border-gray-300 p-2">{{ $item['product']->name }}</td>
        <td class="border border-gray-300 p-2">R$ {{ $item['product']->price }}</td>
        <td class="border border-gray-300 p-2">{{ $item['quantity'] }}</td>
        <td class="border border-gray-300 p-2">R$ {{ $item['product']->price * $item['quantity'] }}</td>
        <td class="border border-gray-300 p-2">
          <form action="{{ route('cart.increaseQuantity', $item['product']->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="text-center bg-gray-500 text-white w-7 text-lg hover:bg-gray-600 rounded-lg transition-all">+</button>
          </form>
          <form action="{{ route('cart.decreaseQuantity', $item['product']->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="text-center bg-gray-500 text-white w-7 text-lg hover:bg-gray-600 rounded-lg transition-all">-</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <br>
  <a href="/payment-page">
    <x-bladewind::button class="w-[190px]">Finalizar Compra</x-bladewind::button>
  </a>
  <a href="/">
    <x-bladewind::button class="w-[190px]">Continue comprando</x-bladewind::button>
  </a>

  <div id="confirmModal" class="fixed inset-0 items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-6 w-1/3">
      <h3 class="text-xl font-bold mb-4">Confirmação de Compra</h3>
      <p class="mb-4">Tem certeza de que deseja finalizar a compra?</p>
      <form action="{{ route('cart.checkout') }}" method="POST" class="flex gap-2 justify-center">
        @csrf
        <button type="submit" class="text-white bg-blue-600 w-28 h-9 rounded-3xl hover:bg-blue-700 transition-all">Confirmar</button>
        <button type="button" class="text-white bg-red-600 hover:bg-red-700 transition-all w-28 h-9 rounded-3xl" onclick="hideConfirmModal()">Cancelar</button>
      </form>
    </div>
  </div>


</main>


</section>
<footer class="bg-blue-500 w-full py-10 mt-10">
  <section class="flex w-[80%] flex-wrap justify-start gap-16 items-start mx-auto">
    <div class="flex-col flex items-start gap-2">
      <p class="text-xl font-bold">ECOMMERCE 704Apps</p>
      <div class="flex-col flex items-start gap-2">
        <p>Nossos contatos:</p>
        <div class="flex justify-center items-center gap-2">
          <x-bi-whatsapp />
          <p>(11) 99999-9999</p>
        </div>
        <div class="flex justify-center items-center gap-2">
          <a href="https://www.instagram.com/704apps/">
            <x-bi-instagram />
          </a>
          <p>@704Apps</p>
        </div>
        <img src="{{ asset('img/logo_branca.png') }}" alt="Logo 704Apps" class="mt-6 w-40">
      </div>
    </div>
  </section>
</footer>

@endsection

<script>
  function showConfirmModal() {
    const modal = document.getElementById('confirmModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
  }

  function hideConfirmModal() {
    const modal = document.getElementById('confirmModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  }
</script>