<!--- HEADER --->
<?php include('./pages/includes/header.php');

?>
<div id="kt_header" class="header shadow-lg" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="top: 0px;"
    data-kt-sticky-enabled="true">
    <div class="container-fluid d-flex align-items-center flex-lg-stack">
        <div class="d-flex align-items-center justify-content-between w-100">
            <div style="padding-right:10px;">
                <a href="#">
                    <img alt="Logo" src="<?php echo BASE_URL; ?>assets/media/logos/InfoTroopLogo.png"
                        style="width: 250px;">
                </a>
            </div>
            <div style="padding-right:10px;">
                <?php if (!isset($_SESSION['uid'])): ?>
                <!-- Show Login button when not logged in -->
                <a href="<?php echo BASE_URL; ?>index_loginpage.php"
                    class="btn btn-icon btn-light-primary position-relative" data-bs-toggle="tooltip" title="Login">
                    <i class="fas fa-user fs-2 primary"></i>
                </a>
                <?php else: ?>
                <!-- Show Back button when logged in -->
                <a class="btn btn-icon btn-light-secondary position-relative"
                    data-bs-toggle="tooltip" title="Back" onclick="fnGoBack()">
                    <i class="fas fa-caret-left fs-2"></i>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="d-flex flex-column flex-root" style="margin-top: 80px;">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--- SIDEBAR --->
        <?php include('./pages/includes/sidebar.php') ?>
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper" style="padding-top: 10px;">
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl"
                style="margin: 0px 10px;max-width: none;">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <section class="banner-img container-fluid mb-4" style="background-image: url('assets/media/img/banner-image3.jpg'); 
							background-size: cover; background-position: center; height: 300px;">
                    </section>
                    <!--begin::Pricing-->
                    <div class="card">
                        <!-- <p>Annual Technical Support (ATS) Plans</p> -->
                        <!--begin::Card body-->
                        <div class="card-body px-10 px-lg-20 pt-17" style="padding-top: 0px !important;">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->

                                <table class="table align-middle table-striped table-bordered gy-7" id="example">
                                    <!--begin::Table head-->
                                    <thead class="align-middle">
                                        <tr id="kt_pricing">
                                            <th>
                                                <div class="nav rounded-pill px-3 py-2 ms-9 w-220px important"
                                                    data-kt-buttons="true">
                                                    <h1>ATS Subscriptions</h1>
                                                    <!-- <p class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" style="background-color: #1b84ff !important;width: -webkit-fill-available;">Partner Plans</p> -->
                                                    <!-- <button class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" data-kt-plan="month">Monthly</button> -->
                                                    <!-- <button class="nav-link btn btn-active btn-active-dark fw-bold btn-color-gray-600 py-3 px-5 m-1 rounded-pill" data-kt-plan="annual">Annually</button> -->
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" py-12 mb-15" style="width: 220px !important;">
                                                    <div class="text-primary fs-3 fw-bold ">Basic</div>
                                                    <br />
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select..."
                                                        name="basic" id="basic" onChange="fnBasicBtn();">
                                                        <option value=""></option>
                                                        <option value="1">1 Year</option>
                                                        <option value="3">3 Years</option>
                                                        <option value="5">5 Years</option>
                                                    </select>
                                                    <br />
                                                    <br />
                                                    <a class="btn btn-light-primary fw-bold mx-auto" id="basic_btn">Buy
                                                        Now</a>
                                                </div>
                                            </th>
                                            <script>
                                            function fnBasicBtn() {
                                                var basic = document.getElementById("basic").value;
                                                if (basic == "1") {
                                                    document.getElementById("basic_btn").innerHTML =
                                                        'Buy Now at ₹4,999.00/-';
                                                    document.getElementById("basic_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-BSC-1Y';
                                                } else if (basic == "3") {
                                                    document.getElementById("basic_btn").innerHTML =
                                                        'Buy Now at ₹9,999.00/-';
                                                    document.getElementById("basic_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-BSC-3Y';
                                                } else if (basic == "5") {
                                                    document.getElementById("basic_btn").innerHTML =
                                                        'Buy Now at ₹14,999.00/-';
                                                    document.getElementById("basic_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-BSC-5Y';
                                                }
                                            }
                                            </script>
                                            <th class="text-center ">
                                                <div class=" mb-15 " style="width: 220px !important;">
                                                    <div class="text-primary fs-3 fw-bold ">Standard</div>
                                                    <br />
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select..."
                                                        name="standard" id="standard" onChange="fnStandardBtn();">
                                                        <option value=""></option>
                                                        <option value="1">1 Year</option>
                                                        <option value="3">3 Years</option>
                                                        <option value="5">5 Years</option>
                                                    </select>
                                                    <br />
                                                    <br />
                                                    <a class="btn btn-light-primary fw-bold mx-auto"
                                                        id="standard_btn">Buy Now</a>
                                                </div>
                                            </th>
                                            <script>
                                            function fnStandardBtn() {
                                                var basic = document.getElementById("standard").value;
                                                if (basic == "1") {
                                                    document.getElementById("standard_btn").innerHTML =
                                                        'Buy Now at ₹7,999.00/-';
                                                    document.getElementById("standard_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-STD-1Y';
                                                } else if (basic == "3") {
                                                    document.getElementById("standard_btn").innerHTML =
                                                        'Buy Now at ₹16,999.00/-';
                                                    document.getElementById("standard_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-STD-3Y';
                                                } else if (basic == "5") {
                                                    document.getElementById("standard_btn").innerHTML =
                                                        'Buy Now at ₹23,999.00/-';
                                                    document.getElementById("standard_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-STD-5Y';
                                                }
                                            }
                                            </script>
                                            <th class="text-center ">
                                                <div class=" mb-15 " style="width: 220px !important;">
                                                    <div class="text-primary fs-3 fw-bold ">Premium</div>
                                                    <br />
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select..."
                                                        name="premium" id="premium" onChange="fnPremiumBtn();">
                                                        <option value=""></option>
                                                        <option value="1">1 Year</option>
                                                        <option value="3">3 Years</option>
                                                        <option value="5">5 Years</option>
                                                    </select>
                                                    <br />
                                                    <br />
                                                    <a class="btn btn-light-primary fw-bold mx-auto"
                                                        id="premium_btn">Buy Now</a>
                                                </div>
                                            </th>
                                            <script>
                                            function fnPremiumBtn() {
                                                var basic = document.getElementById("premium").value;
                                                if (basic == "1") {
                                                    document.getElementById("premium_btn").innerHTML =
                                                        'Buy Now at ₹15,999.00/-';
                                                    document.getElementById("premium_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-1Y';
                                                } else if (basic == "3") {
                                                    document.getElementById("premium_btn").innerHTML =
                                                        'Buy Now at ₹31,999.00/-';
                                                    document.getElementById("premium_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-3Y';
                                                } else if (basic == "5") {
                                                    document.getElementById("premium_btn").innerHTML =
                                                        'Buy Now at ₹47,999.00/-';
                                                    document.getElementById("premium_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-5Y';
                                                }
                                            }
                                            </script>
                                            <th class="text-center ">
                                                <div class=" mb-15 " style="width: 220px !important;">
                                                    <div class="text-primary fs-3 fw-bold">Enterprise (With FMS)</div>
                                                    <br />
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select..."
                                                        name="enterprice" id="enterprice" onChange="fnEnterpriceBtn();">
                                                        <option value=""></option>
                                                        <option value="1">1 Year</option>
                                                        <option value="3">3 Years</option>
                                                        <option value="5">5 Years</option>
                                                    </select>
                                                    <br />
                                                    <br />
                                                    <p><a class="btn btn-light-primary fw-bold mx-auto"
                                                            href="mailto:sales@infotroop.co.in">sales@infotroop.co.in</a>
                                                    </p>
                                                </div>
                                            </th>
                                            <script>
                                            function fnEnterpriceBtn() {
                                                var basic = document.getElementById("enterprice").value;
                                                if (basic == "1") {
                                                    document.getElementById("enterprice_btn").innerHTML =
                                                        'Buy Now at ₹15,999.00/-';
                                                    document.getElementById("enterprice_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-1Y';
                                                } else if (basic == "3") {
                                                    document.getElementById("enterprice_btn").innerHTML =
                                                        'Buy Now at ₹31,999.00/-';
                                                    document.getElementById("enterprice_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-3Y';
                                                } else if (basic == "5") {
                                                    document.getElementById("enterprice_btn").innerHTML =
                                                        'Buy Now at ₹47,999.00/-';
                                                    document.getElementById("enterprice_btn").href =
                                                        'https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-5Y';
                                                }
                                            }
                                            </script>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>

                                        <tr>
                                            <th>
                                                <div class="fw-bold align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">1 Year Subscription (Max. 5
                                                    Assets/ User) </br><span style="font-size: 12px;color: #4c4a4a;">18%
                                                        GST Extra on Net Total</span></div>
                                            </th>
                                            <td>
                                                <div class="flex-root justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <p style="font-weight:bold;font-size: 14px;">₹4,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-BSC-1Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹7,999.00/- </br>(User/ Year)</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹7,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-STD-1Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹15,999.00/- </br>(User/ Year)</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹15,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-1Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <p style="font-weight:bold;">Contact Sales</p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="mailto:sales@infotroop.co.in" style="margin-top: 30px;">sales@infotroop.co.in</a> -->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">3 Years Subscription (Max. 5
                                                    Assets/ User) </br><span style="font-size: 12px;color: #4c4a4a;">18%
                                                        GST Extra on Net Total</span></div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹9,999.00/- </br>(User/ Year)- 1Y Free</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹9,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)- 1Yrs Free</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-BSC-3Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹16,999.00/- </br>(User/ Year)- 1Y Free</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹16,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)- 1Yrs Free</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-STD-3Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹31,999.00/- </br>(User/ Year)- 1Y Free</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹31,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)- 1Yrs Free</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-3Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <p style="font-weight:bold;">Contact Sales</p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="mailto:sales@infotroop.co.in" style="margin-top: 30px;">sales@infotroop.co.in</a> -->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">5 Years Subscription </br><span
                                                        style="font-size: 12px;color: #4c4a4a;">(Max. 5 Assets/ User) +
                                                        GST </span> </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹14,999.00/- </br>(User/ Year)- 2Yrs Free</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹14,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)- 2Yrs Free</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-BSC-5Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹23,999.00/- </br>(User/ Year)- 2Yrs Free</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹23,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)- 2Yrs Free</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-STD-5Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <!-- <p style="font-weight:bold;">₹47,999.00/- </br>(User/ Year)- 2Yrs Free</p>  -->
                                                    <p style="font-weight:bold;font-size: 14px;">₹47,999.00/- </br><span
                                                            style="font-size: 11px;">(User/ Year)- 2Yrs Free</span> </p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="https://subscriptions.infotroop.co.in/subscribe/a86d909731e0295c6c23ab887fa1937f71c07f8e18f84a4f0823bcb88ecfdc2b/ITISPL-ATS-PREM-5Y" style="margin-top: 10px;">Buy Now</a> -->
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;display: block !important;">
                                                    <p style="font-weight:bold;">Contact Sales</p>
                                                    <!-- <a class="btn btn-light-primary fw-bold mx-auto" href="mailto:sales@infotroop.co.in" style="margin-top: 30px;">sales@infotroop.co.in</a> -->
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Ideal For</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Individuals & Small Businesses
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    SMBs & Growing Teams
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Large Enterprises & Critical Systems
                                                </div>
                                            </td>
                                            <td class="card-rounded-end">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprises with Dedicated Onsite IT Engineers
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Response Time</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Next Business Day.
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Same Business Day
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    8 Hours
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    4 Hours
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Dedicated Onsite Engineer (FMS)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    30 Plus User Licenses
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Dedicated IT Engineer
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Preventive Maintenance</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Semi-Annual
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Quarterly
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Monthly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Remote Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Limited
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Unlimited
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    24/7 Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    24/7 Dedicated
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">On-Site Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Priority
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Full-Time Onsite Engineer
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Helpdesk & Ticketing</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Priority
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    24/7 Priority Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Hardware Repair</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Minor Fixes
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Priority Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprise Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Software Installation & Updates
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Antivirus & Security Updates
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprise-Grade
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Patch Management & OS Updates
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Monthly
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Real-Time/ Weekly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Data Backup & Recovery</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic (Support for Manual Backup)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced (Support for Backup Software)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Managed Backup (Manage your entire Backups)
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">IT Asset Tracking & Reports
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Quarterly
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Monthly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">IT Infrastructure Audit</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Annually
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Quarterly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Server Monitoring & Maintenance
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    24/7 Monitoring
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Network Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    AI-Driven
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Cybersecurity Compliance</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Application Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Custom
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Printer & Scanner Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Remote Desktop Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Full Control
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Database Administration</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Dedicated DBA
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Cloud Support (AWS, Azure,
                                                    Google Cloud)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Limited
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Full Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">E-Waste Management & Disposal
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Dedicated Account Manager</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Hardware Replacement Support
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Disaster Recovery Planning</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">IoT Device Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Full Management
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Custom SLA Agreements</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Standard SLA
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    Tailored Contracts
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">24/7 AI-Powered IT Health
                                                    Monitoring</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Enterprise-Grade Firewall Setup
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">License & Subscription
                                                    Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">User Access & Privilege Control
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Zero Trust Security
                                                    Implementation</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Mobile Device Management (MDM)
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">IT Policy Implementation &
                                                    Compliance</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Penetration Testing &
                                                    Vulnerability Scanning</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Automated System Health Reports
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Enterprise Asset Lifecycle
                                                    Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">ITSM Implementation</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">AI-Driven IT Incident Management
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Security Awareness Training for
                                                    Employees</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Multi-Factor Authentication
                                                    Setup</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Biometric Access Management
                                                </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Automated Backup & Recovery
                                                    Testing</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">24/7 IT Governance & Compliance
                                                    Monitoring</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">AI-Driven Threat Intelligence
                                                    Monitoring</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3"
                                                    style="font-size: 14px !important;">Custom IT Infrastructure Design
                                                    & Optimization</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center"
                                                    style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-cross-square fs-2x text-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Pricing-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Container-->

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
<?php include('./pages//includes/footer.php') ?>
<script>
var table = $('#example').DataTable({
    "searching": false,
    "scrollY": 'auto',
    "paging": false,
    "ordering": false,
    "info": false,
    "responsive": false
});
</script>