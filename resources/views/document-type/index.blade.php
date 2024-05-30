<!-- He who is contented is rich. - Laozi -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Document types') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>

    <h1>Listado de Documentos</h1>

    <a href="{{ route('document-type.create') }}">Crear Nuevo Documento</a>
    <form action="{{ route('document-type.index') }}">
        @csrf
        <input type="text" name="code" placeholder="buscar codigo">
        <input type="text" name="name" placeholder="buscar nombre">
        <input type="submit">
    </form>
    <br>
    <hr>

    @foreach ($documentTypes as $document)
        <a href="{{  route('document-type.show', $document->id) }}"> {{ $document->name }}</a>
    @endforeach

    {{ $documentTypes->links() }}
</x-app-layout>
