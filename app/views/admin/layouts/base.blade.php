<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title', 'Aprendiendo Laravel')</title>
		<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/admin/css/font-awesome.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/admin/css/unicorn.css') }}" rel="stylesheet" media="screen">

		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->
			
	</head>	
	<body data-color="grey" class="flat">
		<div id="wrapper">
			<div id="header">
				<h1><a href="./index.html">Unicorn Admin</a></h1>	
				<a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>	
			</div>
		
			<div id="user-nav">
	            <ul class="btn-group">
	                <li class="btn" ><a title="" href="#"><i class="fa fa-user"></i> <span class="text">Profile</span></a></li>
	                <li class="btn dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-envelope"></i> <span class="text">Messages</span> <span class="label label-danger">5</span> <b class="caret"></b></a>
	                    <ul class="dropdown-menu messages-menu">
	                        <li class="title"><i class="fa fa-envelope-alt"></i>Messages<a class="title-btn" href="#" title="Write new message"><i class="fa fa-share"></i></a></li>
	                        <li class="message-item">
	                        	<a href="#">
		                            <img alt="User Icon" src="img/demo/av1.jpg" />
		                            <div class="message-content">
		                            	<span class="message-time">
			                                3 mins ago
			                            </span>
		                                <span class="message-sender">
		                                    Nunc Cenenatis
		                                </span>
		                                <span class="message">
		                                    Hi, can you meet me at the office tomorrow morning?
		                                </span>
		                            </div>
	                        	</a>
	                        </li>
	                        <li class="message-item">
								<a href="#">
		                            <img alt="User Icon" src="img/demo/av1.jpg" />
		                            <div class="message-content">
		                            	<span class="message-time">
			                                3 mins ago
			                            </span>
		                                <span class="message-sender">
		                                    Nunc Cenenatis
		                                </span>
		                                <span class="message">
		                                    Hi, can you meet me at the office tomorrow morning?
		                                </span>
		                            </div>
	                        	</a>
	                        </li>
	                        <li class="message-item">
								<a href="#">
		                            <img alt="User Icon" src="img/demo/av1.jpg" />
		                            <div class="message-content">
		                            	<span class="message-time">
			                                3 mins ago
			                            </span>
		                                <span class="message-sender">
		                                    Nunc Cenenatis
		                                </span>
		                                <span class="message">
		                                    Hi, can you meet me at the office tomorrow morning?
		                                </span>
		                            </div>
	                        	</a>
	                        </li>
	                    </ul>
	                </li>
	                <li class="btn"><a title="" href="#"><i class="fa fa-cog"></i> <span class="text">Settings</span></a></li>
	                <li class="btn"><a title="" href="login.html"><i class="fa fa-share"></i> <span class="text">Logout</span></a></li>
	            </ul>
	        </div>
	       
			@include('admin.sidebar')
			
			<div id="content">
				<div id="content-header" class="mini">
					<h1>@yield('titulo_seccion')</h1>
					<ul class="mini-stats box-3">
						<li>
							<div class="left sparkline_bar_good"><span>2,4,9,7,12,10,12</span>+10%</div>
							<div class="right">
								<strong>36094</strong>
								Visits
							</div>
						</li>
						<li>
							<div class="left sparkline_bar_neutral"><span>20,15,18,14,10,9,9,9</span>0%</div>
							<div class="right">
								<strong>1433</strong>
								Users
							</div>
						</li>
						<li>
							<div class="left sparkline_bar_bad"><span>3,5,9,7,12,20,10</span>+50%</div>
							<div class="right">
								<strong>8650</strong>
								Orders
							</div>
						</li>
					</ul>
				</div>
				<div id="breadcrumb">
					<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
					<a href="#" class="current">Dashboard</a>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="alert alert-info">
								Welcome in the <strong>Unicorn Admin Theme</strong>. Don't forget to check all the pages!
								<a href="#" data-dismiss="alert" class="close">×</a>
							</div>
						</div>
					</div>
            		@yield('content')
				</div>

			</div>
			<div class="row">
				<div id="footer" class="col-xs-12">
					2012 - 2013 &copy; Unicorn Admin. Brought to you by <a href="https://wrapbootstrap.com/user/diablo9983">diablo9983</a>
				</div>
			</div>
		</div>
            
            <script src="{{ asset('assets/admin/js/excanvas.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/jquery-ui.custom.js') }}"></script>
            <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/jquery.flot.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/jquery.flot.resize.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/jquery.sparkline.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/jquery.nicescroll.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/unicorn.js') }}"></script>
            <script src="{{ asset('assets/admin/js/unicorn.dashboard.js') }}"></script>

	</body>
</html>
