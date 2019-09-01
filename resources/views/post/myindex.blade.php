@extends('layouts.admin-app')
@section('title','Post Index Page')


@section('index_content')

<div class="container">
  <div class="lists">
    <ul>
      <li><a href="{{url('post/create')}}">CREATE POST</li>
      <li><a href="{{url('post')}}">SHOW POSTS</li>
    </ul>
  </div>

  <h1>All Posts</h1>
  <!-- @foreach($post as $posts)
  <li> {{ $posts }} </li>
  @endforeach -->

  <!-- <h2>Post Title</h2> -->
  @foreach($post as $posts)
  <div class="row">
    <div class="col-md-4 m-0 p-0">
      <div class="box-box" style="border: 1px solid #dadada;padding:30px;margin:20px;">
        <h2>TITLE :{{ $posts->title}} </h2>
        <div class="">
          <h2>Post Content</h2>
           {{ $posts->content}}
        </div>
        <div class="">
          <h2>Author</h2>
           {{ $posts->author}}
        </div>
        <div class="">
          <h2>Category</h2>
           {{ $posts->category}}
        </div>
        <div class="update-button">
          <a href="{{url("/post/$posts->id")}}">
            <button type="button">Update</button>
          </a>
        </div>
      </div>
    </div>
  </div>


  @endforeach

  <!-- <h2>Post Content</h2>
  @foreach($post as $posts)
  <li> {{ $posts->content}} </li>
  @endforeach

  <h2>Post Author</h2>
  @foreach($post as $posts)
  <li> {{ $posts->author}} </li>
  @endforeach

  <h2>Post Category</h2>
  @foreach($post as $posts)
  <li> {{ $posts->category}} </li>
  @endforeach -->

</div>

@endsection
