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
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Success Stories</span>
                    <div class="row my-4">

                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Projects Completed</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-success shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Beneficiaries Impacted</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-donate fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Revenue Generated via Projects</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">0</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-rupee fs-3x text-gray-300"></i>
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
                                    <span class="card-label fw-bold fs-3 mb-1">Compliance & Certifications</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="mx-2">
                                        <select name="sectors" class="form-select">
                                            <option selected hidden>Select filter</option>
                                            <option value="Government Projects">Government Projects</option>
                                            <option value="Education Sector Innovations">Education Sector Innovations
                                            </option>
                                            <option value="Healthcare Sector Digitization">Healthcare Sector
                                                Digitization</option>
                                            <option value="Rural Development Initiatives">Rural Development Initiatives
                                            </option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="search" name="search" class="form-control" placeholder="Search..">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table align-middle gs-0 gy-4 fw-bold table-bordered">
                                        <thead class="text-center">
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4">Partner Name</th>
                                                <th>Project Name</th>
                                                <th>Outcome</th>
                                                <th>Highlight</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-start">
                                            <tr>
                                                <td>Bharat Devices</td>
                                                <td>Rural Computer Lab Initiative</td>
                                                <td class="text-center">10,000 students benefited</td>
                                                <td class="text-center"><span class="badge bg-success text-white">Case
                                                        Study</span></td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-success"
                                                        title="Submit Your Success Story" data-bs-toggle="tooltip">
                                                        <i class="fas fa-upload"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="Download Case Study"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-info" title="Share on social media"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-share-square"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nirmaan Systems</td>
                                                <td>Smart Village Wi-Fi Project</td>
                                                <td class="text-center">50 Villages Connected</td>
                                                <td class="text-center"><span class="badge bg-danger text-white">Feature
                                                        Article</span></td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-success"
                                                        title="Submit Your Success Story" data-bs-toggle="tooltip">
                                                        <i class="fas fa-upload"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="Download Case Study"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-info" title="Share on social media"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-share-square"></i>
                                                    </button>
                                                </td>
                                            </tr>
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
    </div>
</div>


<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->


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