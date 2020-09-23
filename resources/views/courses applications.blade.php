
	@include('includes.header')
				
		<body>

			<!-- Start availabe courses area -->
			<section class="container-fluid  pt-170 pb-170" id="courses">
				<div class="">
					<div class="row-gallery-item pt-10 pb-10" id="courses_container">
						<h1 class="text-center">{{ __('body.current_courses') }}</h1>
						@php($i=0)
						@foreach($courses as $course)
						@php($i+=1)
						<div class="col-md-4 col-sm-4 col-xs-4">
							<div class="remove">
								@php($page=$courses->currentPage())
								@if($courses->count()==1)
									@if($courses->currentPage() != 1)
										@php($page =$courses->currentPage()-1)
									@endif
								@endif
								<button data-url="{{route('delete_course',$course->id)}}" data-section="#courses" data-contanier="#courses_container" data-page="?page={{$page}}">
									<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
								</button>
							</div>
							<div class='product-card '>
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
									  <a  data-url="" data-section="#courses" data-contanier="#courses_container" data-page="?page={{$page}}">{{ __('body.applicants') }}</a>
									</li>
									<li>
									  <a  data-url="{{route('archive_course',$course->id)}}" data-section="#courses" data-contanier="#courses_container" data-page="?page={{$page}}">{{ __('body.add_to_archive') }}</a>
									</li>
								</ul>
							</div>
							
						</div>
						@endforeach
						
						
					</div>
					
					<div class="col-md-12 container">
						<div class="d-flex justify-content-center pageint"  data-section="#courses" data-contanier="#courses_container"> {{ $courses->links() }} </div>
					</div>
				</div>	
			</section>
			<!-- End availabe courses area -->
			
			
			
			<!-- Start registered people area -->
			<section class="container  pt-170 pb-170 section-smallGap" id="applications">
				
					<h1 class="text-center pt-20 pb-20">{{ __('body.course_applicants') }}</h1>
				
					<div class="DivToScroll DivWithScroll ">
						<table class="table table-striped table-hover">
							<thead class="">
								<tr >
									<th scope="col" class="text-center " >
										
										<div class="checkbox checkbox-primary ">
											<input id="checkbox0" class="styled" type="checkbox" name="checkAllApplication" onclick="checkAllApplication(this);" >
											<label for="checkbox0">
												#
											</label>
										</div>
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_name') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_email') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_phone') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_national_id') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_faculty') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_department') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_language') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_grade_year') }}
									</th>
									<th scope="col" class="text-center">
										{{ __('body.applicant_grade_average') }}
									</th>
								</tr>
							</thead>
						  <tbody class="">
						  	@php($i=0)
							@foreach($applicants as $applicant)
							@php($i+=1)
							<tr class="">
								<th scope="row" class="" >
									<div class="checkbox checkbox-primary ">
										<input id="checkbox1" class="styled" type="checkbox" name="application" >
										<label for="checkbox1">
											{{$i}}
										</label>
									</div>
								</th>
								<td class="text-center">{{$applicant->name}}</td>
								<td class="text-center">{{$applicant->email}}</td>
								<td class="text-center">{{$applicant->phone}}</td>
								<td class="text-center">{{$applicant->national_id}}</td>
								<td class="text-center">{{$applicant->faculty}}</td>
								<td class="text-center">{{$applicant->department}}</td>
								<td class="text-center">{{$applicant->language}}</td>
								<td class="text-center">{{$applicant->graduated_year}}</td>
								<td class="text-center">{{$applicant->grade}}</td>
							</tr>
							@endforeach
							<tr class="">
								<th scope="row" class="" >
									<div class="checkbox checkbox-primary ">
										<input id="checkbox3" class="styled" type="checkbox" name="application" >
										<label for="checkbox3">
											3
										</label>
									</div>
								</th>
								<td class="text-center">عبدالناصر أحمد محسن محمد حسن</td>
								<td class="text-center">naserahmed1995@gmail.com</td>
								<td class="text-center">01125567102</td>
								<td class="text-center">29507231234567</td>
								<td class="text-center">كلية الحاسبات والمعلومات جامعة أسيوط</td>
								<td class="text-center">تكنولوجيا المعلومات</td>
								<td class="text-center">اللغتين العربية و الانجليزية</td>
								<td class="text-center">2018</td>
								<td class="text-center">جيد جدا</td>
							</tr>
							<tr class="">
								<th scope="row" class="" >
									<div class="checkbox checkbox-primary ">
										<input id="checkbox4" class="styled" type="checkbox" name="application" >
										<label for="checkbox4">
											4
										</label>
									</div>
								</th>
								<td class="text-center">عبدالناصر أحمد محسن محمد حسن</td>
								<td class="text-center">naserahmed1995@gmail.com</td>
								<td class="text-center">01125567102</td>
								<td class="text-center">29507231234567</td>
								<td class="text-center">كلية الحاسبات والمعلومات جامعة أسيوط</td>
								<td class="text-center">تكنولوجيا المعلومات</td>
								<td class="text-center">اللغتين العربية و الانجليزية</td>
								<td class="text-center">2018</td>
								<td class="text-center">جيد جدا</td>
							</tr>
							
						  </tbody>
						</table>
					</div>
					<div >
						<button class="deleteButton " onclick="deletee();" disabled > {{ __('body.delete') }} <i class="fas fa-trash"></i></button> 
					</div>
					
			</section>
			<!-- End availabe courses area -->

		
			@include('includes.footer')
			
			
			
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script>
				$(document).ready(function()
				{
				  
				  	//start add to archive
					$(document).on( "click",".clear li a", function(event) 
					{
						event.preventDefault();

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
						
						$.ajax
						({
							type: 'GET', 
							url: url,
							dataType: 'json',
							data: {},
							success: function (data) 
							{
								console.log(data);

								$(section).load(location.href + page +" "+ contanier);
								//$(section).load(location.href +" "+ contanier);
								//$(section).html(data.html);
								

								swal("{{ __('body.registered') }}", 
								{
								  icon: "success",
								  buttons: false,
								  timer: 1500,
								});
								
								
							},
							error:function(data)
							{ 
								console.log(data);
							}
						});
						  
					});
					//end add to archive



				  //remove
				  $(".remove").click(function()
				  {
					deletee();
					
				  });
				  //end remove
				  
				  //any checkbox of application to enable and disable delete button
				  $('input[name="application"]').click(function() 
				  {
					$('input[name="application"]').each(function(i, item)
					{
						if($(item).prop('checked')== true)
						{
							$(".deleteButton").prop('disabled', false);
							return false; //equal break in jquery
						}
						else
						{
							$(".deleteButton").prop('disabled', true);
						}
					});
					
				  });
				  //end checkbox
				  
				});
				
				function checkAllApplication(source)
				{
					$('input[name="application"]').prop('checked', source.checked);
					$(".deleteButton").prop('disabled', !source.checked);
				}
				function deletee()
				{
					
					swal(
					{
					  title: "هل انت متاكد انك تريد الحذف؟",
					  text: "في حالة الحذف  لن تسطيع اعادة البيانات مره اخرى",
					  icon: "warning",
					  buttons: true,
					  dangerMode: true,
					})
					.then((willDelete) => 
					{
					  if (willDelete) 
					  {
						swal("تم الحذف", {
						  icon: "success",
						});
					  }
					  else 
					  {
						swal("البيانات آمنة");
					  }
					});
				}
				
			</script>
			
			
		</body>
	</html>