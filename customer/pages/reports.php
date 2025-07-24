<!--- HEADER --->
<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = $_COOKIE['firstname'];
	$_SESSION['email'] = $_COOKIE['email'];
	$_SESSION['user_type'] = $_COOKIE['user_type'];
}
?>
<style>
.form-check-input:checked+.form-check-label {
    color: black !important;
}
</style>
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">

        <!--- SIDEBAR --->
        <?php include('./includes/sidebar.php') ?>

        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <?php include('./includes/topnavbar.php');?>

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid " id="kt_content">
                    <!--begin::Row-->
                    <div class="container-fluid mt-5">
                        <!-- Page Title -->
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <h2 class="fw-bold ">
                                Reports & Analytics
                            </h2>
                            <button class="btn btn-primary btn-sm">
                                <i class="fas fa-download me-2"></i>Export
                            </button>
                        </div>

                        <div class="row g-4">
                            <div class="col-xl-4 mb-xl-10">
                                <!--begin::Chart widget 5-->
                                <div class="card card-flush h-md-100">
                                    <!--begin::Header-->
                                    <div class="card-header flex-nowrap pt-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Asset Inventory Report</span>
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
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
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
                                            <span class="card-label fw-bold text-gray-900">Cost Spent per Category</span>
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
                            <!-- Asset Inventory Report -->
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="me-3">
                                                <i class="fas fa-boxes fa-2x text-success"></i>
                                            </div>
                                            <div>
                                                <h5 class="card-title fw-semibold">Asset Inventory Report</h5>
                                                <p class="text-muted mb-2">Download detailed asset inventory in PDF or
                                                    Excel.</p>
                                                <button class="btn btn-sm btn-success"><i
                                                        class="fas fa-file-export me-1"></i> Export</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- License Usage Report -->
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="me-3">
                                                <i class="fas fa-key fa-2x text-primary"></i>
                                            </div>
                                            <div>
                                                <h5 class="card-title fw-semibold">License Usage Report</h5>
                                                <p class="text-muted mb-2">Track license allocation and utilization
                                                    stats.</p>
                                                <button class="btn btn-sm btn-primary"><i
                                                        class="fas fa-file-export me-1"></i> Export</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Warranty Coverage Summary -->
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="me-3">
                                                <i class="fas fa-shield-alt fa-2x text-warning"></i>
                                            </div>
                                            <div>
                                                <h5 class="card-title fw-semibold">Warranty Coverage Summary</h5>
                                                <p class="text-muted mb-2">Summarize asset warranty periods and
                                                    statuses.</p>
                                                <button class="btn btn-sm btn-warning"><i
                                                        class="fas fa-file-export me-1"></i> Export</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cost Spent per Category -->
                            <div class="col-md-6">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="me-3">
                                                <i class="fas fa-chart-pie fa-2x text-danger"></i>
                                            </div>
                                            <div>
                                                <h5 class="card-title fw-semibold">Cost Spent per Category</h5>
                                                <p class="text-muted mb-2">Breakdown of expenses by service, renewal,
                                                    and license.</p>
                                                <button class="btn btn-sm btn-danger"><i
                                                        class="fas fa-chart-bar me-1"></i> View Report</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end row -->
                    </div>




                    <!--begin::Footer-->
                    <div class="footer pb-4 d-flex flex-lg-column mb-0" id="kt_footer">
                        <!--begin::Container-->
                        <div
                            class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
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
                                    <a href="https://www.infotroop.co.in/" target="_blank"
                                        class="menu-link px-2">About</a>
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
                </div>
            </div>

        </div>
    </div>
</div>


<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->




<!-- footer -->
<?php include('./includes/footer.php') ?>

<script>
// setTimeout(function () {
//     Swal.fire({
//         text: "Page Under Development",
//         icon: "warning",
//         buttonsStyling: false,
//         confirmButtonText: "Ok, got it!",
//         customClass: {
//             confirmButton: "btn btn-primary"
//         }
//     }).then(function (e) {
//         if (e.isConfirmed) {
//             fnGoBack();
//         }
//     });
// }, 2500);
</script>