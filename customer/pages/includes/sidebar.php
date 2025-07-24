<style>
[data-bs-theme="dark"] .logo-light {
    display: none !important;
}

[data-bs-theme="dark"] .logo-dark {
    display: inline !important;
}

/* Show light logo in light theme (default) */
.logo-light {
    display: inline;
}

.logo-dark {
    display: none;
}
</style>

<?php
$current_url = $_SERVER['REQUEST_URI']; 

// Dashboards
if (strpos($current_url, 'dashboard.php') !== false) {
    $dashboardactiveclass = 'active';
    $dashboardactivemainclass = 'here show';
} else {
    $dashboardactiveclass = '';
	$dashboardactivemainclass = '';
}

// Profile & Organization
if (strpos($current_url, 'profileInfo.php') !== false) {
    $profileInfoactiveclass = 'active';
    $profileactivemainclass = 'here show';
} else {
    $profileInfoactiveclass = '';
	$profileactivemainclass = '';
}
if (strpos($current_url, 'organizationInfo.php') !== false) {
    $organizationInfoactiveclass = 'active';
    $organizationInfoactivemainclass = 'here show';
} else {
    $organizationInfoactiveclass = '';
	$organizationInfoactivemainclass = '';
}


// Asset Management
if (strpos($current_url, 'addItAssetsCustomer.php') !== false) {
    $addAssetsactiveclass = 'active';
    $addAssetsactivemainclass = 'here show';
} else {
    $addAssetsactiveclass = '';
	$addAssetsactivemainclass = '';
}
if (strpos($current_url, 'listItAssetsCustomer.php') !== false) {
    $listAssetsactiveclass = 'active';
    $listAssetsactivemainclass = "here show";
} else {
    $listAssetsactiveclass = '';
    $listAssetsactivemainclass = '';
}

// License & Subscription Management
if (strpos($current_url, 'licenses.php') !== false) {
    $licensesactiveclass = 'active';
    $licensesactivemainclass = 'here show';
} else {
    $licensesactiveclass = '';
	$licensesactivemainclass = '';
}


// Raise Service Request
if (strpos($current_url, 'raiseServiceRequest.php') !== false) {
    $raiseRequestactiveclass = 'active';
    $raiseRequestactivemainclass = 'here show';
} else {
    $raiseRequestactiveclass = '';
	$raiseRequestactivemainclass = '';
}
if (strpos($current_url, 'viewServiceRequest.php') !== false) {
    $viewServiceRequestactiveclass = 'active';
    $viewServiceRequestactivemainclass = 'here show';
} else {
    $viewServiceRequestactiveclass = '';
	$viewServiceRequestactivemainclass = '';
}

//Warranty & Renewal Management
if (strpos($current_url, 'warranty.php') !== false) {
    $warrantyactiveclass = 'active';
    $warrantyactivemainclass = 'here show';
} else {
    $warrantyactiveclass = '';
	$warrantyactivemainclass = '';
}
if (strpos($current_url, 'warrantyRenewal.php') !== false) {
    $warrantyRenewalQuoteactiveclass = 'active';
    $warrantyRenewalQuoteactivemainclass = 'here show';
} else {
    $warrantyRenewalQuoteactiveclass = '';
	$warrantyRenewalQuoteactivemainclass = '';
}
if (strpos($current_url, 'viewQuotes.php') !== false) {
    $viewQuotesactiveclass = 'active';
    $viewQuotesactivemainclass = 'here show';
} else {
    $viewQuotesactiveclass = '';
	$viewQuotesactivemainclass = '';
}



// Help
if (strpos($current_url, 'faq.php') !== false) {
    $faqsactiveclass = 'active';
    $faqsactivemainclass = 'here show';
} else {
    $faqsactiveclass = '';
	$faqsactivemainclass = '';
}

if (strpos($current_url, 'faq.php') !== false) {
    $serviceRequestsactiveclass = 'active';
    $serviceRequestsactivemainclass = 'here show';
} else {
    $serviceRequestsactiveclass = '';
	$serviceRequestsactivemainclass = '';
}


//Software and free tools
if (strpos($current_url, 'downloadTools.php') !== false) {
    $downloadToolsactiveclass = 'active';
    $downloadToolsactivemainclass = 'here show';
} else {
    $downloadToolsactiveclass = '';
	$downloadToolsactivemainclass = '';
}


//Billing and Invoice
if (strpos($current_url, 'viewInvoices.php') !== false) {
    $viewInvoicesactiveclass = 'active';
    $viewInvoicesactivemainclass = 'here show';
} else {
    $viewInvoicesactiveclass = '';
	$viewInvoicesactivemainclass = '';
}


//Support and Helpdesk
if (strpos($current_url, 'knowledgebase.php') !== false) {
    $knowledgebaseactiveclass = 'active';
    $knowledgebaseactivemainclass = 'here show';
} else {
    $knowledgebaseactiveclass = '';
	$knowledgebaseactivemainclass = '';
}

//User Management
if (strpos($current_url, 'members.php') !== false) {
    $membersactiveclass = 'active';
    $membersactivemainclass = 'here show';
} else {
    $membersactiveclass = '';
	$membersactivemainclass = '';
}
if (strpos($current_url, 'departments.php') !== false) {
    $departmentsactiveclass = 'active';
    $departmentsactivemainclass = 'here show';
} else {
    $departmentsactiveclass = '';
	$departmentsactivemainclass = '';
}


