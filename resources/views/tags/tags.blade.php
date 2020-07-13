@include('include.header1')
<!-- PAGE HEADER -->
<div id="post-header" class="page-header">
	<div class="page-header-bg" style="background-image: url({{secure_asset('./img/p.jpg')}});" ></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="post-category">
					<a href="category.html">{{$title}}</a>
				</div>
				<h1></h1>
				<ul class="post-meta">
					<li><a href="">tags</a></li>
					<li>{{$tag->created_at->toFormattedDateString()}}</li>
					<li><i class="fa fa-comments"></i> 3</li>
					<li><i class="fa fa-eye"></i> 807</li>
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



						<!-- post -->
						<div class="post post-row">
 							<div class="post-body">
								<div class="post-category">
									 
 								</div>
 								<ul class="post-meta">
									<li><a href="author.html">Tag: {{$tag->tag}}</a></li>
 								</ul>
								 
							</div>
						</div>
						<!-- /post -->
					
					
					@foreach ($tag->posts as $post)
					 
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

				
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src='{{asset("js/jquery.min.js")}}'></script>
	<script src='{{asset("js/bootstrap.min.js")}}'></script>
	<script src='{{asset("js/jquery.stellar.min.js")}}'></script>
	<script src='{{asset("js/main.js")}}'></script>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> 
</body>

</html>
