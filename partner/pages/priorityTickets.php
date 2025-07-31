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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl"
                style="margin: 0px 10px;max-width: none;">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Priority
                        Tickets</span>
                    <div class="row my-4">
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                High Priority Tickets</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ticket fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Critical Tickets (SLA Breach Likely)</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-stopwatch-20 fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Medium Priority Tickets</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hourglass-half fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Low Priority Tickets</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hourglass-start fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Critical Tickets Overdue</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-times fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Tickets Needing Immediate Action </div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-stopwatch-20 fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Open Tickets</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <input class="form-control" type="search" name="search" id="search"
                                            placeholder="Search...">
                                        <select class="form-select" aria-label="Select category">
                                            <option hidden selected>Select filter</option>
                                            <option value="">All Categories</option>
                                            <option value="Technical Issues">Technical Issues</option>
                                            <option value="Billing & Invoicing">Billing & Invoicing</option>
                                            <option value="General Inquiries">General Inquiries</option>
                                            <option value="Account Suspensions">Account Suspensions</option>
                                        </select>
                                    </div>
                                </div>
                            

                        </div>
                        <div class="card-body py-3">
                            <div class="table-responsive">
                                <table id="kt_datatable_vertical_scroll"
                                    class="table align-middle gs-0 gy-4 fw-bold text-center">
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="ps-4 rounded-start">Ticket ID </th>
                                            <th>Customer name</th>
                                            <th>Service Type</th>
                                            <th>Assigned Technician</th>
                                            <th>Date Created</th>
                                            <th>Priority</th>
                                            <th>Note (If any)</th>
                                            <th>Status</th>
                                            <th class="rounded-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>1</td>
                                        <td>Madan</td>
                                        <td>Technical Issues</td>
                                        <td>Mahesh</td>
                                        <td>12 June 2025</td>
                                        <td>High</td>
                                        <td></td>
                                        <td><span class="badge bg-success text-white fw-bold">OnGoing</span>
                                        </td>

                                        <td>
                                            <button class="btn btn-sm btn-primary" title="Assign Priority Technicians"
                                                data-bs-toggle="tooltip">
                                                <i class="fas fa-user-cog"></i>Assign
                                            </button>
                                            <button class="btn btn-sm btn-primary" title="Notify Management"
                                                data-bs-toggle="tooltip">
                                                <i class="fas fa-bell"></i>Notify
                                            </button>
                                            <button class="btn btn-sm btn-primary" title="Excalate"
                                                data-bs-toggle="tooltip">
                                                <i class="fas fa-user-graduate"></i> Excalate
                                            </button>
                                            <button class="btn btn-sm btn-primary"
                                                title="Update Ticket Status to Urgent" data-bs-toggle="tooltip">
                                                <i class="fas fa-sync-alt"></i>Update Status
                                            </button>
                                        </td>
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
// Wait for table to load first

document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search');
    const categorySelect = document.querySelector('.form-select[aria-label="Select category"]');
    const table = document.getElementById('kt_datatable_vertical_scroll');
    const rows = table.querySelectorAll('tbody tr');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categorySelect.value.toLowerCase();

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const rowText = row.innerText.toLowerCase();
            const category = cells[2]?.innerText.toLowerCase(); // 3rd column (index 2)

            const matchesSearch = rowText.includes(searchTerm);
            const matchesCategory = !selectedCategory || category.includes(selectedCategory);

            row.style.display = (matchesSearch && matchesCategory) ? '' : 'none';
        });
    }

    // Attach event listeners
    searchInput.addEventListener('input', filterTable);
    categorySelect.addEventListener('change', filterTable);
});
</script>

