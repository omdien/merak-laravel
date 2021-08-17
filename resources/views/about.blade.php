
    @extends('layouts.main')
        
    @section('container')
        <h1>About Stasiun KIPM Merak</h1>
        <h3>{{ $name }}</h3>    
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200">  
    @endsection  
