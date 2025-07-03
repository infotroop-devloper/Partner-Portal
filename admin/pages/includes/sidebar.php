<?php
$current_url = $_SERVER['REQUEST_URI']; 

// Dashboard
if (strpos($current_url, 'dashboard.php') !== false) {
    $dashboardactiveclass = 'active';
    $dashboardactivemainclass = 'here show';
} else {
    $dashboardactiveclass = '';
	$dashboardactivemainclass = '';
}

// Modal mapping
if (strpos($current_url, 'moduleMapping.php') !== false) {
    $rolesactiveclass = 'active';
    $rolesactivemainclass = 'here show';
} else {
    $rolesactiveclass = '';
	$rolesactivemainclass = '';
}

// Partner
if (strpos($current_url, 'newPartnerRequest.php') !== false) {
    $newPartnerRequestactiveclass = 'active';
    $PartnerRequestactivemainclass = 'here show';
} else {
    $newPartnerRequestactiveclass = '';
	$PartnerRequestactivemainclass = '';
}
if (strpos($current_url, 'deactivedPartners.php') !== false) {
    $deactivePartnerRequestactiveclass = 'active';
    $deactivePartnerRequestactivemainclass = 'here show';
} else {
    $deactivePartnerRequestactiveclass = '';
	$deactivePartnerRequestactivemainclass = '';
}

if (strpos($current_url, 'activePartnerRequest.php') !== false) {
    $activePartnerRequestactiveclass = 'active';
    $activePartnerRequestactivemainclass = 'here show';
} else {
    $activePartnerRequestactiveclass = '';
	$activePartnerRequestactivemainclass = '';
}


// Service Desk
if (strpos($current_url, 'serviceDeskMetrics.php') !== false) {
    $serviceDeskMetricsactiveclass = 'active';
    $serviceDeskMetricsactivemainclass = 'here show';
} else {
    $serviceDeskMetricsactiveclass = '';
	$serviceDeskMetricsactivemainclass = '';
}
if (strpos($current_url, 'openTickets.php') !== false) {
    $openTicketsactiveclass = 'active';
    $openTicketsactivemainclass = 'here show';
} else {
    $openTicketsactiveclass = '';
	$openTicketsactivemainclass = '';
}
if (strpos($current_url, 'resolvedTickets.php') !== false) {
    $resolvedTicketsactiveclass = 'active';
    $resolvedTicketsactivemainclass = 'here show';
} else {
    $resolvedTicketsactiveclass = '';
	$resolvedTicketsactivemainclass = '';
}
if (strpos($current_url, 'ticketOverview.php') !== false) {
    $ticketOverviewactiveclass = 'active';
    $ticketOverviewactivemainclass = 'here show';
} else {
    $ticketOverviewactiveclass = '';
	$ticketOverviewactivemainclass = '';
}
if (strpos($current_url, 'priorityTickets.php') !== false) {
    $priorityTicketsactiveclass = 'active';
    $priorityTicketsactivemainclass = 'here show';
} else {
    $priorityTicketsactiveclass = '';
	$priorityTicketsactivemainclass = '';
}
if (strpos($current_url, 'ticketAssignment.php') !== false) {
    $ticketAssignmentactiveclass = 'active';
    $ticketAssignmentactivemainclass = 'here show';
} else {
    $ticketAssignmentactiveclass = '';
	$ticketAssignmentactivemainclass = '';
}
if (strpos($current_url, 'resolutionTimeMetrics.php') !== false) {
    $resolutionTimeMetricsactiveclass = 'active';
    $resolutionTimeMetricsactivemainclass = 'here show';
} else {
    $resolutionTimeMetricsactiveclass = '';
	$resolutionTimeMetricsactivemainclass = '';
}
if (strpos($current_url, 'escalations.php') !== false) {
    $escalationsactiveclass = 'active';
    $escalationsactivemainclass = 'here show';
} else {
    $escalationsactiveclass = '';
	$escalationsactivemainclass = '';
}

