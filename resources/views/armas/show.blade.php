@extends('app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>{{$card->title}}</h1>
                <p>{{$card->description}}</p>
            </div>
        </div>
    </div>
@endsection