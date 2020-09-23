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
							@php($i=0)
							<div class="row">
								<div class="container-login100">
									<div class="remove">
										<button data-section="#courses" data-contanier="#courses_container" data-url="{{route('delete_course',$course->id)}}">
											<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
										</button>
									</div>
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="course-form1"  data-section="#courses" data-contanier="#courses_container" data-type="update" data-url="{{route('update_course',$course->id)}}">
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

							<div class="col-md-2 col-md-offset-5">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
									    <li class="page-item">
									      <a class="page-link" href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									        <span class="sr-only">Previous</span>
									      </a>
									    </li>

									    @php($i=0)
									    @foreach($courses as $courseloop)
									    @php($i+=1)
									    <li class="page-item @if($courseloop->id == $course->id) active @endif"><a class="page-link" data-section="#courses" data-contanier="#courses_container" href="{{route('get_course',$courseloop->id)}}">{{$i}}</a></li>
									    @endforeach
									    <li class="page-item">
									      <a class="page-link" href="#" aria-label="Next">
									        <span aria-hidden="true">&raquo;</span>
									        <span class="sr-only">Next</span>
									      </a>
									    </li>

									</ul>
								</nav>
							</div>

						</div>
					  
						<div class="tab-pane fade @if($empty)show active @endif" id="nav-newCourses" role="tabpanel" aria-labelledby="nav-newCourses-tab">
							
							<div class="row pt-20 pb-20">
								<div class="container-login100">
									<form class="login100-form validate-form" enctype="multipart/form-data" action="" id="course-form0"  data-section="#courses" data-contanier="#courses_container" data-type="add" data-url="{{route('add_course')}}">
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