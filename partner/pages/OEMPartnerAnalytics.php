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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl"
                style="margin: 0px 10px;max-width: none;">
                <!--begin::Post-->
                <div class="content flex-row-fluid " id="kt_content">
                    <!--begin::Row-->
                    <div class="d-flex justify-content-between">
                        <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">OEM Partner
                        Analytics</span>
                        <button class="btn btn-sm btn-primary" title="Export Partner Analytics Report as PDF" data-bs-toggle="tooltip"><i class="fas fa-download"></i> Export Report</button>
                        </div>
                    
                    <div class="row my-4">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Sales by OEM</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-donate fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Active Products/Services</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-people-carry fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Partner Rating</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-star fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Issue Resolution Time</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clock fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Monthly Revenue
                        Graph</span>
                    <div class="row my-4">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Graph</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <div id="kt_charts_widget_13_chart" class="w-100 h-325px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Resolved Tickets</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button href="#" class="btn btn-sm btn-primary">Compare</button>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table align-middle gs-0 gy-4 fw-bold text-center table-bordered">
                                        <thead>
                                            <tr class="fw-bold bg-light">
                                                <th></th>
                                                <th class="ps-4 rounded-start">ID</th>
                                                <th>OEM Name</th>
                                                <th>Sales Volume</th>
                                                <th>Tickets Raised</th>
                                                <th>Avg. Resolution Time</th>
                                                <th>Market Share</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>1</td>
                                                <td>ABC Tech</td>
                                                <td>₹15,00,000</td>
                                                <td>32</td>
                                                <td>6 hrs</td>
                                                <td>23%</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>2</td>
                                                <td>XYZ Networks</td>
                                                <td>₹8,00,000</td>
                                                <td>15</td>
                                                <td>4 hrs</td>
                                                <td>12%</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>3</td>
                                                <td>PQR Info</td>
                                                <td>₹12,00,000</td>
                                                <td>66</td>
                                                <td>2 hrs</td>
                                                <td>52%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--begin::Footer-->
                    <div class="footer pb-4 d-flex flex-lg-column" id="kt_footer">
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

<?php include('./includes/footer.php') ?>

<script>

</script>