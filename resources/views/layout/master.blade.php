<!doctype html>
<html lang="en">
<head>
	<title>Survey Covid-19</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js%22%3E"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js%22%3E">
</script>
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/demo_style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard_vertical.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/images.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/images.png')}}">
	<link href="{{asset('admin/assets/build/css/custom.min.css')}}" rel="stylesheet">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">	
	<link href="C:/Users/ACER/Downloads/fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/demo_style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard_vertical.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
    <!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/images.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/images.png')}}">
	<!-- Bootstrap -->
  {{-- <link href="{{asset('admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
  <!-- Font Awesome -->
  <link href="{{asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('admin/assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
  {{-- <link href="{{asset('admin/assets/build/css/custom.min.css')}}" rel="stylesheet"> --}}
</head>
<style type="text/css">

@keyframes AnimationName {
    0%{background-position:0% 26%}
    50%{background-position:100% 75%}
    100%{background-position:0% 26%}
}
</style>
<body style="background: linear-gradient(323deg, #5200f5, #aa00ff);
	background-size: 400% 400%;
	animation: AnimationName 3s ease infinite;">
	<style type="text/css">
		::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}


	</style>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<!-- END NAVBAR -->
        <!-- LEFT SIEBAR -->
        <br><br><br><br>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')	
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer style="background-color: transparent;text-align: left" >
			<div class="container-fluid" style="text-align: left"> <font color="black">
				<a href="https://www.instagram.com/g.e.r.al.d.y/" class="fa fa-instagram"></a> g.e.r.al.d.y<br>
				<a href="https://github.com/GeraldyRS" class="fa fa-github"></a> GeraldyRS<br>
				<a href="#" class="fa fa-google"></a> Geraldysuryabrata@gmail.com <br>
				<a href="https://www.linkedin.com/in/geraldy-ravael-8939aa191/" class="fa fa-linkedin"></a> Geraldy Ravael
		</font>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
<script >
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
    </script>
<script>
    $(document).ready(function () {
        $('#datatables').DataTable({
            "scrollX": true
        });
    }); </script>
</body>
</html>
