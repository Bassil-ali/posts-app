@include('include.header1')
<!-- PAGE HEADER -->
<div id="post-header" class="page-header">
	<div class="page-header-bg" style="background-image: url({{asset('./img/p.png')}});"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="post-category">
					<a href="category.html">{{$title}}</a>
				</div>
				<h1>{{$category->name}}</h1>
				<ul class="post-meta">
					<li><a href="">psot</a></li>
					<li>{{$category->created_at->toFormattedDateString()}}</li>
					<li><i class="fa fa-comments"></i> 3</li>
					<li><i class="fa fa-eye"></i> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /PAGE HEADER -->
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					
					
					@foreach ($category->posts as $post)
						

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								 
								<a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->title}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->updated_at->toFormattedDateString()}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>{{$post->created_at->toFormattedDateString()}}</li>
							</ul>
							<p>{!!$post->content!!}</p>
						</div>
					</div>
					<!-- /post -->


					@endforeach



					

					 

					 

				 

		 <br>

				

					<!-- social widget -->
					
					<!-- /social widget -->

					<!-- category widget -->
					
					<!-- /category widget -->

					<!-- newsletter widget -->
				
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	@include('include.footer')

</body>

</html>
