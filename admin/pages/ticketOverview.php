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
                    <!-- Ticket Overview -->
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Ticket Overview</span>
                    <div class="row my-4">
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-info shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Open Tickets</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [Count]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Tickets Resolved This Month</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [Count]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Tickets Resolved Today</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [Count]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Tickets in Progress</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [Count]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Tickets Closed in Last 24 Hours</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [Count]</span>
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
                                                Avg. Resolution Time</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [HH:MM]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ticket Status Breakdown -->
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Ticket Status
                        Breakdown</span>
                    <div class="card my-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Ticket Status</span>
                            </h3>
                            <div class="card-toolbar">
                                <!-- <a href="#" class="btn btn-sm btn-light-primary">
                                        <i class="ki-duotone ki-plus fs-2"></i>New Member</a> -->
                                <div class="d-flex justify-content-end mb-4">
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="table-responsive">
                                <table id="" class="table table-bordered text-center align-middle gs-0 gy-4 fw-bold">
                                    <thead>
                                        <tr class="fw-bold text-muted bg-light">
                                            <th class="ps-4 rounded-start">Open</th>
                                            <th>In Progress</th>
                                            <th>Resolved</th>
                                            <th>Pending Approval</th>
                                            <th>Closed</th>
                                            <th class="ps-4 rounded-end">Total Tickets</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10 %</td>
                                            <td>10 %</td>
                                            <td>10 %</td>
                                            <td>10 %</td>
                                            <td>10 %</td>
                                            <td>1000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Resolution Trends -->
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Ticket Trends
                        Overview</span>
                    <div class="row my-4">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="fs-5 font-weight-bold">Ticket Trends</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <div id="kt_amcharts_1" style="height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Graph -->
                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                    </div>

                    <!-- Quick Filters -->
                    <div class="container-fluid my-5">
                        <!-- Search Section -->
                        <div class="card shadow-sm rounded mb-4">
                            <div class="card-body">
                                <h3 class="card-title">Search Documents TOOO WORK ONNNN</h3>
                                <p class="text-muted">Search and filter documents by department, year, type, and
                                    document
                                    number</p>

                                <form id="searchForm">
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label for="assignedTechnician" class="form-label">Assigned
                                                Technician</label>
                                            <select class="form-select" name="assignedTechnician"
                                                id="assignedTechnician">
                                                <option selected hidden>Select Assigned Technician</option>
                                                <option>Engineering</option>
                                                <option>Science</option>
                                                <option>Arts</option>
                                                <option>Commerce</option>
                                                <option>Management</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="priorityLevel" class="form-label">Priority Level</label>
                                            <select class="form-select" name="priorityLevel" id="priorityLevel">
                                                <option selected hidden>Select Priority Level</option>
                                                <option>High</option>
                                                <option>Low</option>
                                                <option>Moderate</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="document-number" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" name="document-number"
                                                id="document-number" placeholder="Enter Customer Name" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="subject-title" class="form-label">Subject/Title</label>
                                            <input type="text" class="form-control" name="subject-title"
                                                id="subject-title" placeholder="Enter Subject or Title" />
                                        </div>
                                        <div class="col-md-3">
                                            <label for="date-from" class="form-label">Date Range From</label>
                                            <input type="date" class="form-control" name="date-from" id="date-from" />
                                        </div>
                                        <div class="col-md-3">
                                            <label for="date-to" class="form-label">Date Range To</label>
                                            <input type="date" class="form-control" name="date-to" id="date-to" />
                                        </div>
                                        <div class="col-md-2">
                                            <label for="status" class="form-label">Ticket Status</label>
                                            <select class="form-select" name="status" id="status">
                                                <option selected hidden>Select Status</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-4 d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary">Search Documents</button>
                                        <button type="reset" class="btn btn-secondary"
                                            onclick="document.getElementById('resultsSection').style.display='none';">Clear
                                            Filters</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Results Section -->
                        <div class="card shadow-sm rounded" id="resultsSection" style="display: none;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0">Search Results</h5>
                                    <button class="btn btn-success">Download All PDFs</button>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Ticket ID</th>
                                                <th>Customer Name</th>
                                                <th>Assigned Technician</th>

                                                <th>Priority Level</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>ENG/CS/SYL/2024/001</strong></td>
                                                <td>Computer Science Syllabus 2024</td>
                                                <td>Engineering</td>
                                                <td><span class="badge text-white bg-primary">High</span></td>
                                                <td>15/01/2024</td>
                                                <td><span class="badge bg-success text-white">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Assign Ticket"><i
                                                            class="fa-solid fa-person fs-4"></i></button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-title="Edit"><i
                                                            class="fas fa-pencil"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-title="Escalate Ticket"><i
                                                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                                                            <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-title="Mark as Resolved"><i
                                                            class="fa-solid fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>ENG/MATH/EXAM/2024/015</strong></td>
                                                <td>Final Exam Paper - Fine Arts</td>
                                                <td>Arts</td>
                                                <td><span class="badge bg-info text-white">Moderate</span></td>
                                                <td>20/05/2024</td>
                                                <td><span class="badge bg-success text-white">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Assign Ticket"><i
                                                            class="fa-solid fa-person fs-4"></i></button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-title="Edit"><i
                                                            class="fas fa-pencil"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-title="Escalate Ticket"><i
                                                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                                                            <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-title="Mark as Resolved"><i
                                                            class="fa-solid fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>ENG/MATH/EXAM/2024/015</strong></td>
                                                <td>Final Exam Paper - Accounts</td>
                                                <td>Commerce</td>
                                                <td><span class="badge bg-primary text-white">Low</span></td>
                                                <td>20/05/2024</td>
                                                <td><span class="badge bg-success text-white">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Assign Ticket"><i
                                                            class="fa-solid fa-person fs-4"></i></button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-title="Edit"><i
                                                            class="fas fa-pencil"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-title="Escalate Ticket"><i
                                                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                                                            <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-title="Mark as Resolved"><i
                                                            class="fa-solid fa-check"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>ENG/MATH/EXAM/2024/015</strong></td>
                                                <td>Final Exam Paper - Mathematics</td>
                                                <td>Science</td>
                                                <td><span class="badge bg-info text-white">High</span></td>
                                                <td>20/05/2024</td>
                                                <td><span class="badge bg-danger text-white">Inactive</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Assign Ticket"><i
                                                            class="fa-solid fa-person fs-4"></i></button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-title="Edit"><i
                                                            class="fas fa-pencil"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-title="Escalate Ticket"><i
                                                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                                                            <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-title="Mark as Resolved"><i
                                                            class="fa-solid fa-check"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot id="noResultsRow" style="display: none;">
                                            <tr>
                                                <td colspan="8" class="text-center text-muted">No matching documents
                                                    found.
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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
                                    class="text-gray-800 text-hover-primary">Infotroop</a>
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
$(document).ready(function() {
    var postData = {
        op: 'fetchDeactivatedPartners',
        serviceName: 'partners.php'
    };

    async function getData(postData) {
        try {
            let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
            console.log("Received data:", data);
            if (data.status == "success") {
                let jsonObj = data.data;

                const tableBody = document.querySelector('#kt_datatable_vertical_scroll tbody');
                var rowHTML = '';
                var srno = 1;

                for (var i = 0; i < jsonObj.length; i++) {
                    // Get status and map it to badge class and text
                    let status = jsonObj[i].status || 'unknown';
                    let badgeClass = '';
                    let badgeText = '';

                    switch (status.toLowerCase()) {
                        case 'new':
                            badgeClass = 'badge-light-primary';
                            badgeText = 'New';
                            break;
                        case 'pending':
                            badgeClass = 'badge-light-warning';
                            badgeText = 'Pending';
                            break;
                        case 'completed':
                            badgeClass = 'badge-light-success';
                            badgeText = 'Completed';
                            break;
                        case 'closed':
                            badgeClass = 'badge-light-dark';
                            badgeText = 'Closed';
                            break;
                        case 'hold':
                            badgeClass = 'badge-light-info';
                            badgeText = 'Hold';
                            break;
                        case 'cancelled':
                            badgeClass = 'badge-light-danger';
                            badgeText = 'Cancelled';
                            break;
                        default:
                            badgeClass = 'badge-light-secondary';
                            badgeText = 'Unknown';
                    }

                    // Create row
                    rowHTML += `<tr>
							<td><span style="margin-left: 12px; font-weight:bold;">${srno++}</span></td>
							<td>${jsonObj[i].partner_name}</td>
							<td>${jsonObj[i].partner_name}</td>
							<td>${jsonObj[i].partner_name}</td>
							<td>${jsonObj[i].date}</td>
							<td>${jsonObj[i].date}</td>
							<td>${jsonObj[i].website_url}</td>
							<td><span class="badge ${badgeClass} fs-7 fw-bold">${badgeText}</span></td>
						</tr>`;
                }

                // DataTable render
                var table = $('#kt_datatable_vertical_scroll').DataTable();
                $('#kt_datatable_vertical_scroll tbody').append(rowHTML);
                table.rows.add($(rowHTML)).draw();

                // Optional button click logic
                $('#kt_datatable_vertical_scroll').on('click', '.btn-action', function() {
                    var id = $(this).data('id');
                    alert('Action button clicked for ID: ' + id);
                });

            } else {
                Swal.fire({
                    text: data.message,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function(e) {
                    if (e.isConfirmed) {
                        location.href = "<?php echo BASE_URL;?>pages/index.php";
                    }
                });
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    getData(postData);
});


// search in table
document.getElementById("searchForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const form = e.target;
    const filters = {
        assignedTechnician: form.assignedTechnician.value.trim().toLowerCase(),
        type: form['priorityLevel'].value.trim().toLowerCase(),
        number: form['document-number'].value.trim().toLowerCase(),
        title: form['subject-title'].value.trim().toLowerCase(),
        dateFrom: form['date-from'].value,
        dateTo: form['date-to'].value,
        status: form.status.value.trim().toLowerCase()
    };

    const rows = document.querySelectorAll("#resultsSection tbody tr");
    let anyMatch = false;

    rows.forEach(row => {
        const cells = row.querySelectorAll("td");
        const rowData = {
            number: cells[0].innerText.toLowerCase(),
            title: cells[1].innerText.toLowerCase(),
            assignedTechnician: cells[2].innerText.toLowerCase(),
            type: cells[3].innerText.toLowerCase(),
            date: cells[4].innerText, // dd/mm/yyyy
            status: cells[5].innerText.toLowerCase()
        };

        const rowDate = rowData.date.split("/").reverse().join("-");
        let match = true;

        if (filters.assignedTechnician && !rowData.assignedTechnician.includes(filters
                .assignedTechnician)) match = false;
        if (filters.type && !rowData.type.includes(filters.type)) match = false;
        if (filters.number && !rowData.number.includes(filters.number)) match = false;
        if (filters.title && !rowData.title.includes(filters.title)) match = false;
        if (filters.status !== "Select Status" && filters.status && !rowData.status.includes(filters
                .status)) match = false;
        if (filters.dateFrom && rowDate < filters.dateFrom) match = false;
        if (filters.dateTo && rowDate > filters.dateTo) match = false;

        if (match) {
            row.style.display = "";
            anyMatch = true;
        } else {
            row.style.display = "none";
        }
    });

    document.getElementById("resultsSection").style.display = "block";
});
</script>