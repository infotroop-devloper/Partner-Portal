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
                    <div class="row my-4">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Tickets Assigned</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ticket fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Unassigned Tickets</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-times fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Average Time to Assign</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hourglass-half fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Technician Performance</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-cog fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
                            <h1 class="m-0 font-weight-bold mb-3 mb-md-0">Ticket Assignment</h1>

                            <div class="d-flex flex-column flex-md-row gap-2">
                                <input class="form-control" type="search" name="search" id="search"
                                    placeholder="Search...">
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row">
                                <!-- Popular Articles -->
                                <div class="table-responsive mb-6">
                                    <!--begin::Table-->
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table table-bordered text-center align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4 ">Ticket ID</th>
                                                <th>Customer Name</th>
                                                <th>Assigned To</th>
                                                <th>Status</th>
                                                <th>Date Assigned</th>
                                                <th>Time to Resolve</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>aaxc</td>
                                                <td>Abc</td>
                                                <td><span class="badge text-white bg-warning">In Process</span></td>
                                                <td>[date]</td>
                                                <td>[hrs]</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Reassign Tickets"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>Reassign
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="Set Priority"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-bell"></i>Priority
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="Assign Tickets"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-user-cog"></i>Assign Tickets
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>aaxc</td>
                                                <td>Pqr</td>
                                                <td><span class="badge text-white bg-success">Resolved</span></td>
                                                <td>[date]</td>
                                                <td>[hrs]</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Reassign Tickets"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>Reassign
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="Set Priority"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-bell"></i>Priority
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="Assign Tickets"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-user-cog"></i>Assign Tickets
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                        </div>
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
</script>