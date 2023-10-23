@extends('layouts.frontend')
@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Mastering Web Development: Unleashing the Magic of Laravel</h1>
      <p class="lead my-3">Unlock the Power of Web Development with Laravel! 🚀 Let's make coding awesome together!</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">

        @foreach ($posts as $post )
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow">
            <div class="card-body d-flex flex-column align-items-start">
              <img src="{{asset('thumbnails/'.$post->thumbnail)}}" alt="thumbnail" class="img-thumbnail">
              <h3 class="mb-0 mt-2">
                <a class="text-dark" href="#">{{$post->title}}</a>
              </h3>
              <div class="mb-1 text-muted">{{ date('y-m-d',strtotime($post->created_at))}}</div>
              <p class="card-text mb-auto">{{$post->description}}</p>
              <a href="{{ route('posts.show',$post->id) }}">Continue reading</a>
            </div>
          </div>
        </div>
        @endforeach
   
   
  </div>
</div>
    
@endsection