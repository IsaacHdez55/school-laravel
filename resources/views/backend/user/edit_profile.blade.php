@extends('admin.admin_master')

@section('title','Editar Perfil')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Page Wrapper -->

<div class="page-wrapper" style="min-height: 284px;">
			
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Editar Perfil</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('profile.view') }}">Mi Perfil</a></li>
						<li class="breadcrumb-item active">Editar Perfil</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">

							@csrf

							<div class="row">

								<div class="col-12">

									<div class="row">
										
										<div class="col-md-6">

											<div class="form-group">
												<label class="">Nombre de Usuario <span class="text-danger">*</span></label>
												<input type="text" name="name" class="form-control"  class="form-control" value="{{ $editData->name }}" required>
											</div>

										</div>

										{{-- End col-md-6 --}}

										<div class="col-md-6">
											
											<div class="form-group">
												<label class="">Correo electrónico <span class="text-danger">*</span></label>
												<input type="email" name="email" class="form-control"  class="form-control" value="{{ $editData->email }}" required>
											</div>

										</div>

										{{-- End col-md-6 --}}

									</div>

									{{-- End Row --}}

									<div class="row">
										
										<div class="col-md-6">

											<div class="form-group">
												<label class="">Celular <span class="text-danger">*</span></label>
												<input type="text" name="mobile" class="form-control"  class="form-control" value="{{ $editData->mobile }}" required>
											</div>

										</div>

										{{-- End col-md-6 --}}

										<div class="col-md-6">
											
											<div class="form-group">
												<label class="">Dirección <span class="text-danger">*</span></label>
												<input type="text" name="address" class="form-control"  class="form-control" value="{{ $editData->address }}" required>
											</div>

										</div>

										{{-- End col-md-6 --}}

									</div>

									{{-- End Row --}}

									<div class="row">

										<div class="col-md-6">

											<div class="form-group">
												<label class="">Género <span class="text-danger">*</span></label>
												<select class="form-control" name="gender" id="gender" required>
													<option value="Masculino" {{ ($editData->usertype == "Masculino" ? "selected" : "") }}>Masculino</option>
													<option value="Femenino" {{ ($editData->usertype == "Femenino" ? "selected" : "") }}>Femenino</option>
												</select>
											</div>

										</div>

										{{-- End col-md-6 --}}

										<div class="col-md-6">
											
											<div class="form-group">
												<label class="">Foto<span class="text-danger">*</span></label>
												<div class="">
													<input type="file" name="image" id="image" class="form-control">
												</div>
											</div>

											<div class="form-group">
											
												<img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
												
											</div>

										</div>

										{{-- End col-md-6 --}}

									</div>

									{{-- End Row --}}

									<div>
										
										<input type="submit" class="btn btn-primary" value="Actualizar" required>
										<a href="{{ route('profile.view') }}" class="btn btn-secondary"> Cancelar</a>

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

	});

</script>

@endsection