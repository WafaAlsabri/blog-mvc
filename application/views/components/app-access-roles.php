<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
	content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
<title>Avni - Bootstrap 5 Admin Template</title>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>assets/css/all.min.css">
<link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/main3.css" />
</head>
<body class="d-flex flex-column h-100">
	<div class="page-wrapper sidebar-theme sidebartoggled">

		<nav id="sidebar" class="sidebar-wrapper">
			<div class="sidebar-content">
				<div class="sidebar-brand">
					<a href="#" class="text-center"><img src="assets/img/leaf.svg"
						alt="logo" class="app-logo theme-item mx-2 navbrandarea1">
						<h4 class="sidebar-title">AVNI</h4></a>
					<div id="close-sidebar">
						<i class="fas fa-times"></i>
					</div>
				</div>
				<div class="sidebar-header">
					<div class="user-pic">
						<img class="img-responsive img-rounded" src="assets/img/earth.svg"
							height="40" width="40" alt="User picture">
					</div>
					<div class="user-info">
						<span class="user-name">Planet <strong>Earth</strong>
						</span> <span class="user-role">Full Of Life</span> <span
							class="user-status"> <i class="fa fa-circle"></i> <span>Online</span>
						</span>
					</div>
				</div>
				<!-- sidebar-header  -->

				<!-- sidebar-search  -->
				<div class="sidebar-menu">
					<ul>
						<!--<li class="header-menu"><span>General</span></li> -->
						<li class="sidebar-dropdown"><a href="#"
							class="toggledropdownbtn"> <i class="fa fa-tachometer-alt"></i>
								<span>Dashboards</span> <span class="badge badge-pill bg-warning">New</span>
						</a>
							<div class="sidebar-submenu">
								<ul>
									<li><a href="index.html"> <i class="fa fa-cog"></i><span>Dashboard 1</span>
											<span class="badge badge-pill bg-success">Pro</span>
									</a></li>
									<li><a href="index2.html"> <i class="fa fa-cog"></i> <span>Dashboard 2</span>
									</a></li>
									<li><a href="index3.html"> <i class="fa fa-cog"></i> <span>Dashboard 3</span>
									</a></li>
								</ul>
							</div></li>

						<li class="sidebar-dropdown"><a href="#"
							class="toggledropdownbtn"> <i class="fas fa-server"></i> <span>Servers</span>
								<span class="badge badge-pill bg-danger">3</span>
						</a>
							<div class="sidebar-submenu">
								<ul>
									<li><a href="#"><i class="fab fa-linux"></i>The Linux
									</a></li>
									<li><a href="#"><i class="fab fa-ubuntu"></i>Ubuntu </a></li>
									<li><a href="#"><i class="fas fa-database"></i>Cassandra</a></li>
									<li><a href="#"><i class="fas fa-database"></i>MongoDB</a></li>
								</ul>
							</div></li>
						<li class="sidebar-dropdown"><a href="#"
							class="toggledropdownbtn"> <i class="fas fa-th-large"></i> <span>Components</span>
						</a>
							<div class="sidebar-submenu">
								<ul>
									<li><a href="#"><i class="fas fa-th"></i>General</a></li>
									<li><a href="#"><i class="fas fa-th"></i>Panels</a></li>
									<li><a href="#"><i class="fas fa-th"></i>Tables</a></li>
									<li><a href="#"><i class="fas fa-th"></i>Icons</a></li>
									<li><a href="#"><i class="fas fa-th"></i>Forms</a></li>
								</ul>
							</div></li>

						<!--<li class="header-menu"><span>Extra</span></li> -->
						<li><a href="#"> <i class="fa fa-book"></i> <span>
									Gadgets</span> <span class="badge badge-pill bg-primary">Beta</span>
						</a></li>

						<li><a href="#"> <i class="fab fa-artstation"></i> <span>ArtStation</span></a></li>

						<li><a href="#"> <i class="fas fa-basketball-ball"></i> <span>Off-Work</span></a></li>

						<li><a href="#"> <i class="far fa-bookmark"></i> <span>Bookmarks</span></a></li>

						<li><a href="#"> <i class="fa fa-calendar"></i> <span>Calendar</span>
						</a></li>


					</ul>
				</div>
				<!-- sidebar-menu  -->
			</div>
			<!-- sidebar-content  -->
			<div class="sidebar-footer">
				<a href="#" class="tobehidden"> <i style="color: white;"
					class="fa fa-bell"></i> <span
					class="badge badge-pill bg-danger notification">13</span>
				</a> <a href="#" class="tobehidden mx-3"> <i style="color: white;"
					class="fa fa-envelope"></i> <span
					class="badge badge-pill bg-primary notification">17</span>
				</a> <a href="#" class="tobehidden mx-2"> <i style="color: white;"
					class="fa fa-cog"></i> <span class="badge-sonar"></span>
				</a> <a href="#"> <i style="color: #ff5500;" class="fa fa-power-off"></i>
				</a>
			</div>
		</nav>



		<div class="page-content">
			<div class="container-fluid">
				<header>
					<nav
						class="navbar topnavbar navbar-expand-md navbar-dark bg-dark py-0">
						<div class="container-fluid">
							<button id="show-sidebar" class="btn btn-sm btn-dark">
								<i class="fas fa-bars"></i>
							</button>

							<img src="assets/img/leaf.svg" alt="logo"
								class="app-logo theme-item navbrandarea1">

							<h4 class="sidebar-title mt-2" href="#">AVNI</h4>
							<button class="navbar-toggler" type="button"
								data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
								aria-controls="navbarCollapse" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarCollapse">
								<ul class="navbar-nav me-auto mb-2 mb-md-0">
									<li class="nav-item active"><a class="nav-link"
										aria-current="page" href="#">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Link</a>
									</li>

									<li class="nav-item dropdown"><a
										class="nav-link dropdown-toggle" href="#" id="dropdown01"
										data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
										<ul class="dropdown-menu" aria-labelledby="dropdown01">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else
													here</a></li>
										</ul></li>
								</ul>

								<div id="navSearchForm" class="mx-1">
									<form action="#" class="search-form py-0">
										<input type="text">
										<button type="submit">
											<i class="fas fa-search navbar-search-icon"></i>
										</button>
									</form>
								</div>


								<ul class="navbar-nav dropdown-menu-end mx-2">

									<li class="nav-item mode"><a class="nav-link" href="#"
										onclick="switchTheme()"> <i class="fas fa-moon dark-icon"></i>
											<i class="fas fa-sun light-icon"></i>
									</a></li>


									<li class="nav-item dropdown"><a class="nav-link" href="#"
										id="dropdown02" data-bs-toggle="dropdown"
										aria-expanded="false"><i class="fa fa-bell"></i><span
											class="badge badge-pill bg-danger navbarcounter">13</span></a>
										<ul class="dropdown-menu dropdown-menu-end"
											aria-labelledby="dropdown02">
											<li><a class="dropdown-item text-center" href="#"><i
													class="far fa-clock text-danger"> 2 Hours ago</i><br />This
													is the alert message1...</a>
												<div class="dropdown-divider"></div></li>
											<li><a class="dropdown-item text-center" href="#"><i
													class="far fa-clock text-danger"> 2 Hours ago</i><br />This
													is the alert message2...</a>
												<div class="dropdown-divider"></div></li>
											<li><a class="dropdown-item text-center" href="#"><i
													class="far fa-clock text-danger"> 2 Hours ago</i><br />This
													is the alert message3...</a>
												<div class="dropdown-divider"></div></li>
										</ul></li>
								</ul>

								<ul class="navbar-nav dropdown-menu-end mx-2">


									<li class="nav-item dropdown"><a class="nav-link" href="#"
										id="dropdown03" data-bs-toggle="dropdown"
										aria-expanded="false"><i class="fa fa-envelope"></i> <span
											class="badge badge-pill bg-primary navbarcounter">17</span></a>
										<ul class="dropdown-menu dropdown-menu-end"
											aria-labelledby="dropdown03">

											<li><a class="dropdown-item text-center" href="#"><i
													class="far fa-clock text-danger"> 2 Hours ago</i><br />This
													is the notification message1...</a>
												<div class="dropdown-divider"></div></li>
											<li><a class="dropdown-item text-center" href="#"><i
													class="far fa-clock text-danger"> 2 Hours ago</i><br />This
													is the notification message2...</a>
												<div class="dropdown-divider"></div></li>
											<li><a class="dropdown-item text-center" href="#"><i
													class="far fa-clock text-danger"> 2 Hours ago</i><br />This
													is the notification message3...</a>
												<div class="dropdown-divider"></div></li>
										</ul></li>
								</ul>

								<ul class="navbar-nav dropdown-menu-end">
									<li class="nav-item dropdown"><a
										class="nav-link dropdown-toggle" href="#" id="dropdown01"
										data-bs-toggle="dropdown" aria-expanded="false"><img
											class="img-responsive img-rounded" src="assets/img/earth.svg"
											height="30" width="30" alt="User picture"></a>
										<ul class="dropdown-menu dropdown-menu-end"
											aria-labelledby="dropdown01">
											<li><a href="profile.html"
												class="dropdown-item mt-2"><i
													class="far fa-id-badge mx-2"></i> Profile</a></li>
											<li><a href="#" class="dropdown-item mt-2"><i
													class="far fa-comments mx-2"></i>Messages</a></li>
											<li><a href="#" class="dropdown-item mt-2"
												data-bs-toggle="modal" data-bs-target="#settingsModal"><i
													class="fas fa-cog mx-2"></i>Settings</a></li>
											<li><a href="#" class="dropdown-item mt-2"><i
													class="fas fa-sign-out-alt mx-2"></i>Logout</a></li>
										</ul></li>
								</ul>
							</div>


						</div>
					</nav>
				</header>
			</div>

		


		</div>
	</div>

</body>

<script src="<?php echo BASEURL;?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASEURL;?>assets/js/script3.js"></script>

</html>