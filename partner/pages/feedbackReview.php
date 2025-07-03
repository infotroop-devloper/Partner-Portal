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
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Customer Feedback & Reviews</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <div id="kt_account_profile_details_form" class="form">
                                <!--begin::Card body-->

                                <div class="card-body border-top p-9">

                                    <!-- Feedback Overview -->
                                    <h1 class="fw-bold my-3">Feedback Overview -</h1>
                                    <div class="row mb-6">
                                        <!-- new Request Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Total Reviews Received</div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-star fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Average Customer Rating</div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-star-half fs-3x text-gray-300"></i>
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
                                                                Positive Feedback (%)</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-thumbs-up fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-danger shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Negative Feedback (%)</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-thumbs-down info fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                        <div class="table-responsive mb-6">
                                        <!--begin::Table-->
                                        <table id="kt_datatable_vertical_scroll"
                                            class="table table-bordered align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bold text-muted bg-light">
                                                    <th class="ps-4 ">Sr no</th>
                                                    <th>Tecnician name</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Location</th>
                                                    <th>Avg. rating</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>aaxc</td>
                                                    <td>213423635</td>
                                                    <td>aaxc</td>
                                                    <td>aaxc</td>
                                                    <td>2.6</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>aaxc</td>
                                                    <td>567468409</td>
                                                    <td>aaxc</td>
                                                    <td>aaxc</td>
                                                    <td>4.1</td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>



                                    <!-- Feedback by Service Type -->
                                    <h1 class="fw-bold my-3">Feedback by Service Type -</h1>
                                    <div class="row mb-6">
                                        <!-- new Request Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                AMC / ATS Plan Services</div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar-check fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                OEM Warranty Support</div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-headset fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Hardware Repairs </div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-tools fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Active Partners Count Card -->
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Software Installation</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-download info fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- Technician Ratings -->
                                    <h1 class="fw-bold my-3">Technician Ratings -</h1>
                                    <div class="col-xl-3 col-md-3 mb-4">
                                        <div class="card border-left-primary shadow" style="height: 80px">
                                            <div class="card-body">
                                                <div class="row no-gutters d-flex align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                            Avg. Technician Rating</div>
                                                        <span id="newRequestCount"
                                                            class="fs-2 fw-bold text-gray-800 me-2 lh-1">3.35</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-star fs-3x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive mb-6">
                                        <!--begin::Table-->
                                        <table id="kt_datatable_vertical_scroll"
                                            class="table table-bordered align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bold text-muted bg-light">
                                                    <th class="ps-4 ">Sr no</th>
                                                    <th>Tecnician name</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Location</th>
                                                    <th>Avg. rating</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>aaxc</td>
                                                    <td>213423635</td>
                                                    <td>aaxc</td>
                                                    <td>aaxc</td>
                                                    <td>2.6</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>aaxc</td>
                                                    <td>567468409</td>
                                                    <td>aaxc</td>
                                                    <td>aaxc</td>
                                                    <td>4.1</td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>

                                    <!-- Feedback Category Summary -->
                                    <!-- <h1 class="fw-bold my-3"> Feedback Category Summary -</h1>
                                    <div class="row mb-6">
                                       
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Service Quality </div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-people-carry fs-3x text-gray-300"></i>
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
                                                                Response Time </div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-clock fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                      
                                        <div class="col-xl-3 col-md-3 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Professionalism</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-star fs-3x text-gray-300"></i>
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
                                                                Pricing & Transparency</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-dollar-sign info fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- Resolved vs Unresolved -->
                                    <!-- <h1 class="fw-bold my-3">🛠️ Resolved vs. Unresolved Complaints</h1>
                                    <div class="row mb-6 ">
                                        <div class="col-xl-4 col-md-4 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2" style="height: 1">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                                Complaints Resolved</div>
                                                            <span id="newRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-check fs-3x text-gray-300"></i>
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
                                                                Pending Actions</div>
                                                            <span id="approvedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-times fs-3x text-gray-300"></i>
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
                                                                Average Resolution Time</div>
                                                            <span id="declinedRequestCount"
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">4</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-clock fs-3x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

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
										<a href="<?php echo BASE_URL;?>pages/customerDetails.php?id=` + jsonObj[i].id + `" title="Edit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
											
											<i class="ki-duotone ki-eye fs-2">
												<span class="path1"></span>
												<span class="path1"></span>
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

new DataTable('#kt_datatable_vertical_scroll', {
    layout: {
        top1: 'searchPanes'
    }
});
</script>