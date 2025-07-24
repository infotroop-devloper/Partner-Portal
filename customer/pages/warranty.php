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
                                <h3 class="fw-bold">View Assets with Warranty </h3>
                                <button type="button" class="btn btn-sm btn-success"
                                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/warrantyRenewal.php';">
                                    Get a Quote
                                </button>
                            </div>
                        </div>
                        <div>

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
                                            <th class="ps-4 ">assetId</th>
                                            <th>Asset Name</th>
                                            <th>Product Type</th>
                                            <th>Model Number</th>
                                            <th>Serial Number</th>
                                            <th>Date Of Purchase</th>
                                            <th>Warranty</th>
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
                                            <td>[date]</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="View Warranty Certificate"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                                                    <i class="fas fa-eye"></i>View
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
                                            <td><span class="badge text-white bg-success px-3">Active</span></td>
                                            <td>[date]</td>
                                            <td>[date]</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="View Warranty Certificate"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                                                    <i class="fas fa-eye"></i>View
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
                <h5>View Warranty Certificate</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <img src="../assets/media/img/coming-soon.jpg"
                    style="width: 100%; max-height: 70vh; overflow-y: scroll; object-fit: contain;" alt="Coming Soon">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" title="Download warranty certificates"
                    data-bs-toggle="tooltip">Downlaod</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('./includes/footer.php') ?>
<script>


</script>