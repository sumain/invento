
<div class="page-wrapper-row">
	<div class="page-wrapper-top">
		<!-- BEGIN HEADER -->
		<div class="page-header">
			<!-- BEGIN HEADER TOP -->
			<div class="page-header-top">
				<div class="container">
					<div class="page-logo">
						 <a href="#">
						 <img src="{{ asset('images/logo_admin.png') }}" title="logo" alt="">
						                          
						</a>
					</div>
					
					<a href="javascript:;" class="menu-toggler"></a>
				
				</div>
			</div>
			<!-- END HEADER TOP -->
			<!-- BEGIN HEADER MENU -->
			<div class="page-header-menu">
				<div class="container">					
					<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
					<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
					<div class="hor-menu  ">
						<ul class="nav navbar-nav">
							<li class="menu-dropdown classic-menu-dropdown active">
								<a href="#"> <i class="fa fa-home"></i></a>
							</li>
							<li class="menu-dropdown classic-menu-dropdown ">
								<a href="javascript:;"> Settings
									<span class="arrow"></span>
								</a>
								<ul class="dropdown-menu pull-left">
									
									<li class="active">
										<a href="" class="nav-link  "> Employee List</a>
									</li>
									<li class="active">
										<a href="" class="nav-link  "> New Employee</a>
									</li>
																	
								</ul>
							</li>
							
							
							<li class="menu-dropdown classic-menu-dropdown profile_link">
								<a href="javascript:;" class="profile_link_img">
									 <img class="img-circle" src="{{ asset('images/avatar.png') }}" title="avatar" alt="avatar">
									  
									<span class="username username-hide-mobile">Mike</span>
								</a>
								<ul class="dropdown-menu pull-right">
									
									<li>
										<a href="#">
											<i class="icon-lock"></i> Change Password </a>
									</li>
									<li>
										<a href="#">
											<i class="icon-key"></i> Log Out </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- END MEGA MENU -->
				</div>
			</div>
			<!-- END HEADER MENU -->
		</div>
		<!-- END HEADER -->
	</div>
</div>

<style>



@media (min-width: 768px){}
@media (min-width: 992px){
	.page-header-top{display:none !important;}
	.page-header {height: auto;}
	.page-header .page-header-menu .hor-menu {float: none !important;}
	.navbar-nav {float: none !important;}
	.profile_link{float: right !important;}
	.profile_link_img{padding: 3px 10px 0px !important;}
}

@media (max-width:991px){
	.page-header .page-header-top .page-logo .logo-default {margin: 17px 0 10px !important;}
	.page-header .page-header-top .menu-toggler {margin: 8px 3px 0 13px !important;}
	.page-header .page-header-top .page-logo {height: auto !important;}
	.breadcrumb {padding: 10px 0!important;}
}

</style>
