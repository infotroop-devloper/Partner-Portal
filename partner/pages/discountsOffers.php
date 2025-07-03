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
                <div class="content flex-row-fluid " id="kt_content">
                    <!--begin::Row-->
                    <div class="d-flex justify-content-between">
                        <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Discounts &
                            Offers</span>
                    </div>

                    <div class="row my-4">
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Limited-Time Offers Running</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hourglass-half fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Coupon Codes Live</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-cash-register fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                First-Time User Discounts</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-tag fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Offers Used This Month</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Revenue Attributed to Discounts</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-tag fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Top Performing Promo</div>
                                            <span id="newRequestCount"
                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-code fs-3x text-gray-300"></i>
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
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">Offer Details</span>
                                    </h3>
                                </div>
                                <div class="card-toolbar g-2">
                                    <div class="mx-2">
                                        <input type="search" class="form-control" id="search" placeholder="Search..">
                                    </div>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addOfferModal">
                                        <i class="fas fa-plus"></i> Add New Offer
                                    </button>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table align-middle gs-0 gy-4 fw-bold text-center table-bordered">
                                        <thead>
                                            <tr class="fw-bold bg-light">
                                                <th class="ps-4 rounded-start">Offer Name</th>
                                                <th>Description</th>
                                                <th>Discount Type (Flat/%)</th>
                                                <th>Applicable Plans</th>
                                                <th>Start & End Dates</th>
                                                <th>Usage Limit per Customer</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Plan 1</td>
                                                <td>AMC</td>
                                                <td>32%</td>
                                                <td>Buisness Consultant</td>
                                                <td>6 hrs</td>
                                                <td>4</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit Coupon"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-success" title="Change Status"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="View Redeemtion"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Plan 2</td>
                                                <td>ATS</td>
                                                <td>15%</td>
                                                <td>Silver Partner</td>
                                                <td>4 hrs</td>
                                                <td>2</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit Coupon"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" title="Change Status"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-primary" title="View Redeemtion"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-eye"></i>
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

<!-- add new offer Modal -->
 <!-- Add Offer Modal -->
<div class="modal fade" id="addOfferModal" tabindex="-1" aria-labelledby="addOfferModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="addOfferModalLabel">Add New Offer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form id="addOfferForm">
        <div class="modal-body row g-3">

          <div class="col-md-6">
            <label for="offerName" class="form-label">Offer Name</label>
            <input type="text" class="form-control" id="offerName" name="offerName" required>
          </div>

          <div class="col-md-6">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
          </div>

          <div class="col-md-6">
            <label for="discountType" class="form-label">Discount Type</label>
            <select class="form-select" id="discountType" name="discountType" required>
              <option value="" disabled selected>Select Type</option>
              <option value="Flat">Flat</option>
              <option value="Percentage">Percentage</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="applicablePlans" class="form-label">Applicable Plans</label>
            <input type="text" class="form-control" id="applicablePlans" name="applicablePlans" required>
          </div>

          <div class="col-md-6">
            <label for="startDate" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="startDate" name="startDate" required>
          </div>

          <div class="col-md-6">
            <label for="endDate" class="form-label">End Date</label>
            <input type="date" class="form-control" id="endDate" name="endDate" required>
          </div>

          <div class="col-md-6">
            <label for="usageLimit" class="form-label">Usage Limit per Customer</label>
            <input type="number" class="form-control" id="usageLimit" name="usageLimit" min="1" required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add Offer</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- footer -->
<?php include('./includes/footer.php') ?>

<script>

  document.getElementById('addOfferForm').addEventListener('submit', function (e) {
    e.preventDefault();
    
    // Example: grab form data
    const formData = new FormData(this);
    const data = Object.fromEntries(formData.entries());
    console.log("New Offer Submitted:", data);

    // TODO: Send data via AJAX or add to the table dynamically

    // Close the modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('addOfferModal'));
    modal.hide();

    // Reset form
    this.reset();
  });



document.getElementById('search').addEventListener('input', function() {
    const keyword = this.value.toLowerCase();
    const rows = document.querySelectorAll('#kt_datatable_vertical_scroll tbody tr');

    rows.forEach(row => {
        const rowText = row.innerText.toLowerCase();
        row.style.display = rowText.includes(keyword) ? '' : 'none';
    });
});
</script>