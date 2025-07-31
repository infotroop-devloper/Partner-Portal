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
.btn-icon.rounded-circle {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0;
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

            <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">New Partner Registration</span>


                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Partner Registration</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!-- Helpdesk Button -->
                                        <div style="width: 100px !important; background: #0e3361; color: white; height: 27px !important; border-radius: 22px;"
                                            class="btn btn-color-gray-800 btn-icon w-30px h-30px w-md-40px h-md-40px position-relative"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom">
                                            Helpdesk&nbsp;
                                            <i class="fa-solid fa-phone" style="color: white;"></i>
                                        </div>

                                        <!-- Helpdesk Dropdown Menu -->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold mt-4 py-4 fs-6 w-275px"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bold d-flex align-items-center fs-5">
                                                            Call Us:&nbsp;&nbsp;&nbsp;&nbsp;<a
                                                                href="tel:+919168682217">+91 9168682217</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn-sm btn-light-primary mx-2" data-bs-toggle="modal"
                                        data-bs-target="#addMember">
                                        <i class="fas fa-plus"></i>New OEM Member</a>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table text-center align-middle gs-0 gy-4 fw-bold table-bordered">
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4">Application ID</th>
                                                <th>Submitted Date</th>
                                                <th>Current Stage</th>
                                                <th>Review Notes</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>12 July</td>
                                                <td>Under Review</td>
                                                <td>Under Review is under review nothing other</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Resume Saved Application">
                                                        <i class="fas fa-pen"></i>
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
                    <div class="footer pb-4 relative-bottom d-flex flex-lg-column" id="kt_footer">
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

<!-- Add Member Modal -->
<div class="modal fade" id="addMember" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Member Modal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">

                    <!-- Image Column -->
                    <div class="col-md-6">
                        <div class="addPartnerImg w-100 h-100"></div>
                    </div>

                    <!-- Form Column -->
                    <div class="col-md-6">
                        <h1>New Partner Registration</h1>
                        <div class="accordion" id="partnerFormAccordion">
                            <!-- Section 1: Partner Info -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. Partner Info
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-show collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#partnerFormAccordion">
                                    <div class="accordion-body">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input class="form-control mb-3 fw-bold" name="name" type="text"
                                            placeholder="Name">

                                        <label class="form-label">Phone no <span class="text-danger">*</span></label>
                                        <input class="form-control mb-3 fw-bold" name="phoneNo" type="text"
                                            placeholder="Phone No">

                                        <label class="form-label">Location <span class="text-danger">*</span></label>
                                        <input class="form-control mb-3 fw-bold" name="location" type="text"
                                            placeholder="Location">

                                        <label class="form-label">Industry Type <span class="text-danger">*</span></label>
                                        <select class="form-select mb-3 fw-bold" name="industry_type">
                                            <option hidden selected>Select Type</option>
                                            <option value="Solution Provider">Solution Provider</option>
                                            <option value="Value-Added Reseller">Value-Added Reseller</option>
                                            <option value="Managed Service Provider">Managed Service Provider</option>
                                            <option value="Cloud Service Partner">Cloud Service Partner</option>
                                            <option value="Service Provider(Gov. Org & PSUs)">Service Provider (Gov. Org
                                                & PSUs)</option>
                                            <option value="Consumer Partner">Consumer Partner</option>
                                            <option value="Corporate Partner">Corporate Partner</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: Document Upload -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        2. Document Upload
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#partnerFormAccordion">
                                    <div class="accordion-body">
                                        <label class="form-label">Business License <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control mb-3" name="business_license" type="file">

                                        <label class="form-label">GST <span class="text-danger">*</span></label>
                                        <input class="form-control mb-3" name="gst" type="file">

                                        <label class="form-label">Authorization Letter <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control mb-3" name="auth_letter" type="file">

                                        <label class="form-label">Product Portfolio <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control mb-3" name="portfolio" type="file">
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3: Agreement Signing -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3. Agreement Signing
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#partnerFormAccordion">
                                    <div class="accordion-body">
                                        <label class="form-label">NDA <span class="text-danger">*</span></label>
                                        <input class="form-control mb-3" name="nda" type="file">

                                        <label class="form-label">MOU <span class="text-danger">*</span></label>
                                        <input class="form-control mb-3" name="mou" type="file">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-save"></i>Save as Draft</button>
                <button type="button" class="btn btn-success" disabled >Submit</button>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include('./includes/footer.php') ?>
<script>
$(document).ready(function() {
    var postData = {
        op: 'fetchDeactivatedPartners',
        serviceName: 'partners.php'
    };

    async function getData(postData) {
        try {
            let data = await sendRequestSecure(postData);
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
							<td>${jsonObj[i].date}</td>
                            <td>
                                <a href="<?php echo BASE_URL; ?>pages/editPartnerDetails.php?id=${jsonObj[i].id}" title="Upload docs" 
                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm rounded-circle border-primary"
                                style="border-style: dashed; border-width: 2px;">
                                <i class="ki-duotone ki-cloud-add fs-2" style="color:#1b97ff;">
                                <span class="path1"></span><span class="path2"></span>
                                </i></a>
                                <a href="<?php echo BASE_URL; ?>pages/editPartnerDetails.php?id=${jsonObj[i].id}" title="Upload docs" 
                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm rounded-circle border-primary"
                                style="border-style: dashed; border-width: 2px;">
                                <i class="ki-duotone ki-cloud-add fs-2" style="color:#1b97ff;">
                                <span class="path1"></span><span class="path2"></span>
                                </i></a>
                                <a href="<?php echo BASE_URL; ?>pages/editPartnerDetails.php?id=${jsonObj[i].id}" title="Upload docs" 
                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm rounded-circle border-primary"
                                style="border-style: dashed; border-width: 2px;">
                                <i class="ki-duotone ki-cloud-add fs-2" style="color:#1b97ff;">
                                <span class="path1"></span><span class="path2"></span>
                                </i></a>
                                </td>
							<td><span class="badge ${badgeClass} fs-7 fw-bold">${badgeText}</span></td>
							<td class="text-center">
								<a href="<?php echo BASE_URL;?>pages/editPartnerDetails.php?id=${jsonObj[i].id}" title="Upload docs" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<i class="ki-duotone ki-cloud-add fs-2" style="color:#1b97ff;"><span class="path1"></span><span class="path2"></span></i>
								</a>
								<a href="<?php echo BASE_URL;?>pages/editPartnerDetails.php?id=${jsonObj[i].id}" title="Assign Technician" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<i class="ki-duotone ki-profile-user fs-2" style="color:#1b97ff;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
								</a>
								<a href="<?php echo BASE_URL;?>pages/editPartnerDetails.php?id=${jsonObj[i].id}" title="Edit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<i class="ki-duotone ki-pencil fs-2" style="color:#1b97ff;"><span class="path1"></span><span class="path2"></span></i>
								</a>
							</td>
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
// Wait for table to load first
</script>