<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="School World">
		{{-- <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects"> --}}
    <meta name="author" content="Isaac Hernandez">

    <title>@yield('title')</title>
	
		<!-- Favicon -->
  	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.png') }}">
	
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
	
		<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
	
		<!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/line-awesome.min.css') }}">
	
		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{ asset('backend/plugins/morris/morris.css') }}">
	
		<!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

    <!-- Toastr -->  
		<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css') }}">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.min.css') }}">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}">

  </head>
	
    <body>

    	<!-- Main Wrapper -->
      <div class="main-wrapper">
		
				<!-- Header -->

				@include('admin.body.header')

				<!-- Sidebar -->
		  
				@include('admin.body.sidebar')

			  <!-- Content Wrapper. Contains page content -->

			  @yield('admin')

			  <!-- /.content-wrapper -->

			  <!-- Footer NO TIENE EL TEMPLATE -->
			  
				{{-- @include('admin.body.footer') --}}

			</div>
			<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="{{ asset('backend/js/jquery-3.5.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ asset('backend/js/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Chart JS -->
		{{-- <script src="{{ asset('backend/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ asset('backend/js/chart.js') }}"></script> --}}
		
		<!-- Custom JS -->
		<script src="{{ asset('backend/js/app.js') }}"></script>

		<!-- Select2 JS -->
		<script src="{{ asset('backend/js/select2.min.js') }}"></script>

		<!-- Datatable JS -->
		<script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>

		<!-- Toastr -->
		<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js') }}"></script>

		<script>
		 @if(Session::has('message'))
		 var type = "{{ Session::get('alert-type','info') }}"
		 switch(type){
		    case 'info':
		    toastr.info(" {{ Session::get('message') }} ");
		    break;

		    case 'success':
		    toastr.success(" {{ Session::get('message') }} ");
		    break;

		    case 'warning':
		    toastr.warning(" {{ Session::get('message') }} ");
		    break;

		    case 'error':
		    toastr.error(" {{ Session::get('message') }} ");
		    break; 
		 }
		 @endif 
		</script>

		<!-- Sweet Alert -->
		<script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>

		<script>
		
			$(function(){

				$(document).on('click', '#delete', function(e){

					e.preventDefault();

					var link = $(this).attr("href");

					Swal.fire({
					  title: 'Are you sure?',
					  text: "Delete This Data?",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  cancelButtonText: 'Cancel',
					  confirmButtonText: 'Yes, delete it!'
					}).then((result) => {
					  if (result.isConfirmed) {
					  	window.location.href = link
					    Swal.fire(
					      'Deleted!',
					      'Your file has been deleted.',
					      'success'
					    )
					  }
					})

				});

			});

		</script>
		
    </body>
</html>