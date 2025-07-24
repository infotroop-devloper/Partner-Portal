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
.form-check-input:checked+.form-check-label {
    color: black !important;
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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid " id="kt_content">
                    <!--begin::Row-->
                    <div class="card p-4 mb-5 mb-xl-10 shadow-sm border border-light-subtle">
                        <div class="card-header mb-4"
                            data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <div class="card-title w-100 d-flex justify-content-between align-items-center">
                                <h3 class="fw-bold mb-0">Notification & Reminder Settings</h3>
                                <!-- <button type="button" class="btn btn-sm btn-success"
                                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/warrantyRenewal.php';">
                                    <i class="fas fa-clipboard-check me-1"></i> Get a Quote
                                </button> -->
                            </div>
                        </div>

                        <div class="card-body">
                            <form onsubmit="alert('We will Notify you without fail')">
                                <!-- Renewal Reminders Section -->
                                <div class="mb-4 p-4 rounded bg-light border">
                                    <h5 class="fw-semibold mb-3"><i class="fas fa-sync-alt me-2 fs-3 text-primary"></i>Set
                                        Renewal Reminders for:</h5>
                                    <div class="form-check form-switch my-4">
                                        <input class="form-check-input" type="checkbox" id="reminderLicenses">
                                        <label class="form-check-label" for="reminderLicenses">Licenses</label>
                                    </div>
                                    <div class="form-check form-switch my-4">
                                        <input class="form-check-input" type="checkbox" id="reminderSubscriptions">
                                        <label class="form-check-label"
                                            for="reminderSubscriptions">Subscriptions</label>
                                    </div>
                                    <div class="form-check form-switch my-4">
                                        <input class="form-check-input" type="checkbox" id="reminderWarranty">
                                        <label class="form-check-label" for="reminderWarranty">Warranty</label>
                                    </div>
                                </div>

                                <!-- Alerts Section -->
                                <div class="mb-3 p-4 rounded bg-light border">
                                    <h5 class="fw-semibold mb-3"><i class="fas fa-bell me-2 fs-3 text-warning"></i>Get Alerts
                                        for:</h5>
                                    <div class="form-check form-switch my-4">
                                        <input class="form-check-input" type="checkbox" id="alertServiceUpdates">
                                        <label class="form-check-label" for="alertServiceUpdates">New Service
                                            Updates</label>
                                    </div>
                                    <div class="form-check form-switch my-4">
                                        <input class="form-check-input" type="checkbox" id="alertTicketStatus">
                                        <label class="form-check-label" for="alertTicketStatus">Ticket Status
                                            Change</label>
                                    </div>
                                    <div class="form-check form-switch my-4">
                                        <input class="form-check-input" type="checkbox" id="alertBillingDue">
                                        <label class="form-check-label" for="alertBillingDue">Billing Due Date</label>
                                    </div>
                                </div>

                                <!-- Save Button -->
                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">
                                         Save Settings
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>



                    <!--begin::Footer-->
                    <div class="footer pb-4 d-flex flex-lg-column mb-0" id="kt_footer">
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




<!-- footer -->
<?php include('./includes/footer.php') ?>

<script>
// setTimeout(function () {
//     Swal.fire({
//         text: "Page Under Development",
//         icon: "warning",
//         buttonsStyling: false,
//         confirmButtonText: "Ok, got it!",
//         customClass: {
//             confirmButton: "btn btn-primary"
//         }
//     }).then(function (e) {
//         if (e.isConfirmed) {
//             fnGoBack();
//         }
//     });
// }, 2500);
</script>