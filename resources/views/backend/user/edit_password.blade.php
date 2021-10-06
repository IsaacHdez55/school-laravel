@extends('admin.admin_master')

@section('title','Editar Contraseña')

@section('admin')

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Editar Contraseña</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('profile.view') }}">Gestión de Contraseña</a></li>
						<li class="breadcrumb-item active">Editar Contraseña</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<form action="{{ route('password.update') }}" method="post">

							@csrf

							<div class="row">

								<div class="col-12">

											
									<div class="form-group">
										<label class="">Contraseña antigua <span class="text-danger">*</span></label>
										<input type="password" id="current_password" name="oldpassword" class="form-control">

										@error('oldpassword')

											<span class="text-danger">{{ $message }}</span>

										@enderror

									</div>

									
									<div class="form-group">
										<label class="">Nueva contraseña <span class="text-danger">*</span></label>
										<input type="password" id="password" name="password" class="form-control">

										@error('password')

											<span class="text-danger">{{ $message }}</span>

										@enderror

									</div>

									<div class="form-group">
										<label class="">Confirmar contraseña <span class="text-danger">*</span></label>
										<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">

										@error('password_confirmation')

											<span class="text-danger">{{ $message }}</span>

										@enderror

									</div>


									<div>
										
										<input type="submit" class="btn btn-primary" value="Actualizar">

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