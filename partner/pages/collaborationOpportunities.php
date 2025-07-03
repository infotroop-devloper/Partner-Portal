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

                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <h1>Collaboration Opportunities</h1>
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Opportunities You Can Join</span>
                                </h3>
                                <div class="card-toolbar g-2">
                                    <div class="mx-2">
                                        <input type="search" class="form-control" id="search" placeholder="Search..">
                                    </div>
                                    <div>
                                        <select id="docType" class="form-select">
                                            <option selected hidden>Filter Documents</option>
                                            <option value="" hidden disabled id="clearOption">Clear Filter</option>
                                            <option value="Co-Marketing Campaigns">Co-Marketing Campaigns</option>
                                            <option value="Technical Training Webinars">Technical Training Webinars
                                            </option>
                                            <option value="Product Launch Events">Product Launch Events</option>
                                            <option value="Exclusive Pilot Projects">Exclusive Pilot Projects</option>
                                            <option value="White-Label Opportunities">White-Label Opportunities</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table text-center align-middle gs-0 gy-4 fw-bold table-bordered">
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4">Title</th>
                                                <th>Partner Name</th>
                                                <th>Type</th>
                                                <th>Deadline</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Co-Branded Laptop Campaign</td>
                                                <td>ABC Tech</td>
                                                <td>Co-Marketing Campaigns</td>
                                                <td>30-May-2025</td>
                                                <td><span class="badge bg-success text-white">Open</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        title="Download Proposal Brief">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal" title="Submit Collaboration Idea">
                                                        <i class="fas fa-users"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        title="Schedule Partnership Meeting">
                                                        <i class="fas fa-phone"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        title="Express Interest">
                                                        <i class="fas fa-lightbulb"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Joint Service Training Week</td>
                                                <td>XYZ Networks</td>
                                                <td>Technical Training Webinars</td>
                                                <td>10-Jun-2025</td>
                                                <td><span class="badge bg-primary text-white">Registering</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        title="Download Proposal Brief">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal" title="Submit Collaboration Idea">
                                                        <i class="fas fa-users"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        title="Schedule Partnership Meeting">
                                                        <i class="fas fa-phone"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        title="Express Interest">
                                                        <i class="fas fa-lightbulb"></i>
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
    </div>
</div>


<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->

<!-- View modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Agreement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form">
                    <div class="my-2">
                    <label for="Name" class="form-label">Name : </label>
                    <input type="text" name="Name" class="form-control" placeholder="Enter name">
                    </div>
                    <div>
                        <label for="idea" class="form-label">Idea : </label>
                        <textarea name="idea" id="" rows="3" class="form-control" 
                        placeholder="“If you can dream it, you can do it.”"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                        class="fas fa-times"></i>Close</button>
                <a class="btn btn-primary"><i class="fas fa-lightbulb"></i>Submit</a>
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

// search toolbar
document.getElementById('search').addEventListener('input', function() {
    const keyword = this.value.toLowerCase();
    const rows = document.querySelectorAll('#kt_datatable_vertical_scroll tbody tr');

    rows.forEach(row => {
        const rowText = row.innerText.toLowerCase();
        row.style.display = rowText.includes(keyword) ? '' : 'none';
    });
});

// filter toolbar
document.getElementById('docType').addEventListener('change', function() {
    const selectedValue = this.value;
    const clearOption = document.getElementById('clearOption');
    const rows = document.querySelectorAll('#kt_datatable_vertical_scroll tbody tr');

    // Show and enable the "Clear Filter" option
    if (selectedValue && clearOption.disabled) {
        clearOption.disabled = false;
        clearOption.hidden = false; // <-- makes it visible
        clearOption.classList.add('text-danger');
    }

    // Clear filter: show all rows
    if (selectedValue === '') {
        rows.forEach(row => row.style.display = '');
        this.selectedIndex = 0; // Reset dropdown
        clearOption.disabled = true;
        clearOption.hidden = true; // <-- hides it again
        clearOption.classList.remove('text-danger');
        return;
    }

    // Filter rows
    rows.forEach(row => {
        const docTypeCell = row.cells[2];
        const cellText = docTypeCell.textContent.toLowerCase();
        row.style.display = cellText.includes(selectedValue.toLowerCase()) ? '' : 'none';
    });
});
</script>