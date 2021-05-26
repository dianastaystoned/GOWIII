@extends('app')

@section('content')
<br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center">{{ __('Actualizar usuario') }}</div>

                <div class="card-body">
                    <form action="{{route("admin.update", $user->id)}}" method="post">
                        <!--Metodo por el que va a actualizar-->
                        {{method_field('PATCH')}}
                        <!--Token de seguridad-->
                        @csrf
                        
                        <div class="container">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" value="{{$user->name}}" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Dirección de correo">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="contraseña" value="{{$user->password}}" placeholder="Contraseña">
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