<!--- HEADER --->
<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = $_COOKIE['firstname'];
	$_SESSION['email'] = $_COOKIE['email'];
	$_SESSION['user_type'] = $_COOKIE['user_type'];
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.css">


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
                    <div class="row mb-6">
                        <!-- new Request Count Card -->
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Customers</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">6</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Partners Count Card -->
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                New Customers this Month</div>
                                            <span id="approvedRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">6</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-plus fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Partners Count Card -->
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Active Customers</div>
                                            <span id="declinedRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">6</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-check fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Partners Count Card -->
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-info shadow h-100 py-2" style="height: 1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Repeat Customers</div>
                                            <span id="declinedRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">6</span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-clock info fs-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Search module -->
                    <div class="card shadow-sm rounded mb-4">
                        <div class="card-body">
                            <h1 class="card-title mb-4">Search Documents</h1>
                            <form id="searchForm">
                                <div class="row g-4">
                                    <div class="col-md-2 mb-4">
                                        <label for="customerName" class="form-label">Customer name</label>
                                        <input type="text" class="form-control" name="customerName" id="customerName"
                                            placeholder="Customer name" />
                                    </div>
                                    <div class="col-md-2">
                                        <label for="customerNo" class="form-label">Customer No</label>
                                        <input type="text" class="form-control" name="customerNo" id="customerNo"
                                            placeholder="Customer No" />
                                    </div>
                                    <div class="col-md-2">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="Email" id="Email"
                                            placeholder="Customer Email " />
                                    </div>
                                    <div class="col-md-2">
                                        <label for="subcriptionType" class="form-label">Subsrciption Status</label>
                                        <select class="form-select" name="subcriptionType" id="subcriptionType">
                                            <option selected hidden>Select Subsrciption Type</option>
                                            <option value="Buisness Consultant">Buisness Consultant</option>
                                            <option value="Registered Partner">Registered Partner</option>
                                            <option value="Certified Partner">Certified partner</option>
                                            <option value="Silver Partner">Silver Partner</option>
                                            <option value="Gold Partner">Gold Partner</option>
                                            <option value="Platinum Partner">Platinum Partner</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" name="location" id="location"
                                            placeholder="Enter location" />
                                    </div>
                                    <div class="col-md-2">
                                        <label for="Customer type" class="form-label">Customer type</label>
                                        <select class="form-select" name="Customer type" id="Customer type">
                                            <option selected hidden>All Types</option>
                                            <option value="Individual">Individual</option>
                                            <option value="Business">Business</option>
                                            <option value="Government">Government</option>
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



                    <!-- Result module -->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Customers List</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->


                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <div id="kt_account_profile_details_form" class="form">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">

                                    <table class="table align-middle table-row-bordered fs-6 gy-5"
                                        data-pagination="true" data-reorderable-columns="true" data-toggle="table"
                                        data-search="true" data-pagination="true" data-toolbar="toolbar"
                                        id="kt_customers_table">
                                        <div class="toolbar mb-8 ">
                                            <button id="topRevenue" class="btn btn-primary">Top 10 Revenue-Generating Customers</button>
                                            <button id="activePlans" class="btn btn-primary">Customers with Active Plans</button>
                                            <button id="frequentRequests" class="btn btn-primary">Frequent Requesters</button>
                                        </div>
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th>Sr No.</th>
                                                <th data-field="Customer Name" data-sortable="true">Customer Name</th>
                                                <th data-field="Contact Number" data-sortable="true">Contact Number</th>
                                                <th data-field="Email-ID" data-sortable="true">Email-ID</th>
                                                <th data-field="Location" data-sortable="true">Location</th>
                                                <th data-field="Customer Type" data-sortable="true">Customer Type</th>
                                                <th data-field="Subscription Status" data-sortable="true">Subscription
                                                    Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td>1</td>
                                                <td>Ajay </td>
                                                <td>983682362</td>
                                                <td>ajay@gmail.com</td>
                                                <td>Pune</td>
                                                <td>Partner</td>
                                                <td>Silver Partner</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
            </div>

            <!--begin::Footer-->
            <div class="footer relative-bottom pb-4 d-flex flex-lg-column" id="kt_footer">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/extensions/toolbar/bootstrap-table-toolbar.min.js">
</script>
<script>
/*Swal.fire({
                text: "Unfortunately! Your current plan does not have access to this page.",
                icon: "warning",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            }).then((function(e) {
                location.href = "<?php echo BASE_URL;?>pages/dashboard.php";
            }))*/
$(document).ready(function() {
    var postData = {
        op: 'fetchCustomerList',
        serviceName: 'customer.php'
    };

    async function getData(postData) {
        try {
            let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
            console.log("Received data:", data);
            if (data.status == "success") {
                let jsonObj = data.data;

                const tableBody = document.querySelector(
                    '#kt_customers_table tbody'); // Replace 'yourTableId' with the actual table ID

                // Define the HTML for the row
                var rowHTML = '';
                var srno = 1;
                for (var i = 0; i < jsonObj.length; i++) {
                    rowHTML = rowHTML + `<tr>
									<td>
										<span style="margin-left: 12px;">` + srno + `</span>
									</td>
									<td>
										` + jsonObj[i].customer_name + `
									</td>
									<td>
										` + jsonObj[i].phone_no + `
									</td>
									<td>
										` + jsonObj[i].email_id + `
									</td>
									<td>
										` + jsonObj[i].licence_id + `
									</td>
									<td>
										` + jsonObj[i].subscription_status + `
									</td>
									<td>
										<a href="<?php echo BASE_URL;?>pages/customerDetails.php?id=` + jsonObj[i].id + `" title="Edit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
											
											<i class="ki-duotone ki-eye fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												</i>
										</a>
									</td>
								</tr>`;
                    srno++;
                }
                var table = $('#kt_customers_table').DataTable();
                $('#kt_customers_table tbody').append(rowHTML);
                table.rows.add($(rowHTML)).draw();
                $('#kt_customers_table').on('click', '.btn-action', function() {
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
                }).then((function(e) {
                    if (e.isConfirmed) {
                        location.href = "<?php echo BASE_URL;?>index.php";
                    }
                }))
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }
    //getData(postData);
    // Swal.fire({
    // 	text: "Unfortunately your current plan does not have access to this page.",
    // 	icon: "error",
    // 	buttonsStyling: !1,
    // 	confirmButtonText: "Ok, got it!",
    // 	customClass: {
    // 		confirmButton: "btn btn-primary"
    // 	}
    // }).then((function(e) {
    // 	location.href = "<?php echo BASE_URL;?>pages/dashboard.php";
    // }))
});

$(function() {
    const allData = $('#table').bootstrapTable('getData'); // Or load it separately
    // If data isn't loaded yet, you can use $('#table').bootstrapTable('load', myData);

    $('#topRevenue').on('click', () => {
        const sorted = [...allData]
            .sort((a, b) => b.revenue - a.revenue)
            .slice(0, 10); // Top 10
        $('#table').bootstrapTable('load', sorted);
    });

    $('#activePlans').on('click', () => {
        const filtered = allData.filter(customer => customer.activePlan === true);
        $('#table').bootstrapTable('load', filtered);
    });

    $('#frequentRequests').on('click', () => {
        const frequent = allData
            .filter(customer => customer.requestCount >= 5) // Threshold can vary
            .sort((a, b) => b.requestCount - a.requestCount);
        $('#table').bootstrapTable('load', frequent);
    });
});
</script>