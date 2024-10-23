@extends('layouts.main')

@section('container')
<h2>{{$title}}</h2>

@if ($posts->count())
<div class="card mb-5">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://picsum.photos/id/1/400/400" class="img-fluid rounded-start" alt="{{$posts[0]->category->name}}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title">{{$posts[0]->title}}</h2>
        <p>
          <span>Category: <a href="/categories/{{$posts[0]->category->slug}}" class=" text-decoration-none">{{$posts[0]->category->name}}</a></span>
        </p>
        <p class="card-text">{{$posts[0]->excerpt}}</p>
        <p class="card-text">
          <small class="text-muted">By <a href="/authors/{{$posts[0]->author->username}}" class=" text-decoration-none">{{$posts[0]->author->name}}</a>
            {{$posts[0]->created_at->diffForHumans()}}
          </small>
        </p>
        <a href="/posts/{{$posts[0]->slug}}" class="btn btn-primary">Read more</a>
      </div>
    </div>
  </div>
</div>
@else
<h3 class="text-center fs-4">No post found</h3>
@endif

<div class="row g-4">
  @foreach ($posts->skip(1) as $post )
  <div class="col-4">
    <article class="card">
      <img src="https://picsum.photos/id/1/200/100" class="card-img-top" alt="{{$post->category->name}}">
      <div class="card-body">
        <a href="/posts/{{$post->slug}}" class="card-link text-decoration-none">
          <h5 class="card-title">{{$post->title}}</h5>
        </a>
        <p class="card-text">
          <small class="text-muted">By <a href="/authors/{{$post->author->username}}" class=" text-decoration-none">{{$post->author->name}}</a>
            {{$post->created_at->diffForHumans()}}
          </small>
        </p>
        <p>{{$post->excerpt}}</p>
        <a href="/posts/{{$post->slug}}" class="card-link text-decoration-none">Read more</a>
      </div>
    </article>
  </div>
  @endforeach
</div>

@endsection
