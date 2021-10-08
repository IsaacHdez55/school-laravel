@extends('admin.admin_master')

@section('title','Fee Amount Details')

@section('admin')

<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<!-- Page Content -->
    <div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Fee Amount Details</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('fee.amount.view') }}">Student Fee Amount List</a></li>
						<li class="breadcrumb-item active">Fee Amount Details</li>
					</ul>
				</div>
				<div class="col-auto float-right ml-auto">
					<a href="{{ route('fee.amount.add') }}" class="btn add-btn"><i class="fa fa-plus"></i> Add Fee Amount</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card mb-0">

					<div class="card-header">
						<h4 class="card-title mb-0"><strong>Fee Category: </strong> {{ $detailsData['0']['fee_category']['name'] }}</h4>
					</div>

					<div class="card-body">

						<div class="table-responsive">
							<table id="details_fee_amount" width="100%" class="datatable table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width:10px">#</th>
										<th>Class Name</th>
										<th style="width: 25%;">Amount</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($detailsData as $key => $detail)

										<tr>
											<td>{{ $key + 1 }}</td>
											<td>{{ $detail['student_class']['name'] }}</td>
											<td>{{ $detail->amount }}</td>
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