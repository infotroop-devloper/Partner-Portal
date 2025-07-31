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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl"
                style="margin: 0px 10px;max-width: none;">
                <!--begin::Post-->
                <div class="content flex-row-fluid " id="kt_content">
                    <!--begin::Row-->
                    <div class="d-flex justify-content-between">
                        <span class="card-label fw-bold text-gray-900 fs-2" style="margin-left:10px;">Plan
                            Comparision</span>
                    </div>
                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid"
                        style="padding-top: 30px !important;">
                        <!--begin::Post-->
                        <div class="container-fluid px-4">
                            <!-- Compare By Section -->

                            <!-- <div class="mb-5">
                                <h4 class="fw-bold text-primary mb-3">🧮 Compare By</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">• Price (Monthly / Yearly)</li>
                                    <li class="list-group-item">• Features Included (Onsite Support, OEM Warranty
                                        Management, Health Checks)</li>
                                    <li class="list-group-item">• Support SLA</li>
                                    <li class="list-group-item">• Add-on Services</li>
                                    <li class="list-group-item">• Target Customer Segments</li>
                                </ul>
                            </div> -->

                            <!-- Comparison Table -->
                            <div class=" card table-responsive mb-5">
                                <h2 class="fw-bold m-3 card-title ">Comparison Table</h2>
                                <table class="table table-bordered text-center align-middle table-striped">
                                    <thead class="align-middle">
                                        <tr id="kt_pricing">
                                            <th>
                                                <div class="nav rounded-pill px-3 py-2 ms-9 mb-15 w-250px"
                                                    data-kt-buttons="true">
                                                    <!-- <p class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" style="background-color: #1b84ff !important;width: -webkit-fill-available;">Partner Plans</p> -->
                                                    <!-- <button class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" data-kt-plan="month">Monthly</button> -->
                                                    <!-- <button class="nav-link btn btn-active btn-active-dark fw-bold btn-color-gray-600 py-3 px-5 m-1 rounded-pill" data-kt-plan="annual">Annually</button> -->
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" mb-15" style="width: 180px !important; margin-top: 20px;">
                                                    <div class="text-primary fs-3 fw-bold mb-7">Business Consultant</div>
                                                    <div class="fs-5x d-flex justify-content-center align-items-start">
                                                        <span class="fs-2 mt-3"
                                                            style="font-size: 16px !important;margin-top: 3px !important;">₹</span>
                                                        <span class="lh-sm fw-semibold"
                                                            style="font-size: 24px !important;"
                                                            data-kt-plan-price-month="0"
                                                            data-kt-plan-price-annual="0">0</span>
                                                    </div>
                                                    <div class="text-muted fw-bold mb-7">Per Annum <br> &nbsp;</div>
                                                    <a href="#"
                                                        class="btn btn-light-primary fw-bold mx-auto">Upgrade</a>
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" mb-15" style="width: 180px !important; margin-top: 20px;">
                                                    <div class="text-primary fs-3 fw-bold mb-7">Registered Partner</div>
                                                    <div class="fs-5x d-flex justify-content-center align-items-start">
                                                        <span class="fs-2 mt-3"
                                                            style="font-size: 16px !important;margin-top: 3px !important;">₹</span>
                                                        <span class="lh-sm fw-semibold"
                                                            style="font-size: 24px !important;"
                                                            data-kt-plan-price-month="10000"
                                                            data-kt-plan-price-annual="10000">10,000</span>
                                                    </div>
                                                    <div class="text-muted fw-bold mb-7">Per Annum <br> &nbsp;</div>
                                                    <a href="#"
                                                        class="btn btn-light-primary fw-bold mx-auto">Upgrade</a>
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" mb-15" style="width: 180px !important; margin-top: 20px;">
                                                    <div class="text-primary fs-3 fw-bold mb-7">Certified Partner</div>
                                                    <div class="fs-5x d-flex justify-content-center align-items-start">
                                                        <span class="fs-2 mt-3"
                                                            style="font-size: 16px !important;margin-top: 3px !important;">₹</span>
                                                        <span class="lh-sm fw-semibold"
                                                            style="font-size: 24px !important;"
                                                            data-kt-plan-price-month="25000"
                                                            data-kt-plan-price-annual="25000">25,000</span>
                                                    </div>
                                                    <div class="text-muted fw-bold mb-7">Per Annum</br> &nbsp;</div>
                                                    <a href="#"
                                                        class="btn btn-light-primary fw-bold mx-auto">Upgrade</a>
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" mb-15" style="width: 180px !important;margin-top: 20px;">
                                                    <div class="text-primary fs-3 fw-bold mb-7">Silver Partner</div>
                                                    <div class="fs-5x d-flex justify-content-center align-items-start">
                                                        <span class="fs-2 mt-3"
                                                            style="font-size: 16px !important;margin-top: 3px !important;">₹</span>
                                                        <span class="lh-sm fw-semibold"
                                                            style="font-size: 24px !important;"
                                                            data-kt-plan-price-month="25000"
                                                            data-kt-plan-price-annual="25000">50,000</span>
                                                    </div>
                                                    <div class="text-muted fw-bold mb-7">Per Annum</br> &nbsp;</div>
                                                    <a href="#"
                                                        class="btn btn-light-primary fw-bold mx-auto">Upgrade</a>
                                                </div>
                                            </th>
                                            <th class="text-center min-w-">
                                                <div class="min-w- mb-15"
                                                    style="width: 180px !important;margin-top: 20px;">
                                                    <div class="text-primary fs-3 fw-bold mb-7">Gold Partner</div>
                                                    <div class="fs-5x d-flex justify-content-center align-items-start">
                                                        <span class="fs-2 mt-3"
                                                            style="font-size: 16px !important;margin-top: 3px !important;">₹</span>
                                                        <span class="lh-sm fw-semibold"
                                                            style="font-size: 24px !important;"
                                                            data-kt-plan-price-month="25000"
                                                            data-kt-plan-price-annual="25000">1,00,000</span>
                                                    </div>
                                                    <div class="text-muted fw-bold mb-7">Per Annum</br> &nbsp;</div>
                                                    <a href="#"
                                                        class="btn btn-light-primary fw-bold mx-auto">Upgrade</a>
                                                </div>
                                            </th>
                                            <th class="text-center min-w-">
                                                <div class="min-w- mb-15"
                                                    style="width: 180px !important;margin-top: 20px;">
                                                    <div class="text-primary fs-3 fw-bold mb-7">Platinum Partner</div>
                                                    <div class="fs-5x d-flex justify-content-center align-items-start">
                                                        <span class="fs-2 mt-3"
                                                            style="font-size: 16px !important;margin-top: 3px !important;">₹</span>
                                                        <span class="lh-sm fw-semibold"
                                                            style="font-size: 24px !important;"
                                                            data-kt-plan-price-month="25000"
                                                            data-kt-plan-price-annual="25000">3,00,000</span>
                                                    </div>
                                                    <div class="text-muted fw-bold mb-7">Per Annum</br> &nbsp;</div>
                                                    <a href="#"
                                                        class="btn btn-light-primary fw-bold mx-auto">Upgrade</a>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-2">Eligibility
                                                    Criteria</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    Business Consultant Profile
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Open to Individuals & SMBs
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    IT Certification Required
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Minimum Turnover ₹50L
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Turnover ₹1Cr
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Turnover ₹3Cr & Above
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Minimum Team
                                                    Size</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    1
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    1 to 3
                                                    (No Sales Executive)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    3 to 5
                                                    (1 Sales Executive)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    5 to 8
                                                    (1 Sales Executive)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    8 to 12
                                                    (2 Sales Executive)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    12 to 20
                                                    (3 Sales Executive)
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Inventory Stock
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Min Stock ₹5L
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Min Stock ₹20L
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Min Stock ₹50L
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Revenue Sharing
                                                    on Monthly Business</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    5%
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    5%
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    8%
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    10%
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    12%
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    15%
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Minimum Monthly
                                                    Business in Product Reselling.
                                                    (Minimum Monthly Business Requirement to Keep Partnership Active)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹25,000.00/-
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    ₹1,00,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹3,00,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹5,00,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹10,00,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹25,00,000.00/-
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Virtual
                                                    Credits.(10% Annual Intrest will be paid to Partners)
                                                    (Partner Should Buy Monthly Virtual Credits to keep the Partner Code
                                                    Active and Get Partner Benefits, in case they do not complete the
                                                    Monthly Revenue Targates)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹2500.00/-
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    ₹10,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹30,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹50,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹1,00,000.00/-
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    ₹2,50,000.00/-
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Access to
                                                    Partner Community Funds.
                                                    (Eligible Partners can Apply for Community Funds)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Minimum Fixed
                                                    Revenue Earnings (Daily Fixed)
                                                    (Service Providers- Consumer Market)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    INR 1,000.00/- Per Engg. daily
                                                    (Mimimum 10 Calls Per Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 1,500.00/- Per Engg. daily
                                                    (Minimum 10 Calls Per Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 2,000.00/- Per Engg. daily
                                                    (Minimum 10 Calls Per Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 2,500.00/- Per Engg. daily
                                                    (Minimum 10 Calls Per Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 3,000.00/- Per Engg. daily
                                                    (Minimum 10 Calls Per Day)
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Insentive
                                                    Earnings (Daily Insentive)
                                                    (Service Providers- Consumer Market)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    INR 500.00/- Per Call
                                                    (More than 10 Call/ Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 700.00/- Per Call
                                                    (More than 10 Call/ Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 900.00/- Per Call
                                                    (More than 10 Call/ Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 1,100.00/- Per Call
                                                    (More than 10 Call/ Day)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    INR 1,500.00/- Per Call
                                                    (More than 10 Call/ Day)
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Training &
                                                    Certifications</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    Personality Development & Sales Training
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Basic IT Training
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Advanced IT Training
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Technology Workshops
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Leadership Training
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    All Access
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Technology
                                                    Updates & Upgrades.
                                                    (Technical Trainings for Partner's Technical Team)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Technology
                                                    Updates & Upgrades.
                                                    (Technical Trainings for Partner's Technical Team)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Sales Support
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    Telephonic Support Only
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Phone & Email Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Dedicated Partner Manager
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Dedicated Partner Manager
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Exclusive Partner Manager
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Exclusive + Regional Manager
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Marketing
                                                    Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    Digital Templates
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Standard Toolkit
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Personalized Branding
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Co-Branded Campaigns
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Event Participation
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Co-Sponsorship
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Access to Leads
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Limited
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Priority
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Localized Leads
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    State-Wide Leads
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Country-Wide Leads
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Onboarding of
                                                    Sub-Partners</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Limited (10 Partners)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Limited (50 Partners)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Unlimited
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Unlimited
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Customer
                                                    Taging.
                                                    (Tag your Customers for Securing your Business) </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Product
                                                    Discounts
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    Up to 3%
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Up to 5%
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Up to 6%

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Up to 7%

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Up to 8%

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Up to 10%

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Stock
                                                    Requirement

                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Optional
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Optional
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Mandatory
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Geographical
                                                    Exclusivity
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Localized
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    City
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    State
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Support For
                                                    Government Tenders (GeM)
                                                    (Access for Published Tenders on Gov. E-Market Places & Support for
                                                    Participation in Bids)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Access for
                                                    Business Tools:
                                                    (Accounting, HRMS, CRM, Payroll, Digital Marketing Tools, Service
                                                    Desk, Inventory Management, Training Portal)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    CRM & Digital Marketing Tools
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    CRM & Digital Marketing Tools
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Limited Access
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    All Access
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    All Access
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    All Access
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Access for Free
                                                    & Paid Softwares:
                                                    (Portal for Free Softwares like browsers.exe, Media Players etc. &
                                                    Paid Softwares like MS Office, Adobe etc.)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Access for
                                                    Employeer Job Portal:
                                                    (Dedicated Job Portal for Hiring IT Resources Only)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check-square fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">Access for
                                                    Chartered Accountants (CAs):
                                                    (Support for Company Registration, leagle Compliance, GST Filling,
                                                    Account Auditing, etc.)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-5">"Access for HR
                                                    Services:
                                                    (Support for Candidate screening, Interview Scheduling, Employee
                                                    Onboarding, Payroll Management etc.)"
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center">
                                                    Add-On

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Use Case Matching -->
                            <!-- <div class="mb-5">
                                <h4 class="fw-bold text-primary mb-3">📌 Use Case Matching</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">👉 Best plan for SOHOs with 5 devices – <strong>Standard
                                            AMC</strong></li>
                                    <li class="list-group-item">👉 For enterprise IT asset management – <strong>Custom
                                            ATS Plan</strong></li>
                                </ul>
                            </div> -->
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


<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->

<?php include('./includes/footer.php') ?>

<script>

</script>