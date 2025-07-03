<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = $_COOKIE['firstname'];
	$_SESSION['email'] = $_COOKIE['email'];
	$_SESSION['user_type'] = $_COOKIE['user_type'];
}
?>
<style>
.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
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
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl"
                style="margin: 0px 10px;max-width: none;">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Partner
                        Overview</span>
                    <div class="row my-4">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Make in India Partners</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fab fa-linkedin-in fs-3x text-gray-300"></i>
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
                                                Certified Partners</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-handshake fs-3x text-gray-300"></i>
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
                                                Active Project Contributors</div>
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
                                               Product Categories Represented</div>
                                            <!-- <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">[List]</span> -->
                                                <button class="btn btn-sm btn-primary">Products</button>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-boxes fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10"
                        id="kt_create_account_stepper">
                        <!--begin::Aside-->
                        <div
                            class="card flex justify-content-center justify-content-xl-center flex-row-auto w-100 w-xl-300px w-xxl-400px">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <p class="fs-2 card-title fw-bold mb-0">Filters</p>
                                <button class="btn btn-sm btn-danger" id="clearFiltersBtn">Clear</button>
                            </div>
                            <!--begin::Wrapper-->
                            <div class="card-body  px-6 px-lg-10 px-xxl-15 py-10">
                                <!--begin::Nav-->

                                <div>
                                    <!--begin::Step 1-->
                                    <div class="fv-row mt-4 form">
                                        <!--begin::Label-->
                                        <label class=" fs-5 fw-bold mb-2">State</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Select..." name="state">
                                            <option value="" disabled selected>Select..</option>
                                            <option value="India">India</option>
                                            <option value="USA">USA</option>
                                            <option value="Austrilla">Austrilla</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                    <div class="fv-row mt-6">
                                        <!--begin::Label-->
                                        <label class=" fs-5 fw-bold mb-2">City</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Select..." name="city">
                                            <option value="" disabled selected>Select..</option>
                                            <option value="India">India</option>
                                            <option value="USA">USA</option>
                                            <option value="Austrilla">Austrilla</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                    <div class="fv-row mt-6">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-semibold mb-2">Industry Type</label>
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Select..." name="industry_type">
                                            <option value="" disabled selected>Select Type</option>
                                            <option value="Solution Provider">Solution Provider</option>
                                            <option value="Value-Added Reseller">Value-Added Reseller</option>
                                            <option value="Managed Service Provider">Managed Service Provider</option>
                                            <option value="Cloud Service Partner">Cloud Service Partner</option>
                                            <option value="Service Provider(Gov. Org & PSUs)">Service Provider (Gov. Org
                                                & PSUs)</option>
                                            <option value="Consumer Partner">Consumer Partner</option>
                                            <option value="Corporate Partner">Corporate Partner</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->

                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->

                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->

                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->

                                    <!--end::Step 4-->
                                    <!--begin::Step 5-->

                                    <!--end::Step 5-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="card d-flex flex-row-fluid">
                            <div class="card-header">
                                <p class="card-title fs-2 fw-bold">
                                    Partner Overview
                                </p>
                            </div>
                            <!--begin::Form-->
                            <div class="table-responsive text-center">
                                <!--begin::Table-->
                                <table id="kt_datatable_vertical_scroll"
                                    class="table align-middle table-bordered">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th>Partner name</th>
                                            <th>Sector</th>
                                            <th>Location</th>
                                            <th>Certification Status</th>
                                            <th>Contact Person</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="card-body">
                                        <tr>
                                            <td>asd</td>
                                            <td>Electronics</td>
                                            <td>asd</td>
                                            <td>Pending</td>
                                            <td>asd</td>
                                            <td>
                                                <a href="<?php echo BASE_URL;?>pages/dummy.php?id=`+jsonObj[i].id+`"
                                                    title="View profile" data-bs-toggle="tooltip"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-user"></i>
                                                </a>
                                                <a href="<?php echo BASE_URL;?>pages/dummy.php?id=`+jsonObj[i].id+`"
                                                    title="Collaborate" data-bs-toggle="tooltip"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-handshake"></i>
                                                </a>
                                                <a href="<?php echo BASE_URL;?>pages/dummy.php?id=`+jsonObj[i].id+`"
                                                    title="Partner Directory" data-bs-toggle="tooltip"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-download">
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>asd</td>
                                            <td>Hardware</td>
                                            <td>asd</td>
                                            <td>Certified</td>
                                            <td>asd</td>
                                            <td>
                                                <a href="<?php echo BASE_URL;?>pages/dummy.php?id=`+jsonObj[i].id+`"
                                                    title="View profile" data-bs-toggle="tooltip"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-user"></i>
                                                </a>
                                                <a href="<?php echo BASE_URL;?>pages/dummy.php?id=`+jsonObj[i].id+`"
                                                    title="Collaborate" data-bs-toggle="tooltip"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-handshake"></i>
                                                </a>
                                                <a href="<?php echo BASE_URL;?>pages/dummy.php?id=`+jsonObj[i].id+`"
                                                    title="Partner Directory" data-bs-toggle="tooltip"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-download">
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Post-->
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
document.getElementById('clearFiltersBtn').addEventListener('click', function() {
    // Reset all select dropdowns
    const selects = document.querySelectorAll('.card-body select');
    selects.forEach(select => {
        select.selectedIndex = 0;

        // If you're using Select2 plugin, update it as well:
        if ($(select).hasClass('select2-hidden-accessible')) {
            $(select).val(null).trigger('change');
        }
    });

    // Display default results here
    // Example: call a function that fetches unfiltered/default results
    displayDefaultResults(); // implement this function as needed
});

// Dummy function to represent action after clearing
function displayDefaultResults() {
    console.log("Filters cleared. Displaying default results...");
    // Your logic here: e.g., reload data table, refresh cards, etc.
}
</script>