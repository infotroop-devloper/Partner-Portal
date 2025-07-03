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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Orders</span>
                    <div class="row my-4">
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                New Orders Today</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-boxes fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-danger shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Orders Awaiting Processing</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clock fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Avg. Response Time</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hourglass-half fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table with Filters -->
                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">New Orders</span>
                                </h3>
                                <div class="card-toolbar gap-2">
                                    <div>
                                        <input type="search" class="form-control" name="search" id="search"
                                            placeholder="Search..">
                                    </div>
                                    <!-- <div class="d-flex justify-content-end">
                                        <select id="orderStatusFilter" class="form-select w-120px">
                                            <option selected hidden>Select filter</option>
                                            <option value="new">New</option>
                                            <option value="approved">Approved</option>
                                            <option value="shipped">Shipped</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <select id="productFilter" class="form-select w-120px">
                                            <option selected hidden>Select filter</option>
                                            <option value="approved">abc</option>
                                            <option value="shipped">def</option>
                                            <option value="cancelled">ghi</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                            class="table table-bordered align-middle gs-0 gy-4">
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light text-center">
                                                <th class="ps-4 rounded-start">Order ID </th>
                                                <th>Customer name</th>
                                                <th>Item/Service Ordered</th>
                                                <th>Delivery / Service Address</th>
                                                <th>Prefered Date & Time</th>
                                                <th>Cutomer Note</th>
                                                <th>Payment Status</th>
                                                <th class="rounded-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>1</td>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td>Paid</td>
                                                <td>
                                                    <button class="btn-primary btn btn-sm" title="Accept Order"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                    <button class="btn-success btn btn-sm" title="Assign Technician "
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-user"></i>
                                                    </button>
                                                    <button class="btn-info btn btn-sm" title="Notify Customer"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-bell"></i>
                                                    </button>
                                                    <button class="btn-warning btn btn-sm" title="Mark as Priority"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-stopwatch"></i>
                                                    </button>
                                                    <button class="btn-danger btn btn-sm" title="Cancle"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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


</script>
