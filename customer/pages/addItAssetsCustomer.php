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
                                <h3 class="fw-bold">Assign / Transfer asset to a user</h3>
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
                                            <th class="ps-4 ">assetId</th>
                                            <th>Product Name</th>
                                            <th>Product Type</th>
                                            <th>Model Number</th>
                                            <th>Serial Number</th>
                                            <th>Warranty</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Product 1</td>
                                            <td>Any</td>
                                            <td>Sarvesh</td>
                                            <td>[date]</td>
                                            <td><span class="badge text-white bg-danger">Expired</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Assign to User"
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-user"></i>Assign
                                                </button>
                                                <button class="btn btn-sm btn-primary" title="Transfer to User"
                                                    data-bs-toggle="modal" data-bs-target="#transferUser">
                                                    <i class="fas fa-people-arrows"></i>Transfer
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Product 2</td>
                                            <td>SLA Breach</td>
                                            <td>Madan</td>
                                            <td>[date]</td>
                                            <td><span class="badge text-white bg-warning">Invalid</span></td>

                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Assign to User"
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-user"></i>Assign
                                                </button>
                                                <button class="btn btn-sm btn-primary" title="Transfer to User"
                                                    data-bs-toggle="modal" data-bs-target="#transferUser">
                                                    <i class="fas fa-people-arrows"></i>Transfer
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Product 3</td>
                                            <td>Complexity</td>
                                            <td>Aman</td>
                                            <td>[date]</td>
                                            <td><span class="badge text-white bg-success">Valid</span></td>

                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Assign to User"
                                                    data-bs-toggle="modal" data-bs-target="#assignUser">
                                                    <i class="fas fa-user"></i>Assign
                                                </button>
                                                <button class="btn btn-sm btn-primary" title="Transfer to User"
                                                    data-bs-toggle="modal" data-bs-target="#transferUser">
                                                    <i class="fas fa-people-arrows"></i>Transfer
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


<!-- add assets Modal  -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="assignUser">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Assign Assets</h3>

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
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Product Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="productName" id="productName" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter Product Name" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Product Type</label>
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
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                <span>Date Of Purchase</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Asset's Date Of Purchase">
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
                                <input type="date" name="dop" id="dop" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Date Of Purchase" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <hr>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Department</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="assigned_dept" id="assigned_dept">
                                    <option selected hidden>Select option </option>
                                    <option value="IT">IT</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="HR">HR</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Assign User</label>
                            <div class="col-lg-8 fv-row">
                                <select class="form-select" name="assigned_user" id="assigned_user">
                                    <option selected hidden>Select option </option>
                                    <option value="Sameer">Sameer</option>
                                    <option value="Mayur">Mayur</option>
                                    <option value="Mahesh">Mahesh</option>
                                    <option value="Amol">Amol</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <!--end::Actions-->
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" onClick="saveMyProfile()" class="btn btn-primary"
                    id="kt_account_profile_details_submit">Assign Asset</button>
            </div>
        </div>
    </div>
</div>


<!-- Transfer asset ownership Modal  -->
<div class="modal fade" tabindex="-1" id="transferUser">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Transfer Asset Ownership</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div id="kt_account_profile_details_form" class="form">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Product
                                Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="productName" id="productName" readonly
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter Product Name" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Product
                                Type</label>
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
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Model
                                Number</label>
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
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mb-4" id="userorganizationTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="user-tab" data-bs-toggle="tab"
                                    data-bs-target="#user-tab-pane" type="button" role="tab"
                                    aria-controls="user-tab-pane" aria-selected="true">
                                    User
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="organization-tab" data-bs-toggle="tab"
                                    data-bs-target="#organization-tab-pane" type="button" role="tab"
                                    aria-controls="organization-tab-pane" aria-selected="false">
                                    Organization
                                </button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" id="userorganizationTabContent">
                            <!-- User Tab -->
                            <div class="tab-pane fade show active" id="user-tab-pane" role="tabpanel"
                                aria-labelledby="user-tab">
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Assign
                                        User</label>
                                    <div class="col-lg-8 fv-row">
                                        <select class="form-select" data-placeholder="Select an option">
                                            <option>Select User</option>
                                            <option value="Sameer">Sameer</option>
                                            <option value="Mayur">Mayur</option>
                                            <option value="Mahesh">Mahesh</option>
                                            <option value="Amol">Amol</option>
                                        </select>
                                        <button class="btn btn-sm btn-success mt-2"
                                            onclick="window.location.href='<?php echo BASE_URL; ?>pages/members.php';"
                                            data-bs-dismiss="modal">
                                            <i class="fas fa-plus"></i> Add User
                                        </button>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Enter
                                        notes</label>
                                    <div class="col-lg-8 fv-row">
                                        <textarea class="form-control" name="user_note" rows="3"
                                            placeholder="Enter notes"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- organization Tab -->
                            <div class="tab-pane fade" id="organization-tab-pane" role="tabpanel"
                                aria-labelledby="organization-tab">
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Transfer to Organization</label>
                                    <div class="col-lg-8 fv-row">
                                        <select class="form-select" data-placeholder="Select an option">
                                            <option hidden selected>Select organization</option>
                                            <option value="abc">abc</option>
                                            <option value="bcys">bcys</option>
                                            <option value="asuc">asuc</option>
                                            <option value="asc">asc</option>
                                        </select>
                                        <button class="btn btn-sm btn-success mt-2" data-bs-stacked-modal="#addorganization">
                                            <i class="fas fa-plus"></i> Add organization
                                        </button>

                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Enter
                                        notes</label>
                                    <div class="col-lg-8 fv-row">
                                        <textarea class="form-control" name="organization_note" rows="3"
                                            placeholder="Enter notes"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <!--end::Actions-->
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" onClick="saveMyProfile()" class="btn btn-light-primary"
                    id="kt_account_profile_details_submit">Transfer</button>
            </div>
        </div>
    </div>
</div>

<!-- Add organization -->
<div class="modal fade" tabindex="-1" id="addorganization">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addorganizationLabel">Add Organization</h5>
                <button class="btn btn-sm btn-light-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <form id="organizationForm">
                    <div class="mb-3">
                        <label for="ownerName" class="required form-label">Owner Name</label>
                        <input type="text" class="form-control" id="ownerName" name="ownerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="orgName" class="required form-label">Organization Name</label>
                        <input type="text" class="form-control" id="orgName" name="orgName" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="required form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="required form-label">Phone No</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="required form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-light-primary" form="organizationForm">Save Organization</button>
            </div>
        </div>
    </div>
</div>




<?php include('./includes/footer.php') ?>


<script>
document.querySelectorAll("[data-bs-stacked-modal]").forEach((element) => {
    if (element.getAttribute("data-kt-initialized") === "1") return;

    element.setAttribute("data-kt-initialized", "1");

    element.addEventListener("click", function (e) {
        e.preventDefault();

        const modalEl = document.querySelector(this.getAttribute("data-bs-stacked-modal"));

        if (modalEl) {
            modalEl.classList.add("stacked");

            const backdrop = document.createElement("div");
            backdrop.className = "modal-backdrop fade stacked-backdrop";
            document.body.appendChild(backdrop);
            setTimeout(() => backdrop.classList.add("show"), 10);

            const modal = new bootstrap.Modal(modalEl, { backdrop: false });
            modal.show();

            // Cleanup: remove stacked classes on close
            modalEl.addEventListener("hidden.bs.modal", () => {
                document.querySelectorAll(".stacked-backdrop").forEach(el => el.remove());
                modalEl.classList.remove("stacked");
            });
        }
    });
});

</script>

