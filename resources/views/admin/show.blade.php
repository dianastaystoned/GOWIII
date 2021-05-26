@extends('app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>{{$user->name}}</h1>
                <p>{{$user->email}}</p>
            </div>
        </div>
    </div>
@endsection