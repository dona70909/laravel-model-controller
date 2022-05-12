<section class="container-fluid">
    <div class="row p-4 movie-cards-wrap">
        @foreach ($movies as $movie)
            <div class="card col-2">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        @endforeach
    </div>
</section>