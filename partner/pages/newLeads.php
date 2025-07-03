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
                                <h3 class="fw-bold m-0">New Leads</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <div id="kt_account_profile_details_form" class="form">
                                <!--begin::Card body-->
                                <iframe 
                                    src="https://forms.infotroop.co.in/InfoTroop/form/WebsiteDesigningForStartups/formperma/KHXBbAPdB0Tcf3Kc6M85RdThXFdkZMKpxZm7vqSejpU"
                                    frameborder="0" style="width: 100%; height: 190dvh;"></iframe>

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
</script>