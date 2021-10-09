@extends('admin.admin_master')

@section('title','Assign Subject Details')

@section('admin')

<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<!-- Page Content -->
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Assign Subject Details</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('assign.subject.view') }}">Assign Subject List</a></li>
						<li class="breadcrumb-item active">Assign Subject Details</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="{{ route('assign.subject.add') }}" class="btn add-btn"><i class="fa fa-plus"></i> Add Assign Subject</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">

					<div class="card-header">
						<h4 class="card-title mb-0"><strong>Assign Subject: </strong> {{ $detailsData['0']['student_class']['name'] }}</h4>
					</div>

					<div class="card-body">

						<div class="table-responsive">
							<table id="details_assign_subject" width="100%" class="datatable table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width:10px">#</th>
										<th>Subject</th>
										<th style="width: 25%;">Full Mark</th>
										<th style="width: 25%;">Pass Mark</th>
										<th style="width: 25%;">Subjective Mark</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($detailsData as $key => $detail)

										<tr>
											<td>{{ $key + 1 }}</td>
											<td>{{ $detail['student_subject']['name'] }}</td>
											<td>{{ $detail->full_mark }}</td>
											<td>{{ $detail->pass_mark }}</td>
											<td>{{ $detail->subjective_mark }}</td>
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