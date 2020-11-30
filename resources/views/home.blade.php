
    @extends('layouts.app')

    @section('content')
    <hr>
    <div class="container">
    <div class="row justify-content-center">

            <div>
                <div class="alert alert-dark">


              <center>  <img class="img-thumbnail" alt="avatar" src="{{auth()->user()->avatar}}" style="width: 100px; height: 100px;"></center>
                <center><h3>{{ auth()->user()->name }}</h3><span>{{ auth()->user()->email }}</span></center>

                </div>
        </div>
    </div>
    </div>
    <br>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card text-center">
    <div class="card-header">

    CREAT POSTS
    </div>
    <br>
    <div class="card-body">
    <h5 class="card-title">You can creat new post</h5>
    <p class="card-text">we can eddit your post and delete so write good posts</p>
    <a href="{{route('post.create')}}" class="btn btn-primary">Create</a>
    </div>
    <div class="card-body">
    </div>
    </div>
    </div>
    </div>
    </div><br>


    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card text-center">
                <div class="card-header">

                    MY POST POSTS
                </div>
                <div class="card-body">
                    <a href="{{route('posts.home')}}" class="btn btn-outline-danger">Controller your post</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
