@extends('layouts.main')

@section('container')
  <h2>Posts Categories</h2>
  <ul>
   @foreach ($categories as $category )
      <li>
        <h4><a href="/categories/{{$category->slug}}">{{$category->name}}</h4></p>
      </li>
     @endforeach
  </ul

@endsection
