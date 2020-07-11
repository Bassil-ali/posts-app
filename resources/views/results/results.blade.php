@include('include.header1')
<!-- PAGE HEADER -->
<div id="post-header" class="page-header">
	<div class="page-header-bg" style="background-image: url({{asset('./img/p.png')}});" data-stellar-background-ratio="0.5"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="post-category">
					<a href="category.html"> Search result : {{$query}}</a>
				</div>
				<h1> {{$query}}</h1>
				<ul class="post-meta">
					<li><a href="">search</a></li>
					 
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

 
					@if ($posts->count() > 0)
					@foreach ( $posts as $post)
					 
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
				 
					@else
						


					<!-- post -->
					<div class="post post-row">
 						<div class="post-body">
							<div class="post-category">
							
 							</div>
 							<ul class="post-meta">
									<h1>  No results found !!!   </h1>
 							</ul>
 						</div>
					</div>
					<!-- /post -->
					
					@endif
					



					 

					 

					 

				 

		 <br>

				
		