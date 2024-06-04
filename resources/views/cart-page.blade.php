@include('layouts.app')

@include('header')

<main>
    <h1>Carrinho</h1>
    @foreach($products as $product)
    <x-bladewind::card id="{{ $product->id }}" class="flex flex-col cursor-pointer min-w-[230px] max-w-[230px] h-[300px] hover:shadow-gray-300">
        @if ($product->image)
        <img class="w-full h-[60%]" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        @endif
        <div class="flex flex-col justify-start gap-3">
            <p>{{ $product->name }}</p>
            <p>{{ $product->price }}</p>
        </div>
    </x-bladewind::card>
    @endforeach
</main>

@include('footer')