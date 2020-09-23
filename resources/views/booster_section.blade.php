			
					<h1 class="text-center">{{ __('body.main images') }}</h1>
					<div class="row-gallery-item">
							@foreach($boosters as $booster)
							<div class="col-md-4">
								<div class="remove">
									<button data-section="#home" data-url="{{route('delete_booster',$booster->id)}}">
										<i class="far fa-times-circle"><span class="hint">{{ __('body.delete') }}</span></i>
									</button>
								</div>
								<div class="container-login100">
									<form class="login100-form validate-form" method="post" enctype="multipart/form-data" id="form{{$booster->id}}">
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
											<button class="registerButton update" data-section="#home" data-form="#form{{$booster->id}}" data-url="{{route('update_booster',$booster->id)}}">{{ __('body.update') }}</button>
										</div>
									</form>
									
								</div>
							</div>
							@endforeach
							
							<div class="col-md-4 pt-50 pb-50">
								<div class="container-login100">
									<form class="login100-form validate-form" method="post" action="{{route('add_booster')}}" enctype="multipart/form-data">
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
							
							
					</div>
					
			