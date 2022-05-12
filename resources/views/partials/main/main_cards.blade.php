<section class="container-fluid">
    <div class="row p-4 movie-cards-wrap">
        @foreach ($movies as $movie)
            <div class="card col-2">
                {{--  <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                    {{-- <h5 class="card-title">Title:</h5> --}}
                    <p class="card-text">{{$movie->title}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>