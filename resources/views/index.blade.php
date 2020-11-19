@include('include.header')
  <style>


    body {
	background:#E3E3E3;

}

.back-to-top {

    z-index:1;
     margin: 0 auto;
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: bloke;
    background-color:gray;

}
.back-to-top:hover{
    background-color:#ffff;
}
    </style>
    <script>
    $(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});


    </script>

	<div class="alert alert-dark" role="alert">
 	<center>
<a href="/login" type="a" class="btn btn-success">  login  </a>
<a href="/register" type="a" class="btn btn-danger ">register</a>
		<h1>LARAPOS</h1></center>
		<center><h4>Log in and make your posts, choose the section and go</h4></center>
</div>




		<a id="back-to-top" href="#" class=" btn-lg back-to-top" role="button">^</a>
		<!-- container -->
		<div class="container">
			<!-- row -->



					<!-- post -->
					@foreach ($post as $post)

					<div class="post post-thumb">
                        <div class="alert alert-dark" role="alert">
                            <p>
                                <img  class="rounded-circle" alt="Cinque Terre" style="width: 30px; height: 20px" src="{{$post->avatar}}">
                                <span>Created by:</span>{{$post->user_name}}</p>
                        </div>

						<a class="post-img md-3" href="{{route('post.show', ['slug' => $post->slug])}}"><img style="height:300px" src="{{$post->featrued}}" alt="" class="page-header-bg" ></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('category.show', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
								<h4 style="color: #fff;">Read more topic</h4>
							</div>
							<h3 class="post-title title-lg"><a href="#">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="#">posts</a></li>
								<li>{{$post->created_at}}</li>
							</ul>

						</div>

					</div>
					@endforeach
				<!-- /post -->

			</div>

		</div>


	</div>
</div>



		<!-- container -->
		@include('include.footer')


