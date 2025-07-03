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
                        <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Current
                            Plans</span>
                    </div>

                    <div class="row my-4">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Active Plans</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">8</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-file-alt fs-3x text-gray-300"></i>
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
                                                AMC Plans</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">8</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-book fs-3x text-gray-300"></i>
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
                                                ATS Plans</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">8</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-search fs-3x text-gray-300"></i>
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
                                                Custom Plans for B2B</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">8</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-briefcase fs-3x text-gray-300"></i>
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
                                    <span class="card-label fw-bold fs-3 mb-1">Plan Details Snapshot</span>
                                </h3>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table align-middle gs-0 gy-4 fw-bold text-center table-bordered">
                                        <thead>
                                            <tr class="fw-bold bg-light">
                                                <th class="ps-4 rounded-start">Plan Name</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Services Covered</th>
                                                <th>Target Audience</th>
                                                <th>Active Subscriptions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Plan 1</td>
                                                <td>AMC</td>
                                                <td>32</td>
                                                <td>6 hrs</td>
                                                <td>B2C</td>
                                                <td>8</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit plan"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-success" title="Change Status"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-info" title="Duplicate & Modify"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-file-import"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning" title="View Subscribers"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-user"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Plan 2</td>
                                                <td>ATS</td>
                                                <td>15</td>
                                                <td>4 hrs</td>
                                                <td>B2B</td>
                                                <td>8</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit plan"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" title="Change Status"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-info" title="Duplicate & Modify"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-file-import"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning" title="View Subscribers"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-user"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Plan 3</td>
                                                <td>Custom</td>
                                                <td>66</td>
                                                <td>2 hrs</td>
                                                <td>Government</td>
                                                <td>8</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit plan"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-success" title="Change Status"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-info" title="Duplicate & Modify"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-file-import"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning" title="View Subscribers"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-user"></i>
                                                    </button>
                                                </td>
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