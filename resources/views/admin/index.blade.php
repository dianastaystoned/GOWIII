@extends('app')
@section('content')
<div class="text-center">
    <br><br><br><br>
    <h1 class="title" style="color: rgb(255, 174, 0);">Usuarios</h1>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody class="tbody-dark">
        @foreach($user as $users)
            <tr>
                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->password}}</td>
                <td>
                    <a href="{{url('/admin/'.$users->id.'/edit')}}" class="btn btn-link">Editar</a>
                    @include('admin.delete',['$user' => $users])
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection