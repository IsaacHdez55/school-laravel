@extends('admin.admin_master')

@section('title','Add Assign Subject')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Add Assign Subject</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('assign.subject.view') }}">Student Assign Subject List</a></li>
						<li class="breadcrumb-item active">Add Assign Subject</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<form action="{{ route('store.assign.subject') }}" method="post">

							@csrf

							<div class="row">

								<div class="col-12">

									<div class="add_item">							

										<div class="form-group">
											<label class="">Class Name <span class="text-danger">*</span></label>
											<div class="form-focus select-focus">
											<select class="form-control select" name="class_id" id="class_id" required>
												<option value="" selected disabled>-- Select Class --</option>

												@foreach ($classes as $class)
												
													<option value="{{ $class->id }}">{{ $class->name }}</option>

												@endforeach

											</select>
											</div>
										</div> {{-- End Form Group --}}

										<div class="row">
											
											<div class="col-md-4">
												
												<div class="form-group">
													<label class="">Student Subject <span class="text-danger">*</span></label>
													<div class="form-focus select-focus">
														<select class="form-control" name="subject_id[]" required>
															<option value="" selected disabled>-- Select Subject --</option>

															@foreach ($subjects as $subject)
															
																<option value="{{ $subject->id }}">{{ $subject->name }}</option>

															@endforeach

														</select>
													</div>
												</div> {{-- End Form Group --}}

											</div> {{-- End col-md-4 --}}

											<div class="col-md-2">

												<div class="form-group">
													<label class="">Full Mark <span class="text-danger">*</span></label>
													<input type="text" name="full_mark[]" class="form-control" required>
												</div>
												
											</div> {{-- End col-md-2 --}}

											<div class="col-md-2">

												<div class="form-group">
													<label class="">Pass Mark <span class="text-danger">*</span></label>
													<input type="text" name="pass_mark[]" class="form-control" required>
												</div>
												
											</div> {{-- End col-md-2 --}}

											<div class="col-md-2">

												<div class="form-group">
													<label class="">Subjective <span class="text-danger">*</span></label>
													<input type="text" name="subjective_mark[]" class="form-control" required>
												</div>
												
											</div> {{-- End col-md-2 --}}

											<div class="col-md-2" style="padding-top: 25px;">

												<span class="btn btn-success addeventmore"><i class="fa fa-plus"></i></span>
												
											</div> {{-- End col-md-2 --}}

										</div> {{-- End Row --}}

									</div> {{-- End add_item --}}

								</div>{{-- End col-md-12 --}}

							</div>{{-- End Row --}}

					</div>

					<div class="card-footer">
										
						<input type="submit" class="btn btn-primary" value="Submit">

						<a href="{{ route('assign.subject.view') }}" class="btn btn-secondary"> Cancel</a>

					</div>

						</form>

				</div>

			</div>
		</div>
	
	</div>			
</div>

<!-- /Main Wrapper -->

<div style="visibility: hidden;">
	<div class="whole_extra_item_add" id="whole_extra_item_add">
		<div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
			<div class="form-row">
				
				<div class="col-md-4">
												
					<div class="form-group">
						<label class="focus-label">Student Subject <span class="text-danger">*</span></label>
						<div class="form-focus select-focus">
							<select class="form-control" name="subject_id[]" required>
								<option value="" selected disabled>-- Select Subject --</option>

								@foreach ($subjects as $subject)
								
									<option value="{{ $subject->id }}">{{ $subject->name }}</option>

								@endforeach

							</select>
						</div>
					</div> {{-- End Form Group --}}

				</div> {{-- End col-md-4 --}}

				<div class="col-md-2">

					<div class="form-group">
						<label class="">Full Mark <span class="text-danger">*</span></label>
						<input type="text" name="full_mark[]" class="form-control" required>
					</div>
					
				</div> {{-- End col-md-2 --}}

				<div class="col-md-2">

					<div class="form-group">
						<label class="">Pass Mark <span class="text-danger">*</span></label>
						<input type="text" name="pass_mark[]" class="form-control" required>
					</div>
					
				</div> {{-- End col-md-2 --}}

				<div class="col-md-2">

					<div class="form-group">
						<label class="">Subjective <span class="text-danger">*</span></label>
						<input type="text" name="subjective_mark[]" class="form-control" required>
					</div>
					
				</div> {{-- End col-md-2 --}}

				<div class="col-md-2" style="padding-top: 25px;">

					<span class="btn btn-success addeventmore"><i class="fa fa-plus"></i></span>
					<span class="btn btn-danger removeeventmore"><i class="fa fa-minus"></i></span>
					
				</div> {{-- End col-md-2 --}}

			</div>
		</div>
	</div>
</div>

<script>
	
	$(document).ready(function (){

		var counter = 0;
		$(document).on("click", ".addeventmore", function(){

			var whole_extra_item_add = $('#whole_extra_item_add').html();
			$(this).closest(".add_item").append(whole_extra_item_add);
			counter++;

		});

		$(document).on("click",'.removeeventmore', function(event){

			$(this).closest(".delete_whole_extra_item_add").remove();
			counter-= 1

		}); 

	});

</script>

@endsection