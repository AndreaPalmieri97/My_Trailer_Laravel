<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="text-danger">{!! $trailers->title !!}</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-7 mx-5">
                <iframe width="727" height="409" src="{!! $trailers->url !!}" title="Avatar: La Via dell&#39;Acqua - Trailer Ufficiale" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                <p class="lead fw-semibold">Genere: {!! $trailers->genre !!}</p>
                <p class="lead fw-semibold">Regista: {!! $trailers->director !!}</p>
                <p class="lead fw-semibold">Anno: {!! $trailers->year !!}</p>
                <p class="fw-semibold">Trama: {!! $trailers->abstract !!}</p>

            </div>
        </div>
    </div>
    


    
    
    </x-layout>