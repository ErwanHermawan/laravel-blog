@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1 class="text-center mb-4">{{$post->title}}</h1>
      <img src="https://picsum.photos/id/1/1200/400" class="img-fluid rounded mb-4" alt="{{$post->category->name}}">
      <p>
        Auhor: <a href="/authors/{{$post->author->username}}" class=" text-decoration-none">{{$post->author->name}}</a>
      </p>
      <p>
        Category: <a href="/categories/{{$post->category->slug}}" class=" text-decoration-none">{{$post->category->name}}</a>
      </p>
      <article class="mb-4">
        {!! $post->body !!}
      </article>
      <a href="/posts">Back to Posts</a>
    </div>
  </div>
</div>


@endsection
