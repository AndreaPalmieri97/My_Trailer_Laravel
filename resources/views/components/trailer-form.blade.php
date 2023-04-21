<form class="container" method="post" action="{{route('trailers.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="mb-3 col-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="mb-3 col-4">
              <label for="genre" class="form-label">Genre</label>
              <input type="text" class="form-control" name="genre">
          </div>
            <div class="mb-3 col-4">
              <label for="img" class="form-label">Image</label>
              <input type="file" class="form-control" name="img">
          </div>
          <div class="mb-3 col-4">
              <label for="year" class="form-label">Year</label>
              <input type="number" class="form-control" name="year">
          </div>
          <div class="mb-3 col-4">
              <label for="director" class="form-label">Director</label>
              <input type="text" class="form-control" name="director">
          </div>
          <div class="mb-3 col-4">
              <label for="url" class="form-label">Url Trailer</label>
              <input type="text" class="form-control" name="url">
          </div>
          <div class="w-100 d-flex flex-column align-items-center">
              <div class="mb-3 col-4">
                <label for="abstract" class="form-label">Abstract</label>
                <textarea name="abstract" class="form-control" id="" cols="10" rows="5"></textarea>
              </div>
          </div>
    </div>
    <div class="d-flex flex-column align-items-center my-5">
        <button type="submit" class="btn btn-danger">Aggiungi un nuovo Trailer</button>
    </div>
</form>