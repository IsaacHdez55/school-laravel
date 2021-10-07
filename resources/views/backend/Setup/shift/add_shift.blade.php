@extends('admin.admin_master')

@section('title','Agregar Turno')

@section('admin')

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Agregar Turno</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('student.shift.view') }}">Gestión de Turnos</a></li>
						<li class="breadcrumb-item active">Agregar Turno</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<form action="{{ route('store.student.shift') }}" method="post">

							@csrf

							<div class="row">

								<div class="col-12">

											
									<div class="form-group">
										<label class="">Turno <span class="text-danger">*</span></label>
										<input type="text" id="name" name="name" class="form-control" required>

										@error('name')

											<span class="text-danger">{{ $message }}</span>

										@enderror

									</div>

									<div>
										
										<input type="submit" class="btn btn-primary" value="Agregar">

										<a href="{{ route('student.shift.view') }}" class="btn btn-secondary"> Cancelar</a>

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