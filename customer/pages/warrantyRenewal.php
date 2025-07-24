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
                    <div class="card p-4 mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0"  data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title w-100 justify-content-between">
                                <h3 class="fw-bold">Get a Warranty renewal quote</h3>
                                <button type="button" class="btn btn-sm btn-primary"
                                    onclick="window.location.href='<?php echo BASE_URL; ?>index.php';">
                                    View Infotroop Plans
                                </button>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show ">
                            <div class="table-responsive mb-6">
                                <!--begin::Table-->
                                <table id="kt_datatable_vertical_scroll"
                                    class="table table-bordered text-center align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="ps-4 ">Asset Id</th>
                                            <th>Asset Name</th>
                                            <th>Product Type</th>
                                            <th>Model Number</th>
                                            <th>Serial Number</th>
                                            <th>Date Of Purchase</th>
                                            <th>Warranty Status</th>
                                            <th>Warranty Period</th>
                                            <th>Warranty Proof</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cust 1</td>
                                            <td>Any</td>
                                            <td>Sarvesh</td>
                                            <td>[date]</td>
                                            <td>[date]</td>
                                            <td><span class="badge text-white bg-danger">Expired</span></td>
                                            <td>[date]</td>
                                            <td>[file]</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Get a Quote"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                                                    <i class="fas fa-file-invoice"></i>Get Quote
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cust 3</td>
                                            <td>Complexity</td>
                                            <td>Aman</td>
                                            <td>[date]</td>
                                            <td>[date]</td>
                                            <td><span class="badge text-white bg-warning">Invalid</span></td>
                                            <td>[date]</td>
                                            <td>[file]</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Get a Quote"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                                                    <i class="fas fa-file-invoice"></i>Get Quote
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Content-->
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
                            <a href="https://www.infotroop.co.in/our-team" target="_blank"
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


<!-- View Warranty Modal  -->
<div class="modal fade" tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Get a Renewal Quote</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs mb-4" id="warrentyTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="OEM-tab" data-bs-toggle="tab" data-bs-target="#OEM-tab-pane"
                            type="button" role="tab" aria-controls="OEM-tab-pane" aria-selected="true">
                            OEM
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="infotroop-tab" data-bs-toggle="tab"
                            data-bs-target="#infotroop-tab-pane" type="button" role="tab"
                            aria-controls="infotroop-tab-pane" aria-selected="false">
                            InfoTroop AMC
                        </button>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" id="warrentyTabContent">
                    <!-- User Tab -->
                    <div class="tab-pane fade show active" id="OEM-tab-pane" role="tabpanel" aria-labelledby="OEM-tab">
                        <div class="row mb-6">
                            <label for="AssetName" class="col-lg-2 col-form-label required fw-semibold fs-6">Asset
                                Name</label>
                            <div class="col-lg-10 fv-row">
                                <input type="text" class="form-control" id="AssetName"
                                    placeholder="Name of the Asset" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="ModelNumber" class="col-lg-2 col-form-label required fw-semibold fs-6">Model
                                Number</label>
                            <div class="col-lg-10 fv-row">
                                <input type="text" class="form-control" id="ModelNumber"
                                    placeholder="Model Number of the Asset" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="SerialNumber" class="col-lg-2 col-form-label required fw-semibold fs-6">Serial
                                Number</label>
                            <div class="col-lg-10 fv-row">
                                <input type="text" class="form-control" id="SerialNumber"
                                    placeholder="Serial Number of the Asset" />
                            </div>
                        </div>
                        <div class="row mb-6 align-items-center">
                            <label for="WarrentyCertificate"
                                class="col-lg-2 col-form-label required fw-semibold fs-6 d-flex align-items-center">
                                Warranty Certificate
                                <span class="ms-1" data-bs-toggle="tooltip" title="If already have any">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <div class="col-lg-10 fv-row">
                                <input type="file" class="form-control" id="WarrentyCertificate"
                                    name="WarrentyCertificate">
                            </div>
                        </div>

                    </div>

                    <!-- organization Tab -->
                    <div class="tab-pane fade" id="infotroop-tab-pane" role="tabpanel" aria-labelledby="infotroop-tab">
                        <div class="row mb-6">
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Asset Name</label>
                            <div class="col-lg-10 fv-row">
                                <input type="text" class="form-control" id="AssetName"
                                    placeholder="Name of the Asset" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Asset Count</label>
                            <div class="col-lg-10 fv-row">
                                <input type="text" class="form-control" id="ModelNumber"
                                    placeholder="Number of Assets" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Asset Type</label>
                            <div class="col-lg-10 fv-row">
                                <input type="text" class="form-control" id="SerialNumber"
                                    placeholder="eg: laptop,CCTV" />
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">Warranty Duration</label>
                            <div class="col-lg-10 fv-row">
                                <input class="form-control" name="duration" placeholder="eg: 1 year, 3 years or 5 years" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" title="Get a Quote" data-bs-toggle="tooltip">Get
                    Quote</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('./includes/footer.php') ?>
<script>


</script>