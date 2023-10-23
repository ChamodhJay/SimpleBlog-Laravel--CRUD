@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="background-color: rgb(48, 48, 48);color: whitesmoke">#</th>
                            <th scope="col"style="background-color: rgb(48, 48, 48);color: whitesmoke">Title</th>
                            <th scope="col"style="background-color: rgb(48, 48, 48);color: whitesmoke">Description</th>
                            <th scope="col"style="background-color: rgb(48, 48, 48);color: whitesmoke">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                            @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>
                                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('posts.delete',$post->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
