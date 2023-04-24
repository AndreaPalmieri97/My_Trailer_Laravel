<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="text-danger"><i class="fa-solid fa-pen-to-square text-white"></i></i> Modifica il Trailer</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">

            <x-edit-trailer-form 

            :trailer="$trailers" 

            />
            
        </div>
    </div>

</x-layout>