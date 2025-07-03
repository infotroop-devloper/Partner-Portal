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
                <div class="content flex-row-fluid" id="kt_content">
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 " role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h2 class="fw-bold m-0">Roles Allocation</h2>
                            </div>
                            <button onclick="fnGoBack();" class="btn btn-sm btn-primary align-self-center">Back</button>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <div id="kt_account_profile_details_form" class="form">

                                <div class="card-body border-top p-9">
                                    <div class="accordion" id="permissionAccordion">

                                        <!-- Category: Overview & Sales -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOverview">
                                                <button class="accordion-button fs-4 fw-bold" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOverview"
                                                    aria-expanded="true" aria-controls="collapseOverview">
                                                    Overview & Sales
                                                </button>
                                            </h2>
                                            <div id="collapseOverview" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOverview">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Overview</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sales Performance</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Revenue Insights</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lead Dashboard</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>New Leads</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Follow-Ups</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lead Conversion Metrics</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lead Source Insights</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Service Desk  -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingServiceDesk">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseServiceDesk"
                                                    aria-expanded="false" aria-controls="collapseServiceDesk">
                                                    Service Desk
                                                </button>
                                            </h2>
                                            <div id="collapseServiceDesk" class="accordion-collapse collapse"
                                                aria-labelledby="headingServiceDesk"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Service Desk Metrics</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Open Tickets</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Resolved Tickets</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ticket Overview</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Priority Tickets</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ticket Assignment</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Resolution Time Metrics</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Escalations</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Customer Management-->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingCustomerManagement ">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseCustomerManagement" aria-expanded="false"
                                                    aria-controls="collapseCustomerManagement">
                                                    Customer Management
                                                </button>
                                            </h2>
                                            <div id="collapseCustomerManagement" class="accordion-collapse collapse"
                                                aria-labelledby="headingCustomerManagement"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Customer List</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Feedback & Reviews</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Customer Feedback</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Customer Reports</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Orders & Subscriptions -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOrders&Subscriptions">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOrders&Subscriptions" aria-expanded="false"
                                                    aria-controls="collapseOrders&Subscriptions">
                                                    Orders & Subscriptions
                                                </button>
                                            </h2>
                                            <div id="collapseOrders&Subscriptions" class="accordion-collapse collapse"
                                                aria-labelledby="headingOrders&Subscriptions"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Order List</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>New Order</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pending Approvals</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Order History</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Returns & Refunds</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Current Plans</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Plan Comparison</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Discounts & Offers</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Create New Plan</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Subscription Analytics</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Subscription Catalog</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Subscription Status</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Usage Metrics</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Financials -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFinancials">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFinancials"
                                                    aria-expanded="false" aria-controls="collapseFinancials">
                                                    Financials
                                                </button>
                                            </h2>
                                            <div id="collapseFinancials" class="accordion-collapse collapse"
                                                aria-labelledby="headingFinancials"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Financial Reports</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payout Overview</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Revenue Reports</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payment History</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pending Payments</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tax Documents</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Knowledge & Resources -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingKnowledge&Resources">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseKnowledge&Resources" aria-expanded="false"
                                                    aria-controls="collapseKnowledge&Resources">
                                                    Knowledge & Resources
                                                </button>
                                            </h2>
                                            <div id="collapseKnowledge&Resources" class="accordion-collapse collapse"
                                                aria-labelledby="headingKnowledge&Resources"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Knowledge Base</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Social Media Templates</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brochures & Flyers</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Branding Guidelines</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Help & Support</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Frequently Used Tools</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Recently Accessed Items</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Saved Links</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Marketing & Campaigns -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingMarketing&Campaigns">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseMarketing&Campaigns" aria-expanded="false"
                                                    aria-controls="collapseMarketing&Campaigns">
                                                    Marketing & Campaigns
                                                </button>
                                            </h2>
                                            <div id="collapseMarketing&Campaigns" class="accordion-collapse collapse"
                                                aria-labelledby="headingMarketing&Campaigns"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Email Campaigns</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Campaign Performance</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Partner Management -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPartnerManagement">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsePartnerManagement" aria-expanded="false"
                                                    aria-controls="collapsePartnerManagement">
                                                    Partner Management
                                                </button>
                                            </h2>
                                            <div id="collapsePartnerManagement" class="accordion-collapse collapse"
                                                aria-labelledby="headingPartnerManagement"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Partner Directory</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>New Partner Registration</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Partner Agreements</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>OEM Partner Analytics</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Collaboration Opportunities</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Partner Overview</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Training & Certifications -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTraining&Certifications">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTraining&Certifications"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTraining&Certifications">
                                                    Training & Certifications
                                                </button>
                                            </h2>
                                            <div id="collapseTraining&Certifications"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingTraining&Certifications"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Available Trainings</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>My Certifications</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Assign Training</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Training Progress</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Certification History</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: HR & Payroll -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingHR&Payroll">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseHR&Payroll"
                                                    aria-expanded="false" aria-controls="collapseHR&Payroll">
                                                    HR & Payroll
                                                </button>
                                            </h2>
                                            <div id="collapseHR&Payroll" class="accordion-collapse collapse"
                                                aria-labelledby="headingHR&Payroll"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>HR Services </td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Payroll Services</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Projects, Compliance & Funds -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingProjectsCompliance&Funds">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseProjectsCompliance&Funds"
                                                    aria-expanded="false"
                                                    aria-controls="collapseProjectsCompliance&Funds">
                                                    Projects, Compliance & Funds
                                                </button>
                                            </h2>
                                            <div id="collapseProjectsCompliance&Funds"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingProjectsCompliance&Funds"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Compliance & Certifications</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Project Opportunities</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Success Stories</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Funds Overview</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>New Fund Request</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Approved Funds</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fund Utilization Reports</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fund Guidelines</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Reporting & Data Management -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingReporting&DataManagement">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseReporting&DataManagement"
                                                    aria-expanded="false"
                                                    aria-controls="collapseReporting&DataManagement">
                                                    Reporting & Data Management
                                                </button>
                                            </h2>
                                            <div id="collapseReporting&DataManagement"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingReporting&DataManagement"
                                                data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Custom Report Builder</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Export Data</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Services -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingServices">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseServices"
                                                    aria-expanded="false" aria-controls="collapseServices">
                                                    Services
                                                </button>
                                            </h2>
                                            <div id="collapseServices" class="accordion-collapse collapse"
                                                aria-labelledby="headingServices" data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Service Catalog</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Add New Service</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category: Settings -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSettings">
                                                <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSettings"
                                                    aria-expanded="false" aria-controls="collapseSettings">
                                                    Settings
                                                </button>
                                            </h2>
                                            <div id="collapseSettings" class="accordion-collapse collapse"
                                                aria-labelledby="headingSettings" data-bs-parent="#permissionAccordion">
                                                <div class="accordion-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Module Name</th>
                                                                    <th>View</th>
                                                                    <th>Create</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                    <th>Full Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>User Settings</td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                    <td><input type="checkbox"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="button" onClick="assignRoles()" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Asign Roles</button>
                                </div>
                            </div>
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
                            class="text-gray-800 text-hover-primary">Infotroop</a>
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