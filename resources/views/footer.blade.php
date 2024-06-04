<footer class="bg-blue-500 w-full flex-wrap flex justify-between items-start py-10 mt-10">
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
        <div class="flex-col flex items-start gap-2">
            <p class="text-xl font-bold">Categorias</p>
            <div class="flex-col flex items-start gap-2">
                @foreach($categories as $category)
                <p class="hover:underline cursor-pointer text-base line-clamp-1">{{ $category->name }}</p>
                @endforeach
            </div>
        </div>
    </section>
</footer>

</body>

</html>