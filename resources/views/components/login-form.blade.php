<form class="container" method="post" action="{{route('login')}}">
    @csrf
    <div class="row">
        <div class="col-4">

            <div class="mb-3 my-4">
                <label for="email" class="form-label text-danger">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
                @error('email')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 my-4">
                <label for="password" class="form-label text-danger">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                @error('password')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex flex-column align-items-center my-5">
                <button type="submit" class="btn btn-danger">Login</button>
            </div>
        </div>
    </div>
    

</form>