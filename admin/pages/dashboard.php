<!--- HEADER --->
<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = $_COOKIE['firstname'];
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
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl"
                style="margin: 0px 10px;max-width: none;">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <section class="banner-img container-fluid" style="background-image: url('../assets/media/img/banner-image5.jpg'); 
							background-size: cover; background-position: top; height: 300px;">
                    </section>
                    <!--begin::Row-->
                    <p class="card-label fw-bold text-gray-900" style="font-size:20px; margin: 10px;">Overview
                        Widgets</p>
                    <div class="row mb-6">
                        <!-- new Request Count Card -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Pending Requests</div>
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
                                            <div class="text-xs badge badge-success font-weight-bold text-uppercase mb-1">
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
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Inactive Partners</div>
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
                        <div class="col-xl-12 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Top Selling Graph</span>
                                        <!-- <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Products</span> -->
                                    </h3>
                                    <!--end::Title-->

                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Chart container-->
                                    <div class="card card-bordered">
                                        <div class="card-body">
                                            <div id="kt_amcharts_1" style="height: 500px;"></div>
                                        </div>
                                    </div>
                                    <!--end::Chart container-->
                                </div>
                                <!--end::Body-->
                            </div>
                        </div>
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-xl-10">
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
                        <div class="col-xl-6 mb-5 mb-xl-10">
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
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->

                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-5 mb-xxl-10">
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
                        <div class="col-xxl-7 mb-5 mb-xl-10">
                            <div class="row g-5 g-xl-10 g-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-6 mb-xl-10">
                                    <!--begin::List widget 8-->
                                    <div class="card card-flush h-xl-100">
                                        <!--begin::Header-->
                                        <div class="card-header pt-7 mb-5">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">State Wise Business
                                                    Summary</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">6 state share 97%
                                                    sales</span>
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
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
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
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
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
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                <div class="col-xl-6 mb-xl-10">
                                    <!--begin::List widget 9-->
                                    <div class="card card-flush h-xl-100">
                                        <!--begin::Header-->
                                        <div class="card-header py-7">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Digital Marketing
                                                    Insights</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social
                                                    visitors</span>
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
                                        <div
                                            class="card-body card-body d-flex justify-content-between flex-column pt-3">
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
                                                        <a href="#"
                                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
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
                                                                <i
                                                                    class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
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
                                                                <i
                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                                                <i
                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                                                <i
                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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

                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->

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
                <!--end::Post-->
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
<!--begin::Modals-->
<!--begin::Modal - Create Project-->
<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Project</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Nav-->
                        <div class="stepper-nav justify-content-center py-2">
                            <!--begin::Step 1-->
                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Project Type</h3>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Project Settings</h3>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Budget</h3>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Build A Team</h3>
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Set First Target</h3>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Step 6-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Upload Files</h3>
                            </div>
                            <!--end::Step 6-->
                            <!--begin::Step 7-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Completed</h3>
                            </div>
                            <!--end::Step 7-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Form-->
                        <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                            id="kt_modal_create_project_form" method="post">
                            <!--begin::Type-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-7 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Project Type</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15" data-kt-buttons="true">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" checked="checked" name="project_type"
                                                value="1" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="d-flex">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-profile-circle fs-3hx">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="ms-4">
                                                    <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal
                                                        Project</span>
                                                    <span class="fw-semibold fs-4 text-muted">If you need more info,
                                                        please check it out</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" name="project_type" value="2" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="d-flex">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-rocket fs-3hx">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="ms-4">
                                                    <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Team
                                                        Project</span>
                                                    <span class="fw-semibold fs-4 text-muted">Create corporate account
                                                        to manage users</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="type-next">
                                            <span class="indicator-label">Project Settings</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Type-->
                            <!--begin::Settings-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Project Settings</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_modal_create_project_settings_logo">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or
                                                        click to upload.</h3>
                                                    <span class="fw-semibold fs-4 text-muted">Upload up to 10
                                                        files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Customer</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Select..."
                                            name="settings_customer">
                                            <option></option>
                                            <option value="1">Keenthemes</option>
                                            <option value="2">CRM App</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Project Name</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify project name">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Enter Project Name" value="StockPro Mobile App"
                                            name="settings_name" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Project Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid" rows="3"
                                            placeholder="Enter Project Description"
                                            name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Release Date</label>
                                        <!--end::Label-->
                                        <!--begin::Wrapper-->
                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid ps-12"
                                                placeholder="Pick date range" name="settings_release_date" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="required fs-6 fw-semibold">Notifications</label>
                                                <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or
                                                    Email</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Checkboxes-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        value="email" name="settings_notifications[]" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-semibold">Email</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        value="phone" checked="checked"
                                                        name="settings_notifications[]" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-semibold">Phone</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Checkboxes-->
                                        </div>
                                        <!--begin::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="settings-previous">Project Type</button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="settings-next">
                                            <span class="indicator-label">Budget</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Settings-->
                            <!--begin::Budget-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Budget</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Setup Budget</span>
                                            <span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover"
                                                data-bs-html="true"
                                                data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Dialer-->
                                        <div class="position-relative w-lg-250px"
                                            id="kt_modal_create_project_budget_setup" data-kt-dialer="true"
                                            data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100"
                                            data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                            <!--begin::Decrease control-->
                                            <button type="button"
                                                class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                data-kt-dialer-control="decrease">
                                                <i class="ki-duotone ki-minus-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--end::Decrease control-->
                                            <!--begin::Input control-->
                                            <input type="text" class="form-control form-control-solid border-0 ps-12"
                                                data-kt-dialer-control="input" placeholder="Amount" name="budget_setup"
                                                readonly="readonly" value="$50" />
                                            <!--end::Input control-->
                                            <!--begin::Increase control-->
                                            <button type="button"
                                                class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                data-kt-dialer-control="increase">
                                                <i class="ki-duotone ki-plus-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--end::Increase control-->
                                        </div>
                                        <!--end::Dialer-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-9" data-kt-buttons="true"
                                            data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="budget_usage"
                                                            value="1" checked="checked" />
                                                    </span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise
                                                            Usage</span>
                                                        <span class="fw-semibold fs-7 text-gray-600">Withdraw money to
                                                            your bank account per transaction under $50,000
                                                            budget</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="budget_usage"
                                                            value="2" />
                                                    </span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme
                                                            Usage</span>
                                                        <span class="fw-semibold fs-7 text-gray-600">Withdraw money to
                                                            your bank account per transaction under $50,000
                                                            budget</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check budget planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="budget_allow" checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="budget-previous">Project Settings</button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="budget-next">
                                            <span class="indicator-label">Build Team</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Budget-->
                            <!--begin::Team-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Build a Team</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Invite Teammates</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Add project memnbers by name or email.."
                                            name="invite_teammates" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Label-->
                                        <div class="fs-6 fw-semibold mb-2">Team Members</div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-6.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                            Smith</a>
                                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                            Macy</a>
                                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-1.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                            Smith</a>
                                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-5.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                            Bean</a>
                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-25.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                            Cox</a>
                                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                            Collins</a>
                                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-9.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                            Mitcham</a>
                                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                            Wild</a>
                                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                            Owen</a>
                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-23.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                            Wilson</a>
                                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                            Bold</a>
                                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-12.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                            Crown</a>
                                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                            Doe</a>
                                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-13.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                            Kunic</a>
                                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-21.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                            Wilder</a>
                                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="<?php echo BASE_URL; ?>/assets/media/avatars/300-5.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                            Bean</a>
                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Notice-->
                                    <div class="d-flex flex-stack mb-15">
                                        <!--begin::Label-->
                                        <div class="me-5 fw-semibold">
                                            <label class="fs-6">Adding Users by Team Members</label>
                                            <div class="fs-7 text-muted">If you need more info, please check budget
                                                planning</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                checked="checked" />
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="team-previous">Budget</button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="team-next">
                                            <span class="indicator-label">Set Target</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Team-->
                            <!--begin::Targets-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Set First Target</h1>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <label class="fs-6 fw-semibold mb-2">Target Title</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Enter Target Title" name="Project Launch" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row g-9 mb-8">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Assign</label>
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select a Team Member"
                                                name="target_assign">
                                                <option></option>
                                                <option value="1">Karina Clark</option>
                                                <option value="2" selected="selected">Robert Doe</option>
                                                <option value="3">Niel Owen</option>
                                                <option value="4">Olivia Wild</option>
                                                <option value="5">Sean Bean</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                                            <div class="position-relative d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                    <span class="path6"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Datepicker-->
                                                <input class="form-control form-control-solid ps-12"
                                                    placeholder="Pick date range" name="target_due_date" />
                                                <!--end::Datepicker-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <label class="fs-6 fw-semibold mb-2">Target Details</label>
                                        <textarea class="form-control form-control-solid" rows="2" name="target_details"
                                            placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <label class="required fs-6 fw-semibold mb-2">Tags</label>
                                        <input class="form-control form-control-solid" value="Important, Urgent"
                                            name="target_tags" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check budget planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="target_allow" checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold">Notifications</label>
                                                <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or
                                                    Email</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Checkboxes-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        value="email" name="target_notifications[]" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-semibold">Email</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        value="phone" checked="checked" name="target_notifications[]" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-semibold">Phone</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Checkboxes-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="targets-previous">Build a Team</button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="targets-next">
                                            <span class="indicator-label">Upload Files</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Targets-->
                            <!--begin::Files-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Upload Files</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                            <a href="#" class="link-primary">Project Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_modal_create_project_files_upload">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or
                                                        click to upload.</h3>
                                                    <span class="fw-semibold fs-4 text-muted">Upload up to 10
                                                        files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                        <!--End::Label-->
                                        <!--begin::Files-->
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="<?php echo BASE_URL; ?>/assets/media/svg/files/pdf.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Avionica
                                                            Technical Requirements</a>
                                                        <div class="fw-semibold text-muted">230kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="<?php echo BASE_URL; ?>/assets/media/svg/files/doc.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9
                                                            Degree CURD draftplan</a>
                                                        <div class="fw-semibold text-muted">3.6mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="<?php echo BASE_URL; ?>/assets/media/svg/files/css.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">User
                                                            CRUD Styles</a>
                                                        <div class="fw-semibold text-muted">85kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="<?php echo BASE_URL; ?>/assets/media/svg/files/ai.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
                                                            Initial Logo</a>
                                                        <div class="fw-semibold text-muted">40kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div class="d-flex flex-stack py-4">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="<?php echo BASE_URL; ?>/assets/media/svg/files/tif.svg"
                                                            alt="icon" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Tower
                                                            Hill Bilboard</a>
                                                        <div class="fw-semibold text-muted">27mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                        </div>
                                        <!--end::Files-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check budget planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="target_allow" checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="files-previous">Set First Target</button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="files-next">
                                            <span class="indicator-label">Complete</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Files-->
                            <!--begin::Complete-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12 text-center">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-900">Project Created!</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">If you need more info, please check how
                                            to create project</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-center pb-20">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="complete-start">Create New Project</button>
                                        <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
                                            title="Coming Soon">View Project</a>
                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4">
                                        <img src="<?php echo BASE_URL; ?>/assets/media/illustrations/sketchy-1/9.png"
                                            alt="" class="mww-100 mh-350px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Complete-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--begin::Container-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Create Project-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>
                    <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                    data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <i
                            class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search"
                            value="" placeholder="Search by username, full name or email..."
                            data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                            data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span
                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                            data-kt-search-element="clear">
                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold mb-5">Recently searched:</h3>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <a href="#"
                                    class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                    class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                    class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                    class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                    class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Suggestions-->
                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                value="0" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Smith</a>
                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                value="1" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                Macy</a>
                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                value="2" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                Smith</a>
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                value="3" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                Bean</a>
                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                value="4" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                Cox</a>
                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                value="5" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                Collins</a>
                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                value="6" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                Mitcham</a>
                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                value="7" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                Wild</a>
                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                value="8" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                Owen</a>
                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                value="9" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-23.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                Wilson</a>
                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                value="10" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Bold</a>
                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                value="11" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                Crown</a>
                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                value="12" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                Doe</a>
                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                value="13" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-13.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                Miller</a>
                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                value="14" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                Kunic</a>
                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                value="15" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                src="<?php echo BASE_URL; ?>/assets/media/avatars/300-21.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                Wilder</a>
                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                value="16" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                Owen</a>
                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                    class="btn btn-active-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
                                    Selected Users</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-semibold py-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="<?php echo BASE_URL; ?>/assets/media/illustrations/sketchy-1/1.png" alt=""
                                    class="w-100 h-200px h-sm-325px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/svg/brand-logos/google-icon.svg"
                        class="h-20px me-3" />Invite Gmail Contacts
                </div>
                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3"
                    placeholder="Type or paste emails here"></textarea>
                <!--end::Textarea-->
                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                    <!--end::Heading-->
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                        Smith</a>
                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                        Macy</a>
                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                        Collins</a>
                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-9.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                        Mitcham</a>
                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                        Wild</a>
                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                        Wilson</a>
                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                        Doe</a>
                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-13.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                        Miller</a>
                                    <div class="fw-semibold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                        Kunic</a>
                                    <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-21.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                        Wilder</a>
                                    <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                    data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-semibold text-muted">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--end::Modals-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    const countPostData = {
        op: 'fetchNewPartnerRequestsCount',
        serviceName: 'partners.php'
    };

    async function fetchNewRequestCount(postData) {
        try {
            const response = await sendRequestSecure(postData); // Assumes function is defined globally
            console.log("Request Count Response:", response);

            if (response.status === "success") {
                const count = response.data.new_partner_requests_count ?? 0;
                $('#newRequestCount').text(count);
            } else {
                $('#newRequestCount').text('0');
            }
        } catch (error) {
            console.error("Error fetching request count:", error);
            $('#newRequestCount').text('0');
        }
    }

    fetchNewRequestCount(countPostData);
});
$(document).ready(function() {
    const countPostData = {
        op: 'fetchActivePartnerRequestsCount',
        serviceName: 'partners.php'
    };

    async function fetchActivePartnerRequestsCount(postData) {
        try {
            const response = await sendRequestSecure(postData); // Assumes function is defined globally
            console.log("Approved Count Response:", response);

            if (response.status === "success") {
                const count = response.data.active_partner_requests_count ?? 0;
                $('#approvedRequestCount').text(count);
            } else {
                $('#approvedRequestCount').text('0');
            }
        } catch (error) {
            console.error("Error fetching request count:", error);
            $('#approvedRequestCount').text('0');
        }
    }

    fetchActivePartnerRequestsCount(countPostData);
});
$(document).ready(function() {
    const countPostData = {
        op: 'fetchInActivePartnerRequestsCount',
        serviceName: 'partners.php'
    };

    async function fetchInActivePartnerRequestsCount(postData) {
        try {
            const response = await sendRequestSecure(postData); // Assumes function is defined globally
            console.log("Declined Count Response:", response);

            if (response.status === "success") {
                const count = response.data.Inactive_partner_requests_count ?? 0;
                $('#declinedRequestCount').text(count);
            } else {
                $('#declinedRequestCount').text('0');
            }
        } catch (error) {
            console.error("Error fetching request count:", error);
            $('#declinedRequestCount').text('0');
        }
    }

    fetchInActivePartnerRequestsCount(countPostData);
});
</script>

<?php include('./includes/footer.php') ?>