//Partner Management
if (strpos($current_url, 'partnerDirectory.php') !== false) {
    $partnermngactiveclass = 'active';
    $partnermngactivemainclass = 'here show';
} else {
    $partnermngactiveclass = '';
	$partnermngactivemainclass = '';
}
if (strpos($current_url, 'partnerOverview.php') !== false) {
    $partneroverviewactiveclass = 'active';
    $partneroverviewactivemainclass = 'here show';
} else {
    $partneroverviewactiveclass = '';
	$partneroverviewactivemainclass = '';
}

//Project,Complience & Funds
if (strpos($current_url, 'complianceCertifications.php') !== false) {
    $complianceCertificationsactiveclass = 'active';
    $complianceCertificationsactivemainclass = 'here show';
} else {
    $complianceCertificationsactiveclass = '';
	$complianceCertificationsactivemainclass = '';
}
if (strpos($current_url, 'approvedFunds.php') !== false) {
    $approvedFundsactiveclass = 'active';
    $approvedFundsactivemainclass = 'here show';
} else {
    $approvedFundsactiveclass = '';
	$approvedFundsactivemainclass = '';
}



// Others 

if (strpos($current_url, 'customer.php') !== false) {
    $customerdactiveclass = 'active';
    $customerdactivemainclass = 'here show';
} else {
    $customerdactiveclass = '';
	$customerdactivemainclass = '';
}
if (strpos($current_url, 'serviceDesk.php') !== false) {
    $serviceDeskdactiveclass = 'active';
    $serviceDeskdactivemainclass = 'here show';
} else {
    $serviceDeskdactiveclass = '';
	$serviceDeskdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $pricelistdactiveclass = 'active';
    $pricelistdactivemainclass = 'here show';
} else {
    $pricelistdactiveclass = '';
	$pricelistdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $Leadsdactiveclass = 'active';
    $Leadsdactivemainclass = 'here show';
} else {
    $Leadsdactiveclass = '';
	$Leadsdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $Reportsdactiveclass = 'active';
    $Reportsdactivemainclass = 'here show';
} else {
    $Reportsdactiveclass = '';
	$Reportsdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $TrainingAndCertificatesdactiveclass = 'active';
    $TrainingAndCertificatesdactivemainclass = 'here show';
} else {
    $TrainingAndCertificatesdactiveclass = '';
	$TrainingAndCertificatesdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $customerTicketsdactiveclass = 'active';
    $customerTicketsdactivemainclass = 'here show';
} else {
    $customerTicketsdactiveclass = '';
	$customerTicketsdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $MarketingToolsAndTemplatesdactiveclass = 'active';
    $MarketingToolsAndTemplatesdactivemainclass = 'here show';
} else {
    $MarketingToolsAndTemplatesdactiveclass = '';
	$MarketingToolsAndTemplatesdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $RevenueAndPayoutsdactiveclass = 'active';
    $RevenueAndPayoutsdactivemainclass = 'here show';
} else {
    $RevenueAndPayoutsdactiveclass = '';
	$RevenueAndPayoutsdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $OEMPartnersdactiveclass = 'active';
    $OEMPartnersdactivemainclass = 'here show';
} else {
    $OEMPartnersdactiveclass = '';
	$OEMPartnersdactivemainclass = '';
}
if (strpos($current_url, 'priceList.php') !== false) {
    $MIIPdactiveclass = 'active';
    $MIIPdactivemainclass = 'here show';
} else {
    $MIIPdactiveclass = '';
	$MIIPdactivemainclass = '';
}
?>
<!--begin::Aside-->
<div id="kt_aside" class="aside px-2" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '365px': '350px'}"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 mx-2" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="2px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-sub-indention menu-active-bg menu-state-primary menu-title-gray-700 fs-6 menu-rounded w-100 fw-semibold"
                id="#kt_aside_menu" data-kt-menu="true">

                <div data-kt-menu-trigger="click"
                    class="menu-item <?php echo $dashboardactivemainclass;?> menu-accordion">

                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-microsoft fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Dashboards</span>
                        <span class="menu-arrow"></span>
                    </span>


                    <div class="menu-sub menu-sub-accordion">

                        <div class="menu-item">

                            <a class="menu-link <?php echo $dashboardactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/dashboard.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Default</span>
                            </a>

                        </div>
                    </div>
                </div>

				<!-- Partners -->
                <div data-kt-menu-trigger="click"
                    class="menu-item <?php echo $PartnerRequestactivemainclass.' '.$deactivePartnerRequestactivemainclass.' '.$activePartnerRequestactivemainclass;?> menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Partners</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $newPartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/newPartnerRequest.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">New Request</span>
                            </a>
                            <a class="menu-link <?php echo $activePartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/activePartnerRequest.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Active Partners</span>
                            </a>
                            <a class="menu-link <?php echo $deactivePartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/deactivedPartners.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Deactive Partners</span>
                            </a>
                        </div>
                    </div>
                </div>

				<!-- Module Mapping  -->
                <div data-kt-menu-trigger="click"
                    class="menu-item <?php echo $rolesactivemainclass ?> menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-plus fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">Module Mapping</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $rolesactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/moduleMapping.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Role Allocation</span>
                            </a>
                        </div>
                    </div>
                </div>

				<!-- Service Desk -->
                <div data-kt-menu-trigger="click"
                    class="menu-item <?php echo $serviceDeckMetricsactivemainclass.' '.$activeTicketactivemainclass.' '.$activePartnerRequestactivemainclass.''.$ticketOverviewactivemainclass;?> menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-file fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">Service Desk</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $serviceDeckMetricsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/newPartnerRequest.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Service Desk Metrics</span>
                            </a>
                            <a class="menu-link <?php echo $activeTicketactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/openTickets.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Open Tickets</span>
                            </a>
                            <a class="menu-link <?php echo $deactivePartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/resolvedTickets.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Resolved Tickets</span>
                            </a>
                            <a class="menu-link <?php echo $ticketOverviewactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/ticketOverview.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ticket Overview</span>
                            </a>
                            <a class="menu-link <?php echo $deactivePartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/deactivedPartners.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Priority Tickets</span>
                            </a>
                            <a class="menu-link <?php echo $deactivePartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/deactivedPartners.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ticket Assignment</span>
                            </a>
                            <a class="menu-link <?php echo $deactivePartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/deactivedPartners.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Resolution Time Metrics</span>
                            </a>
                            <a class="menu-link <?php echo $deactivePartnerRequestactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/deactivedPartners.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Escalations</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Partner Management  -->
                <div data-kt-menu-trigger="click"
                    class="menu-item <?php echo $partnermngactivemainclass.' '.$partneroverviewactivemainclass ?> menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Partner Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $partnermngactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/partnerDirectory.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Partner Directory</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $partneroverviewactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/partnerOverview.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Partner Overview</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project,Complience and Funds -->
                <div data-kt-menu-trigger="click"
                    class="menu-item <?php echo $projectComplienceactivemainclass.''.$complianceCertificationsactivemainclass.''.$approvedFundsactivemainclass ?> menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-plus fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                        <span class="menu-title">Project,Complience & Funds</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $complianceCertificationsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/complianceCertifications.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Compliance & Certifications</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link <?php echo $approvedFundsactiveclass;?>"
                                href="<?php echo BASE_URL;?>pages/approvedFunds.php">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Approved Funds</span>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto px-4 pt-3 pb-7" id="kt_aside_footer">
        <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-custom btn-primary w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            title="200+ in-house components and 3rd-party plugins">
            <span class="btn-label">Docs & Components</span>
            <i class="ki-duotone ki-document btn-icon fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->