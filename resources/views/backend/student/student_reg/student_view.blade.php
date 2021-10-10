@extends('admin.admin_master')

@section('title','Student List')

@section('admin')

<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<!-- Page Content -->
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Student List</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item active">Student List</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="{{ route('student.registration.add') }}" class="btn add-btn"><i class="fa fa-plus"></i> Add Student</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<!-- Search Filter -->
		{{-- <form action="{{ route('student.year.class.wise') }}" method="GET">
			<div class="row filter-row">
			   <div class="col-md-4">  
					<div class="form-group form-focus select-focus">
						<select class="form-control" name="class_id" id="class_id"> 
							<option value="" selected disabled>-- Select Year --</option>
							@foreach ($years as $year)
								<option value="{{ $year->id }}" {{ (@$year_id == $year->id)? "selected":"" }} >{{ $year->name }}</option>
							@endforeach
						</select>
						<label class="focus-label">Year</label>
					</div>
			   </div>
			   <div class="col-md-4"> 
					<div class="form-group form-focus select-focus">
						<select class="form-control" name="class_id" id="class_id"> 
							<option value="" selected disabled>-- Select Class --</option>
							@foreach ($classes as $class)
								<option value="{{ $class->id }}" {{ (@$class_id == $class->id)? "selected":"" }}>{{ $class->name }}</option>
							@endforeach
						</select>
						<label class="focus-label">Class</label>
					</div>
			   </div>
			   <div class="col-md-4">  
					<input type="submit" class="btn btn-rounded btn-success mb-5" name="search" value="Search">
			   </div>     
	        </div>
	    </form> --}}
		<!-- /Search Filter -->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-body">

						<div class="table-responsive">

							{{-- @if(!@search) --}}
							
							<table id="student_registration" width="100%" class="datatable table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width:10px">#</th>
										<th>Name</th>
										<th>ID No</th>
										<th>Roll</th>
										<th>Year</th>
										<th>Class</th>
										<th>Image</th>
										@if(Auth::user()->role == "Admin")
										<th>Code</th>
										@endif
										<th style="width: 25%;">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($allData as $key => $value)

										<tr>
											<td>{{ $key + 1 }}</td>
											<td>{{ $value['student']['name'] }}</td>
											<td>{{ $value['student']['id_no'] }}</td>
											<td>{{ $value->roll }}</td>
											<td>{{ $value['student_year']['name'] }}</td>
											<td>{{ $value['student_class']['name'] }}</td>
											<td>

												<img src="{{ (!empty($value['student']['image']))? url('upload/student_images/'.$value['student']['image']):url('upload/user.jpg') }}" style="width: 60px; width: 60px;">

											</td>
											<td>{{ $value->year_id }}</td>
											<td>
												
												<a href="{{ route('student.year.edit', $value->id) }}" class="btn btn-info">Edit</a>

												<a href="{{ route('student.year.delete', $value->id) }}" class="btn btn-danger" id="delete">Delete</a>

											</td>
										</tr>

									@endforeach
								</tbody>
							</table>

							{{-- @else

								<table id="student_registration" width="100%" class="datatable table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width:10px">#</th>
										<th>Name</th>
										<th>ID No</th>
										<th>Roll</th>
										<th>Year</th>
										<th>Class</th>
										<th>Image</th>
										@if(Auth::user()->role == "Admin")
										<th>Code</th>
										@endif
										<th style="width: 25%;">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($allData as $key => $value)

										<tr>
											<td>{{ $key + 1 }}</td>
											<td>{{ $value['student']['name'] }}</td>
											<td>{{ $value['student']['id_no'] }}</td>
											<td>{{ $value->roll }}</td>
											<td>{{ $value['student_year']['name'] }}</td>
											<td>{{ $value['student_class']['name'] }}</td>
											<td>

												<img src="{{ (!empty($value['student']['image']))? url('upload/student_images/'.$value['student']['image']):url('upload/user.jpg') }}" style="width: 60px; width: 60px;">

											</td>
											<td>{{ $value->year_id }}</td>
											<td>
												
												<a href="{{ route('student.year.edit', $value->id) }}" class="btn btn-info">Edit</a>

												<a href="{{ route('student.year.delete', $value->id) }}" class="btn btn-danger" id="delete">Delete</a>

											</td>
										</tr>

									@endforeach
								</tbody>
							</table>

							@endif --}}

						</div>
					</div>
				</div>
			</div>
		</div>

    </div>
	<!-- /Page Content -->
	
</div>
<!-- /Page Wrapper -->

@endsection