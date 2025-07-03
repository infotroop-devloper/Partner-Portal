<?php
$current_url = $_SERVER['REQUEST_URI']; 

if (strpos($current_url, 'dashboard.php') !== false) {
    $dashboardactiveclass = 'active';
    $dashboardactivemainclass = 'here show';
} else {
    $dashboardactiveclass = '';
	$dashboardactivemainclass = '';
}

if (strpos($current_url, 'profile.php') !== false) {
    $profileactiveclass = 'active';
    $profileactivemainclass = 'here show';
} else {
    $profileactiveclass = '';
	$profileactivemainclass = '';
}

if (strpos($current_url, 'faq.php') !== false) {
    $faqsactiveclass = 'active';
    $faqsactivemainclass = 'here show';
} else {
    $faqsactiveclass = '';
	$faqsactivemainclass = '';
}

if (strpos($current_url, 'createServiceRequest.php') !== false) {
    $ServiceRequestactiveclass = 'active';
    $ServiceRequestactivemainclass = 'here show';
} else {
    $ServiceRequestactiveclass = '';
	$ServiceRequestactivemainclass = '';
}

if (strpos($current_url, 'listServiceRequest.php') !== false) {
    $listServiceRequestactiveclass = 'active';
} else {
    $listServiceRequestactiveclass = '';
}

if (strpos($current_url, 'addOwnAssets.php') !== false) {
    $addAssetsactiveclass = 'active';
    $addAssetsactivemainclass = 'here show';
} else {
    $addAssetsactiveclass = '';
	$addAssetsactivemainclass = '';
}

if (strpos($current_url, 'listOwnAssets.php') !== false) {
    $listAssetsactiveclass = 'active';
} else {
    $listAssetsactiveclass = '';
}

?>
<!--begin::Aside-->
	<div id="kt_aside" style="overflow: unset;" class="aside px-2" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '310px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
		<!--begin::Aside menu-->
		<div class="aside-menu flex-column-fluid">
			<!--begin::Aside Menu-->
			<div class="hover-scroll-overlay-y my-5 mx-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="2px">
				<!--begin::Menu-->
				<div class="menu menu-column menu-sub-indention menu-active-bg menu-state-primary menu-title-gray-700 fs-6 menu-rounded w-100 fw-semibold" id="#kt_aside_menu" data-kt-menu="true">
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $dashboardactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-element-11 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</span>
							<span class="menu-title">Dashboards</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $dashboardactiveclass;?>" href="<?php echo BASE_URL;?>pages/dashboard.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Default</span>
								</a>
								<!--end:Menu link-->
							</div>
							
							
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $profileactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-element-plus fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
								</i>
							</span>
							<span class="menu-title">Account</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $profileactiveclass;?>" href="<?php echo BASE_URL;?>pages/profile.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">My Profile</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $addAssetsactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-pie-3 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">IT Assets</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $addAssetsactiveclass;?>" href="<?php echo BASE_URL;?>pages/addItAssetsCustomer.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add</span>
								</a>
								<a class="menu-link <?php echo $listAssetsactiveclass;?>" href="<?php echo BASE_URL;?>pages/listItAssetsCustomer.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">List</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $ServiceRequestactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-pie-3 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Service Request</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $ServiceRequestactiveclass;?>" href="<?php echo BASE_URL;?>pages/createServiceRequest.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Create</span>
								</a>
								<a class="menu-link <?php echo $listServiceRequestactiveclass;?>" href="<?php echo BASE_URL;?>pages/listServiceRequest.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">List</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $faqsactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-pie-3 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Help</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $faqsactiveclass;?>" href="<?php echo BASE_URL;?>pages/faq.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					
				</div>
				<!--end::Menu-->
			</div>
		</div>
		<!--end::Aside menu-->
		<!--begin::Footer-->
		<div class="aside-footer flex-column-auto px-4 pt-3 pb-7" id="kt_aside_footer">
			<a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
				<span class="btn-label">Docs & Components</span>
				<i class="ki-duotone ki-document btn-icon fs-2">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</a>
		</div>
		<!--end::Footer-->
	</div>
<!--end::Aside-->