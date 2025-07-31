<!--- HEADER --->
<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = $_COOKIE['firstname'];
	$_SESSION['email'] = $_COOKIE['email'];
	$_SESSION['user_type'] = $_COOKIE['user_type'];
}
?>
<style>
.form-check-input:checked+.form-check-label {
    color: black !important;
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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid " id="kt_content">
                    <!--begin::Row-->
                    <div class="d-flex justify-content-between">
                        <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Create New
                            Plan</span>
                    </div>

                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">Plans Overview</span>
                                    </h3>
                                </div>
                                <div class="card-toolbar g-2">
                                    <div class="mx-2">
                                        <input type="search" class="form-control" id="search" placeholder="Search..">
                                    </div>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#createPlanModal">
                                        <i class="fas fa-plus"></i> Add New Offer
                                    </button>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table align-middle gs-0 gy-4 fw-bold text-center table-bordered">
                                        <thead>
                                            <tr class="fw-bold bg-light">
                                                <th class="ps-4 rounded-start">Plan Type</th>
                                                <th>Plan Name</th>
                                                <th>Price</th>
                                                <th>Included Services (if any)</th>
                                                <th>Target Audience</th>
                                                <th>Validity & SLA Terms</th>
                                                <th>Legal Terms / Inclusions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>AMC</td>
                                                <td>Plan 1</td>
                                                <td>3200 yr /300 m</td>
                                                <td>Buisness Consultant</td>
                                                <td>Free Tools</td>
                                                <td>6 months</td>
                                                <td>[file]</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit Plan"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-success" title="Change Status"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="View Subscribers"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ATS</td>
                                                <td>Plan 2</td>
                                                <td>1500 y / 300 m</td>
                                                <td>Silver Partner</td>
                                                <td>Remote support</td>
                                                <td>4 days</td>
                                                <td>[file]</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit Plan"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" title="Change Status"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="View Subscribers"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-eye"></i>
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


<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->

<!-- Create Plan Modal -->
<div class="modal fade" id="createPlanModal" tabindex="-1" aria-labelledby="createPlanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="createPlanModalLabel">Create New Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="createPlanForm">
                <div class="modal-body row g-3">

                    <div class="my-4 row">
                        <div class="col-md-4">
                            <label for="planType" class="form-label">Plan Type</label>
                            <select class="form-select" id="planType" name="planType" required>
                                <option value="" hidden selected>Select Type</option>
                                <option value="AMC">AMC</option>
                                <option value="ATS">ATS</option>
                                <option value="Hybrid">Hybrid</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="planName" class="form-label">Plan Name</label>
                            <input type="text" class="form-control" id="planName" name="planName" required>
                        </div>

                        <div class="col-md-4">
                            <label for="pricing" class="form-label">Pricing (Yearly)</label>
                            <input type="text" class="form-control" id="pricing" name="pricing" placeholder="₹9999"
                                required>
                        </div>
                    </div>

                    <div class="my-4 row">
                        <div class="col-md-6">
                            <label class="form-label d-block mb-2">Included Services</label>
                            <div class="card p-3 shadow-sm">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="service1" name="services[]"
                                        value="Warranty Check">
                                    <label class="form-check-label" for="service1">Warranty Check</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="service2" name="services[]"
                                        value="Free Tools">
                                    <label class="form-check-label" for="service2">Free Tools</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="service3" name="services[]"
                                        value="Remote Support">
                                    <label class="form-check-label" for="service3">Remote Support</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service4" name="services[]"
                                        value="On-site Visits">
                                    <label class="form-check-label" for="service4">On-site Visits</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col-md-12 mb-2">
                                <label for="audience" class="form-label">Target Audience</label>
                                <select class="form-select" id="audience" name="audience" required>
                                    <option hidden selected>Select Target Audience</option>
                                    <option value="B2C">B2C</option>
                                    <option value="B2B">B2B</option>
                                    <option value="Enterprise">Enterprise</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="validity" class="form-label">Validity & SLA Terms</label>
                                <input type="text" class="form-control" id="validity" name="validity"
                                    placeholder="e.g. 12 months, SLA: 48hrs" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-4">
                        <label for="legalTerms" class="form-label">Legal Terms / Inclusions</label>
                        <input type="file" class="form-control" id="legalTerms" name="legalTerms"
                            accept=".pdf,.doc,.docx">
                    </div>

                    <div class="col-md-12 my-4">
                        <label class="form-label">Optional Add-Ons</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="addons[]" value="Cloud Backup">
                            <label class="form-check-label">Cloud Backup</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="addons[]" value="Software Licenses">
                            <label class="form-check-label">Software Licenses</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="addons[]" value="Priority Support">
                            <label class="form-check-label">Priority Support</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="addons[]"
                                value="Data Recovery Service">
                            <label class="form-check-label">Data Recovery</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Avail Free Trail</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="freeTrail" value="Free Trail">
                            <label class="form-check-label">Free Trail</label>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Save</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Finalize &
                        Publish</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- footer -->
<?php include('./includes/footer.php') ?>

<script>
document.getElementById('createPlanForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());
    data.services = formData.getAll('services[]');
    data.addons = formData.getAll('addons[]');

    console.log("New Plan Created:", data);

    $(".indicator-label").css("display", "block");
    $(".indicator-progress").css("display", "none");
    Swal.fire({
        text: 'New Plan Created',
        icon: "success",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    })

    // TODO: AJAX to save or dynamically add to table

    const modal = bootstrap.Modal.getInstance(document.getElementById('createPlanModal'));
    modal.hide();
    this.reset();
});




document.getElementById('search').addEventListener('input', function() {
    const keyword = this.value.toLowerCase();
    const rows = document.querySelectorAll('#kt_datatable_vertical_scroll tbody tr');

    rows.forEach(row => {
        const rowText = row.innerText.toLowerCase();
        row.style.display = rowText.includes(keyword) ? '' : 'none';
    });
});
</script>