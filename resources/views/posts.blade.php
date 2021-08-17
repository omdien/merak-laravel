
@extends('layouts.main')
        
@section('container')
<article class="mb-5">
@foreach ($posts as $post)
        <a href="/posts/{{ $post["slug"] }}"><h2>{{ $post["title"] }}</h2></a>
        <h5>By : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>        
    @endforeach
</article>
@endsection