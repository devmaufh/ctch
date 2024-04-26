<h1>Editar Tipos de Documentos</h1>
<div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h5>{{ $error }}</h5><br>
        @endforeach
    @endif
</div>


<form method="post" action="{{ route('document-type.update',$documentTypes) }}">
    @csrf
    @method('PATCH')
    <input value="{{ $documentTypes->name }}" name="name" type="text" placeholder="Ingresa su Usuario">
    <hr>
    <input value="{{ $documentTypes->code }}" name="code" type="Number" placeholder="Codigo del Usuario">
    <hr>
    <input value="{{ $documentTypes->id_usuario }}" name="id_usuario" type="number" placeholder="ID del Usuario">
    <hr>
    <input type="submit">
</form>
