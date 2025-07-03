<!--- HEADER --->
<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : '';
	$_SESSION['email'] = $_COOKIE['email'];
	$_SESSION['user_type'] = $_COOKIE['user_type'];
}
?>

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">

        <!--- SIDEBAR --->
        <?php include('./includes/sidebar.php') ?>

        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <?php include('./includes/topnavbar.php');?>

            <section class="banner-img my-2" style="background-image: url('../assets/media/img/banner-image5.jpg'); 
							background-size: cover; background-position: top; height: 250px;">
            </section>
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl"
                style="margin: 0px 10px;max-width: none;">

                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <span class="card-label fw-bold text-gray-900" style="font-size:20px;margin-left:10px;">Overview
                        Widgets</span>
                    <div class="row my-5">
                        <!-- new Request Count Card -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div
                                                class="text-xs badge badge-primary font-weight-bold text-uppercase mb-1">
                                                Total Pending Requests</div><br>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Partners Count Card -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div
                                                class="text-xs badge badge-success font-weight-bold text-uppercase mb-1">
                                                Active Partners</div><br>
                                            <span id="approvedRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1"></span>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-check fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Partners Count Card -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div
                                                class="text-xs badge badge-danger font-weight-bold text-uppercase mb-1">
                                                Inactive Partners</div><br>
                                            <span id="declinedRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1"></span>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-check fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="card-label fw-bold text-gray-900" style="font-size:20px;margin-left:10px;">Active
                        Tickets & Work Summary</span>
                    <div class="row g-5 g-xl-10 g-xl-10">
                        <!-- <div class="col-xl-4 mb-xl-10">
									<div class="card h-md-100" dir="ltr">
										<div class="card-body d-flex flex-column flex-center">
											<div class="mb-2">
												<h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried 
												<br />new 
												<span class="fw-bolder">Invoice Manager ?</span></h1>
												<div class="py-10 text-center">
													<img src="<?php echo BASE_URL; ?>assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
													<img src="<?php echo BASE_URL; ?>assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
												</div>
											</div>
											<div class="text-center mb-1">
												<a class="btn btn-sm btn-primary me-2" href="apps/ecommerce/customers/listing.html">Try now</a>
												<a class="btn btn-sm btn-light" href="apps/invoices/view/invoice-1.html">Learn more</a>
											</div>
										</div>
									</div>
								</div> -->
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::Chart widget 5-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Header-->
                                <div class="card-header flex-nowrap pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Top Selling Products</span>
                                        <span class="text-gray-500 pt-2 fw-semibold fs-6">8k social visitors</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5 ps-6">
                                    <div id="kt_charts_widget_5" class="min-h-auto"></div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 5-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Top Selling Categories</span>
                                        <!-- <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Products</span> -->
                                    </h3>
                                    <!--end::Title-->

                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Chart container-->
                                    <div id="kt_charts_widget_17_chart" class="w-100 h-400px"
                                        style="width: 80% !important;margin: 0px auto;"></div>
                                    <!--end::Chart container-->
                                </div>
                                <!--end::Body-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-4 mb-xxl-10">
                            <!--begin::List widget 7-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Header-->
                                <div class="card-header py-7">
                                    <!--begin::Statistics-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0.37%</span>
                                            <!--end::Title-->
                                            <!--begin::Badge-->
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>8.02%</span>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">Partner Growth Insights</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <!--begin::Items-->
                                    <div class="mb-0">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-magnifier fs-3 text-gray-600">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Team
                                                        Growth</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                        link clicks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.24%</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-center">
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>2.4%</span>
                                                    <!--end::label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-tiktok fs-3 text-gray-600">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Performance
                                                        Metrics</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                        link clicks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.94%</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-center">
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>9.4%</span>
                                                    <!--end::label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-sms fs-3 text-gray-600">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Leaderboard
                                                        & Incentives</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                        link clicks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3">1.23%</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-center">
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>0.2%</span>
                                                    <!--end::label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-icon fs-3 text-gray-600">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals
                                                        Customers</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                        link clicks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.08%</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-center">
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>0.4%</span>
                                                    <!--end::label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-abstract-25 fs-3 text-gray-600">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                        link clicks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 me-3">0.46%</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-center">
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>8.3%</span>
                                                    <!--end::label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 7-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xxl-8 mb-5 mb-xl-10">
                            <!--begin::Chart widget 13-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Inventory & Tools</span>
                                        <span class="text-gray-500 pt-2 fw-semibold fs-6">Stock Inventory</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Remove</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Mute</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Chart container-->
                                    <div id="kt_charts_widget_13_chart" class="w-100 h-325px"></div>
                                    <!--end::Chart container-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 13-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::List widget 8-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7 mb-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">State Wise Business
                                            Summary</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">6 state share 97% sales</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-sm btn-light">View All</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <!--begin::Items-->
                                    <div class="m-0">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <!-- <img src="<?php echo BASE_URL; ?>assets/media/flags/united-states.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" /> -->
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Maharashtra</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <!-- <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span> -->
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>2.6%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <!-- <img src="<?php echo BASE_URL; ?>assets/media/flags/brazil.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" /> -->
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Gujarat</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <!-- <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social Channels</span> -->
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>0.4%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <!-- <img src="<?php echo BASE_URL; ?>assets/media/flags/turkey.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" /> -->
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Madhya
                                                        Pradesh</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <!-- <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span> -->
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>0.2%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <!-- <img src="<?php echo BASE_URL; ?>assets/media/flags/france.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" /> -->
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Karnataka</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <!-- <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span> -->
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>4.1%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <!-- <img src="<?php echo BASE_URL; ?>assets/media/flags/india.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" /> -->
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Goa</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <!-- <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span> -->
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>8.3%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <!-- <img src="<?php echo BASE_URL; ?>assets/media/flags/sweden.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" /> -->
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Rajasthan</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <!-- <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span> -->
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>1.9%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::LIst widget 8-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::List widget 9-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header py-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Digital Marketing Insights</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-sm btn-light">View All</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
                                    <!--begin::Item-->

                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="<?php echo BASE_URL; ?>assets/media/svg/brand-logos/linkedin-1.svg"
                                            class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
                                                    In</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Media</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>0.4%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->

                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="<?php echo BASE_URL; ?>assets/media/svg/brand-logos/youtube-3.svg"
                                            class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                                    Channel</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>4.1%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="<?php echo BASE_URL; ?>assets/media/svg/brand-logos/instagram-2-1.svg"
                                            class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>8.3%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Flag-->
                                        <img src="<?php echo BASE_URL; ?>assets/media/svg/brand-logos/facebook-3.svg"
                                            class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                        <!--end::Flag-->
                                        <!--begin::Section-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Facebook</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>1.9%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 9-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-5 mb-xl-10">
                            <!--begin::Chart widget 14-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Top 4 Performars</span>
                                        <span class="text-gray-500 pt-2 fw-semibold fs-6">Performance &
                                            achievements</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications" />
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span
                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Chart container-->
                                    <div id="kt_charts_widget_14_chart" class="w-100 h-350px"></div>
                                    <!--end::Chart container-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 14-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::List widget 12-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Visits by Source</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">29.4k visitors</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-end">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-rocket fs-3 text-gray-600">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Container-->
                                            <div
                                                class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Direct
                                                        Source</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                        link clicks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,067</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>2.6%</span>
                                                    <!--end::label-->
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-tiktok fs-3 text-gray-600">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Container-->
                                            <div
                                                class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Social
                                                        Networks</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All
                                                        Social Channels</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">24,588</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>4.1%</span>
                                                    <!--end::label-->
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-sms fs-3 text-gray-600">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Container-->
                                            <div
                                                class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Email
                                                        Newsletter</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                                        Campaigns</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>0.2%</span>
                                                    <!--end::label-->
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-icon fs-3 text-gray-600">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Container-->
                                            <div
                                                class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact
                                                        Radius visits</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">6,578</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>0.4%</span>
                                                    <!--end::label-->
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-abstract-25 fs-3 text-gray-600">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Container-->
                                            <div
                                                class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many
                                                        Sources</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">79,458</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <!--begin::label-->
                                                    <span class="badge badge-light-success fs-base">
                                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>8.3%</span>
                                                    <!--end::label-->
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Link-->
                                        <div class="text-center pt-8 d-1">
                                            <a href="#" class="text-primary opacity-75-hover fs-6 fw-bold">View Store
                                                Analytics
                                                <i class="ki-duotone ki-arrow-right fs-3 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 12-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Chart widget 15-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Products Wise Sales</span>
                                        <!-- <span class="text-gray-500 pt-2 fw-semibold fs-6">Statistics by Countries</span> -->
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Remove</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Mute</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Chart container-->
                                    <div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-350px"></div>
                                    <!--end::Chart container-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 15-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>
            <!--end::Container-->


            <!--begin::Footer-->
            <div class="footer pb-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-gray-900 order-2 order-md-1">
                        <span class="text-muted fw-semibold me-1"><?php echo date('Y'); ?>&copy;</span>
                        <a href="https://www.infotroop.co.in/" target="_blank"
                            class="text-gray-800 text-hover-primary">InfoTroop IT Solutions Pvt. Ltd.</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                        <li class="menu-item">
                            <a href="https://www.infotroop.co.in/" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://www.infotroop.co.in/contact" target="_blank"
                                class="menu-link px-2">Support</a>
                        </li>

                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->

<?php include('./includes/footer.php') ?>
<script>
am5.ready(function() {
    var root = am5.Root.new("kt_charts_widget_17_chart");

    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    var chart = root.container.children.push(
        am5percent.PieChart.new(root, {
            endAngle: 270
        })
    );

    var series = chart.series.push(
        am5percent.PieSeries.new(root, {
            valueField: "value",
            categoryField: "category",
            endAngle: 270
        })
    );

    series.states.create("hidden", {
        endAngle: -90
    });

    series.data.setAll([{
        category: "Hardware",
        value: 501.10
    }, {
        category: "Application Softwares",
        value: 301.9
    }, {
        category: "Operating Systems",
        value: 201.1
    }, {
        category: "Design Softwares",
        value: 165.8
    }, {
        category: "Businiess Applications",
        value: 139.9
    }]);

    series.appear(1000, 100);

});
</script>