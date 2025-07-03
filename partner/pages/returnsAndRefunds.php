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
#requestInfo {
    display: none;
    transition: all 0.5s ease;
}

#payment {
    display: none;
    transition: all 0.5s ease;
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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Returns And
                        Refunds</span>
                    <div class="row my-4">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Returns This Month</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-people-carry fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Refunds Processed</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-danger shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Pending Return Requests</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hourglass fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow py-2" style="height: 150px">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Avg. Refund Processing Time</div>
                                            <span id="newRequestCount" class="fs-2hx fw-bold text-gray-800 me-2 lh-1">3</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-hourglass-half fs-3x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table with Filters -->
                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Returns And Refunds</span>
                                </h3>
                                <div class="card-toolbar gap-2">
                                    <div>
                                        <input type="search" class="form-control" name="search" id="search"
                                            placeholder="Search..">
                                    </div>
                                    <!-- <div class="d-flex justify-content-end">
                                        <select id="orderStatusFilter" class="form-select w-120px">
                                            <option selected hidden>Select filter</option>
                                            <option value="new">New</option>
                                            <option value="approved">Approved</option>
                                            <option value="shipped">Shipped</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <select id="productFilter" class="form-select w-120px">
                                            <option selected hidden>Select filter</option>
                                            <option value="approved">abc</option>
                                            <option value="shipped">def</option>
                                            <option value="cancelled">ghi</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table id="kt_datatable_vertical_scroll"
                                        class="table table-bordered align-middle gs-0 gy-4">
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light text-center">
                                                <th class="ps-4 rounded-start">Order ID </th>
                                                <th>Customer name</th>
                                                <th>Reason for Return</th>
                                                <th>Request Date</th>
                                                <th>Approval Status</th>
                                                <th>Refund Method & Amount</th>
                                                <th class="rounded-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>1</td>
                                                <td>abc</td>
                                                <td>Defective</td>
                                                <td>2 June </td>
                                                <td>abc</td>
                                                <td>12 June</td>
                                                <td>
                                                    <button class="btn btn-success btn-sm" title="Accept">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-sm" title="Take Actions"
                                                        data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" title="Reject">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>ytb</td>
                                                <td>Defective</td>
                                                <td>1 June</td>
                                                <td>ytb</td>
                                                <td>6 June</td>
                                                <td>
                                                    <button class="btn btn-success btn-sm" title="Accept">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-sm" title="Take Actions"
                                                        data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" title="Reject">
                                                        <i class="fas fa-times"></i>
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


            <!-- View Modal -->
            <div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Action Modal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-black mb-4" for="flexCheckDefault">
                                    Request Additional Info / Photos
                                </label>
                                <div id="requestInfo">
                                    <textarea class="form-control mb-4" placeholder="Enter Descriptions"
                                        rows=2></textarea>
                                    <button class="btn btn-sm btn-primary">Request Info</button>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="paymentCheckbox">
                                <label class="form-check-label text-black" for="paymentCheckbox">
                                    Initiate Payment
                                </label>
                                <div id="payment" class="mt-4" style="display: none;">
                                    <button class="btn btn-sm btn-primary mt-2">Payment mode</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"><i class="fas fa-check"></i>Resolved</button>
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
const tooltipTriggerList = document.querySelectorAll('[title]');
const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));

document.getElementById('search').addEventListener('input', function() {
    const keyword = this.value.toLowerCase();
    const rows = document.querySelectorAll('#kt_datatable_vertical_scroll tbody tr');

    rows.forEach(row => {
        const rowText = row.innerText.toLowerCase();
        row.style.display = rowText.includes(keyword) ? '' : 'none';
    });
});


const checkbox = document.getElementById('flexCheckDefault');
const requestInfoDiv = document.getElementById('requestInfo');

checkbox.addEventListener('change', function() {
    requestInfoDiv.style.display = this.checked ? 'block' : 'none';
});

  const paymentCheckbox = document.getElementById('paymentCheckbox');
  const paymentDiv = document.getElementById('payment');

  paymentCheckbox.addEventListener('change', function () {
    paymentDiv.style.display = this.checked ? 'block' : 'none';
  });
</script>