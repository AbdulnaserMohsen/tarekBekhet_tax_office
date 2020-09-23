
<ul class="social-media-container">
	
	<li class="social-media blog">
		<i class="fas fa-laptop-code"></i>
		<div  dir="ltr">
					<div class="container">
						<!-- row -->
						<div class="row">
							<div class="text-center">
								<div class="developer">
									<h3>Developed by</h3>
									<div align="center">
										<div class="circle-image-container smaller">
											<img class="" src="{{asset('img/a.png')}}">
										</div>
									</div>
									
									<p><i class="fa fa-user"></i> Abdulnaser Ahmed Mohsen</p>
									<p><i class="fa fa-map-marker"></i> Assiut, Assiut, Egypt</p>
									<p><i class="fa fa-mobile"></i> +20-11-25567102</p>
									<p><i class="fa fa-envelope"></i> naserahmed1995@gmail.com</p>
									<a href="https://www.linkedin.com/in/abdulnaser-mohsen-7233a5103/"><i class="fa fa-linkedin"></i></a>
									<a href="https://github.com/AbdulnaserMohsen"><i class="fa fa-github"></i></a>
								</div>
							</div>
						</div>
							<!-- /row -->
					</div>
					<!-- /container -->
				</div>
				<!-- /bottom footer -->
	</li>
	
	
</ul>


		<!-- start footer Area -->		
			<footer class="footer-area" id="footer">
				<div class="section section-gap">
					<div class="container">
						<div class="row">
							<div class="col-lg-9  col-md-9"  >
								<div class="single-footer-widget">
									<h6>{{ __('footer.Branshes') }}</h6>
									<ul class="footer-nav">
										
										@foreach($branches as $branch)
										<li class="d-flex flex-row">
											<div class="col-lg-3">
												<img src="{{asset('images/branches/'.$branch->image)}}" width=100%   alt="">
											</div>
											
											<div class="col-lg-6 desc">
												<a href="{{$branch->google_location}}"><i class="fa fa-map-marker"></i>
													@if($lang == 'ar')
														{{$branch->arabic_address}}
													@else
														{{$branch->english_address}}
													@endif
												</a>
												<p><i class="fa fa-mobile"></i> {{$branch->phone}} </p>
											</div>
										</li>
										@endforeach

										<li class="d-flex flex-row">
											<div class="col-lg-3">
												<img src="{{asset('img/company photo.jpg')}}" width=100%   alt="">
											</div>
											
											<div class="col-lg-6 desc">
												<a href="#"><i class="fa fa-map-marker"></i> أسيوط : 81 ش الهلالي</a>
												<p><i class="fa fa-mobile"></i> 20-10-06807010+ </p>
											</div>
										</li>
										
										<li class="d-flex flex-row">
											<div class="col-lg-3">
												<img src="{{asset('img/company photo.jpg')}}" width=100%   alt="">
											</div>
											
											<div class="col-lg-6 desc">
												<a href="#"><i class="fa fa-map-marker"></i> القاهرة:2 عمارات حدائق رامو الدور الأول شقة 105 مدينة نصر بجوار سيتي ستارز </a>
												<p><i class="fa fa-phone"></i> 20-88-24149868+ </p>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							<div class="col-lg-3  col-md-3">
								<div class="single-footer-widget contacts">
									<h6>{{ __('footer.Contacts') }}</h6>
									<ul class="">
									
										@foreach($mobiles as $mobile)
										<li><i class="fa fa-mobile"></i> {{$mobile->phone}} </li>
										@endforeach
										<li><i class="fa fa-mobile"></i> 20-10-02135075+ </li>
										
										@foreach($grounds as $ground)
										<li><i class="fa fa-phone"></i> {{$ground->phone}} </li> 
										@endforeach
										<li><i class="fa fa-phone"></i> 20-88-24149868+ </li>
										
										@foreach($whatses as $whats)
										<li><i class="fab fa-whatsapp"></i> {{$whats->phone}} </li> 
										@endforeach
										<li><i class="fab fa-whatsapp"></i> 20-10-00052326+ </li>
										
										@foreach($emails as $email)
										<li><i class="fa fa-envelope-o"></i> {{$email->email}} </li>
										@endforeach
										<li><i class="fa fa-envelope-o"></i> Tarekmbm@masrawy.com </li>
									
									</ul>
									
									@foreach($facebooks as $facebook)
									<a href="{{$facebook->link}}"><i class="fab fa-facebook"></i></a>
									@endforeach

									@foreach($twitters as $twitter)
									<a href="{{$twitter->link}}"><i class="fab fa-twitter"></i></a>
									@endforeach

									@foreach($instagrams as $instagram)
									<a href="{{$instagram->link}}"><i class="fab fa-instagram"></i></a>
									@endforeach

									@foreach($linkedins as $linkedin)
									<a href="{{$linkedin->link}}"><i class="fab fa-linkedin-in"></i></a>
									@endforeach

								</div>
							</div>
							<div class="col-md-12 text-center">
								<span class="copyright">
									Developed in 2019
									
									<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						
								</span>
							</div>		
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/bootstrap.min.js')}}"></script>
			<script src="{{asset('js/coursal.js')}}"></script>
		
			<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>			
			<script src="{{asset('js/jquery.sticky.js')}}"></script>
			<script src="{{asset('js/jquery.DonutWidget.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>			
			<script src="{{asset('js/main.js')}}"></script>
			<script src="{{asset('js/register.js')}}"></script>	
			<script src="{{asset('js/select.js')}}"></script>
			<script src="{{asset('js/uploadImage.js')}}"></script>
			<script src="{{asset('js/remove.js')}}"></script>
			