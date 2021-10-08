@extends('admin.admin_master')

@section('title','Manage Users List')

@section('admin')

<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<!-- Page Content -->
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Manage Users List</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item active">Manage Users List</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="{{ route('users.add') }}" class="btn add-btn"><i class="fa fa-plus"></i> Add User</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">
					<div class="card-body">

						<div class="table-responsive">
							<table id="users_table" width="100%" class="datatable table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width:10px">#</th>
										<th>Rol</th>
										<th>Name</th>
										<th>Email</th>
										<th style="width: 25%;">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($allData as $key => $user)

										<tr>
											<td>{{ $key + 1 }}</td>
											<td>{{ $user->usertype }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>
												
												<a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>

												<a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger" id="delete">Delete</a>

											</td>
										</tr>

									@endforeach
								</tbody>
							</table>
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