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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid mt-6">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">

                        <!--begin::Form-->
                        <h2>Sales Performance</h2>
                            <!--begin::Card body-->
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Monthly Sales Overview :
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <!-- Monthly Sales Overview -->
                                            <div class="row mb-6">
                                                <!-- new Request Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Total Sales (INR) </div>
                                                                    <span id="newRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-rupee fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Total Tickets Closed</div>
                                                                    <span id="approvedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-ticket fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Active Service Requests</div>
                                                                    <span id="declinedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-people-carry fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-danger shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Average Ticket Value</div>
                                                                    <span id="declinedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-coins info fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive mb-6">
                                                <!--begin::Table-->
                                                <table id="kt_datatable_vertical_scroll"
                                                    class="table table-bordered align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fw-bold text-muted bg-light">
                                                            <th class="ps-4 ">Sr no</th>
                                                            <th>Partner name</th>
                                                            <th>Contact</th>
                                                            <th>Email</th>
                                                            <th>Location</th>
                                                            <th>Total Sales</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>aaxc</td>
                                                            <td>213423635</td>
                                                            <td>aaxc</td>
                                                            <td>aaxc</td>
                                                            <td>2.6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>aaxc</td>
                                                            <td>567468409</td>
                                                            <td>aaxc</td>
                                                            <td>aaxc</td>
                                                            <td>4.1</td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            B2B & B2C Sales Breakdown :
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <div class="row my-4">
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        B2B Service Revenue</div>
                                                                    <span id="newRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-donate fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        B2C Service Revenue</div>
                                                                    <span id="approvedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-coins fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Top-Performing Segment </div>
                                                                    <span id="declinedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">[Cateogry]</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-money-bill-alt fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive mb-6">
                                                <!--begin::Table-->
                                                <table id="kt_datatable_vertical_scroll"
                                                    class="table table-bordered align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fw-bold text-muted bg-light">
                                                            <th class="ps-4 ">Sr no</th>
                                                            <th>Tecnician name</th>
                                                            <th>Contact</th>
                                                            <th>Email</th>
                                                            <th>Location</th>
                                                            <th>Avg. rating</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>aaxc</td>
                                                            <td>213423635</td>
                                                            <td>aaxc</td>
                                                            <td>aaxc</td>
                                                            <td>2.6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>aaxc</td>
                                                            <td>567468409</td>
                                                            <td>aaxc</td>
                                                            <td>aaxc</td>
                                                            <td>4.1</td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Customer Acquisition :
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <!-- Customer Acquisition -->
                                            <div class="row mb-6">
                                                <!-- new Request Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        New Customers Onboarded</div>
                                                                    <span id="newRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-user fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Repeat Customers</div>
                                                                    <span id="approvedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-undo-alt fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Customer Retention Rate </div>
                                                                    <span id="declinedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">24%</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-user-check fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-3 col-md-3 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Referral Conversions</div>
                                                                    <span id="declinedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">2</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-user-friends info fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Performance Milestones :
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <!-- Customer Acquisition -->
                                            <div class="row mb-6">
                                                <!-- new Request Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                       Target Achieved This Month</div>
                                                                    <span id="newRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">Yes</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-bullseye fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Bonus Earned </div>
                                                                    <span id="approvedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">12,344</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-hand-holding-usd fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Top Performer Rank</div>
                                                                    <span id="declinedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">12</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-user-graduate fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Payout Summary :
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <!-- Customer Acquisition -->
                                            <div class="row mb-6">
                                                <!-- new Request Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                       Pending Payout</div>
                                                                    <span id="newRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">500</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-reciept fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Released Payout </div>
                                                                    <span id="approvedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">500</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-cash-register fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Active Partners Count Card -->
                                                <div class="col-xl-4 col-md-4 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2"
                                                        style="height: 1">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-xs font-weight-bold text-uppercase mb-1">
                                                                        Next Payout Date</div>
                                                                    <span id="declinedRequestCount"
                                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">12 June</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-calendar-day fs-3x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <!--end::Form-->
                </div>
            </div>

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
/*Swal.fire({
                text: "Unfortunately! Your current plan does not have access to this page.",
                icon: "warning",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            }).then((function(e) {
                location.href = "<?php echo BASE_URL;?>pages/dashboard.php";
            }))*/
$(document).ready(function() {
    var postData = {
        op: 'fetchCustomerList',
        serviceName: 'customer.php'
    };

    async function getData(postData) {
        try {
            let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
            console.log("Received data:", data);
            if (data.status == "success") {
                let jsonObj = data.data;

                const tableBody = document.querySelector(
                    '#kt_customers_table tbody'); // Replace 'yourTableId' with the actual table ID

                // Define the HTML for the row
                var rowHTML = '';
                var srno = 1;
                for (var i = 0; i < jsonObj.length; i++) {
                    rowHTML = rowHTML + `<tr>
									<td>
										<span style="margin-left: 12px;">` + srno + `</span>
									</td>
									<td>
										` + jsonObj[i].customer_name + `
									</td>
									<td>
										` + jsonObj[i].phone_no + `
									</td>
									<td>
										` + jsonObj[i].email_id + `
									</td>
									<td>
										<a href="<?php echo BASE_URL;?>pages/customerDetails.php?id=` + jsonObj[i].id + `" title="Edit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
											
											<i class="ki-duotone ki-eye fs-2">
												<span class="path1"></span>
												<span class="path1"></span>
												<span class="path3"></span>
												</i>
										</a>
									</td>
								</tr>`;
                    srno++;
                }
                var table = $('#kt_customers_table').DataTable();
                $('#kt_customers_table tbody').append(rowHTML);
                table.rows.add($(rowHTML)).draw();
                $('#kt_customers_table').on('click', '.btn-action', function() {
                    var id = $(this).data('id');
                    alert('Action button clicked for ID: ' + id);
                });
            } else {
                Swal.fire({
                    text: data.message,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((function(e) {
                    if (e.isConfirmed) {
                        location.href = "<?php echo BASE_URL;?>index.php";
                    }
                }))
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }
    //getData(postData);
    // Swal.fire({
    // 	text: "Unfortunately your current plan does not have access to this page.",
    // 	icon: "error",
    // 	buttonsStyling: !1,
    // 	confirmButtonText: "Ok, got it!",
    // 	customClass: {
    // 		confirmButton: "btn btn-primary"
    // 	}
    // }).then((function(e) {
    // 	location.href = "<?php echo BASE_URL;?>pages/dashboard.php";
    // }))
});

new DataTable('#kt_datatable_vertical_scroll', {
    layout: {
        top1: 'searchPanes'
    }
});
</script>