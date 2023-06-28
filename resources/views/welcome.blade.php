@extends('layouts.app')

@section('content')
<div class="container-fluid bg-warning">
    <div class="container py-3">
        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-3 ">
                    <div class="card text-center py-3 bg-success" style="height: 150px">
                        <h4>{{$movie->title}}</h4>
                        <p>{{$movie->date}}</p>
                        <p>{{$movie->vote}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
