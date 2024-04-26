<!-- He who is contented is rich. - Laozi -->
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
