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
                        <div class="card-header border-0"  data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title w-100 justify-content-between">
                                <h3 class="fw-bold">Raise request for asset</h3>
                                <div>
                                    <a class="btn btn-success rounded-circle py-2 px-3" title="Call Support"
                                        data-bs-toggle="tooltip" href="tel:+91 1234567890">
                                        <i class="fas fa-phone-alt"></i>
                                    </a>

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
                                            <th class="ps-4 ">Asset Id</th>
                                            <th>Product Name</th>
                                            <th>Product Type</th>
                                            <th>Model Number</th>
                                            <th>Serial Number</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Laptop</td>
                                            <td>Hardware</td>
                                            <td>bfh213</td>
                                            <td>47892659</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Raising Request."
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-ticket"></i>Raise ticket
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>OS</td>
                                            <td>Software</td>
                                            <td>ahfb123</td>
                                            <td>47892659</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Raising Request."
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-ticket"></i>Raise ticket
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Firewall</td>
                                            <td>Others</td>
                                            <td>vnasdn245</td>
                                            <td>47892659</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Raising Request."
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-ticket"></i>Raise ticket
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


            <!-- Footer bar -->
            <div class="footer pb-4 d-flex flex-lg-column" id="kt_footer">
                <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-gray-900 order-2 order-md-1">
                        <span class="text-muted fw-semibold me-1"><?php echo date('Y'); ?>&copy;</span>
                        <a href="https://www.infotroop.co.in/" target="_blank"
                            class="text-gray-800 text-hover-primary">InfoTroop IT Solutions Pvt. Ltd.</a>
                    </div>
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
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


<!-- add assets Modal  -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="assignUser">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Raise Service Request</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
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
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Product Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="productName" id="productName" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Product Name" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Product Type</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="tel" name="Product Type" id="Product Type" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Product Type" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Model Number</label>
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
                                <span>Serial Number</span>
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
                        <form id="raiseServiceRequest">
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Issue Category</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select class="form-select" data-placeholder="Select an option" name="assigned_user"
                                        id="assigned_user">
                                        <option seletced hidden>Select Type</option>
                                        <option value="Hardware repair">Hardware repair</option>
                                        <option value="Software Issue">Software Issue</option>
                                        <option value="Installation">Installation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>


                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span>Note (If any)</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea class="form-control" rows="3"
                                        placeholder="Enter Detailed note (if Any)"></textarea>
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Upload Proof</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Upload Proof of the Issue- photo or log file">
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
                                    <input type="file" class="form-control" name="" id="">
                                </div>
                                <!--end::Col-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" onclick="resetRaiseServiceForm()">Clear</button>
                <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" onClick="saveMyProfile()" class="btn btn-primary"
                    id="kt_account_profile_details_submit">Raise Ticket</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer file -->
<?php include('./includes/footer.php') ?>


<script>

function resetRaiseServiceForm() {
    // Reset the form fields
    document.getElementById('raiseServiceRequest').reset();

    // Reset Select2 dropdown
    $('#assigned_user').val(null).trigger('change');
}
</script>