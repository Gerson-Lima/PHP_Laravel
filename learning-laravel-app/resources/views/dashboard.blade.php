<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Adicione os produtos") }}

                <br><br>
                <form action="/cadastrar-produto" method="post">
                    @csrf
                    {{-- Nome --}}
                    <label>Nome do Produto</label>
                    <input type="text" style="color: #4338CA" name="nome">
                    {{-- Valor --}}
                    <label>Valor do Produto</label>
                    <input type="text" style="color: #4338CA" name="valor">
                    {{-- Estoque --}}
                    <label>Quantidade em estoque</label>
                    <input type="number" style="color: #4338CA" name="estoque">
                    <br><br>

                    <button class = "button" style="color: #4338CA">SALVAR PRODUTO</button>
                    <!-- COMO O ESTILO2 ESTA DEFINIDO AQUI NO HTML, PRECISO DESFAZER AQUI PARA ESTILIZAR CHAMANDO NO CSS. -->
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
