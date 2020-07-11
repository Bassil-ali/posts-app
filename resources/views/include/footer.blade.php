
	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						 
						<p>sudan
                                </p>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>

                                    @foreach ($categories as $category)
                                    <li><a href="{{route('category.show', ['id' => $category->id])}}">{{$category->name}} <span></span></a></li>
                                    @endforeach


								 
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>

                                    @foreach ($tags as $tag)
                                    <li><a href="{{route('tag.show', ['id' => $tag->id])}}">{{$tag->tag}}  </a></li>
                                    @endforeach

							 
							 
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title"></h3>
						<div class="newsletter-widget">
							<form>
								<p></p>
								
								
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="index.html"></a></li>
						<li><a href="about.html"></a></li>
						<li><a href="contact.html"></a></li>
						
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
					 
Copyright &copy;
<script>document.write(new Date().getFullYear());</script> 
All rights reserved | This template is made with 
<i class="fa fa-heart-o" aria-hidden="true"></i> by 
<a href="" target="_blank">BASSIL ALI</a>
 
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->
	<!-- jQuery Plugins -->

	

	<!-- jQuery Plugins -->
	<script src='{{asset("js/jquery.min.js")}}'></script>
	<script src='{{asset("js/bootstrap.min.js")}}'></script>
	<script src='{{asset("js/jquery.stellar.min.js")}}'></script>
	<script src='{{asset("js/main.js")}}'></script>