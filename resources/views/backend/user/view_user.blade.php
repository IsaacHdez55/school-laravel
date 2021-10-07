@extends('admin.admin_master')

@section('title','Gestión de Usuarios')

@section('admin')

<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<!-- Page Content -->
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Gestión de Usuarios</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item active">Gestión de Usuarios</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="{{ route('users.add') }}" class="btn add-btn"><i class="fa fa-plus"></i> Agregar Usuarios</a>
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
										<th>Nombre</th>
										<th>Correo Electrónico</th>
										<th style="width: 25%;">Acciones</th>
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
												
												<a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Editar</a>

												<a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger" id="delete">Eliminar</a>

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