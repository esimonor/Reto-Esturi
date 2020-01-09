<div class="col-4">
    <div>
        <h4>Tu establecimiento</h4>
        <hr>
        <img src="{{ URL::asset('images/museum.png') }}" class="m-2 border rounded col-8">
    <p>Nombre: {{ $site->name }}</p>
        <p>Tipo de establecimiento: {{ $site->type}}</p>
    <p>Localización: {{ $site->localization }}</p>
    <a class="btn btn-info" value="{{$site->id}}" href="{{route('editlocal',[$site->id])}}">Modificar establecimiento</a>
    </div>
</div>