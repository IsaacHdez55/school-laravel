@extends('admin.admin_master')

@section('title','Add School Subject')

@section('admin')

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Add School Subject</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('school.subject.view') }}">School Subject List</a></li>
						<li class="breadcrumb-item active">Add School Subject</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<form action="{{ route('store.school.subject') }}" method="post">

							@csrf

							<div class="row">

								<div class="col-12">

											
									<div class="form-group">
										<label class="">Subject Name <span class="text-danger">*</span></label>
										<input type="text" id="name" name="name" class="form-control" required>

										@error('name')

											<span class="text-danger">{{ $message }}</span>

										@enderror

									</div>

									<div>
										
										<input type="submit" class="btn btn-primary" value="Submit">

										<a href="{{ route('school.subject.view') }}" class="btn btn-secondary"> Cancel</a>

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

@endsection