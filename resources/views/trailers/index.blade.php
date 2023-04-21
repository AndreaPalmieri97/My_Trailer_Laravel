<x-layout>

<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h1 class="text-danger">Lista Trailers</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        @foreach ($trailers as $trailer)
        
        <div class="col-12 col-md-3 my-5">
            
            <x-cards 
                :trailer="$trailer"
            />

        </div>

        @endforeach
            
    </div>
</div>

</x-layout>