@include('layouts.app')

@include('header')

@extends('layouts.app')

@section('content')

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



