@extends('loyout')


@section('content')
    <h1>Players</h1>
    @foreach ($players as $player)

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$player -> firstname}}</h5>
            <h5 class="card-title">{{$player -> lastname}}</h5>
            <p class="card-text">{{$player -> age}}</p>
            <p class="card-text">{{$player -> team}}</p>
        </div>
    </div>

    @endforeach

@endsection