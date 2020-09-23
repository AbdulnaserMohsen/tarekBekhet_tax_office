
		@include('includes.header')
		<body>

			
			<!-- Start booster area -->
			<section class="booster" id="home" dir="ltr">
				<div class=" active-works-carousel ">
					@foreach($boosters as $booster)
					<section class=" ">
						<div class=" overlay">
							<img class="img-fluid opc" src="{{asset('images/boosters/'.$booster->image)}}" alt="">
						</div>
						<div class="container">
							<div class="row fullscreen  d-flex align-items-center justify-content-end">
								<div class="banner-content col-lg-6 col-md-12">
									<h1 class="booster">
										@if($lang == 'ar')
											{{$booster->arabic_comment}}
										@else
											{{$booster->english_comment}}
										@endif				
									</h1>

								</div>												
							</div>
						</div>
					</section>
					@endforeach
					<section class=" ">
						<div class=" overlay">
							<img class="img-fluid opc" src="{{asset('img/header4.jpg')}}" alt="">
						</div>
						<div class="container">
							<div class="row fullscreen  d-flex align-items-center justify-content-end">
								<div class="banner-content col-lg-6 col-md-12">
									<h1 class="booster">
										خبراء ضرائب و اعمال مراجعه							
									</h1>
									<a href="#" class="primary-btn2 header-btn text-uppercase">Hire Us Now!</a>
								</div>												
							</div>
						</div>
					</section>
					
				</div>
			</section>
			<!-- End booster area -->

			
			<!-- start account service area -->
			<section class="service-area pt-170 pb-170" id="account_service" >
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center ">
								<h1 class="mb-10">{{ __('body.account_service') }}</h1>
							</div>
						</div>
					</div>	
					<div class="row">
						@php($i=0)	
						@foreach($accounts as $account)
						@php($i+=1)
						<div class="sigle-service col-lg-3 col-md-6">

							<h4>
								@if($lang == 'ar')
									{{$account->arabic_title}}
								@else
									{{$account->english_title}}
								@endif
							</h4>
							<input type="checkbox" class="read-more-state" id="account_service_{{$i}}" />
								<p class="read-more-wrap">
									@if($lang == 'ar')
										{{$account->arabic_short_note}}
									@else
										{{$account->english_short_note}}
									@endif
									<span class="read-more-target	">
										@if($lang == 'ar')
											{{$account->arabic_full_note}}
										@else
											{{$account->english_full_note}}
										@endif
									</span>
								</p>
							<label for="account_service_{{$i}}" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						@endforeach
						
						<div class="sigle-service col-lg-3 col-md-6">
							<h4>إعداد دراسة الجدوى </h4>
							<input type="checkbox" class="read-more-state" id="account_service_2" />
								<p class="read-more-wrap">
									نقوم بإعداد دراسة الجدوى
									<span class="read-more-target	">
										نقوم بإعداد دراسة الجدوى نقوم بإعداد دراسة الجدوى نقوم بإعداد دراسة الجدوى نقوم بإعداد دراسة الجدوى
									</span>
								</p>
							<label for="account_service_2" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
						<div class="sigle-service col-lg-3 col-md-6">
							<h4> ضرائب تأمينات </h4>
							<input type="checkbox" class="read-more-state" id="account_service_3" />
								<p class="read-more-wrap">
									نقوم بعمل فحص  لضرائب التأمينات 
									<span class="read-more-target	">
										نقوم بعمل فحص  لضرائب التأمينات نقوم بعمل فحص  لضرائب التأمينات نقوم بعمل فحص  لضرائب التأمينات نقوم بعمل فحص  لضرائب التأمينات
									</span>
								</p>
							<label for="account_service_3" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
						<div class="sigle-service col-lg-3 col-md-6">
							<h4> ضرائب عقارية </h4>
							<input type="checkbox" class="read-more-state" id="account_service_4" />
								<p class="read-more-wrap">
									نقوم بعمل فحص  لضرائب عقارية
									<span class="read-more-target	">
										نقوم بعمل فحص  لضرائب عقارية نقوم بعمل فحص  لضرائب عقارية نقوم بعمل فحص  لضرائب عقارية نقوم بعمل فحص  لضرائب عقارية نقوم بعمل فحص  لضرائب عقارية 
									</span>
								</p>
							<label for="account_service_4" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
						<div class="sigle-service col-lg-3 col-md-6">
							<h4> استشارات قانونية </h4>
							<input type="checkbox" class="read-more-state" id="account_service_5" />
								<p class="read-more-wrap">
									نقوم بعمل استشارات قانونية 
									<span class="read-more-target	">
										نقوم بعمل استشارات قانونية نقوم بعمل استشارات قانونية نقوم بعمل استشارات قانونية نقوم بعمل استشارات قانونية 
									</span>
								</p>
							<label for="account_service_5" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- end account service area -->
			
			
			<!-- start electronic service area -->
			<section class="service-area pt-170 pb-170" id="electronic_service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center ">
								<h1 class="mb-10">{{ __('body.electronic_service') }}</h1>
							</div>
						</div>
					</div>	
					<div class="row">
						
						@php($i=0)	
						@foreach($electronics as $electronic)
						@php($i+=1)
						<div class="sigle-service col-lg-3 col-md-6">

							<h4>
								@if($lang == 'ar')
									{{$electronic->arabic_title}}
								@else
									{{$electronic->english_title}}
								@endif
							</h4>
							<input type="checkbox" class="read-more-state" id="electronic_service_{{$i}}" />
								<p class="read-more-wrap">
									@if($lang == 'ar')
										{{$electronic->arabic_short_note}}
									@else
										{{$electronic->english_short_note}}
									@endif
									<span class="read-more-target	">
										@if($lang == 'ar')
											{{$electronic->arabic_full_note}}
										@else
											{{$electronic->english_full_note}}
										@endif
									</span>
								</p>
							<label for="electronic_service_{{$i}}" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						@endforeach

						<div class="sigle-service col-lg-3 col-md-6">
							<h4>بناء و برمجة نظم معلومات الشركات و متابعة النظام محاسبات و اداريا</h4>
							<input type="checkbox" class="read-more-state" id="electronic_service_1" />
								<p class="read-more-wrap">
									نقوم ببناء و برمجة نظم معلومات الشركات و متابعة النظام محاسبات و اداريا 
									<span class="read-more-target	">
										نقوم ببناء و برمجة نظم معلومات الشركات و متابعة النظام محاسبات و اداريا  نقوم ببناء و برمجة نظم معلومات الشركات و متابعة النظام محاسبات و اداريا  نقوم ببناء و برمجة نظم معلومات الشركات و متابعة النظام محاسبات و اداريا 
									</span>
								</p>
							<label for="electronic_service_1" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
						<div class="sigle-service col-lg-3 col-md-6">
							<h4>حلول أنظمة المشروعات بانظمة متخصصة  </h4>
							<input type="checkbox" class="read-more-state" id="electronic_service_2" />
								<p class="read-more-wrap">
									نقوم بحلول أنظمة المشروعات بانظمة متخصصة 
									<span class="read-more-target	">
										نقوم بحلول أنظمة المشروعات بانظمة متخصصة نقوم بحلول أنظمة المشروعات بانظمة متخصصة نقوم بحلول أنظمة المشروعات بانظمة متخصصة 
									</span>
								</p>
							<label for="electronic_service_2" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
						<div class="sigle-service col-lg-3 col-md-6">
							<h4> برامج جاهزة للاستخدام  </h4>
							<input type="checkbox" class="read-more-state" id="electronic_service_3" />
								<p class="read-more-wrap">
									نقوم بعمل برامج جاهزة للاستخدام 
									<span class="read-more-target	">
										نقوم بعمل برامج جاهزة للاستخدام نقوم بعمل برامج جاهزة للاستخدام نقوم بعمل برامج جاهزة للاستخدام نقوم بعمل برامج جاهزة للاستخدام 
									</span>
								</p>
							<label for="electronic_service_3" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
						
						<div class="sigle-service col-lg-3 col-md-6">
							<h4> تقديم الأقرارات  </h4>
							<input type="checkbox" class="read-more-state" id="electronic_service_4" />
								<p class="read-more-wrap">
									نقوم بتقديم الأقرارات
									<span class="read-more-target	">
										نقوم بتقديم الأقرارات نقوم بتقديم الأقرارات نقوم بتقديم الأقرارات نقوم بتقديم الأقرارات 
									</span>
								</p>
							<label for="electronic_service_4" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- end electronic service area -->
			
			
			<!-- start courses area -->
			<section class="service-area pt-170 pb-170 " id="courses">
				<div class="container">
					<h1 class="text-center">{{ __('body.courses') }}</h1>
		
					<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
						<div class="carousel-inner">
							@php($i=0)
							@foreach($courses as $course)
							@php($i+=1)
							<div class="item @if($i == 1 ) active @endif">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class='product-card'>
										<div class="product-image">
											<img src="{{asset('images/courses/'.$course->image)}}" />
										</div>
										<div class="inner">
											<h1 class="title ">
												@if($lang == 'ar')
													{{$course->arabic_name}}
												@else
													{{$course->english_name}}
												@endif
											</h1>
											<p>
												@if($lang == 'ar')
													{{$course->arabic_short_details}}
												@else
													{{$course->english_short_details}}
												@endif
											</p>
											<dl>
												<dt>{{ __('body.course price') }}</dt>
												<dd>{{$course->price}}<span style="color:#7CFC00;">{{ __('body.course currency') }}</span></dd>
											</dl>
										</div>
										<ul class="actions clear">
											<li>
											  <a onclick="showModel({{$i}});" >{{ __('body.course detatils') }}</a>
											</li>
											<li>
											  <a onclick="showRegister({{$i}});" >{{ __('body.course register') }}</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach
							
							<div class="item">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class='product-card'>
										<div class="product-image">
											<img src="{{asset('img/header3.jpg')}}" />
										</div>
										<div class="inner">
											<h1 class="title ">المحاسبة للمحاسبين حديثي التخرج</h1>
											<p>دورات في المحاسبة بجميع فروعها للمحاسبين حديثي التخرج</p>
											<dl>
												<dt>{{ __('body.course price') }}</dt>
												<dd>55<span style="color:#7CFC00;">{{ __('body.course currency') }}</span></dd>
											</dl>
										</div>
										<ul class="actions clear">
											<li>
											  <a>{{ __('body.course detatils') }}</a>
											</li>
											<li>
											  <a>{{ __('body.course register') }}</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="item">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class='product-card'>
										<div class="product-image">
											<img src="{{asset('img/header6.jpg')}}" />
										</div>
										<div class="inner">
											<h1 class="title">إعداد المحاسبين  للعمل</h1>
											<p>دورات في إعداد المحاسبين للعمل</p>
											<dl>
												<dt>{{ __('body.course price') }}</dt>
												<dd>55<span style="color:#7CFC00;">{{ __('body.course currency') }}</span></dd>
											</dl>
										</div>
										<ul class="actions clear">
											<li>
											  <a>{{ __('body.course detatils') }}</a>
											</li>
											<li>
											  <a>{{ __('body.course register') }}</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						
						</div>
						@if($lang=='ar')
						  	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
						@else
							<a class="left carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-left"></i></a>
							<a class="right carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-right"></i></a>
						@endif
					</div>
				</div>
			</section>
			
			<!-- The Modal -->
			<section>
				@php($i=0)	
				@foreach($courses as $course)
				@php($i+=1)
				<div id="myModal{{$i}}" class="modal overflow-auto">
					<!-- Modal content -->
					<div class="modal-content">
						
						<span class="close" onclick="hide({{$i}});" >&times;</span>
						
						<h2 class="text-center">{{ __('body.course detatils') }}</h2>	

						<div class="container">
							<div class="row">		
								
								<!-- course main img -->
								<div class="col-md-4">
									<div id="">
										<div class="">
											<img src="{{asset('images/courses/'.$course->image)}}" alt="" width=100%>
										</div>
									</div>
								</div>
								<!-- /course main img -->
								
								<!-- course details -->
								<div class="col-md-8">
									
									<div >
										<label>{{ __('body.course name') }}:</label>
										<label>
											@if($lang == 'ar')
												{{$course->arabic_name}}
											@else
												{{$course->english_name}}
											@endif
										</label>
									</div>
									
									<div >
										<label>{{ __('body.course price') }}:</label>
										<label>{{$course->price}}<span style="color:green;"> {{ __('body.course currency') }} </span></label>
									</div>
									
									<div >
										<label>{{ __('body.course short details') }}:</label>
										<label>
											@if($lang == 'ar')
												{{$course->arabic_short_details}}
											@else
												{{$course->english_short_details}}
											@endif
										</label>
									</div>
									
									
									<div >
										<label>{{ __('body.course full details') }}:</label>
										<p>
											@if($lang == 'ar')
												{{$course->arabic_full_details}}
											@else
												{{$course->english_full_details}}
											@endif
										</p>
									</div>
									
									<div class="col-md-4 col-md-offset-10">
										<button class="genric-btn info circle" onclick="showRegister({{$i}});"> {{ __('body.course register') }} </button>
									</div>
										
								</div>
								<!-- /course details -->
								
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</section>
			
			<section >
				<div class="container" >
					@php($i=0)
					@foreach($courses as $course)
					@php($i+=1)
					<!-- The Register -->
					<div id="Register{{$i}}" class="modal overflow-auto">
						<!-- Modal content -->
						<div class="modal-content">
							<span class="close" onclick="hide({{$i}});" >&times;</span>
							<h2 class="text-center pt-50 pb-50">
								{{ __('body.course register in course') }} 
								@if($lang == 'ar')
									{{$course->arabic_name}}
								@else
									{{$course->english_name}}
								@endif
							</h2>
						
							<div class="container">
								<div class="row">
										<div class="limiter">
											<span><i class="fas fa-star-of-life"></i>{{ __('body.form required') }}</span>
											<div class="container-login100">
												<div class="wrap-login100">
													<form class="login100-form validate-form" id="application_form{{$i}}" action="{{route('add_applicant',$course->id)}}">
														@csrf <!-- {{ csrf_field() }} -->

														<div class="col-md-12">
														
															<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.form name validation') }}">
																<span class="label-input100">{{ __('body.form name') }}</span>
																<i class="fas fa-star-of-life"></i>
																<input class="input100" type="text" name="name" placeholder="{{ __('body.form name placeholder') }}">
																<span id="first"; class="focus-input100"></span>
															</div>

															<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate = "{{ __('body.form email validation') }}">
																<span class="label-input100">{{ __('body.form email') }}</span>
																<input class="input-not-required" type="email" name="email" placeholder="{{ __('body.form email placeholder') }}">
																<span class="focus-input100"></span>
															</div>
														</div>
														
														<div class="col-md-12">
															<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.form phone validation') }}">
																<span class="label-input100">{{ __('body.form phone') }}</span>
																<i class="fas fa-star-of-life"></i>
																<input class="input100" type="number" name="phone" placeholder="{{ __('body.form phone placeholder') }}">
																<span class="focus-input100"></span>
															</div>
															
															<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="">
																<span class="label-input100">{{ __('body.form national ID') }}</span>
																<input class="input-not-required" type="text" name="nationalID" placeholder="{{ __('body.form national ID placeholder') }}">
																<span class="focus-input100"></span>
															</div>
														</div>
														
														<div class="col-md-12">
															<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.form faculty validation') }}">
																<span class="label-input100">{{ __('body.form faculty') }}</span>
																<i class="fas fa-star-of-life"></i>
																<input class="input100" type="text" name="faculty" placeholder="{{ __('body.form faculty placeholder') }}">
																<span class="focus-input100"></span>
															</div>
														
															<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.form department validation') }}">
																<span class="label-input100">{{ __('body.form department') }}</span>
																<i class="fas fa-star-of-life"></i>
																<input class="input100" type="text" name="department" placeholder="{{ __('body.form department placeholder') }}">
																<span class="focus-input100"></span>
															</div>

														</div>
														
														<div class="col-md-12">
															
															<div class="col-md-4 section-smallGap">
																<span class="label-input100">{{ __('body.form language') }}</span>
																<i class="fas fa-star-of-life"></i>
																<div>
																	<select class="select" name="language">
																		<option value="0">{{ __('body.form language') }}</option>
																		<option value="1">عربي</option>
																		<option value="2">English</option>
																		<option value="3">langue française</option>
																	</select>
																</div>
																
															</div>
														
															<div class="col-md-4 col-md-push-1 section-smallGap">
																<span class="label-input100">{{ __('body.form graduation year') }}</span>
																<i class="fas fa-star-of-life"></i>
																<div class="">
																	<select class="select" name="gradYear">
																		<option value="0">{{ __('body.form graduation year') }}</option>
																		@for($year=1995; $year<now()->year; $year++)
																		<option value="{{$year}}">{{$year}}</option>
																		@endfor
																	</select>
																</div>

															</div>
															
															<div class="col-md-4 col-md-push-2 section-smallGap">

																<span class="label-input100">{{ __('body.form grade') }}</span>
																<i class="fas fa-star-of-life"></i>
																<div>
																	<select class="select" name="grade">
																		<option value="0">{{ __('body.form grade') }}</option>
																		<option value="1">{{ __('body.form grade pass') }}</option>
																		<option value="2">{{ __('body.form grade good') }}</option>
																		<option value="3">{{ __('body.form grade very good') }}</option>
																		<option value="4">{{ __('body.form grade excellent') }}</option>
																		<option value="5">{{ __('body.form grade very good with honor') }}</option>
																		<option value="6">{{ __('body.form grade excellent with honor') }}</option>
																	</select>
																</div>

															</div>
															
														</div>
											
														<div class="col-md-2 col-md-offset-12">
															<button class="registerButton">
																{{ __('body.course register') }}
															</button>
														</div>
														
													</form>
													
												</div>
												
											</div>
										</div>	
										
								</div>
								
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</section>
			


			<!-- Start aboutUs Area -->
			<section class="testimonial-area relative section-gap " dir="ltr" id="aboutUs">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">{{ __('body.aboutUs') }}</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-testimonial">
							@foreach($founders as $founder)
							<div class="single-testimonial item d-flex flex-row" dir={{$dir}}>
								<div class="thumb">
									<div class="">
									  <div class="circle-image-container ">
										<img class="" src="{{asset('images/aboutus/'.$founder->image)}}">
									  </div>
									</div>
								</div>
								<div class="desc" >
									<h4 mt-30>
										@if($lang == 'ar')
											{{$founder->arabic_name}}
										@else
											{{$founder->english_name}}
										@endif				
									</h4>
									<p>
										@if($lang == 'ar')
											{{$founder->arabic_job}}
										@else
											{{$founder->english_job}}
										@endif	
									</p>
								</div>
							</div>
							@endforeach

							<div class="single-testimonial item d-flex flex-row" dir={{$dir}}>
								<div class="thumb">
									<div class="">
									  <div class="circle-image-container ">
										<img class="" src="{{asset('img/user.png')}}">
									  </div>
									</div>
								</div>
								<div class="desc" >
									<h4 mt-30>طارق محمد بخيت محمد </h4>
									<p>
										محاسب قانوني و خبير ضرائب و مستشار في الجهاز المركزي للمحاسبات.
									</p>
								</div>
							</div>
							
							<div class="single-testimonial item d-flex flex-row" dir={{$dir}}>
								<div class="thumb">
									<div class="">
									  <div class="circle-image-container ">
										<img class="" src="{{asset('img/t4.jpg')}}">
									  </div>
									</div>
								</div>
								<div class="desc">
									<h4 mt-30> محمد محمد محمد  </h4>
									<p>
										محاسب قانوني و خبير ضرائب و مستشار في الجهاز المركزي للمحاسبات.
									</p>
								</div>
							</div>
							
							<div class="single-testimonial item d-flex flex-row" dir={{$dir}}>
								<div class="thumb">
									<div class="">
									  <div class="circle-image-container ">
										<img class="" src="{{asset('img/user.png')}}">
									  </div>
									</div>
								</div>
								<div class="desc">
									<h4 mt-30>أحمد أحمد أحمد </h4>
									<p>
										محاسب قانوني و خبير ضرائب و مستشار في الجهاز المركزي للمحاسبات.
									</p>
								</div>
							</div>
							
						</div>					
					</div>
				</div>	
			</section>
			<!-- End aboutUs Area -->
			

			<!-- start empty Area -->		
			<section class="section-gap" >
					
			</section>
			<!-- end empty Area -->	

			@include('includes.footer')
			
					

			
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

			<script>
			// Get the modal
			//var modal = document.getElementById('myModal');
			var j=0;
			//var registerModel = document.getElementById('Register');
			var topHeader = document.getElementById('header');
			
			

			function showModel(i) 
			{
				//console.log(i);
				j=i;
				topHeader.style.display = "none";
				//modal.style.display = "block";
				$('#myModal'+i).show();
			}
			
			function showRegister(i) 
			{
				//console.log(i);
				j=i;
				topHeader.style.display = "none";
				//modal.style.display = "none";
				$('#myModal'+i).hide();
				//registerModel.style.display = "block";
				$('#Register'+i).show();
			}
			
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) 
			{
				if (event.target == document.getElementById('myModal'+j) ) 
				{
					//modal.style.display = "none";
					$('#myModal'+j).hide();
					topHeader.style.display = "block";
				}
				if (event.target == document.getElementById('Register'+j)) 
				{
					//registerModel.style.display = "none";
					$('#Register'+j).hide();
					topHeader.style.display = "block";
				}
				
			}

			// When the user press escape, close the modal
			$(document).keyup(function(e) 
			{
			    if (e.key === "Escape") 
			    {
			    	//console.log('escape');
			    	if ($('#myModal'+j).is(":visible") ) 
					{
						//modal.style.display = "none";
						$('#myModal'+j).hide();
						topHeader.style.display = "block";
					}
					else if($('#Register'+j).is(":visible")) 
					{
						//registerModel.style.display = "none";
						$('#Register'+j).hide();
						topHeader.style.display = "block";
					} 
			    }
			});
			
			// When the user clicks on <span> (x), close the modal
			function hide(i)
			{
				//modal.style.display = "none";
				$('#myModal'+i).hide();
				//registerModel.style.display = "none";
				$('#Register'+i).hide();
				topHeader.style.display = "block";
				
			}

			//start add applicants
			$(document).on( "submit",".validate-form", function(event) 
			{
				event.preventDefault();

				var url = $(this).attr('action');
				var form = '#'+$(this).attr('id');
				
				console.log(url);
				console.log(form);
				
				var formData = new FormData($(form)[0]);
			    console.log(formData);

				var formElements = formData.get("name");;
				console.log(formElements); 

				$.ajax
			  	({
			        url: url,
			      	method: 'post',
	              	data: formData,
	              	dataType:'json',
		            contentType: false,
					processData: false,
	               
	               success: function (data) 
			        {
			            console.log(data);
			    		swal
			            ({
			            	title: "{{ __('body.registered') }}",
			            	icon: "success",
						  	buttons: false,
						  	timer: 1500,
						});
						//location.reload();
						setTimeout(location.reload.bind(location), 950);
			        },
			        error:function(data)
			        { 
			            console.log(data);
			        }
			    });

			});
			//end add applicants
			
			</script>
			
			
		</body>
	</html>