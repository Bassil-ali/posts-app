@include('include.header')


	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					@foreach ($post as $post)
					<div class="post post-thumb">
						<a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('category.show', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title title-lg"><a href="#">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>{{$post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					@endforeach

					<!-- /post -->
			
			</div>

		</div>
		

	</div>

				
					<!-- /post -->	<!-- post -->
					
					<!-- /post -->

					<!-- post -->
				
					</div>
					<!-- /post -->
				
					<!-- /post -->
				</div>
					<!-- /post -->
				</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->

		<!-- container -->
		@include('include.footer')
					<!-- /row -->
				
</body>

</html>
	<script src='{{asset("js/jquery.min.js")}}'></script>
	<script src='{{asset("js/bootstrap.min.js")}}'></script>
	<script src='{{asset("js/jquery.stellar.min.js")}}'></script>
	<script src='{{asset("js/main.js")}}'></script>