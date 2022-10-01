<!DOCTYPE html>
<html lang="en" dir="">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard Title</title>
    <link rel="shortcut icon" href="dash-assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="/dash-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="/dash-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="/dash-assets/libs/c3/c3.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
    <link href="/dash-assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="/dash-assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="/dash-assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">


    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="/dash-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="/dash-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    @yield('style')
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo text-center">
                <a href="{{ route('home') }}">
                    <h4>LOGO</h4>
                </a>
                <!-- <img src="dash-assets/images/logo.png" alt=""> -->
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Notificaiton -->
                <div class="dropdown">
                    <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New message</span>
                                    <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 sec ago</span>
                                </p>
                                <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Receipt-3 text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New order received</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">2 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Empty-Box text-danger mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Product out of stock</span>
                                    <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="/dash-assets/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div>
                            <a class="dropdown-item" href="{{ route('profile.index') }}">Profile Settings</a>

                            <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item" ><a class="nav-item-hold" href="{{ route('dashboard') }}"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                        <div class="triangle"></div>
                    </li>
                    @role('Admin')
                    <li class="nav-item" ><a class="nav-item-hold" href="{{ route('emailAccounts.email-account-create') }}"><i class="nav-icon i-Library"></i><span class="nav-text">Emails Management</span></a>
                        <div class="triangle"></div>

                    </li>
                    <li class="nav-item" ><a class="nav-item-hold" href="{{ route('campaigns.index') }}"><i class="nav-icon i-Suitcase"></i><span class="nav-text">Campaign List</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item"><a class="nav-item-hold" href="{{ route('unibox.index') }}"><i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">Unibox</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item"><a class="nav-item-hold" href="{{ route('users.index') }}"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">User List</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" ><a class="nav-item-hold" href="{{ route('subscribed.users') }}"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Subscribed</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" ><a class="nav-item-hold" href="{{ route('roles.index') }}"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Roles</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="forms"><a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Forms</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item"><a class="nav-item-hold" href="#!"><i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">Datatables</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="sessions"><a class="nav-item-hold" href="#"><i class="nav-icon i-Administrator"></i><span class="nav-text">User Settings</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item active" data-item="others"><a class="nav-item-hold" href="#"><i class="nav-icon i-Double-Tap"></i><span class="nav-text">Others</span></a>
                        <div class="triangle"></div>
                    </li>
                    @endrole
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">

            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
    </div><!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="dash-assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>
        <input type="text" placeholder="Type here" class="search-input" autofocus>
        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>
        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dash-assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dash-assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dash-assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dash-assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <script src="/dash-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="/dash-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="/dash-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/dash-assets/js/scripts/script.min.js"></script>
    <script src="/dash-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="/dash-assets/js/plugins/echarts.min.js"></script>
    <script src="/dash-assets/js/scripts/echart.options.min.js"></script>
    <script src="/dash-assets/js/scripts/dashboard.v1.script.min.js"></script>
	 <script src="https://kit.fontawesome.com/1103de08f5.js" crossorigin="anonymous"></script>
     @yield('script')
</body>

</html>
<script>
	// A $( document ).ready() block.
	$( document ).ready(function() {
		//custom tracking domain value changed on click............
		$('.custom-tracking-domain').click(function(){
				if ($('.custom-tracking-domain').is(":checked")){
					$('.customtrackingdomain').val(1);
				}else{
					$('.customtrackingdomain').val(0);
				}
			});

		//custom tracking domain value changed on click............
		$('.disable-slow-warmup').click(function(){
				if ($('.disable-slow-warmup').is(":checked")){
					$('.disableslowwarmup').val(1);
				}else{
					$('.disableslowwarmup').val(0);
				}
			});
			
		//custom tracking domain value changed on click............
		$('.blacklist').click(function(){
				if ($('.blacklist').hasClass("active")){
					$('.disableslowwarmup').val(1);
				}else{
					$('.disableslowwarmup').val(0);
				}
			});

	});//document.ready block end here
	</script>