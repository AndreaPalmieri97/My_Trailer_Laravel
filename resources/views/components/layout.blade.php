<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Google Fonts --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Oswald:wght@200;300;400;500;600;700&family=Rajdhani&family=Shantell+Sans:wght@300&display=swap');
    </style>
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/c6fe5385fc.js" crossorigin="anonymous"></script>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="sfondo">

    <x-navbar />
    
    @if (session('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>       
    @endif
    
        
        {{$slot}}
        
        <x-footer /> 

</body>

</html>