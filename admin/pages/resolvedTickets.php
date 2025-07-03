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
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Resolved
                        Tickets</span>
                    <div class="row my-4">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
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
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                First-Time Resolutions</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [%]</span>
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
                                                Reopened Tickets</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                                [Count]</span>
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
                                                Avg. Resolution Time</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">
                                            [HH:MM]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Technician Performance
                        Metrics</span>
                    <div class="row my-4">
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Top Resolvers </div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Quickest Average Resolution</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Feedback Ratings on Resolved Tickets</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">No
                                                data</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Resolution
                        Trends</span>
                    <div class="row my-4">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Resolution Overview</h6>
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

                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Resolved Tickets</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!-- <a href="#" class="btn btn-sm btn-light-primary">
                                        <i class="ki-duotone ki-plus fs-2"></i>New Member</a> -->
                                    <div class="d-flex justify-content-end mb-4">
                                        <label class="me-2 align-self-center fs-5 fw-bold">Issue Type Count:
                                            <span id="issueTypeCount" class="fs-5 fw-bold">25</span>
                                        </label>
                                        <select id="issueCountFilter "
                                            class="form-select btn-light-primary form-select-lg w-200px">
                                            <option value="" selected hidden>select option</option>
                                            <option value="24">Hardware Faults</option>
                                            <option value="72">Software Issues</option>
                                            <option value="168">Configuration Errors</option>
                                            <option value="168">OEM Warranty Cases </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table align-middle gs-0 gy-4 fw-bold">
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4 rounded-start">Ticket ID </th>
                                                <th>Resolution Date</th>
                                                <th>Customer Name</th>
                                                <th>Issue Type</th>
                                                <th>Technician Name</th>
                                                <th>Time Taken</th>
                                                <th>Feedback Score</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
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
</script>