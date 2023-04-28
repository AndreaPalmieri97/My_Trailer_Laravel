<form class="container" method="post" action="{{route('register')}}">
    @csrf
    <div class="row">
        <div class="col-4">

            <div class="mb-3">
                <label for="name" class="form-label text-danger">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                @error('name')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

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

            <div class="mb-3 my-4">
                <label for="password_confirmation" class="form-label text-danger">Conferma password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                @error('password_confirmation')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex flex-column align-items-center my-5">
                <button type="submit" class="btn btn-danger">Registrati</button>
            </div>
        </div>
    </div>
    

</form>