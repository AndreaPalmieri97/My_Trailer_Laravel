<div class="card" style="width: 19rem;">
    <img src="{{ Storage::url($trailer->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">{!! $trailer->title !!}</h5>
      <a href="{{route('trailers.show', ['id' => $trailer->id])}}" class="btn btn-primary">Guarda Trailer</a>
    </div>
  </div>