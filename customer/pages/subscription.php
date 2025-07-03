<!--- HEADER --->
<?php include('./includes/header.php');

?>
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">				
        <!--- SIDEBAR --->
        <?php include('./includes/sidebar.php') ?>
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper" style="padding-top: 10px;">
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl" style="margin: 0px 10px;max-width: none;">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Pricing-->
                    <div class="card">
                        <!-- <p>Annual Technical Support (ATS) Plans</p> -->
                        <!--begin::Card body-->
                        <div class="card-body px-10 px-lg-20 pt-17 pb-10" style="padding-top: 0px !important;">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <a href="<?php echo BASE_URL;?>pages/dashboard.php" style="display: block;position: relative;height: 60px;margin-top: 15px;">
                                    <img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroopLogo.png" style="display: inline;width: 25%;height: 60px !important;" class="h-30px" />
                                    <!-- <p>asd</p> -->
                                </a>
                                <table class="table align-middle table-striped gy-7" id="example">
                                    <!--begin::Table head-->
                                    <thead class="align-middle">
                                        <tr id="kt_pricing">
                                            <th>
                                                <div class="nav rounded-pill px-3 py-2 ms-9  w-225px" data-kt-buttons="true" >
                                                    <!-- <p class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" style="background-color: #1b84ff !important;width: -webkit-fill-available;">Partner Plans</p> -->
                                                    <!-- <button class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" data-kt-plan="month">Monthly</button> -->
                                                    <!-- <button class="nav-link btn btn-active btn-active-dark fw-bold btn-color-gray-600 py-3 px-5 m-1 rounded-pill" data-kt-plan="annual">Annually</button> -->
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" " style="width: 180px !important;">
                                                    <div class="text-primary fs-3 fw-bold ">Basic</div>
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" " style="width: 200px !important;">
                                                    <div class="text-primary fs-3 fw-bold ">Standard</div>
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" " style="width: 180px !important;">
                                                    <div class="text-primary fs-3 fw-bold ">Premium</div>
                                                </div>
                                            </th>
                                            <th class="text-center ">
                                                <div class=" " style="width: 200px !important;">
                                                    <div class="text-primary fs-3 fw-bold ">Enterprise (With FMS)</div>
                                                </div>
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Ideal For</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Individuals & Small Businesses
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center" style="text-align: center;">
                                                SMBs & Growing Teams
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Large Enterprises & Critical Systems 
                                                </div>
                                            </td>
                                            <td class="card-rounded-end">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprises with Dedicated Onsite IT Engineers
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Response Time</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Next Business Day.
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-7 flex-root d-flex justify-content-center" style="text-align: center;">
                                                Same Business Day
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                8 Hours
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                4 Hours
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Dedicated Onsite Engineer (FMS)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                30 Plus User Licenses
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Dedicated IT Engineer
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Preventive Maintenance</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Semi-Annual
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Quarterly
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Monthly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Remote Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Limited
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Unlimited
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                24/7 Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                24/7 Dedicated
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">On-Site Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Priority
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Full-Time Onsite Engineer
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Helpdesk & Ticketing</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Priority
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                24/7 Priority Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Hardware Repair</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Minor Fixes
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Priority Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprise Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Software Installation & Updates</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Antivirus & Security Updates</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprise-Grade
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Patch Management & OS Updates</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Monthly
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Real-Time/ Weekly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Data Backup & Recovery</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic (Support for Manual Backup)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced (Support for Backup Software)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Managed Backup (Manage your entire Backups)
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">IT Asset Tracking & Reports</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Quarterly
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Monthly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">IT Infrastructure Audit</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Annually
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Quarterly
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Server Monitoring & Maintenance</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                24/7 Monitoring
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Network Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                AI-Driven
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Cybersecurity Compliance</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Application Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Custom
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Printer & Scanner Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Remote Desktop Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Full Control
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Database Administration</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Dedicated DBA
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Cloud Support (AWS, Azure, Google Cloud)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Limited
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Full Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">E-Waste Management & Disposal</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced Support
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Dedicated Account Manager</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Hardware Replacement Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Basic
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Advanced
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Disaster Recovery Planning</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Enterprise-Level
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">IoT Device Support</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard Support
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Full Management
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Custom SLA Agreements</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Standard SLA
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Tailored Contracts
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">24/7 AI-Powered IT Health Monitoring</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Enterprise-Grade Firewall Setup</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">License & Subscription Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">User Access & Privilege Control</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Zero Trust Security Implementation</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Mobile Device Management (MDM)</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">IT Policy Implementation & Compliance</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Penetration Testing & Vulnerability Scanning</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Automated System Health Reports</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                            <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Enterprise Asset Lifecycle Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                            <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">ITSM Implementation</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                            <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">AI-Driven IT Incident Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Security Awareness Training for Employees</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Multi-Factor Authentication Setup</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Biometric Access Management</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Automated Backup & Recovery Testing</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">24/7 IT Governance & Compliance Monitoring</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">AI-Driven Threat Intelligence Monitoring</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">Custom IT Infrastructure Design & Optimization</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-none">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                                    </span>
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                    <span class="h-40px w-40px d-flex flex-center d-block">
                                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
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
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">1 Year Subscription (Max. 5 Assets/ User) 18% GST Extra on Net Total</div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹4,999.00/-</span> (User/ Year) 
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹7,999.00/-</span> (User/ Year)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹15,999.00/-</span> (User/ Year)
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Custom
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">3 Years Subscription (Max. 5 Assets/ User) 18% GST Extra on Net Total </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹9,999.00/-</span> (User/ Year)- 1Y Free
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹16,999.00/-</span> (User/ Year)- 1Y Free
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹31,999.00/-</span> (User/ Year)- 1Y Free
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Custom
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="card-rounded-start">
                                                <div class="fw-bold d-flex align-items-center ps-9 fs-3" style="font-size: 14px !important;">5 Years Subscription (Max. 5 Assets/ User) + GST  </div>
                                            </th>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹14,999.00/-</span> (User/ Year)- 2Yrs Free
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹23,999.00/-</span> (User/ Year)- 2Yrs Free
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                <span style="font-weight:bold;">₹47,999.00/-</span> (User/ Year)- 2Yrs Free
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex-root d-flex justify-content-center" style="text-align: center;">
                                                Custom
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
                        <a href="https://www.infotroop.co.in/" target="_blank" class="text-gray-800 text-hover-primary">InfoTroop IT Solutions Pvt. Ltd.</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                        <li class="menu-item">
                            <a href="https://www.infotroop.co.in/" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://www.infotroop.co.in/contact" target="_blank" class="menu-link px-2">Support</a>
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
    var table = $('#example').DataTable({
   "searching": false,
   "scrollY": 500,
   "paging":   false,
   "ordering": false,
   "info":     false,        
   "responsive": false
});
</script>