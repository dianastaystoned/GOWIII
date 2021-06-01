@extends('app')
@section('content')
<div class="text-center">
    <br><br><br><br>
    <h1 class="title" style="color: rgb(255, 174, 0);">Armas y magías</h1>
</div>
<div class="table-container" style="overflow-x: auto;">
    <div class="table-rws" style="min-width: 500px;">
        <div class="col-lg-12 col-md-6 col-xs-3">
            <table class="table table-bordered">
                <br><br>
                <a href="{{url('/armas/create')}}" class="btn btn-outline-warning btn-lg btn-block">AGREGAR</a>
                <br><br>
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                @foreach($armas as $arma)
                    <tr>
                        <td style="color: rgb(255, 174, 0);">{{$arma->id}}</td>
                        <td style="color: rgb(255, 174, 0);">{{$arma->imagen}}</td>
                        <td style="color: rgb(255, 174, 0);">{{$arma->title}}</td>
                        <td style="color: rgb(255, 174, 0);">{{$arma->description}}</td>
                        <td>
                            <a href="{{url('/armas/'.$arma->id.'/edit')}}" class="btn btn-link">Editar</a>
                            @include('armas.delete',['$card' => $arma])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection