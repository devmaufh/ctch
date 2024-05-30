<h1>Detalles del Tipo de Documento</h1>

<a href="{{ route('document-type.edit', $documentTypes) }}">
    EDITAR
</a>
<form method="POST" action="{{route('document-type.destroy',$documentTypes)}}">
    @csrf
    @method('DELETE');
    <button>ELIMINAR</button>

</form>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Codigo</th>
        <th>Id_Usuario</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $documentTypes->id }}</td>
        <td>{{ $documentTypes->name }}</td>
        <td>{{ $documentTypes->code }}</td>
        <td>{{ $documentTypes->id_usuario }}</td>
        </tr>
    </tbody>
</table>
