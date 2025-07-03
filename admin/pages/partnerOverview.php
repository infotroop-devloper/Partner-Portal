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
                        <div class="col-md-3" style="height: 150px;">
                            <div class="card overflow-hidden mb-5 mb-xl-10"
                                style="height:150px;background: linear-gradient(180deg, rgb(11 75 191), rgb(223 223 251));">
                                <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                    <div class="mb-4 px-9">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-light-success  fs-base">
                                                <span id="newRequestCount"
                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1"
                                                    style="color:black !important;"></span>
                                            </span>
                                        </div>
                                        <span class="fs-2 fw-semibold text-gray-500"
                                            style="color:white !important;">Total Make in India Partners </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="height: 150px;">
                            <div class="card card-flush mb-xl-10"
                                style="height:150px;background: linear-gradient(180deg, rgb(11 75 191), rgb(223 223 251));">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-light-danger fs-base">
                                                <span id="approvedRequestCount"
                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1"
                                                    style="color:black !important;"></span>
                                            </span>
                                        </div>
                                        <span class="text-gray-500 pt-1 fw-semibold fs-2"
                                            style="color:white !important;">Certified Partners</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-end pt-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="height: 150px;">
                            <div class="card overflow-hidden mb-5 mb-xl-10"
                                style="height:150px;background: linear-gradient(180deg, rgb(11 75 191), rgb(223 223 251));">
                                <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                    <div class="mb-4 px-9">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-light-danger  fs-base">
                                                <span id="declinedRequestCount"
                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1"
                                                    style="color:black !important;"></span>
                                            </span>
                                        </div>
                                        <span class="fs-2 fw-semibold text-gray-500"
                                            style="color:white !important;">Active Project Contributors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="height: 150px;">
                            <div class="card overflow-hidden mb-5 mb-xl-10"
                                style="height:150px;background: linear-gradient(180deg, rgb(11 75 191), rgb(223 223 251));">
                                <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                    <div class="mb-4 px-9">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-light-warning  fs-base">
                                                <span id="declinedRequestCount"
                                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1"
                                                    style="color:black !important;"></span>
                                            </span>
                                        </div>
                                        <span class="fs-2 fw-semibold text-gray-500"
                                            style="color:white !important;">Product Categories Represented </span>
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
                                <button class="btn btn-sm btn-light-primary" id="clearFiltersBtn">Clear</button>
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
                                    class="table align-middle gs-0 gy-4 table-bordered">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="min-w-200px">Partner name</th>
                                            <th class="min-w-200px">Sector</th>
                                            <th class="min-w-300px">Location</th>
                                            <th class="min-w-150px">Certification</th>
                                            <th class="min-w-150px">Status</th>
                                            <th class="min-w-150px">Contact Person</th>
                                            <th class="min-w-100px">Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="card-body">
                                        <tr>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>
                                                <a href="<?php echo BASE_URL;?>pages/dummy.php?id=`+jsonObj[i].id+`"
                                                    title="Edit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <i class="ki-duotone ki-pencil fs-2" style="color:#1b97ff;">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>asd</td>
                                            <td>
                                                <a href="<?php echo BASE_URL;?>pages/editPartnerDetails.php?id=`+jsonObj[i].id+`"
                                                    title="Edit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <i class="ki-duotone ki-pencil fs-2" style="color:#1b97ff;">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
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
                            class="text-gray-800 text-hover-primary">Infotroop</a>
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