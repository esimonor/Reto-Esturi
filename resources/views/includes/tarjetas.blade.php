
<div class="col-4 float-left">
    <div>
        <img src="{{ URL::asset('images/museum.png') }}" class="m-2 border rounded col-8">
        <p>Nombre: {{ $site->name }}</p>
        <p>Tipo de establecimiento: {{ $site->type}}</p>
        <p>Localización: {{ $site->localization }}</p>
        <p>Id del propietario: {{ $site->owner }}</p>

    </div>
</div>