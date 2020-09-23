	@include('includes.header')


	<body>		
			<!-- Start booster area -->
			<section class="container pt-170 pb-170" id="home">
					<div class="row-gallery-item" id="home-container">
						<h1 class="text-center">{{ __('body.main images') }}</h1>
							@php($i=0)
							@foreach($boosters as $booster)
							@php($i+=1)
							<div class="col-md-4">
								<div class="remove"  >
									@php($page=$boosters->currentPage())
									@if($boosters->count()==1)
										@if($boosters->currentPage() != 1)
											@php($page =$boosters->currentPage()-1)
										@endif
									@endif
									<button data-section="#home" data-contanier="#home-container" data-url="{{route('delete_booster',$booster->id)}}" data-page="?page={{$page}}">
										<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
									</button>
								</div>
								<div class="container-login100">
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="booster-form{{$i}}"  data-section="#home" data-contanier="#home-container" data-type="update" data-url="{{route('update_booster',$booster->id)}}" data-page="?page={{$boosters->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
								
										<div class="img-container">
											<img src="{{asset('images/boosters/'.$booster->image)}}" class="image" >
											<div class="middle">
												<button class="file-upload genric-btn circle">            
													<input type="file" class="file-input" name="booster_image">{{ __('body.change photo') }}
												</button>
											</div>
										</div>
								
										<div class="wrap-input100 validate-input" data-validate="{{ __('body.comment in arabic validation') }}">
											<span class="label-input100">{{ __('body.comment in arabic') }}</span>
											<input class="input100" type="text" name="arabic_comment" placeholder="محاسبون قانونين...." data-type="ARadmin" value="{{$booster->arabic_comment}}">
											<span class="focus-input100" ></span>
										</div>
										
										<div class="wrap-input100 validate-input " data-validate="{{ __('body.comment in english validation') }}">
											<span class="label-input100">{{ __('body.comment in english') }}</span>
											<input class="input100" type="text" name="english_comment" placeholder="acountant..." data-type="ENadmin" value="{{$booster->english_comment}}">
											<span class="focus-input100"></span>
										</div>
										<div class="col-md-2 col-md-offset-3">
											<button class="registerButton">{{ __('body.update') }}</button>
										</div>
									</form>
									
								</div>
							</div>
							@endforeach
							
							<div class="col-md-4 pt-50 pb-50">
								<div class="container-login100">
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="booster-form0" data-section="#home" data-contanier="#home-container" data-type="add" data-url="{{route('add_booster')}}" data-page="?page={{$boosters->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->	
										

										<div class="img-container">
											<img src="" class="image" >
											<div class="middle">
												<button class="file-upload genric-btn circle">    
													<input type="file" class="file-input" name="booster_image" required>{{ __('body.add photo') }}
												</button>
											</div>
										</div>
								
										<div class="wrap-input100 validate-input" data-validate="{{ __('body.comment in arabic validation') }}">
											<span class="label-input100">{{ __('body.comment in arabic') }}</span>
											<input class="input100" type="text" name="arabic_comment" placeholder="محاسبون قانونين...." data-type="ARadmin">
											<span class="focus-input100"></span>
										</div>
										
										<div class="wrap-input100 validate-input " data-validate="{{ __('body.comment in english validation') }}">
											<span class="label-input100">{{ __('body.comment in english') }}</span>
											<input class="input100" type="text" name="english_comment" placeholder="acountant..." data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										<div class="col-md-12 col-md-offset-1">
											<button class="registerButton">{{ __('body.add new photo') }}</button>
										</div>
									</form>
									
								</div>	
							</div>
							
							<div class="col-md-12 container">
								<div class="d-flex justify-content-center pageint"  data-section="#home" data-contanier="#home-container" > {{ $boosters->links() }} </div>
							</div>	
					</div>
					

			</section>
			<!-- End booster area -->

			
			<!-- start account service area -->
			<section class="service-area pt-170 pb-170" id="account_service">
				<div class="container" id="account_container">
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
						<div class="sigle-service col-lg-6 col-md-6">
							<div class="remove">
								@php($page=$accounts->currentPage())
								@if($accounts->count()==1)
									@if($accounts->currentPage() != 1)
										@php($page =$accounts->currentPage()-1)
									@endif
								@endif
								<button data-section="#account_service" data-contanier="#account_container" data-url="{{route('delete_service',$account->id)}}" data-page="?page={{$page}}">
									<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
								</button>
							</div>
							<div class="account-info{{$i}}">
								<div class="sigle-service col-lg-6 col-md-6" dir="rtl">
									<h4>{{$account->arabic_title}}</h4>
									<input type="checkbox" class="read-more-state" id="account_service_{{$i}}" />
										<p class="read-more-wrap">
											{{$account->arabic_short_note}}
											<span class="read-more-target	">
												{{$account->arabic_full_note}}
											</span>
										</p>
									<label for="account_service_{{$i}}" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
								</div>
								<div class="sigle-service col-lg-6 col-md-6" dir="ltr">
									<h4>{{$account->english_title}}</h4>
									<input type="checkbox" class="read-more-state" id="account_service_En_{{$i}}" />
										<p class="read-more-wrap">
											{{$account->english_short_note}}
											<span class="read-more-target	">
												{{$account->english_full_note}}
											</span>
										</p>
									<label for="account_service_En_{{$i}}" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
								</div>
								<div class="col-md-12">
									<div class="col-md-2 col-md-offset-4">
										<button onclick="hide_show({{$i}} ,'.account-info','.account-form')" class="registerButton">{{ __('body.edit') }}</button>
									</div>
								</div>
							</div>
							<div class="account-form{{$i}} hide">
								<div class="">
									<div class="">
										<form class="login100-form validate-form" action="" id="account-form{{$i}}" data-section="#account_service" data-contanier="#account_container" data-type="update" data-url="{{route('update_service',$account->id)}}" data-page="?page={{$accounts->currentPage()}}">
											@csrf <!-- {{ csrf_field() }} -->
											
											<div class="col-md-12">
												<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.title in arabic validation') }}">
													<span class="label-input100">{{ __('body.title in arabic') }}</span>
													<input class="input100" type="text" name="ARtitle" placeholder="أعمال المراجعة...." data-type="ARadmin" value="{{$account->arabic_title}}">
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.title in english validation') }}">
													<span class="label-input100">{{ __('body.title in english') }}</span>
													<input class="input100" type="text" name="ENtitle" placeholder="Revision Work..." data-type="ENadmin" value="{{$account->english_title}}">
													<span class="focus-input100"></span>
												</div>
												<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.short note in arabic validation') }}">
													<span class="label-input100">{{ __('body.short note in arabic') }}</span>
													<input class="input100" type="text" name="ARshort" placeholder="نقوم با اعمال مراجعه...." data-type="ARadmin" value="{{$account->arabic_short_note}}">
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.short note in english validation') }}">
													<span class="label-input100">{{ __('body.short note in english') }}</span>
													<input class="input100" type="text" name="ENshort" placeholder="We review works..." data-type="ENadmin" value="{{$account->english_short_note}}">
													<span class="focus-input100"></span>
												</div>
												<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.details in arabic validation') }}">
													<span class="label-input100">{{ __('body.details in arabic') }}</span>
													<textarea id="textarea" class="input-form input100" type="text" name="ARdescription" data-type="ARadmin"placeholder="نقوم با اعمال مراجعه بالتفصيل...." >{{$account->arabic_full_note}}</textarea>
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.details in english validation') }}"	>
													<span class="label-input100">{{ __('body.details in english') }}</span>
													<textarea id="textarea" class="input-form input100" type="text" name="ENdescription" data-type="ENadmin"placeholder="We carry out auditing works....">{{$account->english_full_note}}</textarea>
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-4 col-md-offset-4">
													<button class="registerButton ">{{ __('body.update') }}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
						@endforeach
						
						<div class="sigle-service col-lg-6 col-md-6 pt-50 pb-50">
							
							<div class="">
								<div class="">
									<div class="">
										<form class="login100-form validate-form" action="" id="account-form0" data-section="#account_service" data-contanier="#account_container" data-type="add" data-url="{{route('add_service')}}" data-page="?page={{$accounts->currentPage()}}">
											@csrf <!-- {{ csrf_field() }} -->

											<input type="hidden" name="type" value="0">
											<div class="col-md-12">
												<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.title in arabic validation') }}">
													<span class="label-input100">{{ __('body.title in arabic') }}</span>
													<input class="input100" type="text" name="ARtitle" placeholder="أعمال المراجعة...." data-type="ARadmin">
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.title in english validation') }}">
													<span class="label-input100">{{ __('body.title in english') }}</span>
													<input class="input100" type="text" name="ENtitle" placeholder="Revision Work..." data-type="ENadmin">
													<span class="focus-input100"></span>
												</div>
												<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.short note in arabic validation') }}">
													<span class="label-input100">{{ __('body.short note in arabic') }}</span>
													<input class="input100" type="text" name="ARshort" placeholder="نقوم با اعمال مراجعه...." data-type="ARadmin">
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.short note in english validation') }}">
													<span class="label-input100">{{ __('body.short note in english') }}</span>
													<input class="input100" type="text" name="ENshort" placeholder="We review works..." data-type="ENadmin">
													<span class="focus-input100"></span>
												</div>
												<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.details in arabic validation') }}">
													<span class="label-input100">{{ __('body.details in arabic') }}</span>
													<textarea id="textarea" class="input-form input100" type="text" name="ARdescription" data-type="ARadmin"placeholder="نقوم با اعمال مراجعه بالتفصيل...." ></textarea>
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.details in english validation') }}"	>
													<span class="label-input100">{{ __('body.details in english') }}</span>
													<textarea id="textarea" class="input-form input100" type="text" name="ENdescription" data-type="ENadmin"placeholder="We carry out auditing works...."></textarea>
													<span class="focus-input100"></span>
												</div>
												
												<div class="col-md-9 col-md-offset-2">
													<button class="registerButton">{{ __('body.add accounting service') }}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					<div class="col-md-12 container">
						<div class="d-flex justify-content-center pageint"  data-section="#account_service" data-contanier="#account_container" > {{ $accounts->links() }} </div>
					</div>

				</div>	
			</section>
			<!-- end account service area -->
			
			
			<!-- start electronic service area -->
			<section class="service-area pt-170 pb-170" id="electronic_service">
				<div class="container" id="electronic_container">
					
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
						<div class="sigle-service col-lg-6 col-md-6">
							<div class="remove">
								@php($page=$electronics->currentPage())
								@if($electronics->count()==1)
									@if($electronics->currentPage() != 1)
										@php($page =$electronics->currentPage()-1)
									@endif
								@endif
								<button data-section="#electronic_service" data-contanier="#electronic_container" data-url="{{route('delete_service',$electronic->id)}}" data-page="?page={{$page}}">
									<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
								</button>
							</div>

							<div class="electronic-info{{$i}}">
								<div class="sigle-service col-lg-6 col-md-6" dir="rtl">
									<h4>{{$electronic->arabic_title}}</h4>
									<input type="checkbox" class="read-more-state" id="electronic_service_{{$i}}" />
										<p class="read-more-wrap">
											{{$electronic->arabic_short_note}}
											<span class="read-more-target	">
												{{$electronic->arabic_full_note}}
											</span>
										</p>
									<label for="electronic_service_{{$i}}" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
								</div>
								<div class="sigle-service col-lg-6 col-md-6" dir="ltr">
									<h4>{{$electronic->english_title}}</h4>
									<input type="checkbox" class="read-more-state" id="electronic_service_En_{{$i}}" />
										<p class="read-more-wrap">
											{{$electronic->english_short_note}}
											<span class="read-more-target	">
												{{$electronic->english_full_note}}
											</span>
										</p>
									<label for="electronic_service_En_{{$i}}" class=" genric-btn info circle  read-more-trigger  fas fa "></label>
								</div>
								<div class="col-md-12">
									<div class="col-md-2 col-md-offset-4">
										<button onclick="hide_show({{$i}},'.electronic-info','.electronic-form')" class="registerButton">{{ __('body.edit') }}</button>
									</div>
								</div>
							</div>

							<div class="electronic-form{{$i}} hide">
								
								<form class="login100-form validate-form" action="" id="electronic-form{{$i}}" data-section="#electronic_service" data-contanier="#electronic_container" data-type="update" data-url="{{route('update_service',$electronic->id)}}" data-page="?page={{$electronics->currentPage()}}">
									@csrf <!-- {{ csrf_field() }} -->

									<div class="col-md-12">
										<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.title in arabic validation') }}">
											<span class="label-input100">{{ __('body.title in arabic') }}</span>
											<input class="input100" type="text" name="ARtitle" placeholder="أعمال المراجعة...." data-type="ARadmin" value="{{$electronic->arabic_title}}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.title in english validation') }}">
											<span class="label-input100">{{ __('body.title in english') }}</span>
											<input class="input100" type="text" name="ENtitle" placeholder="Revision Work..." data-type="ENadmin" value="{{$electronic->english_title}}">
											<span class="focus-input100"></span>
										</div>
										<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.short note in arabic validation') }}">
											<span class="label-input100">{{ __('body.short note in arabic') }}</span>
											<input class="input100" type="text" name="ARshort" placeholder="نقوم با اعمال مراجعه...." data-type="ARadmin" value="{{$electronic->arabic_short_note}}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.short note in english validation') }}">
											<span class="label-input100">{{ __('body.short note in english') }}</span>
											<input class="input100" type="text" name="ENshort" placeholder="We review works..." data-type="ENadmin" value="{{$electronic->english_short_note}}">
											<span class="focus-input100"></span>
										</div>
										<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.details in arabic validation') }}">
											<span class="label-input100">{{ __('body.details in arabic') }}</span>
											<textarea id="textarea" class="input-form input100" type="text" name="ARdescription" data-type="ARadmin"placeholder="نقوم با اعمال مراجعه بالتفصيل...." >{{$electronic->arabic_full_note}}</textarea>
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.details in english validation') }}">
											<span class="label-input100">{{ __('body.details in english') }}</span>
											<textarea id="textarea" class="input-form input100" type="text" name="ENdescription" data-type="ENadmin"placeholder="We carry out auditing works....">{{$electronic->english_full_note}}</textarea>
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-4 col-md-offset-4">
											<button class="registerButton">{{ __('body.update') }}</button>
										</div>
									</div>
								</form>
									
							</div>
							
						</div>
						@endforeach
						
						<div class="sigle-service col-lg-6 col-md-6 pt-50 pb-50">
							
							<form class="login100-form validate-form"action="" id="electronic-form0" data-section="#electronic_service" data-contanier="#electronic_container" data-type="add" data-url="{{route('add_service')}}" data-page="?page={{$electronics->currentPage()}}">
								@csrf <!-- {{ csrf_field() }} -->
								
								<input type="hidden" name="type" value="1">
								
								<div class="col-md-12">
									<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.title in arabic validation') }}">
										<span class="label-input100">{{ __('body.title in arabic') }}</span>
										<input class="input100" type="text" name="ARtitle" placeholder="أعمال المراجعة...." data-type="ARadmin">
										<span class="focus-input100"></span>
									</div>
									
									<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.title in english validation') }}">
										<span class="label-input100">{{ __('body.title in english') }}</span>
										<input class="input100" type="text" name="ENtitle" placeholder="Revision Work..." data-type="ENadmin">
										<span class="focus-input100"></span>
									</div>
									<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.short note in arabic validation') }}">
										<span class="label-input100">{{ __('body.short note in arabic') }}</span>
										<input class="input100" type="text" name="ARshort" placeholder="نقوم با اعمال مراجعه...." data-type="ARadmin">
										<span class="focus-input100"></span>
									</div>
									
									<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.short note in english validation') }}">
										<span class="label-input100">{{ __('body.short note in english') }}</span>
										<input class="input100" type="text" name="ENshort" placeholder="We review works..." data-type="ENadmin">
										<span class="focus-input100"></span>
									</div>
									<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.details in arabic validation') }}">
										<span class="label-input100">{{ __('body.details in arabic') }}</span>
										<textarea id="textarea" class="input-form input100" type="text" name="ARdescription" data-type="ARadmin"placeholder="نقوم با اعمال مراجعه بالتفصيل...." ></textarea>
										<span class="focus-input100"></span>
									</div>
									
									<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.details in english validation') }}">
										<span class="label-input100">{{ __('body.details in english') }}</span>
										<textarea id="textarea" class="input-form input100" type="text" name="ENdescription" data-type="ENadmin"placeholder="We carry out auditing works...."></textarea>
										<span class="focus-input100"></span>
									</div>
									
									<div class="col-md-10 col-md-offset-2">
										<button  class="registerButton">{{ __('body.add electronic service') }}</button>
									</div>
								</div>
							</form>
									
						</div>
						
					</div>
					<div class="col-md-12 container">
						<div class="d-flex justify-content-center pageint"  data-section="#electronic_service" data-contanier="#electronic_container" > {{ $electronics->links() }} </div>
					</div>
				</div>	
			</section>
			<!-- end electronic service area -->
			
			
			<!-- start courses area -->
			<section class="service-area pt-170 pb-170 " id="courses" >
				<div class="container pt-10 pb-10" id="courses_container" >
					
					<h2 class="text-center">{{ __('body.courses') }}</h2>
					@php($empty=false) @if($courses->isEmpty()) @php($empty=true) @endif
					<nav>
					  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
					  	@if(!$empty)
						<a class="nav-item nav-link active" id="nav-currentCourses-tab" data-toggle="tab" href="#nav-currentCourses" role="tab" aria-controls="nav-currentCourses" aria-selected="true">{{ __('body.current_courses') }}</a>
						@endif
						<a class="nav-item nav-link @if($empty) active @endif" id="nav-newCourses-tab" data-toggle="tab" href="#nav-newCourses" role="tab" aria-controls="nav-newCourses" aria-selected="@if($empty) true @else false @endif">{{ __('body.add_new_course') }}</a>
					  </div>
					</nav>
					
					
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade @if(!$empty)show active @endif" id="nav-currentCourses" role="tabpanel" aria-labelledby="nav-currentCourses-tab">
							@if(!$empty)
							@foreach($courses as $course)
							<div class="row">
								<div class="container-login100">
									<div class="remove">
										<!-- just in course thish will change as there is on item per paga -->
										@php($page=$courses->currentPage())
										@if($courses->nextPageUrl() == null)
											@if($courses->currentPage() != 1)
												@php($page =$courses->currentPage()-1)
											@endif
										@endif
										<button data-section="#courses" data-contanier="#courses_container" data-url="{{route('delete_course',$course->id)}}" data-page="?page={{$page}}">
											<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
										</button>
									</div>
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="course-form1"  data-section="#courses" data-contanier="#courses_container" data-type="update" data-url="{{route('update_course',$course->id)}}" data-page="?page={{$courses->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
							
										<!-- course main img -->
										<div class="col-md-4">
											<div class="img-container">
												<img src="{{asset('images/courses/'.$course->image)}}" class="image" >
												<div class="middle">
													<button class="file-upload genric-btn circle">            
														<input type="file" class="file-input" name="course_image">{{ __('body.change photo') }}
													</button>
												</div>
											</div>
										</div>
										<!-- /course main img -->
								
										<!-- course details -->
										<div class="container col-md-8">
											<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.course_name_arabic_validation') }}">
												<label>{{ __('body.course_name_arabic') }}:</label>
												<input class="input100" type="text" name="ARcourseName" placeholder="المحاسبة لغير المحاسبين...." data-type="ARadmin" value="{{$course->arabic_name}}">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.course_name_english_validation') }}">
												<label>{{ __('body.course_name_english') }}:</label>
												<input class="input100" type="text" name="ENcourseName" placeholder="Accounting for non - accountants...." data-type="ENadmin" value="{{$course->english_name}}">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6  wrap-input100 validate-input" data-validate="{{ __('body.course_short_details_arabic_validation') }}">
												<label>{{ __('body.course_short_details_arabic') }}:</label>
												<input class="input100" type="text" name="ARcourseShDetail" placeholder="تعلم المحاسبة لغير المحاسبين...." data-type="ARadmin" value="{{$course->arabic_short_details}}">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6 col-md-push-1  wrap-input100 validate-input" data-validate="{{ __('body.course_short_details_english_validation') }}">
												<label>{{ __('body.course_short_details_english') }}:</label>
												<input class="input100" type="text" name="ENcourseShDetail" placeholder="Accounting for non-accountants...." data-type="ENadmin" value="{{$course->english_short_details}}">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.course_price_validation') }}">
												<label>{{ __('body.course_price') }}:</label>
												<input class="input100" type="number" name="price" placeholder="55...." value="{{$course->price}}">
												<span class="focus-input100"></span>
											</div>
											
											
											<div class="col-md-6 wrap-input100 validate-input " data-validate="{{ __('body.course_full_details_arabic_validation') }}">
												<span class="label-input100">{{ __('body.course_full_details_arabic') }}:</span>
												<textarea id="textarea" class="input-form input100" type="text" name="ARcourseDescription" data-type="ARadmin"placeholder="تقام الدوره في المكتب ....">{{$course->arabic_full_details}}</textarea>
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.course_full_details_english_validation') }}">
												<span class="label-input100">{{ __('body.course_full_details_english') }}:</span>
												<textarea id="textarea" class="input-form input100 single-textarea" type="text" name="ENcourseDescription" data-type="ENadmin"placeholder="The course will be held in....">{{$course->english_full_details}}</textarea>
												<span class="focus-input100"></span>
											</div>
											
											
											<div class="col-md-2 col-md-offset-5">
												<button  class="registerButton">{{ __('body.update') }}</button>
											</div>

										</div>
										
										
										<!-- /course details -->
									</form>
								</div>
							</div>
							@endforeach
							@endif
							
							<div class="col-md-12 container">
								<div class="d-flex justify-content-center pageint"  data-section="#courses" data-contanier="#courses_container"> {{ $courses->links() }} </div>
							</div>	

						</div>
					  
						<div class="tab-pane fade @if($empty)show active @endif" id="nav-newCourses" role="tabpanel" aria-labelledby="nav-newCourses-tab">
							
							<div class="row pt-20 pb-20">
								<div class="container-login100">
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="course-form0"  data-section="#courses" data-contanier="#courses_container" data-type="add" data-url="{{route('add_course')}}" data-page="?page={{$courses->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
							
										<!-- course main img -->
										<div class="col-md-4">
											<div class="img-container">
												<img src="" class="image" >
												<div class="middle">
													<button class="file-upload genric-btn circle">       
														<input type="file" class="file-input" name="course_image" required>{{ __('body.add photo') }}
													</button>
												</div>
											</div>
										</div>
										<!-- /course main img -->
								
										<!-- course details -->
										<div class="container col-md-8">
											<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.course_name_arabic_validation') }}">
												<label>{{ __('body.course_name_arabic') }}:</label>
												<input class="input100" type="text" name="ARcourseName" placeholder="المحاسبة لغير المحاسبين...." data-type="ARadmin">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.course_name_english_validation') }}">
												<label>{{ __('body.course_name_english') }}:</label>
												<input class="input100" type="text" name="ENcourseName" placeholder="Accounting for non - accountants...." data-type="ENadmin">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6  wrap-input100 validate-input" data-validate="{{ __('body.course_short_details_arabic_validation') }}">
												<label>{{ __('body.course_short_details_arabic') }}:</label>
												<input class="input100" type="text" name="ARcourseShDetail" placeholder="تعلم المحاسبة لغير المحاسبين...." data-type="ARadmin">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6 col-md-push-1  wrap-input100 validate-input" data-validate="{{ __('body.course_short_details_english_validation') }}">
												<label>{{ __('body.course_short_details_english') }}:</label>
												<input class="input100" type="text" name="ENcourseShDetail" placeholder="Accounting for non-accountants...." data-type="ENadmin">
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.course_price_validation') }}">
												<label>{{ __('body.course_price') }}:</label>
												<input class="input100" type="number" name="price" placeholder="55....">
												<span class="focus-input100"></span>
											</div>
											
											
											<div class="col-md-6 wrap-input100 validate-input " data-validate="{{ __('body.course_full_details_arabic_validation') }}">
												<span class="label-input100">{{ __('body.course_full_details_arabic') }}:</span>
												<textarea id="textarea" class="input-form input100" type="text" name="ARcourseDescription" data-type="ARadmin"placeholder="تقام الدوره في المكتب ...."></textarea>
												<span class="focus-input100"></span>
											</div>
											
											<div class="col-md-6 col-md-push-1 wrap-input100 validate-input " data-validate="{{ __('body.course_full_details_english_validation') }}">
												<span class="label-input100">{{ __('body.course_full_details_english') }}</span>
												<textarea id="textarea" class="input-form input100 single-textarea" type="text" name="ENcourseDescription" data-type="ENadmin"placeholder="The course will be held in...."></textarea>
												<span class="focus-input100"></span>
											</div>
											
											
											<div class="col-md-5 col-md-offset-4">
												<button  class="registerButton">{{ __('body.add_new_course') }}</button>
											</div>
											
										</div>
										
										
										<!-- /course details -->
									</form>
								</div>
	
							</div>
							
						</div>
					  
					</div>
					
				</div>
				
			</section>
			

			
			<!-- Start aboutUs Area -->
			<section class="service-area container pt-170 pb-170 " id="aboutUs">
				<div class="container" id="about-contanier">
					<h1 class="text-center">{{ __('body.aboutUs') }}</h1>
					<div class="row container">

							@php($i=0)
							@foreach($founders as $founder)
							@php($i+=1)
							<div class="col-lg-6 col-md-6">
								<div class="remove">
									@php($page=$founders->currentPage())
									@if($founders->count()==1)
										@if($founders->currentPage() != 1)
											@php($page =$founders->currentPage()-1)
										@endif
									@endif
									<button data-section="#aboutUs" data-contanier="#about-contanier" data-url="{{route('delete_founder',$founder->id)}}" data-page="?page={{$page}}">
										<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
									</button>
								</div>
								<div class="col-md-12">
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="about-form{{$i}}"  data-section="#aboutUs" data-contanier="#about-contanier" data-type="update" data-url="{{route('update_founder',$founder->id)}}" data-page="?page={{$founders->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="img-container ">
											<div class="containers">
											  <div class="imageWrapper">
												<img class="image" src="{{asset('images/aboutus/'.$founder->image)}}">
											  </div>
											</div>
											<div class="middle">
												<button class="file-upload genric-btn circle">    
													<input type="file" class="file-input" name="founder_image">{{ __('body.change photo') }}	
												</button>
											</div>
										</div>
										
										<div class="col-md-6  wrap-input100 validate-input " data-validate="{{ __('body.aboutus_name_arabic_validation') }}">
											<label>{{ __('body.aboutus_name_arabic') }}:</label>
											<input class="input100" type="text" name="ARname" placeholder="طارق محمد بخيت محمد...." data-type="ARadmin" value="{{$founder->arabic_name}}">
											<span class="focus-input100"></span>
										</div>
											
										<div class="col-md-6 col-md-push-1  wrap-input100 validate-input" data-validate="{{ __('body.aboutus_name_english_validation') }}">
											<label>{{ __('body.aboutus_name_english') }}:</label>
											<input class="input100" type="text" name="ENname" placeholder="Tarek Mohamed Beket ...." data-type="ENadmin" value="{{$founder->english_name}}" >
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6  wrap-input100 validate-input" data-validate="{{ __('body.aboutus_job_arabic_validation') }}">
											<label>{{ __('body.aboutus_job_arabic') }}:</label>
											<input class="input100" type="text" name="ARjob" placeholder="محاسب قانوني وخبير ضرائب...." data-type="ARadmin" value="{{$founder->arabic_job}}" >
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.aboutus_job_english_validation') }}">
											<label>{{ __('body.aboutus_job_english') }}:</label>
											<input class="input100" type="text" name="ENjob" placeholder="Accountant and expert...." data-type="ENadmin" value="{{$founder->english_job}}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-12">
											<div class="col-md-2 col-md-offset-4">
												<button class="registerButton">{{ __('body.update') }}</button>
											</div>
										</div>
										
									</form>
									
								</div>
							</div>
							@endforeach

							<div class="row container  col-lg-6 col-md-6 pt-50 pb-50">
								<div class="col-md-12">
									<form class="login100-form validate-form" enctype="multipart/form-data" id="about-form0" data-section="#aboutUs" data-contanier="#about-contanier" data-type="add" data-url="{{route('add_founder')}}" data-page="?page={{$founders->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->	
								
										<div class="img-container ">
											<div class="containers">
											  <div class="imageWrapper">
												<img class="image" src="">
											  </div>
											</div>
											<div class="middle">
												<button class="file-upload genric-btn circle">    
													<input type="file" class="file-input" name="founder_image" required>{{ __('body.add photo') }}
												</button>
											</div>
										</div>
								
										<div class="col-md-6  wrap-input100 validate-input" data-validate="{{ __('body.aboutus_name_arabic_validation') }}">
											<label>{{ __('body.aboutus_name_arabic') }}:</label>
											<input class="input100" type="text" name="ARname" placeholder="طارق محمد بخيت محمد...." data-type="ARadmin">
											<span class="focus-input100"></span>
										</div>
											
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.aboutus_name_english_validation') }}">
											<label>{{ __('body.aboutus_name_english') }}:</label>
											<input class="input100" type="text" name="ENname" placeholder="Tarek Mohamed Beket ...." data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										<div class="col-md-6  wrap-input100 validate-input" data-validate="{{ __('body.aboutus_job_arabic_validation') }}">
											<label>{{ __('body.aboutus_job_arabic') }}:</label>
											<input class="input100" type="text" name="ARjob" placeholder="محاسب قانوني وخبير ضرائب...." data-type="ARadmin">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.aboutus_job_english_validation') }}">
											<label>{{ __('body.aboutus_job_english') }}:</label>
											<input class="input100" type="text" name="ENjob" placeholder="Accountant and expert...." data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-7 col-md-offset-3">
											<button  class="registerButton">{{ __('body.aboutus_add_new_company') }}</button>
										</div>
										
									</form>
									
								</div>
							</div>
					</div>
					<div class="col-md-12 container">
						<div class="d-flex justify-content-center pageint"  data-section="#aboutUs" data-contanier="#about-contanier" > {{ $founders->links() }} </div>
					</div>	
				</div>
			</section>
			
			<!-- End aboutUs Area -->
			
			<!-- Start branches area -->
			<section class="container pt-170 pb-170" id="branches">
					<div class="row-gallery-item" id="branches_container">

							<h1 class="text-center">{{ __('body.branches') }}</h1>
							@php($i=0)
							@foreach($branches as $branch)
							@php($i+=1)
							<div class="col-md-6">
								<div class="remove">
									@php($page=$branches->currentPage())
									@if($branches->count()==1)
										@if($branches->currentPage() != 1)
											@php($page =$branches->currentPage()-1)
										@endif
									@endif
									<button data-section="#branches" data-contanier="#branches_container" data-url="{{route('delete_branch',$branch->id)}}" data-page="?page={{$page}}">
										<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
									</button>
								</div>
								<div class="col-md-12">
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="branch-form{{$i}}"  data-section="#branches" data-contanier="#branches_container" data-type="update" data-url="{{route('update_branch',$branch->id)}}" data-page="?page={{$branches->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
								
										<div class="img-container">
											<img src="{{asset('images/branches/'.$branch->image)}}" class="image" >
											<div class="middle">
												<button class="file-upload genric-btn circle">            
													<input type="file" class="file-input" name="branch_image">{{ __('body.change photo') }}	
												</button>
											</div>
										</div>
								
										<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.branches_address_arabic_validation') }}">
											<span class="label-input100">{{ __('body.branches_address_arabic') }}</span>
											<input class="input100" type="text" name="ARaddress" placeholder="81 ش الهلالي...." data-type="ARadmin" value="{{$branch->arabic_address}}">
											<span class="focus-input100" ></span>
										</div>
										
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.branches_address_english_validation') }}">
											<span class="label-input100">{{ __('body.branches_address_english') }}</span>
											<input class="input100" type="text" name="ENaddress" placeholder="81 El Helaly St..." data-type="ENadmin" value="{{$branch->english_address}}">
											<span class="focus-input100"></span>
										</div>
										<div class="wrap-input100 validate-input" data-validate="{{ __('body.branches_location_validation') }}">
											<span class="label-input100">{{ __('body.branches_location') }}</span>
											<input class="input100" type="text" name="location" placeholder="....." value="{{$branch->google_location}}">
											<span class="focus-input100" ></span>
										</div>
										
										<div class="wrap-input100 validate-input" data-validate="{{ __('body.form phone validation') }}">
											<span class="label-input100">{{ __('body.branches_phone') }}	</span>
											<input class="input100" type="number" name="phone" placeholder="{{ __('body.form phone placeholder') }}" value="{{$branch->phone}}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-2 col-md-offset-4">
											<button class="registerButton">{{ __('body.update') }}</button>
										</div>
										
									</form>
									
								</div>
							</div>
							@endforeach
							
							<div class="col-md-6 pt-50 pb-50">
								<div class="col-md-12">
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="branch-form0" data-section="#branches" data-contanier="#branches_container" data-type="add" data-url="{{route('add_branch')}}" data-page="?page={{$branches->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->	
										
										<div class="img-container">
											<img src="" class="image" >
											<div class="middle">
												<button class="file-upload genric-btn circle">    
													<input type="file" class="file-input" name="branch_image" required>{{ __('body.add photo') }}	
												</button>
											</div>
										</div>
										
										
										<div class="col-md-6 wrap-input100 validate-input" data-validate="{{ __('body.branches_address_arabic_validation') }}">
											<span class="label-input100">{{ __('body.branches_address_arabic') }}</span>
											<input class="input100" type="text" name="ARaddress" placeholder="81 ش الهلالي...." data-type="ARadmin">
											<span class="focus-input100" ></span>
										</div>
										
										<div class="col-md-6 col-md-push-1 wrap-input100 validate-input" data-validate="{{ __('body.branches_address_english_validation') }}">
											<span class="label-input100">{{ __('body.branches_address_english') }}</span>
											<input class="input100" type="text" name="ENaddress" placeholder="81 El Helaly St..." data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										<div class="wrap-input100 validate-input" data-validate="{{ __('body.branches_location_validation') }}">
											<span class="label-input100">{{ __('body.branches_location') }}</span>
											<input class="input100" type="text" name="location" placeholder="...." >
											<span class="focus-input100" ></span>
										</div>
										
										<div class="wrap-input100 validate-input" data-validate="{{ __('body.form phone validation') }}">
											<span class="label-input100">{{ __('body.branches_phone') }}</span>
											<input class="input100" type="number" name="phone" placeholder="{{ __('body.form phone placeholder') }}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-7 col-md-offset-4">
											<button class="registerButton">{{ __('body.branches_add_new_branch') }}</button>
										</div>
									</form>
									
								</div>
							</div>
							
							<div class="col-md-12 container">
								<div class="d-flex justify-content-center pageint"  data-section="#branches" data-contanier="#branches_container" > {{ $branches->links() }} </div>
							</div>

					</div>
					
			</section>
			<!-- End branches area -->
			
			<!-- Start contacts area -->
			<section class="container pt-170 pb-170 section-smallGap" id="contacts">
				<div class="row-gallery-item" id="contacts_container">
					<h1 class="text-center">{{ __('body.contacts') }}</h1>
					<nav>
						<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-mobile-tab" data-toggle="tab" href="#nav-mobile" role="tab" aria-controls="nav-mobile" aria-selected="true">{{ __('body.contacts_mobile') }} <i class="fa fa-mobile"></i></a>
							<a class="nav-item nav-link" id="nav-phone-tab" data-toggle="tab" href="#nav-phone" role="tab" aria-controls="nav-phone" aria-selected="false">{{ __('body.contacts_phone') }} <i class="fa fa-phone"></i></a>
							<a class="nav-item nav-link" id="nav-whatsapp-tab" data-toggle="tab" href="#nav-whatsapp" role="tab" aria-controls="nav-whatsapp" aria-selected="false">{{ __('body.contacts_whatsapp') }} <i class="fab fa-whatsapp"></i></a>
							<a class="nav-item nav-link" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab" aria-controls="nav-email" aria-selected="false">{{ __('body.contacts_email') }} <i class="fa fa-envelope-o"></i></a>
							<a class="nav-item nav-link" id="nav-facebook-tab" data-toggle="tab" href="#nav-facebook" role="tab" aria-controls="nav-facebook" aria-selected="false">{{ __('body.contacts_facebook') }} <i class="fab fa-facebook"></i></a>
							<a class="nav-item nav-link" id="nav-twitter-tab" data-toggle="tab" href="#nav-twitter" role="tab" aria-controls="nav-twitter" aria-selected="false">{{ __('body.contacts_twitter') }} <i class="fab fa-twitter"></i></a>
							<a class="nav-item nav-link" id="nav-instagram-tab" data-toggle="tab" href="#nav-instagram" role="tab" aria-controls="nav-instagram" aria-selected="false">{{ __('body.contacts_instagram') }} <i class="fab fa-instagram"></i></a>
							<a class="nav-item nav-link" id="nav-linkedin-tab" data-toggle="tab" href="#nav-linkedin" role="tab" aria-controls="nav-linkedin" aria-selected="false">{{ __('body.contacts_linkedin') }} <i class="fab fa-linkedin-in"></i></a>
						</div>
					</nav>
				
					<div class="tab-content" id="nav-tabContent">
						<!-- start mobile tabe -->
						<div class="tab-pane fade show active" id="nav-mobile" role="tabpanel" aria-labelledby="nav-mobile-tab">
							<div class="row" id="mobile_container">
								@if(!$mobiles->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_mobile_number') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($mobiles as $mobile)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="mobile-form{{$i}}"  data-section="#nav-mobile" data-contanier="#mobile_container" data-type="update" data-url="{{route('update_phone',$mobile->id)}}" data-page="?page={{$mobiles->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($mobiles->currentPage()-1)*$mobiles->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate="{{ __('body.contacts_mobile_validation') }}">
												<input class="input100" type="number" name="mobile" placeholder="{{ __('body.contacts_mobile_placehoder') }}" value="{{$mobile->phone}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$mobiles->currentPage())
												@if($mobiles->count()==1)
													@if($mobiles->currentPage() != 1)
														@php($page =$mobiles->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-mobile" data-contanier="#mobile_container" data-url="{{route('delete_phone',$mobile->id)}}" data-page="?page={{$page}}">{{ __('body.delete') }} <i class="fas fa-trash"></i></button> 
											</div>
											
											<div >
												<button type="submit" class="registerButton">{{ __('body.update') }} <i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
		
									</div>
									
									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-mobile" data-contanier="#mobile_container" > {{ $mobiles->links() }} </div>
									</div>

								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="mobile-form0"  data-section="#nav-mobile" data-contanier="#mobile_container" data-type="add" data-url="{{route('add_mobile')}}" data-page="?page={{$mobiles->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.contacts_mobile_validation') }}">
											<label>{{ __('body.contacts_mobile') }}:</label>
											<input class="input100" type="number" name="mobile" placeholder="{{ __('body.contacts_mobile_placehoder') }}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-5 col-md-offset-4">
											<button  class="registerButton">{{ __('body.contacts_add_new_mobile') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
								
	
							</div>
						</div>
						<!-- end mobile tabe -->
				  
						<!-- start phone tabe -->
						<div class="tab-pane fade" id="nav-phone" role="tabpanel" aria-labelledby="nav-phone-tab">
							
							<div class="row" id="phone_container">

								@if(!$grounds->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_phone_number') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($grounds as $ground)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="phone-form{{$i}}"  data-section="#nav-phone" data-contanier="#phone_container" data-type="update" data-url="{{route('update_phone',$ground->id)}}" data-page="?page={{$grounds->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($grounds->currentPage()-1)*$grounds->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate="{{ __('body.contacts_phone_validation') }}">
												<input class="input100" type="number" name="phone" placeholder="{{ __('body.contacts_phone_placehoder') }}" value="{{$ground->phone}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$grounds->currentPage())
												@if($grounds->count()==1)
													@if($grounds->currentPage() != 1)
														@php($page =$grounds->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-phone" data-contanier="#phone_container" data-url="{{route('delete_phone',$ground->id)}}" data-page="?page={{$page}}" >{{ __('body.delete') }} <i class="fas fa-trash"></i></button> 
											</div>
											
											<div >
												<button type="submit"  class="registerButton">{{ __('body.update') }} <i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
									</div>

									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-phone" data-contanier="#phone_container" > {{ $grounds->links() }} </div>
									</div>

								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="phone-form0"  data-section="#nav-phone" data-contanier="#phone_container" data-type="add" data-url="{{route('add_ground')}}" data-page="?page={{$grounds->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.contacts_phone_validation') }}">
											<label>{{ __('body.contacts_phone') }}:</label>
											<input class="input100" type="number" name="phone" placeholder="{{ __('body.contacts_phone_placehoder') }}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-5 col-md-offset-4">
											<button  class="registerButton">{{ __('body.contacts_add_new_phone') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
	
							</div>
							
						</div>
						<!-- end phone tabe -->
						
						<!--start whatsapp tabe -->
						<div class="tab-pane fade" id="nav-whatsapp" role="tabpanel" aria-labelledby="nav-whatsapp-tab">
							<div class="row" id="whats_container">
								@if(!$whatses->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_whatsapp_number') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($whatses as $whats)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="whats-form{{$i}}"  data-section="#nav-whatsapp" data-contanier="#whats_container" data-type="update" data-url="{{route('update_phone',$whats->id)}}" data-page="?page={{$whatses->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($whatses->currentPage()-1)*$whatses->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate="{{ __('body.contacts_whatsapp_validation') }}">
												<input class="input100" type="number" name="mobile" placeholder="{{ __('body.contacts_mobile_placehoder') }}" value="{{$whats->phone}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$whatses->currentPage())
												@if($whatses->count()==1)
													@if($whatses->currentPage() != 1)
														@php($page =$whatses->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-whatsapp" data-contanier="#whats_container" data-url="{{route('delete_phone',$whats->id)}}" data-page="?page={{$page}}" >{{ __('body.delete') }} <i class="fas fa-trash"></i></button> 
											</div>
											
											<div >
												<button type="submit" class="registerButton">{{ __('body.update') }} <i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
									</div>

									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-whatsapp" data-contanier="#whats_container" > {{ $whatses->links() }} </div>
									</div>

								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="whats-form0"  data-section="#nav-whatsapp" data-contanier="#whats_container" data-type="add" data-url="{{route('add_whats')}}" data-page="?page={{$whatses->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.contacts_whatsapp_validation') }}">
											<label>{{ __('body.contacts_whatsapp_number') }}</label>
											<input class="input100" type="number" name="mobile" placeholder="{{ __('body.contacts_mobile_placehoder') }}">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-5 col-md-offset-4">
											<button  class="registerButton">{{ __('body.contacts_add_new_whatsapp') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
								
							</div>
						</div>
						<!-- end whatsapp tabe -->
						
						<!--start email tabe -->
						<div class="tab-pane fade" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab">
							<div class="row" id="email_container">
								@if(!$emails->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_email') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($emails as $email)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="email-form{{$i}}"  data-section="#nav-email" data-contanier="#email_container" data-type="update" data-url="{{route('update_email',$email->id)}}" data-page="?page={{$emails->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($emails->currentPage()-1)*$emails->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate = "{{ __('body.form email validation') }}">
												<input class="input100" type="email" name="email" placeholder="example@example.com" value="{{$email->email}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$emails->currentPage())
												@if($emails->count()==1)
													@if($emails->currentPage() != 1)
														@php($page =$emails->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-email" data-contanier="#email_container" data-url="{{route('delete_email',$email->id)}}" data-page="?page={{$page}}" >{{ __('body.delete') }} <i class="fas fa-trash"></i></button>
											</div>
											
											<div >
												<button type="submit" class="registerButton">{{ __('body.update') }} <i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
									</div>

									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-email" data-contanier="#email_container" > {{ $emails->links() }} </div>
									</div>

								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="email-form0"  data-section="#nav-email" data-contanier="#email_container" data-type="add" data-url="{{route('add_email')}}" data-page="?page={{$emails->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate = "{{ __('body.form email validation') }}">
											<span class="label-input100">{{ __('body.contacts_email') }}</span>
											<input class="input100" type="email" name="email" placeholder="example@example.com">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-5 col-md-offset-4">
											<button  class="registerButton">{{ __('body.contacts_add_new_email') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
								
							</div>
						</div>
						<!-- end email tabe -->
						
						<!--start facebook tabe -->
						<div class="tab-pane fade" id="nav-facebook" role="tabpanel" aria-labelledby="nav-facebook-tab">
							<div class="row" id="facebook_container">
								@if(!$facebooks->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_facebook_link') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($facebooks as $facebook)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="facebook-form{{$i}}"  data-section="#nav-facebook" data-contanier="#facebook_container" data-type="update" data-url="{{route('update_link',$facebook->id)}}" data-page="?page={{$facebooks->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($facebooks->currentPage()-1)*$facebooks->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
												<input class="input100" type="text" name="fblink" placeholder="{{ __('body.contacts_facebook_placeholder') }}" data-type="ENadmin" value="{{$facebook->link}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$facebooks->currentPage())
												@if($facebooks->count()==1)
													@if($facebooks->currentPage() != 1)
														@php($page =$facebooks->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-facebook" data-contanier="#facebook_container" data-url="{{route('delete_link',$facebook->id)}}" data-page="?page={{$page}}" >{{ __('body.delete') }} <i class="fas fa-trash"></i></button>
											</div>
											
											<div >
												<button type="submit" class="registerButton">{{ __('body.update') }} <i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
									</div>

									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-facebook" data-contanier="#facebook_container" > {{ $facebooks->links() }} </div>
									</div>

								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="facebook-form0"  data-section="#nav-facebook" data-contanier="#facebook_container" data-type="add" data-url="{{route('add_facebook')}}" data-page="?page={{$facebooks->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
											<span class="label-input100">{{ __('body.contacts_facebook_link') }}</span>
											<input class="input100" type="text" name="fblink" placeholder="{{ __('body.contacts_facebook_placeholder') }}" data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6 col-md-offset-3">
											<button  class="registerButton">{{ __('body.contacts_add_new_facebook') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
								
							</div>
						</div>
						<!-- end facebook tabe -->
					  
						<!--start twitter tabe -->
						<div class="tab-pane fade" id="nav-twitter" role="tabpanel" aria-labelledby="nav-twitter-tab">
							<div class="row" id="twitter_container">
								@if(!$twitters->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_twitter_link') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($twitters as $twitter)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="twitter-form{{$i}}"  data-section="#nav-twitter" data-contanier="#twitter_container" data-type="update" data-url="{{route('update_link',$twitter->id)}}" data-page="?page={{$twitters->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($twitters->currentPage()-1)*$twitters->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
												<input class="input100" type="text" name="twitlink" placeholder="{{ __('body.contacts_twitter_placeholder') }}" data-type="ENadmin" value="{{$twitter->link}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$twitters->currentPage())
												@if($twitters->count()==1)
													@if($twitters->currentPage() != 1)
														@php($page =$twitters->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-twitter" data-contanier="#twitter_container" data-url="{{route('delete_link',$twitter->id)}}" data-page="?page={{$page}}" >{{ __('body.delete') }} <i class="fas fa-trash"></i></button>
											</div>
											
											<div >
												<button type="submit" class="registerButton">{{ __('body.update') }} <i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
									</div>
									
									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-twitter" data-contanier="#twitter_container" > {{ $twitters->links() }} </div>
									</div>

								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="twitter-form0"  data-section="#nav-twitter" data-contanier="#twitter_container" data-type="add" data-url="{{route('add_twitter')}}" data-page="?page={{$twitters->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
											<span class="label-input100">{{ __('body.contacts_twitter_link') }}</span>
											<input class="input100" type="text" name="twitlink" placeholder="{{ __('body.contacts_twitter_placeholder') }}" data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-5 col-md-offset-4">
											<button  class="registerButton">{{ __('body.contacts_add_new_twitter') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
								
							</div>
						</div>
						<!-- end twitter tabe -->
						
						<!--start instagram tabe -->
						<div class="tab-pane fade" id="nav-instagram" role="tabpanel" aria-labelledby="nav-instagram-tab">
							<div class="row" id="instagram_container">
								@if(!$instagrams->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_instagram_link') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($instagrams as $instagram)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="instagram-form{{$i}}"  data-section="#nav-instagram" data-contanier="#instagram_container" data-type="update" data-url="{{route('update_link',$instagram->id)}}" data-page="?page={{$instagrams->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($instagrams->currentPage()-1)*$instagrams->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
												<input class="input100" type="text" name="instlink" placeholder="{{ __('body.contacts_instagram_placeholder') }}" data-type="ENadmin" value="{{$instagram->link}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$instagrams->currentPage())
												@if($instagrams->count()==1)
													@if($instagrams->currentPage() != 1)
														@php($page =$instagrams->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-instagram" data-contanier="#instagram_container" data-url="{{route('delete_link',$instagram->id)}}" data-page="?page={{$page}}" >{{ __('body.delete') }} <i class="fas fa-trash"></i></button> 
											</div>
											
											<div >
												<button type="submit" class="registerButton">{{ __('body.update') }}<i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
									</div>

									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-instagram" data-contanier="#instagram_container" > {{ $instagrams->links() }} </div>
									</div>


								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="instagram-form0"  data-section="#nav-instagram" data-contanier="#instagram_container" data-type="add" data-url="{{route('add_instagram')}}" data-page="?page={{$instagrams->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
											<span class="label-input100">{{ __('body.contacts_instagram_link') }}</span>
											<input class="input100" type="text" name="instlink" placeholder="{{ __('body.contacts_instagram_placeholder') }}" data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-5 col-md-offset-3">
											<button  class="registerButton">{{ __('body.contacts_add_new_instagram') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
								
							</div>
						</div>
						<!-- end instagram tabe -->
						
						<!--start linkedin tabe -->
						<div class="tab-pane fade" id="nav-linkedin" role="tabpanel" aria-labelledby="nav-linkedin-tab">
							<div class="row" id="linkedin_container">
								@if(!$linkedins->isEmpty())
								<div class="container-login100">
									<div class="col-md-2">
										<label>#</label>
									</div>
									
									<div class="col-md-10">
										<label>{{ __('body.contacts_linkedin_link') }}</label>
									</div>
									<div class="container-login100 col-md-12">
										@php($i=0)
										@foreach($linkedins as $linkedin)
										@php($i+=1)
										<form class="login100-form validate-form form-table-contaniner form-hover" action="" id="linkedin-form{{$i}}"  data-section="#nav-linkedin" data-contanier="#linkedin_container" data-type="update" data-url="{{route('update_link',$linkedin->id)}}" data-page="?page={{$linkedins->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
											<label>{{$i+(($linkedins->currentPage()-1)*$linkedins->perPage())}}</label>
											<div class="col-md-8 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
												<input class="input100" type="text" name="inlink" placeholder="{{ __('body.contacts_linkedin_placeholder') }}" data-type="ENadmin" value="{{$linkedin->link}}">
												<span class="focus-input100"></span>
											</div>
											
											<div >
												@php($page=$linkedins->currentPage())
												@if($linkedins->count()==1)
													@if($linkedins->currentPage() != 1)
														@php($page =$linkedins->currentPage()-1)
													@endif
												@endif
												<button type="button" class="deleteButton" data-section="#nav-linkedin" data-contanier="#linkedin_container" data-url="{{route('delete_link',$linkedin->id)}}" data-page="?page={{$page}}" >{{ __('body.delete') }} <i class="fas fa-trash"></i></button> 
											</div>
											
											<div >
												<button type="submit" class="registerButton">{{ __('body.update') }} <i class="fas fa-sync"></i></button>
											</div>
											
										</form>
										@endforeach
										
									</div>

									<div class="col-md-12 container">
										<div class="d-flex justify-content-center pageint"  data-section="#nav-linkedin" data-contanier="#linkedin_container" > {{ $linkedins->links() }} </div>
									</div>

								</div>
								@endif
								
								<div class="container-login100 col-md-12  ">
									<form class="login100-form validate-form" action="" id="linkedin-form0"  data-section="#nav-linkedin" data-contanier="#linkedin_container" data-type="add" data-url="{{route('add_linkedin')}}" data-page="?page={{$linkedins->currentPage()}}">
										@csrf <!-- {{ csrf_field() }} -->
										
										<div class="col-md-12 wrap-input100 validate-input" data-validate="{{ __('body.contacts_link_validation') }}">
											<span class="label-input100">{{ __('body.contacts_linkedin_link') }}</span>
											<input class="input100" type="text" name="inlink" placeholder="{{ __('body.contacts_linkedin_placeholder') }}" data-type="ENadmin">
											<span class="focus-input100"></span>
										</div>
										
										<div class="col-md-6 col-md-offset-3">
											<button  class="registerButton">{{ __('body.contacts_add_new_linkedin') }} <i class="fas fa-plus-circle"></i></button>
										</div>
										
									</form>
								</div>
								
							</div>
						</div>
						<!-- end linkedin tabe -->
						
						
					</div>
				</div>
			</section>
			<!-- End conatacts area -->

			@include('includes.footer')
			
			

			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
			<script>

				$(document).ready(function()
				{
					//start remove
					$(document).on( "click",".remove button , .deleteButton", function(event) 
					{
						//event.preventDefault();
						console.log(this);

						var section = $( this ).data().section;
						var contanier = $( this ).data("contanier");
						var page = $(this).data('page');
						
						//var url = $(this).data().url;
						var url = jQuery.data(this, 'url'); 
						url = (typeof options != 'string' ) ? url : JSON.parse(url);
						
						console.log(url);
						console.log(section);
						console.log(contanier);
						console.log(location.href+page);

						//deletee(url,section);
						swal(
						{
						  title: "{{ __('body.delete_question') }}",
						  text: "{{ __('body.delete_hint') }}",
						  icon: "warning",
						  buttons:  ["{{ __('body.delete_cancel') }}", "{{ __('body.delete_ok') }}"],
						  dangerMode: true,
						})
						.then((willDelete) => 
						{
						  if (willDelete) 
						  {
							console.log(url);
							console.log(section);
						  	$.ajax
						  	({
						        type: 'GET', //THIS NEEDS TO BE GET
						        url: url,
						        dataType: 'json',
						        data: {},
						        success: function (data) 
						        {
						            console.log(data);
						            //console.log(data.html);
						            $(section).load(location.href + page +" "+ contanier);
						            //reload_scripts();
						            swal("{{ __('body.delete_deleted') }}", {
									  icon: "success",
									  buttons: false,
								  	  timer: 1500,
									});
									//$(section).html(data.html);
									
						        },
						        error:function(data)
						        { 
						            console.log(data);
						        }
						    });
						  }
						  else 
						  {
							swal("{{ __('body.delete_data_safed') }}",{buttons: false,
								  	  timer: 1000,});
						  }
						});

					});
				 	//end remove


					//start add & update
					$(document).on( "submit",".validate-form", function(event) 
					{


					  	event.preventDefault();
					  	var section = $(this).data('section');
						var contanier = $( this ).data("contanier");
						var url = $(this).data('url');
						var type = $(this).data('type');
						var form = '#'+$(this).attr('id');
						var page = $(this).data('page');
						
						console.log(section);
						console.log(contanier);
						console.log(url);
						console.log(type);
						console.log(form);
						console.log(location.href+page);  	
						
						//update_exists(url,section,form);

						var formData = new FormData($(form)[0]);
			           	console.log(FormData);

			           	//var formElements = formData.get("arabic_comment");;
    					//console.log(formElements); 
			           
						$.ajax
					  	({
					        type: 'POST',
					        url: url,
					      	method: 'post',
			              	data: formData,
			              	dataType:'json',
			              	contentType: false,
				            processData: false,
			               
			               success: function (data) 
					        {
					            console.log(data);
					            //location.reload();

					            //console.log(window.location.href);
					            $(section).load(location.href + page +" "+ contanier);
					            
					            //console.log("{{route('admin')}}");
					            //$(section).load("{{route('admin')}}" +" "+ section);
					            //reload_scripts();
					            

					            if(type == "update")
					            {
					          		swal
						            ({
						            	title: "{{ __('body.updated') }}",
						            	icon: "success",
									  	buttons: false,
									  	timer: 1500,
									});
					            }
					            else if(type == "add")
					            {
					            	swal
					            	({
					            		title: "{{ __('body.added') }}",
					            		icon: "success",
								  		buttons: false,
								  		timer: 1500,
									});
					            }

								     


					        },
					        error:function(data)
					        { 
					            console.log(data);
					        }
					    });

					});
					//end add & update


				});
				

				

				function reload_scripts()
				{
					console.log('a');
					$("body script").each(function()
					{
			            var oldScript = this.getAttribute("src");
			            //$(this).remove();
			            var newScript;
			            newScript = document.createElement('script');
			            newScript.type = 'text/javascript';
			            newScript.src = oldScript;
			            //document.getElementsByTagName("body")[0].appendChild(newScript); //there is unknown error but until I see has no effect

			            //document.body.appendChild(newScript); //there is thes same previouse unknown error but until I see has no effect
			            
			            //$("body").append(newScript);

			            $.getScript(oldScript); //sometimes it make error in js files but the effect not dangerous

					 //    $.getScript(oldScript, function(data, textStatus, jqxhr) {
						// console.log(data); //data returned
						// console.log(textStatus); //success
						// console.log(jqxhr.status); //200
						// console.log('Load was performed.');
						// }); 
						console.log('1');
			        });
			        console.log('a');
				}

				$(document).on('click','.pageint .pagination a', function(event)
				{
					event.preventDefault();

					//var page = $(this).attr('href').split('?')[1];
					var page = $(this).attr('href');

					//var parent = $(this).parent().parent().parent();
					//console.log(parent);
					var section = $(this).parent().parent().parent().data('section');
					var contanier = $(this).parent().parent().parent().data("contanier");


					console.log(page);	
					console.log(section);
					console.log(contanier);

					//$(section).load(location.href +"?"+page+" "+ contanier);
					$(section).load(page+" "+ contanier);

					//window.location.replace(location.href +"?"+page);

					// $.ajax
				 //  	({
				 //        type: 'GET', //THIS NEEDS TO BE GET
				 //        url: page,
				 //        dataType: 'json',
				 //        data: {},
				 //        success: function (data) 
				 //        {
				 //            console.log(data);
				 //            //console.log(data.html);
				 //            $(section).load(location.href +" "+ contanier);
				 //            reload_scripts();
				 //            //$(section).html(data.html);
							
				 //        },
				 //        error:function(data)
				 //        { 
				 //            console.log(data);
				 //        }
				 //    });

				});

			</script>
			



		</body>
	</html>