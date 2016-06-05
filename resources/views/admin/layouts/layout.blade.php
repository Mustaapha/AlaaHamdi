<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>

@yield('title')
 </title>

<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">

<link href="{{asset('admin/cus/sweetalert.css')}}" rel="stylesheet">


<!--Icons-->
<script src="{{asset('admin/js/lumino.glyphs.js')}}"></script>
<script src="{{asset('admin/cus/sweetalert.min.js')}}"></script>


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>ALAA HAMDI</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  {{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="{{ url('/logout') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul  class="nav menu">
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> لوحة التحكم</a></li>
			<li><a href="{{url('/adminpanel/addadmin')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>اضافة عضو</a></li>
			<li><a href="{{url('/adminpanel')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>التحكم فى العضاء</a></li>
			
			
			<li><a href="{{url('/adminpanel/main_setting')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>الاعدادات الرئيسية</a></li>
			<li><a href="{{url('/adminpanel/add_gallery')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Add Gallery</a></li>
			<li><a href="{{url('/adminpanel/orders')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>الطلبات</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">ا<a href="/">لرئيسية</a></li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 style="float: right;direction: rtl;" class="page-header">الاحصائيات</h1>
			</div>
		</div><!--/.row-->


		



		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{countGallery()}}</div>
							<div class="text-muted">Gallery</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{countOrders()}}</div>
							<div class="text-muted">Orders</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{countAdmins()}}</div>
							<div class="text-muted">Admins</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
      @include('admin.layouts.message')
      
		@yield('content')
		
		
		
								
		




















	</div>	<!--/.main-->

	<script src="{{asset('admin/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/js/chart.min.js')}}"></script>


	<script src="{{asset('admin/js/chart-data.js')}}"></script>
	<script src="{{asset('admin/js/easypiechart.js')}}"></script>
	<script src="{{asset('admin/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('admin/js/bootstrap-datepicker.js')}}"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
