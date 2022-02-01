@extends('Inicio')

@section('apartado')
    <div style="margin-top: 1em; margin-bottom:1em;">
        @foreach ($chollos as $chollo)
        <div class="chollo">
            <div width="30%">
                <img class="imgChollo" src="{{"media/".$chollo->id."-chollo-severo.png"}}">
            </div>
            <div class="informacion">
                <p class="tituloChollo">{{$chollo->titulo}}</p>
                <p class="precio"><span style="text-decoration:line-through;color:red;">{{$chollo->precio}}€</span> {{$chollo->precioDescuento}}€</p>
                <p class="descripcion">{{$chollo->descripcion}}</p>
            <div class="flex">
                <p class="categoria">Categoría:<span> {{$chollo->categoria}}</span> &nbsp;  &nbsp; Puntuación: <span style="color:red">{{$chollo->puntuacion}}</span></p>
                <div class="botones">
                    <button class="editarChollo"><a href={{route("eliminarChollo",$chollo->id)}}>Eliminar chollo</a></button>
                    <button class="irChollo"><a href="{{$chollo->url}}">Ir a chollo</a></button>
                    <button class="editarChollo"><a href={{route("editarChollo",$chollo->id)}}>Editar chollo</a></button>    
                </div>   
            </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div>{{$chollos->links()}}</div> --}}
@endsection