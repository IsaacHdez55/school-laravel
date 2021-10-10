@extends('admin.admin_master')

@section('title','Update User')

@section('admin')

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Update User</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('user.view') }}">Manage Users List</a></li>
						<li class="breadcrumb-item active">Update User</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					{{-- <div class="card-header">
						<h4 class="card-title mb-0">Editar Usuario</h4>
					</div> --}}

					<div class="card-body">
						<form action="{{ route('users.update', $editData->id) }}" method="post">

							@csrf

							<div class="row">

								<div class="col-12">

									<div class="row">

										<div class="col-md-6">

											<div class="form-group">
												<label class="">User Role <span class="text-danger">*</span></label>
												<select class="form-control" name="role" required>
													<option value="Admin" {{ ($editData->role == "Admin" ? "selected" : "") }}>Admin</option>
													<option value="Operator" {{ ($editData->role == "Operator" ? "selected" : "") }}>Operator</option>
												</select>
											</div>

										</div>

										{{-- End col-md-6 --}}

										<div class="col-md-6">
											
											<div class="form-group">
												<label class="">User Name<span class="text-danger">*</span></label>
												<div class="">
													<input type="text" name="name" class="form-control" value="{{ $editData->name }}" required>
												</div>
											</div>

										</div>

										{{-- End col-md-6 --}}

									</div>

									{{-- End Row --}}

									<div class="row">
										
										<div class="col-md-6">
											
											<div class="form-group">
												<label class="">User Email <span class="text-danger">*</span></label>
												<input type="email" name="email" class="form-control"  class="form-control" value="{{ $editData->email }}" required>
											</div>

										</div>

										{{-- End col-md-6 --}}

									</div>

									{{-- End Row --}}

									<div>
										
										<input type="submit" class="btn btn-primary" value="Submit" required>
										<a href="{{ route('user.view') }}" class="btn btn-secondary"> Cancel</a>

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