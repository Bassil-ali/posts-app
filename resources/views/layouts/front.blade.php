@include('include.header')

		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url('{{$post->featrued}}');"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{$title}}</h1>
						<p class="lead"></p>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">





					<div class="section-row">
						<div class="section-title">
							<h3 class="title"></h3>
						</div>


						
						<p>{!! $post->content !!}</p>
						@foreach($post->tags as $tag)
						<a href="{{route('tag.show', ['id' => $tag->id])}}" 
							class="badge badge-pill badge-danger"
						style="background-color: #ee4266;">{{ $tag->tag }}</a>
						@endforeach
				     </div>
							 

					 <div class="section-row">
							<div class="section-title">
								 
							</div>
							 <br>

							 @if ($prev)
							 <a  href="{{route('post.show', ['slug' => $prev->slug])}}" 
								 class="btn btn-success"> Next post {{$prev->title}} </a>
							 @endif
                              <br><br>
							 @if ($next)
							 <a href="{{route('post.show', ['slug' => $next->slug])}}" 
								 class="btn btn-success"> Prev post {{$next->title}} </a>
							 @endif
							 
						  
						 </div>

						
								 
							  
							 </div>


						@include('include.disqus') 

				</div>











				
				<div class="col-md-4">
			
				
					<!-- /social widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
						
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	@include('include.footer')

	<!-- jQuery Plugins -->

	<!-- Go to www.addthis.com/dashboard to customize your tools --> 
</body>

</html>
<script src='{{asset("js/jquery.min.js")}}'></script>
	<script src='{{asset("js/bootstrap.min.js")}}'></script>
	<script src='{{asset("js/jquery.stellar.min.js")}}'></script>
	<script src='{{asset("js/main.js")}}'></script>