// Notifications
if (strpos($current_url, 'notifications.php') !== false) {
    $notificationsactiveclass = 'active';
    $notificationsactivemainclass = 'here show';
} else {
    $notificationsactiveclass = '';
	$notificationsactivemainclass = '';
}

// Settings
if (strpos($current_url, 'profile.php') !== false) {
    $profileactiveclass = 'active';
    $profileactivemainclass = 'here show';
} else {
    $profileactiveclass = '';
	$profileactivemainclass = '';
}

// Reports
if (strpos($current_url, 'reports.php') !== false) {
    $reportsactiveclass = 'active';
    $reportsactivemainclass = 'here show';
} else {
    $reportsactiveclass = '';
	$reportsactivemainclass = '';
}


if (strpos($current_url, 'listServiceRequest.php') !== false) {
    $listServiceRequestactiveclass = 'active';
} else {
    $listServiceRequestactiveclass = '';
}





?>
<!--begin::Aside-->
<div id="kt_aside" style="overflow: unset;" class="aside px-2" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'250px', '300px': '340px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <a href="<?php echo BASE_URL;?>pages/dashboard.php">
            <img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroopLogo.png"
                style="height:50px !important;margin-top: 10px;margin-left: 28px;" class="logo-light" />

            <!-- Dark Theme Logo -->
            <img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroop-Logo-White.png"
                style="height:50px !important;margin-top: 10px;margin-left: 28px;" class="logo-dark d-none" />
        </a>
        <br />
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y mt-5 mx-2" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="2px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-sub-indention menu-active-bg menu-state-primary menu-title-gray-700 fs-6 menu-rounded w-100 fw-semibold"
                id="#kt_aside_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $dashboardactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Dashboards</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $dashboardactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/dashboard.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Overview</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $profileactivemainclass.''.$organizationInfoactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Profile & Organization</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $profileInfoactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/profileInfo.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Profile Info</span>
                            </a>
                            <a class="menu-link <?php echo $organizationInfoactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/organizationInfo.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Organization Info</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $addAssetsactivemainclass.''.$listAssetsactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-parcel fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Asset Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $listAssetsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/listItAssetsCustomer.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Assets List</span>
                            </a>
                            <a class="menu-link <?php echo $addAssetsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/addItAssetsCustomer.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Asset Allocation</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $licensesactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-cheque fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                            </i>
                        </span>
                        <span class="menu-title">License & Subscription Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $licensesactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/licenses.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Licenses</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <!-- <div data-kt-menu-trigger="click" class="mt-2  menu-item <?php echo $faqsactivemainclass;?> menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-message-question fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Help</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $faqsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/faq.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">FAQ</span>
                            </a>
                        </div>
                    </div>
                </div> -->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $raiseRequestactivemainclass.''.$viewServiceRequestactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-delivery-3 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Service Requests</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $raiseRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/raiseServiceRequest.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Raise Service Request</span>
                            </a>
                            <a class="menu-link <?php echo $viewServiceRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/viewServiceRequest.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">View Service Requests</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $warrantyactivemainclass.''.$warrantyRenewalQuoteactivemainclass.''.$viewQuotesactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-update-file fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">Warranty & Renewal Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $warrantyactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/warranty.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Warranty</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $warrantyRenewalQuoteactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/warrantyRenewal.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Get Warranty Quote</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $viewQuotesactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/viewQuotes.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">View Warranty Quotation</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $viewInvoicesactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fas fa-file-invoice-dollar fs-2"></i>
                        </span>
                        <span class="menu-title">Billing & Invoices</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $viewInvoicesactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/viewInvoices.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">View Invoices</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $notificationsactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-notification-bing fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">Notifications & Reminders</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $notificationsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/notifications.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Set Reminders</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $knowledgebaseactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-monitor-mobile fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">Support & Helpdesk</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $knowledgebaseactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/knowledgebase.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">FAQ</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $downloadToolsactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-wrench fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">Software & Free Tools</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $downloadToolsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/downloadTools.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Download Free Tools</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $membersactivemainclass.''.$departmentsactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-people fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">User Management (for Businesses)</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $membersactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/members.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Members</span>
                            </a>
                            <a class="menu-link <?php echo $departmentsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/departments.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Departments</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $reportsactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-chart-pie-simple fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">Reports & Analytics</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $reportsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/comingSoon.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">View Analytics</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="mt-2  menu-item <?php echo $profileactivemainclass;?> menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-gear fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">Settings</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link <?php echo $profileactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/profile.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Profile Settings</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

            </div>
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <!-- <div class="aside-footer flex-column-auto px-4 pt-3 pb-7" id="kt_aside_footer">
        <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-custom btn-primary w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            title="200+ in-house components and 3rd-party plugins">
            <span class="btn-label">Docs & Components</span>
            <i class="ki-duotone ki-document btn-icon fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
    </div> -->
    <!--end::Footer-->
</div>
<!--end::Aside-->

<script>
var defaultThemeMode = "light";
var themeMode;
if (document.documentElement) {
    if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
    } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
        } else {
            themeMode = defaultThemeMode;
        }
    }
    if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
    }
    document.documentElement.setAttribute("data-bs-theme", themeMode);
}
</script>