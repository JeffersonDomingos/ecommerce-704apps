 <main>
 <!-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div> -->

      @section('content')
      <!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->


<main class="w-[80%] mx-auto flex-col flex items-start gap-3 mt-12">
  <h2 class="text-xl text-gray-800 font-bold">Últimos <span class="text-blue-500">lançamentos:</span></h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-6">
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
       Adicionar
        </div>

      </x-bladewind::button>
    </x-bladewind::card>
    @endforeach
  </div>
</main>

<section class="mt-12 w-[80%] mx-auto flex-col flex items-start gap-3">
  <h2 class="text-xl text-gray-800 font-bold">Top <span class="text-blue-500">Categorias:</span></h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-6">
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