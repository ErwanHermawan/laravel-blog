@extends('layouts.main')

@section('container')

<article>
  <h1>{{$post->title}}</h1>
  <p>
    Auhor: <a href="/authors/{{$post->author->username}}" class=" text-decoration-none">{{$post->author->name}}</a>
  </p>
  <p>
    Category: <a href="/categories/{{$post->category->slug}}" class=" text-decoration-none">{{$post->category->name}}</a>
  </p>
  {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>
@endsection
