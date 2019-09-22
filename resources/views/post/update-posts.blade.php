@extends('layouts.admin-app')
@section('title','Create Post')


@section('update')
<div class="container">
<div class="form-div" style="background:white; box-shadow: 0px 7px 62px -20px rgba(0,0,0,0.57); padding: 40px;">

  <form class="" action="{{url("/post/$post->id")}}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PUT">
  <h1 class="pb-5" style="text-align:center;">Post Form</h1>
  <div class="form-group row">
      <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

      <div class="col-md-6">
          <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$post->title}}" required autocomplete="title" autofocus>

          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

      <div class="col-md-6">
          <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ $post->content }}" required autocomplete="content" autofocus>

          @error('content')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

      <div class="col-md-6">
          <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ $post->author }}" required autocomplete="author" autofocus>

          @error('author')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

      <div class="col-md-6">
          <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $post->category }}" required autocomplete="category" autofocus>

          @error('category')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

    <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
            UPDATE POST
          </button>
      </div>
    </div>


</form>
    <form action="{{url("post/$post->id")}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" name="btn btn-danger">DELETE</button>
    </form>
</div>

</div>

@endsection
