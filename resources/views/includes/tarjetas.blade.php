
<div class="col-12 float-left">
    <div>
        <img src="images/{{$site->rutaactual}}" class="m-2 border rounded col-12">
        <p>Nombre: {{$site->name}}</p>
        <p>Establecimiento: {{ $site->type }}</p>
        <!--<p>Localización: {{ $site->localization }}</p>-->
        <!--<p>Id del propietario: {{ $site->owner }}</p>-->
        <a class="btn btn-info" value="{{$site->id}}" href="local/{{$site->id}}">ver mas</a>
    </div>
</div>
<br>