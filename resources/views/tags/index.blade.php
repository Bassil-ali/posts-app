@extends('layouts.app')

@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>

                <div class="card-body">
 
 
                                    @if ($tags->count()>0)
                                        
                                    
                        <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"> title </th>
                                    <th scope="col"> Edite </th>
                                    
                                <th scope="col">Edit</th>
                                    {{--      <th scope="col">Delete</th>  --}}
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                    <tr>
                                            <td> 
                                           {{$tag->tag}} 
                                           </td>
                                            
                                            <td> 
                                              <a class="btn btn-primary" href="{{route('tag.edit',['id' =>$tag->id ])}}">   
                                                     edite
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="btn btn-danger" href="{{route('tag.delete',['id' =>$tag->id ])}}">delete
                                                   
                                            </a>
                                           </td> 
                                          </tr>
                                    @endforeach
                                 
                                    @else
                                    <p scope="row" class="text-center">No  tags</p>  
                                    @endif
                                </tbody>
                              </table>

                             


                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
