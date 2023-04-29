<div class="card border border-danger rounded" style="width: 15rem;">
    <img src="{{ Storage::url($trailer->img)}}" class="card-img-top" alt="...">
    <div class="card-body bg-dark d-flex flex-column justify-content-center">
      <h5 class="card-title text-center fw-semibold text-danger">{!! $trailer->title !!}</h5>
      <a href="{{route('trailers.show', $trailer)}}" class="my-1 btn btn-success text-center text-white">Guarda <i class="fa-solid fa-video text-white"></i></a>
      <i class="text-white fw-lighter text-center mt-3">Creato da: {{$trailer->user->name}}</i>
    </div>
  </div>
