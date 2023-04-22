<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="text-danger text-center">Vuoi davvero eliminare il Trailer {!! $trailers->title !!} ?</h1>
                <h4 class="text-danger text-center">Non visualizzera più il Trailer nella lista</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-6 mx-5 d-flex justify-content-center">
                <img class="card-delete" src="{{ Storage::url($trailers->img)}}" alt="">
            </div>

            <div class="col-5 d-flex justify-content-evenly align-items-center my-5">
                <a href="#" class="btn btn-danger my-3 p-2">Elimina Trailer</a>
                <a href="{{route('trailers.index')}}" class="btn btn-success my-3 p-2">Torna indietro</a>
            </div>

        </div>
    </div>
       
</x-layout>