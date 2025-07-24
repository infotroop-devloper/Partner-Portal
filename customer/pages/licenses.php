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
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title w-100 justify-content-between">
                                <h3 class="fw-bold">Licenses List</h3>
                                <div>
                                    <input type="search" class="form-control " placeholder="Search" id="search">
                                </div>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <div class="table-responsive mb-6">
                                <!--begin::Table-->
                                <table id="kt_datatable_vertical_scroll"
                                    class="table table-bordered text-center align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="ps-4 ">Id</th>
                                            <th>Product Name</th>
                                            <th>Product Type</th>
                                            <th>Model Number</th>
                                            <th>Serial Number</th>
                                            <th>Licence Period</th>
                                            <th>Service Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>OS</td>
                                            <td>Any</td>
                                            <td>asda13</td>
                                            <td>831812098190</td>
                                            <td>[date from-to]</td>
                                            <td><span class="badge text-white bg-danger">Expired</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Assign to User"
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-sync-alt"></i>Renew
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cust 3</td>
                                            <td>Complexity</td>
                                            <td>ds2341</td>
                                            <td>831812098190</td>
                                            <td>[date from-to]</td>
                                            <td><span class="badge text-white bg-success">Active</span></td>
                                            <td>
                                                <!-- <button class="btn btn-sm btn-primary" title="Assign to User"
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-times"></i>Deactivate
                                                </button> -->
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
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
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


<!-- Modal  -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="assignUser">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Licence</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div id="kt_account_profile_details_form" class="form">
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Licence Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="licenceName" id="licenceName" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter Product Name" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Licence Type</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="tel" name="Licence Type" id="Licence Type" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Licence Type" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Model Number</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="tel" name="model_no" id="model_no" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Model Number" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Serial Number</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Serial Number">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="serial_no" id="serial_no" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Serial Number" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="">Date Of Purchase</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" name="dop" id="dop" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Date Of Purchase" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <hr>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Licence Key</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <div class="d-flex align-items-center flex-wrap flex-sm-nowrap">
                                    <input type="password" class="form-control flex-grow-1" data-placeholder="Enter Key"
                                        id="licenceNo" value="Licence2741" />
                                    <button type="button" class="btn btn-sm btn-secondary ms-sm-2 mt-2 mt-sm-0"
                                        title="Show/Hide Licence Key" data-bs-toggle="tooltip"
                                        onclick="togglePassword()">
                                        <i id="toggleIcon" class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Licence Validy</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <label for="progressInput" class="form-label fw-semibold">Validity:</label>
                                <!-- <input type="range" id="progressInput" class="form-range mb-3" min="0" max="100" value="50" oninput="updateProgress(this.value)"> -->

                                <div class="progress" style="height: 25px;">
                                    <div id="progressBar" class="progress-bar" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        50%
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Start date
                                        <br>
                                        <span>[date]</span>
                                    </p>
                                    <p>End date
                                        <br>
                                        <span>[date]</span>
                                    </p>
                                </div>
                                <div class="form-check form-switch mt-4">
                                    <label class="form-check-label" for="autorenewalSubsciption">Subscription auto-renew</label>
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="autorenewalSubsciption">
                                </div>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" onClick="saveMyProfile()" class="btn btn-primary"
                    id="kt_account_profile_details_submit">Save Changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- footer -->
<?php include('./includes/footer.php') ?>
<script>
const searchInput = document.getElementById('search');
const table = document.getElementById('kt_datatable_vertical_scroll');
const rows = table.querySelectorAll('tbody tr');

function filterTable() {
    const searchTerm = searchInput.value.toLowerCase();

    rows.forEach(row => {
        const rowText = row.textContent.toLowerCase();
        const matchesSearch = rowText.includes(searchTerm);
        row.style.display = matchesSearch ? '' : 'none';
    });
}
searchInput.addEventListener('input', filterTable);


function togglePassword() {
    const input = document.getElementById("licenceNo");
    const icon = document.getElementById("toggleIcon");

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}


function updateProgress(value) {
    const progressBar = document.getElementById('progressBar');
    progressBar.style.width = value + '%';
    progressBar.setAttribute('aria-valuenow', value);
    progressBar.textContent = value + '%';

    // Reset color classes
    progressBar.classList.remove('bg-danger', 'bg-warning', 'bg-success');

    // Set color based on value
    if (value < 40) {
        progressBar.classList.add('bg-danger'); // red
    } else if (value < 70) {
        progressBar.classList.add('bg-warning'); // yellow
    } else {
        progressBar.classList.add('bg-success'); // green
    }
}

// Initialize on page load
updateProgress(60);
</script>