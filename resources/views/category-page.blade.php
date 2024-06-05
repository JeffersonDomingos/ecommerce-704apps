@include('layouts.app')

@include('header')

<section class="mt-12 w-[80%] mx-auto flex-col flex items-start gap-3">
  <h2 class="text-xl text-gray-800 font-bold">Todas as <span class="text-blue-500">Categorias:</span></h2>
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

@include('footer')
