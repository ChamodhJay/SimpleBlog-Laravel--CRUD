@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('posts.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Post Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter Post Title.. " required>
                         
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                           
                        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Enter Description" required></textarea>
                           
                          </div>
                     
                          <div class="mb-1 text-muted">
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
