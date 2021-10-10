@extends('admin.admin_master')

@section('title','Add Student')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Add Student</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('student.registration.view') }}">Student List</a></li>
						<li class="breadcrumb-item active">Add Student</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<form action="{{ route('store.student.registration') }}" method="post" enctype="multipart/form-data">

							@csrf

							<div class="row">

								<div class="col-12">

									<div class="row"> {{-- 1st Row --}}
										
										<div class="col-md-4">
											
											<div class="form-group">
												<label class="">Student Name <span class="text-danger">*</span></label>
												<input type="text" id="name" name="name" class="form-control" required>

											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">
												<label class="">Father's Name <span class="text-danger">*</span></label>
												<input type="text" name="fname" class="form-control" required>

											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">
												<label class="">Mother's Name <span class="text-danger">*</span></label>
												<input type="text" name="mname" class="form-control" required>

											</div>

										</div> {{-- End col-md-4 --}}

									</div> {{-- End 1st Row --}}



									<div class="row"> {{-- 2nd Row --}}
										
										<div class="col-md-4">
											
											<div class="form-group">
												<label class="">Mobile Number <span class="text-danger">*</span></label>
												<input type="text" name="mobile" class="form-control" required>

											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">
												<label class=""> Address <span class="text-danger">*</span></label>
												<input type="text" name="address" class="form-control" required>

											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">

												<label class=""> Gender <span class="text-danger">*</span></label>
												<select class="form-control" name="gender" required>
													<option value="" selected disabled>-- Select Gender --</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>

											</div>

										</div> {{-- End col-md-4 --}}

									</div> {{-- End 2nd Row --}}



									<div class="row"> {{-- 3rd Row --}}
										
										<div class="col-md-4">
											
											<div class="form-group">
												<label class="">Religion <span class="text-danger">*</span></label>
												<select class="form-control" name="religion" required>
													<option value="" selected disabled>-- Select Religion --</option>
													<option value="Islam">Islam</option>
													<option value="Hindu">Hindu</option>
													<option value="Christian">Christian</option>
												</select>

											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">
												<label class=""> Date of Birth <span class="text-danger">*</span></label>
												<input type="date" name="dob" class="form-control" required>

											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">

												<label class=""> Discount <span class="text-danger">*</span></label>
												<input type="text" name="discount" class="form-control" required>

											</div>

										</div> {{-- End col-md-4 --}}

									</div> {{-- End 3rd Row --}}



									<div class="row"> {{-- 4th Row --}}
										
										<div class="col-md-4">
											
											<div class="form-group">
												<label class="">Year <span class="text-danger">*</span></label>
												<div class="form-group form-focus select-focus">
												<select class="form-control " name="year_id" id="year_id" required>
													<option value="" selected disabled>-- Select Year --</option>
													@foreach ($years as $year)
														<option value="{{ $year->id }}">{{ $year->name }}</option>
													@endforeach
												</select>
												</div>
											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">
												<label class=""> Class <span class="text-danger">*</span></label>
												<div class="form-group form-focus select-focus">
												<select class="form-control" name="class_id" id="class_id" required>
													<option value="" selected disabled>-- Select Class --</option>
													@foreach ($classes as $class)
														<option value="{{ $class->id }}">{{ $class->name }}</option>
													@endforeach
												</select>
												</div>
											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">

												<label class=""> Group <span class="text-danger">*</span></label>	
												<div class="form-group form-focus select-focus">		
												<select class="form-control" name="group_id" id="group_id" required>
													<option value="" selected disabled>-- Select Group --</option>
													@foreach ($groups as $group)
														<option value="{{ $group->id }}">{{ $group->name }}</option>
													@endforeach
												</select>
												</div>
											</div>

										</div> {{-- End col-md-4 --}}

									</div> {{-- End 4th Row --}}



									<div class="row"> {{-- 5th Row --}}
										
										<div class="col-md-4">
											
											<div class="form-group ">
												<label class="">Shift <span class="text-danger">*</span></label>
												<div class="form-group form-focus select-focus">
												<select class="form-control " name="shift_id" id="shift_id" required>
													<option value="" selected disabled>-- Select Shift --</option>
													@foreach ($shifts as $shift)
														<option value="{{ $shift->id }}">{{ $shift->name }}</option>
													@endforeach
												</select>
												</div>
											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">
												<label class="">Profile Image<span class="text-danger">*</span></label>
												<div class="">
													<input type="file" name="image" id="image" class="form-control">
												</div>
											</div>

										</div> {{-- End col-md-4 --}}

										<div class="col-md-4">
											
											<div class="form-group">
											
												<img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
												
											</div>

										</div> {{-- End col-md-4 --}}

									</div> {{-- End 5th Row --}}
									

									<div>
										
										<input type="submit" class="btn btn-primary" value="Submit">

										<a href="{{ route('student.year.view') }}" class="btn btn-secondary"> Cancel</a>

									</div>

								</div>

							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
	</div>			
</div>

<!-- /Main Wrapper -->

<script>
	
	$(document).ready(function(){

		$('#image').change(function(e){

			var reader = new FileReader();
			reader.onload = function(e){

				$('#showImage').attr('src',e.target.result);

			}

			reader.readAsDataURL(e.target.files['0']);

		});

		$('#shift_id').select2();
		$('#group_id').select2();
		$('#class_id').select2();
		$('#year_id').select2();


	});

</script>

@endsection