<div class="card border border-danger rounded" style="width: 15rem;">
    <img src="{{ Storage::url($trailer->img)}}" class="card-img-top" alt="...">
    <div class="card-body bg-dark d-flex flex-column justify-content-center">
      <h5 class="card-title text-center fw-semibold text-danger">{!! $trailer->title !!}</h5>
      <a href="{{route('trailers.show', $trailer)}}" class="my-1 btn btn-success text-center text-white">Guarda <i class="fa-solid fa-video text-white"></i></a>
      <a href="{{route('trailers.edit', $trailer)}}" class="my-1 btn btn-warning text-center text-white">Modifica <i class="fa-solid fa-pen-to-square text-white"></i></a>
      <a href="{{route('trailers.delete', $trailer)}}" class="my-1 btn btn-danger text-center">Elimina <i class="fa-solid fa-trash-can text-white mt-1"></i></a>
    </div>
  </div>