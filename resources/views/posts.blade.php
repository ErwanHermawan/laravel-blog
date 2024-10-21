@extends('layouts.main')

@section('container')
<h2>{{$title}}</h2>
<div class="row row-cols-2 g-4">
  @foreach ($posts as $post )
    <div class="col-12">
      <article class="card">
        <div class="card-body">
          <a href="/posts/{{$post->slug}}" class="card-link text-decoration-none">
            <h5 class="card-title">{{$post->title}}</h5>
          </a>
          <p>
            <span>Auhor: <a href="/authors/{{$post->author->username}}" class=" text-decoration-none">{{$post->author->name}}</a></span>
            <span>Category: <a href="/categories/{{$post->category->slug}}" class=" text-decoration-none">{{$post->category->name}}</a></span>
          </p>
          <p class="card-text">{{$post->excerpt}}</p>
          <a href="/posts/{{$post->slug}}" class="card-link text-decoration-none">Read more</a>
        </div>
      </article>
    </div>
    @endforeach
  </div>

@endsection
