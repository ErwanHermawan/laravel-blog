@extends('layouts.main')

@section('container')
<h2>Posts > {{$category}}</h2>
<div class="row row-cols-2 g-4">
  @foreach ($posts as $post )
    <div class="col-6">
      <article class="card">
        <div class="card-body">
          <a href="/posts/{{$post->slug}}" class="card-link">
            <h5 class="card-title">{{$post->title}}</h5>
          </a>
          <p class="card-text">{{$post->excerpt}}</p>
        </div>
      </article>
    </div>
    @endforeach
  </div>

@endsection
