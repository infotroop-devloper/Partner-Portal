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
                                <h3 class="fw-bold">View Invoices</h3>
                                <div>
                                    <select class="form-select" id="filterStatus">
                                        <option value="" selected id="clearOption">All</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                    </select>
                                </div>
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
                                            <th class="ps-4 ">Invoice Id</th>
                                            <th>Dealer Name</th>
                                            <th>Date Of Purchase</th>
                                            <th>Invoice Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cust 1</td>
                                            <td>[date]</td>
                                            <td><span class="badge text-white bg-danger">Unpaid</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="View Invoices Certificate"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                                                    <i class="fas fa-eye"></i>View
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cust 3</td>
                                            <td>[date]</td>
                                            <td><span class="badge text-white bg-success px-4">Paid</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="View Invoices Certificate"
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


<!-- View Invoices Modal  -->
<div class="modal fade" tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>View Invoices</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <img src="../assets/media/img/Invoice.jpg"
                    style="width: 100%; max-height: 70vh; overflow-y: scroll; object-fit: contain;" alt="Coming Soon">
            </div>
            <hr>
            <div class="row text-center align-items-center gap-2 my-4">
                <label class="col-md-2" for="promo_code">Promo code:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="promo_code" placeholder="Promo Code"/>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" title="Download Invoice"
                    data-bs-toggle="tooltip">Downlaod</button>
                <a href="https://books.infotroop.co.in/" class="btn btn-success" title="Proceed to Payment" target="_blank"
                    data-bs-toggle="tooltip">
                    Payment
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('./includes/footer.php') ?>
<script>
document.getElementById('filterStatus').addEventListener('change', function() {
    const selected = this.value.toLowerCase();
    const rows = document.querySelectorAll('#kt_datatable_vertical_scroll tbody tr');

    rows.forEach(row => {
        const cellText = row.cells[3]?.textContent.toLowerCase() || '';
        const shouldShow = !selected || cellText === selected;
        row.style.display = shouldShow ? '' : 'none';
    });
});
</script>