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
                    <h2>Revenue Insights</h2>
                    <!--begin:: Card body-->
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Total Revenue Overview :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
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
                                                                    Total Revenue (Till Date)</div>
                                                                <span id="newRequestCount"
                                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
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
                                                                    This Month's Revenue</div>
                                                                <span id="approvedRequestCount"
                                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-calendar fs-3x text-gray-300"></i>
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
                                                                    Growth Rate (MoM)</div>
                                                                <span id="declinedRequestCount"
                                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1">[Percentage]</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-chart-line fs-3x text-gray-300"></i>
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
                                                                    Revenue Goal Progress</div>
                                                                <span id="declinedRequestCount"
                                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1">[Percentage]</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-bullseye info fs-3x text-gray-300"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card p-5">
                                            <div class="card-header">
                                                <p class="card-title">Revenue Graph</p>
                                            </div>
                                            <div id="kt_charts_widget_13_chart" class="w-100 h-325px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Revenue by Service Category :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <!-- Monthly Sales Overview -->
                                    <div class="row mb-6">
                                        <!-- new Request Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Hardware AMC / ATS</div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-hdd fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                OEM Warranty Renewals</div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-certificate fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Break-Fix / Repair Requests</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-wrench fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Software / Licenses / Tools</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-laptop-code info fs-3x text-gray-300"></i>
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
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Revenue by Customer Type & Top 3 Location :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <div class="row mb-6">
                                        <!-- new Request Count Card -->
                                        <div class="col-xl-4 col-md-4 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Individual / B2C Revenue</div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-user-tie fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-4 col-md-4 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Corporate / B2B Revenue</div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-briefcase fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-4 col-md-4 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Government / GeM Projects</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-landmark fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="card p-3 h-100">
                                                <div class="card-header">
                                                    <p class="card-title">Revenue by Customer Graph</p>
                                                </div>
                                                <div id="kt_charts_widget_5"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card p-3 h-100">
                                                <div class="card-header">
                                                    <p class="card-title">Revenue by Top 4 Locations</p>
                                                </div>
                                                <div
                                                    class="card-body card-body d-flex justify-content-between flex-column mt-3">
                                                    <div class="d-flex flex-stack">
                                                        <div class="fas fa-map-marker-alt fs-1 m-4"></div>
                                                        <div
                                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                            <div class="me-5">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Pune</a>
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">India</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                                                <div class="m-0">
                                                                    <span class="badge badge-light-danger fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>0.4%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <div class="d-flex flex-stack">
                                                        <div class="fas fa-map-marker-alt fs-1 m-4"></div>
                                                        <div
                                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                            <div class="me-5">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Mumbai</a>
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">India</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                                                <div class="m-0">
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>4.1%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <div class="d-flex flex-stack">
                                                        <div class="fas fa-map-marker-alt fs-1 m-4"></div>
                                                        <div
                                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                            <div class="me-5">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">New
                                                                    Delhi</a>
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">India</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                                                <div class="m-0">
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>8.3%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <div class="d-flex flex-stack">
                                                        <div class="fas fa-map-marker-alt fs-1 m-4"></div>
                                                        <div
                                                            class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                            <div class="me-5">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Banglore</a>
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">India</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                                                <div class="m-0">
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>1.9%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Card body-->
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    Profitability Metrics :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    <!-- Monthly Sales Overview -->
                                    <div class="row mb-6">
                                        <!-- new Request Count Card -->
                                        <div class="col-xl-4 col-md-4 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Average Margin Per Ticket</div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-chart-pie fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-4 col-md-4 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Cost vs. Revenue Ratio</div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-chart-bar fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-4 col-md-4 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                High-Margin Services</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-chart-line fs-3x text-gray-300"></i>
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
                            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFive">
                                    Payout Forecast :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingFive">
                                <div class="accordion-body">
                                    <!-- Cards -->
                                    <div class="row mb-6">
                                        <div class="col-xl-4 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Expected Payout This Month</div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-receipt fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Pending Invoices</div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-file-invoice-dollar fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Projected Next Month Revenue</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar-alt fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Table -->
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
                                '#kt_customers_table tbody'
                            ); // Replace 'yourTableId' with the actual table ID

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