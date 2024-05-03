<h1>Tipos de Documentos</h1>
<div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h5>{{ $error }}</h5><br>
        @endforeach
    @endif
</div>


<form method="post" action="/document-type/store">
    @csrf

    <input name="name" type="text" placeholder="Ingresa su Usuario">
    <hr>
    <input name="code" type="Number" placeholder="Codigo del Usuario">
    <hr>
    <input name="id_usuario" type="number" placeholder="ID del Usuario">
    <hr>
    <input type="submit">
</form>
