<form class="container" method="post" action="{{route('trailers.update', $trailer)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="mb-3 col-4">
            <label for="title" class="form-label text-danger">Title</label>
            <input type="text" class="form-control" name="title" value="{{$trailer->title}}">
          </div>
          <div class="mb-3 col-4">
              <label for="genre" class="form-label text-danger">Genre</label>
              <input type="text" class="form-control" name="genre" value="{{$trailer->genre}}">
          </div>
            <div class="mb-3 col-4">
              <label for="img" class="form-label text-danger">Image</label>
              <div class="d-flex">
                <img src="{{ Storage::url($trailer->img) }}" style="width: 80px">
                <input type="file" class="form-control h-50" name="img">
              </div>
            </div>
          <div class="mb-3 col-4">
              <label for="year" class="form-label text-danger">Year</label>
              <input type="number" class="form-control" name="year" value="{{$trailer->year}}">
          </div>
          <div class="mb-3 col-4">
              <label for="director" class="form-label text-danger">Director</label>
              <input type="text" class="form-control" name="director" value="{{$trailer->director}}">
          </div>
          <div class="mb-3 col-4">
              <label for="url" class="form-label text-danger">Url Trailer</label>
              <input type="text" class="form-control" name="url" value="{{$trailer->url}}">
          </div>
          <div class="w-100 d-flex flex-column align-items-center">
              <div class="mb-3 col-4">
                <label for="abstract" class="form-label text-danger">Abstract</label>
                <textarea name="abstract" class="form-control" id="" cols="10" rows="5">{{$trailer->abstract}}</textarea>
              </div>
          </div>
    </div>
    <div class="d-flex flex-column align-items-center my-5">
        <button type="submit" class="btn btn-danger">Modifica il Trailer</button>
    </div>
</form>