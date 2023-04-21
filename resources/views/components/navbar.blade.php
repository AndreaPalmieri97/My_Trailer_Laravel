<nav class="navbar navbar-expand-lg bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}"><img class="logo mx-4" src="\img\logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link active text-danger mx-4 fw-semibold" aria-current="page" href="{{route('home')}}"><i class="nav-hov fa-solid fa-house text-danger"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hov active text-danger mx-4 fw-semibold" aria-current="page" href="{{route('trailers.index')}}">MyTrailers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hov active text-danger mx-4 fw-semibold" aria-current="page" href="{{route ('trailers.create')}}">Aggiungi</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end align-items-end">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-danger" type="submit">Search</button>
        </form>
    </div>
    
  </div>
</nav>