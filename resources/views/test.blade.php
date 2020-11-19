<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">update avatar image</div>

                <div class="card-body">


                         <form action="{{route('avatar.update')}}" method="POST">
                <input type="file" name="avatar">
                <button class="btn btn-primary" type="submit">update</button>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
