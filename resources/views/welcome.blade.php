@extends('loyout')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner mu-carousel">
        <div class="carousel-item active">
            <img src="https://wallpapercave.com/wp/p143WJX.jpg" class="mu-image-size" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://www.manutd.com/AssetPicker/images/0/0/12/17/790849/POTY19_ManUtdcom-Article-Image-Template81556282843131_large.jpg" class="mu-image-size" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://media.squawka.com/images/en/2019/08/06142712/man-united-season-preview-940x530.jpg" class="mu-image-size" alt="...">
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row justify-content-around">
@foreach($tasks as $task)
  
        <div class="card mu-card col-md-5 mx-1 mt-4">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$task}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection