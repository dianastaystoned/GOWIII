@extends('app')

@section('content')
<br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center">{{ __('Actualizar armas') }}</div>

                <div class="card-body">
                    <form action="{{route("armas.update", $arma->id)}}" method="post">
                        <!--Metodo por el que va a actualizar-->
                        {{method_field('PATCH')}}
                        <!--Token de seguridad-->
                        @csrf
                        
                        <div class="container">
                            <div class="form-group">
                                <input type="text" class="form-control" name="imagen" value="{{$arma->imagen}}" placeholder="Imagen">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{$arma->title}}" placeholder="Titulo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="description" value="{{$arma->description}}" placeholder="Descripción">
                            </div>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection