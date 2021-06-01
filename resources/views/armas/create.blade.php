@extends('app')

@section('content')
<br><br><br><br>
    <form action="{{route('armas.store')}}" method="post">
     <!--Token de seguridad-->
     @csrf
        <div class="container">
            <div class="form-group">
                <input type="number" class="form-control" name="id" placeholder="Id">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="imagen" placeholder="Imagen">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Título">
            </div>
            <div class="form-group">
                <input type="textarea" class="form-control" name="description" placeholder="Descripción">
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </div>
    </form>
    
@endsection
