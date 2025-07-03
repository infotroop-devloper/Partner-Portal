<!--begin::Header-->
<div id="kt_header" class="header shadow-lg" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="background: #FFFFFF">
	<!--begin::Container-->
	
	<div class="container-xxl d-flex align-items-center flex-lg-stack" style="max-width: none;">
		
		<!--begin::Brand-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-2 me-lg-5">
			<!--begin::Wrapper-->
			<div class="flex-grow-1">
				<button class="btn btn-icon btn-color-gray-800 btn-active-color-primary ms-n4 me-lg-12" id="kt_aside_toggle" style="margin-right:10px !important;">
					<i class="ki-duotone ki-abstract-14 fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</button>
				<a href="<?php echo BASE_URL;?>pages/dashboard.php">
					<img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroopLogo.png" style="height:50px !important;" class="h-30px" />
				</a>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Brand-->
		<!--begin::Toolbar wrapper-->
		<div class="d-flex align-items-stretch flex-shrink-0">
			<!--begin::Button-->
			<a href="#" class="btn me-1" style="background: #0f3f7d;color: white;padding: 10px;padding: 10px;font-size: 14px;padding-top: 2px;padding-bottom: 0px;height: 25px;margin-top: 8px;">Partner ID: ITISPL00001</a>
			<div class="d-flex align-items-center ms-1 ms-lg-3">
				<!--begin::Menu wrapper-->
				<div style="width: 100px !important;background: #0f3f7d;color: white;height: 27px !important;border-radius: 22px;" class="btn btn-color-gray-800 btn-icon  w-30px h-30px w-md-40px h-md-40px position-relative btn btn-color-gray-800 btn-icon  w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
					Helpdesk&nbsp;
					<i style="color:white;" class="fa-solid fa-phone"></i>
				</div>
				<!--begin::User account menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content d-flex align-items-center px-3">
							<!--begin::Avatar-->
							<!-- <div class="symbol symbol-50px me-5">
								<img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-1.jpg" />
							</div> -->
							<div class="d-flex flex-column">
								<div class="fw-bold d-flex align-items-center fs-5">Call Us: &nbsp;&nbsp;<a href="tel:+919168682217">+91 9168682217</a></div>
							</div>
							<!--end::Username-->
						</div>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::User account menu-->
				<!--end::Menu wrapper-->
			</div>
			<div class="d-flex align-items-center ms-1 ms-lg-3">
				<!--begin::drawer toggle-->
				<div class="position-relative btn btn-color-gray-800 btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_drawer_chat_toggle">
					<i class="ki-duotone ki-notification-bing fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
					</i>
					<span class="bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
				</div>
				<!--end::drawer toggle-->
			</div>
			<!--begin::User menu-->
			<div class="d-flex align-items-center ms-1 ms-lg-3">
				<!--begin::Menu wrapper-->
				<div class="btn btn-color-gray-800 btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px position-relative btn btn-color-gray-800 btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
					<i class="ki-duotone ki-user fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--begin::User account menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content d-flex align-items-center px-3">
							<!--begin::Avatar-->
							<div class="symbol symbol-50px me-5">
								<img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-1.jpg" />
							</div>
							<div class="d-flex flex-column">
								<div class="fw-bold d-flex align-items-center fs-5"><?php echo $_SESSION['firstname'];?> 
								<!--<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>--></div>
								<a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?php echo $_SESSION['email'];?></a>
							</div>
							<!--end::Username-->
						</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="./profile.php" class="menu-link px-5">My Profile</a>
					</div>
					<div class="menu-item px-5">
						<a href="./partnerSubscriptions.php" class="menu-link px-5">Partner Subscription</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="#" onClick="fn_logout()" class="menu-link px-5">Sign Out</a>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::User account menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::User menu-->
			<!--begin::Chat-->
			
			<!--end::Chat-->
		</div>
		<!--end::Toolbar wrapper-->
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->