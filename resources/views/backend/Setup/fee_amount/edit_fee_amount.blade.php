@extends('admin.admin_master')

@section('title','Edit Fee Amount')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Edit Fee Amount</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('fee.amount.view') }}">Student Fee Amount List</a></li>
						<li class="breadcrumb-item active">Edit Fee Amount</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<form action="{{ route('update.fee.amount', $editData['0']->fee_category_id) }}" method="post">

							@csrf

							<div class="row">

								<div class="col-12">

									<div class="add_item">							

										<div class="form-group">
											<label class="">Fee Category <span class="text-danger">*</span></label>
											<div class="form-focus select-focus">
											<select class="form-control select" name="fee_category_id" id="fee_category_id" required>
												<option value="" selected disabled>-- Select Fee Category --</option>

												@foreach ($fee_categories as $category)
												
													<option value="{{ $category->id }}" {{ ($editData['0']->fee_category_id == $category->id)? "selected": "" }}>{{ $category->name }}</option>

												@endforeach

											</select>
											</div>
										</div> {{-- End Form Group --}}

										@foreach ($editData as $edit)

										<div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">

										<div class="row">
											
											<div class="col-md-5">
												
												<div class="form-group">
													<label class="">Student Class <span class="text-danger">*</span></label>
													<div class="form-focus select-focus">
														<select class="form-control" name="class_id[]" required>
															<option value="" selected disabled>-- Select Fee Category --</option>

															@foreach ($classes as $class)
															
																<option value="{{ $class->id }}" {{ ($edit->class_id == $class->id) ? "selected" : "" }}>{{ $class->name }}</option>

															@endforeach

														</select>
													</div>
												</div> {{-- End Form Group --}}

											</div> {{-- End col-md-5 --}}

											<div class="col-md-5">

												<div class="form-group">
													<label class="">Amount <span class="text-danger">*</span></label>
													<input type="text" name="amount[]" value="{{ $edit->amount }}" class="form-control" required>
												</div>
												
											</div> {{-- End col-md-5 --}}

											<div class="col-md-2" style="padding-top: 25px;">

												<span class="btn btn-success addeventmore"><i class="fa fa-plus"></i></span>
												<span class="btn btn-danger removeeventmore"><i class="fa fa-minus"></i></span>
												
											</div> {{-- End col-md-2 --}}

										</div> {{-- End Row --}}

										</div> {{-- End Delete Whole Extra Item --}}

										@endforeach

									</div> {{-- End add_item --}}

								</div>{{-- End col-md-12 --}}

							</div>{{-- End Row --}}

					</div>

					<div class="card-footer">
										
						<input type="submit" class="btn btn-primary" value="Update">

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
				
				<div class="col-md-5">
											
					<div class="form-group">
						<label class="">Student Class <span class="text-danger">*</span></label>
						<div class="form-focus select-focus">
							<select class="form-control" name="class_id[]" required>
								<option value="" selected disabled>-- Select Fee Category --</option>

								@foreach ($classes as $class)
								
									<option value="{{ $class->id }}">{{ $class->name }}</option>

								@endforeach

							</select>
						</div>
					</div> {{-- End Form Group --}}

				</div> {{-- End col-md-5 --}}

				<div class="col-md-5">

					<div class="form-group">
						<label class="">Amount <span class="text-danger">*</span></label>
						<input type="text" name="amount[]" class="form-control" required>
					</div>
					
				</div> {{-- End col-md-5 --}}

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