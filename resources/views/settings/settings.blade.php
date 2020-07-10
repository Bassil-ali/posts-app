@extends('layouts.app')

@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Settings</div>

                <div class="card-body">




                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif

                    

                    <form action="{{route('settings.store')}}" method="POST"  >
                        {{ csrf_field()}}
                        <div class="form-group">
                          <label for="blog_name">Blog name</label>
                          <input type="text" class="form-control" name="blog_name"  value="">
                         </div>

                    <div class="form-group">
                            <label for="phone_number">Phone </label>
                            <input type="text" class="form-control" name="phone_number"  value="">
                        </div>


                    <div class="form-group">
                            <label for="blog_email">Email</label>
                            <input type="text" class="form-control" name="blog_email"  value="">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address"  value="">
                            </div>
                        
                         
                         
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>      
                    







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
