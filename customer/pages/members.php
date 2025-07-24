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
[data-bs-theme="dark"] .form-check-input:checked+.form-check-label{
    color: white !important;
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
                <div class="content flex-row-fluid" id="kt_content">
                    <div class="card p-4 mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0"  data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div
                                class="card-title w-100 d-flex justify-content-between align-items-center flex-wrap gap-3">
                                <!-- Left: Heading -->
                                <h3 class="fw-bold mb-0">Users List</h3>

                                <!-- Right: Button + Input -->
                                <div class="d-flex align-items-center gap-3" style="min-width: 300px;">
                                    <!-- Button with fixed width -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addUser" style="min-width: 150px;">
                                        <i class="fas fa-plus"></i> Add User
                                    </button>

                                    <!-- Input with fixed width -->
                                    <input type="search" class="form-control form-control" placeholder="Search" id="search"/>
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
                                            <th class="ps-4 ">User ID</th>
                                            <th>User Name</th>
                                            <th>Phone No.</th>
                                            <th>Department</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Sarvesh</td>
                                            <td>[phone]</td>
                                            <td>IT</td>
                                            <td><span class="badge text-white bg-danger">Inactive</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="View Warranty Certificate"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                                                    <i class="fas fa-pen"></i>Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Aman</td>
                                            <td>[phone]</td>
                                            <td>Sales</td>
                                            <td><span class="badge text-white bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="View Warranty Certificate"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                                                    <i class="fas fa-pen"></i>Edit
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



<!-- Add Users modal  -->
<div class="modal fade" id="addUser">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New User</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form id="addForm">

                    <div data-mdb-input-init class="form-outline mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label class="required form-label" for="name">Full name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter Name" required />
                        </div>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="required form-label" for="dept"> Department Name</label>
                        <select type="text" id="dept" class="form-select">
                            <option hidden selected>Select Department</option>
                            <option value="IT">IT</option>
                            <option value="Sales">Sales</option>
                            <option value="Management">Management</option>
                            <option value="HR">HR</option>
                        </select>
                            <button class="btn btn-sm btn-success mt-4"
                             onclick="window.location.href='<?php echo BASE_URL; ?>/pages/departments.php';">
                                <i class="fas fa-plus"></i>Add department
                            </button>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="required form-label" for="address">Address</label>
                        <input type="text" id="address" class="form-control" placeholder="Enter address" required />
                    </div>


                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="required form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter email" required />
                    </div>


                    <div data-mdb-input-init class="form-outline mb-8">
                        <label class="required form-label" for="phone">Phone</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Enter Phone" required />
                    </div>

                    <div class="form-check d-flex">
                        <input class="form-check-input me-2" type="checkbox" value="" id="status" checked />
                        <label class="required form-check-label" for="status"> Status </label>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" onclick="resetRaiseServiceForm()">Clear</button>
                <button type="submit" class="btn btn-light-primary" onsubmit="resetRaiseServiceForm()"
                    data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-plus"></i>Add User</button>

            </div>
        </div>
    </div>
</div>


<!-- View Warranty Modal  -->
<div class="modal fade" id="kt_modal_3">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New User</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form id="editForm">

                    <div data-mdb-input-init class="form-outline mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label class="required form-label" for="name">Full name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter Name" required />
                        </div>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="required form-label" for="dept"> Department name</label>
                        <select type="text" id="dept" class="form-select">
                            <option hidden selected>Select Department</option>
                            <option value="IT">IT</option>
                            <option value="Sales">Sales</option>
                            <option value="Management">Management</option>
                            <option value="HR">HR</option>
                        </select>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="required form-label" for="address">Address</label>
                        <input type="text" id="address" class="form-control" placeholder="Enter address" required />
                    </div>


                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="required form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter email" required />
                    </div>


                    <div data-mdb-input-init class="form-outline mb-8">
                        <label class="required form-label" for="phone">Phone</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Enter Phone" required />
                    </div>

                    <div class="form-check d-flex">
                        <input class="form-check-input me-2" type="checkbox" value="" id="status" />
                        <label class="required form-check-label" for="status"> Status </label>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" onclick="resetForm()">Clear</button>
                <button type="submit" class="btn btn-light-primary" onsubmit="submitForm()" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-plus"></i>Add User</button>

            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include('./includes/footer.php') ?>
<script>
function resetRaiseServiceForm() {
    // Reset the form fields
    document.getElementById('addForm').reset();
    document.getElementById('editForm').reset();
}

function submitRaiseServiceForm() {
    // Reset the form fields
    document.getElementById('addForm').submit();
}

function submitForm() {
    document.getElementById('editForm').submit();
}

// Search

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
</script>