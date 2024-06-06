<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '704ECOMMERCE')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900 py-4">
            <div class="flex flex-wrap items-center justify-between w-[80%] mx-auto">
                <a href="/" class="flex items-center text-blue-950 font-bold text-2xl">
                    <img src="{{ asset('img/logo1.png') }}" alt="Logo 704Apps" class="w-20">    
                    <h1 class="mt-2">704ECOMMERCE</h1> 
                </a>
                <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" "><x-bladewind::button>Login Admin</x-bladewind::button></a>
                        @endif
                    @else
                        <div class="flex items-center space-x-2">
                            
                            <a href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><x-bladewind::button outline="true">Logout</x-bladewind::button></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    @endguest
                    <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
                <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto">
                    <ul class="flex flex-col items-center justify-center font-medium md:flex-row md:mt-0 md:space-x-8">
                        <li>
                            <a href="/" class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                <x-bladewind::button outline="true">Home</x-bladewind::button>
                            </a>
                        </li>
                        <li>
                            <a href="/products-page" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                <x-bladewind::button>Produtos</x-bladewind::button>
                            </a>
                        </li>
                        <li>
                            <a href="/categories-page" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                <x-bladewind::button>Categorias</x-bladewind::button>
                            </a>
                        </li>
                        <li>
                            <a href="/cart-page" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                <x-bladewind::button>Carrinho</x-bladewind::button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
