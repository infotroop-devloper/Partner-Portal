<?php
$current_url = $_SERVER['REQUEST_URI']; 

if (strpos($current_url, 'dashboard.php') !== false) {
    $dashboardactiveclass = 'active';
    $dashboardactivemainclass = 'here show';
} else {
    $dashboardactiveclass = '';
	$dashboardactivemainclass = '';
}
if (strpos($current_url, 'salesPerformance.php') !== false) {
    $salesPerformanceactiveclass = 'active';
    $salesPerformanceactivemainclass = 'here show';
} else {
    $salesPerformanceactiveclass = '';
	$salesPerformanceactivemainclass = '';
}
if (strpos($current_url, 'revenueinsights.php') !== false) {
    $revenueinsightsactiveclass = 'active';
    $revenueinsightsactivemainclass = 'here show';
} else {
    $revenueinsightsactiveclass = '';
	$revenueinsightsactivemainclass = '';
}



/*
if (strpos($current_url, 'createServiceRequest.php') !== false) {
    $ServiceRequestactiveclass = 'active';
    $ServiceRequestactivemainclass = 'here show';
} else {
    $ServiceRequestactiveclass = '';
	$ServiceRequestactivemainclass = '';
}

if (strpos($current_url, 'listServiceRequest.php') !== false) {
    $listServiceRequestactiveclass = 'active';
} else {
    $listServiceRequestactiveclass = '';
}
*/
/*if (strpos($current_url, 'addOwnAssets.php') !== false) {
    $addAssetsactiveclass = 'active';
    $addAssetsactivemainclass = 'here show';
} else {
    $addAssetsactiveclass = '';
	$addAssetsactivemainclass = '';
}*/
/*
if (strpos($current_url, 'listOwnAssets.php') !== false) {
    $listAssetsactiveclass = 'active';
} else {
    $listAssetsactiveclass = '';
}*/


///////////////////////
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

if (strpos($current_url, 'customersList.php') !== false) {
    $customerListdactiveclass = 'active';
    $customerListdactivemainclass = 'here show';
} else {
    $customerListdactiveclass = '';
	$customerListdactivemainclass = '';
}
if (strpos($current_url, 'feedbackReview.php') !== false) {
    $feedbackreviewactiveclass = 'active';
    $feedbackreviewactivemainclass = 'here show';
} else {
    $feedbackreviewactiveclass = '';
	$feedbackreviewactivemainclass = '';
}
if (strpos($current_url, 'openTickets.php') !== false) {
    $openTicketactiveclass = 'active';
    $openTicketactivemainclass = 'here show';
} else {
    $openTicketactiveclass = '';
	$openTicketactivemainclass = '';
}
if (strpos($current_url, 'resolvedTickets.php') !== false) {
    $resolvedTicketsactiveclass = 'active';
    $resolvedTicketactivemainclass = 'here show';
} else {
    $resolvedTicketsactiveclass = '';
	$resolvedTicketactivemainclass = '';
}
if (strpos($current_url, 'knowledgebase.php') !== false) {
    $knowledgebaseactiveclass = 'active';
    $knowledgebaseactivemainclass = 'here show';
} else {
    $knowledgebaseactiveclass = '';
	$knowledgebaseactivemainclass = '';
}
if (strpos($current_url, 'ordersList.php') !== false) {
    $ordersListdactiveclass = 'active';
    $ordersListdactivemainclass = 'here show';
} else {
    $ordersListdactiveclass = '';
	$ordersListdactivemainclass = '';
}
if (strpos($current_url, 'newOrders.php') !== false) {
    $newOrdersactiveclass = 'active';
    $newOrdersactivemainclass = 'here show';
} else {
    $newOrdersactiveclass = '';
	$newOrdersactivemainclass = '';
}
if (strpos($current_url, 'pendingApproval.php') !== false) {
    $pendingApprovalactiveclass = 'active';
    $pendingApprovalactivemainclass = 'here show';
} else {
    $pendingApprovalactiveclass = '';
	$pendingApprovalactivemainclass = '';
}
if (strpos($current_url, 'orderHistory.php') !== false) {
    $orderHistoryactiveclass = 'active';
    $orderHistoryactivemainclass = 'here show';
} else {
    $orderHistoryactiveclass = '';
	$orderHistoryactivemainclass = '';
}
if (strpos($current_url, 'returnsAndRefunds.php') !== false) {
    $returnsAndRefundsactiveclass = 'active';
    $returnsAndRefundsactivemainclass = 'here show';
} else {
    $returnsAndRefundsactiveclass = '';
	$returnsAndRefundsactivemainclass = '';
}




// Price List
if (strpos($current_url, 'currentPlans.php') !== false) {
    $currentPlansactiveclass = 'active';
    $currentPlansactivemainclass = 'here show';
} else {
    $currentPlansactiveclass = '';
	$currentPlansactivemainclass = '';
}
if (strpos($current_url, 'planComparision.php') !== false) {
    $planComparisionactiveclass = 'active';
    $planComparisionactivemainclass = 'here show';
} else {
    $planComparisionactiveclass = '';
	$planComparisionactivemainclass = '';
}
if (strpos($current_url, 'discountsOffers.php') !== false) {
    $discountsOffersactiveclass = 'active';
    $discountsOffersactivemainclass = 'here show';
} else {
    $discountsOffersactiveclass = '';
	$discountsOffersactivemainclass = '';
}
if (strpos($current_url, 'createNewPlan.php') !== false) {
    $createNewPlanactiveclass = 'active';
    $createNewPlanactivemainclass = 'here show';
} else {
    $createNewPlanactiveclass = '';
	$createNewPlanactivemainclass = '';
}

//New Leads
if (strpos($current_url, 'newLeads.php') !== false) {
    $newLeadsdactiveclass = 'active';
    $newLeadsdactivemainclass = 'here show';
} else {
    $newLeadsdactiveclass = '';
	$newLeadsdactivemainclass = '';
}

//Software & Tools
if (strpos($current_url, 'downloadTools.php') !== false) {
    $downloadToolsactiveclass = 'active';
    $downloadToolsactivemainclass = 'here show';
} else {
    $downloadToolsactiveclass = '';
	$downloadToolsactivemainclass = '';
}
if (strpos($current_url, 'downloadLicencedTools.php') !== false) {
    $downloadLicencedToolsactiveclass = 'active';
    $downloadLicencedToolsactivemainclass = 'here show';
} else {
    $downloadLicencedToolsactiveclass = '';
	$downloadLicencedToolsactivemainclass = '';
}

// Make in India Patners
if (strpos($current_url, 'partnerOverviewMII.php') !== false) {
    $partnerOverviewactiveclass = 'active';
    $partnerOverviewactivemainclass = 'here show';
} else {
    $partnerOverviewactiveclass = '';
	$partnerOverviewactivemainclass = '';
}
if (strpos($current_url, 'partnerDirectoryMII.php') !== false) {
    $partnerDirectoryMIIactiveclass = 'active';
    $partnerDirectoryMIIactivemainclass = 'here show';
} else {
    $partnerDirectoryMIIactiveclass = '';
	$partnerDirectoryMIIactivemainclass = '';
}
if (strpos($current_url, 'complianceCertificationsMII.php') !== false) {
    $complianceCertificationsMIIactiveclass = 'active';
    $complianceCertificationsactivemainclass = 'here show';
} else {
    $complianceCertificationsMIIactiveclass = '';
	$complianceCertificationsactivemainclass = '';
}
if (strpos($current_url, 'newPartnerRegistrationMII.php') !== false) {
    $newPartnerRegistrationMIIactiveclass = 'active';
    $newPartnerRegistrationMIIactivemainclass = 'here show';
} else {
    $newPartnerRegistrationMIIactiveclass = '';
	$newPartnerRegistrationMIIactivemainclass = '';
}
if (strpos($current_url, 'projectOpportunities.php') !== false) {
    $projectOpportunitiesactiveclass = 'active';
    $projectOpportunitiesactivemainclass = 'here show';
} else {
    $projectOpportunitiesactiveclass = '';
	$projectOpportunitiesactivemainclass = '';
}
if (strpos($current_url, 'successStories.php') !== false) {
    $successStoriesactiveclass = 'active';
    $successStoriesactivemainclass = 'here show';
} else {
    $successStoriesactiveclass = '';
	$successStoriesactivemainclass = '';
}

// Trainings
if (strpos($current_url, 'TrainingAndCertificates.php') !== false) {
    $trainningAndCertificationactiveclass = 'active';
    $trainningAndCertificationactivemainclass = 'here show';
} else {
    $trainningAndCertificationactiveclass = '';
	$trainningAndCertificationactivemainclass = '';
}

// OEM Partners
if (strpos($current_url, 'partnerDirectory.php') !== false) {
    $partnerDirectoryactiveclass = 'active';
    $partnerDirectoryactivemainclass = 'here show';
} else {
    $partnerDirectoryactiveclass = '';
	$partnerDirectoryactivemainclass = '';
}
if (strpos($current_url, 'newPartnerRegistration.php') !== false) {
    $newPartnerRegistrationactiveclass = 'active';
    $newPartnerRegistrationactivemainclass = 'here show';
} else {
    $newPartnerRegistrationactiveclass = '';
	$newPartnerRegistrationactivemainclass = '';
}
if (strpos($current_url, 'partnerAgreements.php') !== false) {
    $partnerAgreementsactiveclass = 'active';
    $partnerAgreementsactivemainclass = 'here show';
} else {
    $partnerAgreementsactiveclass = '';
	$partnerAgreementsactivemainclass = '';
}
if (strpos($current_url, 'OEMPartnerAnalytics.php') !== false) {
    $OEMPartnerAnalyticsactiveclass = 'active';
    $OEMPartnerAnalyticsactivemainclass = 'here show';
} else {
    $OEMPartnerAnalyticsactiveclass = '';
	$OEMPartnerAnalyticsactivemainclass = '';
}
if (strpos($current_url, 'collaborationOpportunities.php') !== false) {
    $collaborationOpportunitiesactiveclass = 'active';
    $collaborationOpportunitiesactivemainclass = 'here show';
} else {
    $collaborationOpportunitiesactiveclass = '';
	$collaborationOpportunitiesactivemainclass = '';
}


// Customer Tickets
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

/*
if (strpos($current_url, 'profile.php') !== false) {
    $profileactiveclass = 'active';
    $profileactivemainclass = 'here show';
} else {
    $profileactiveclass = '';
	$profileactivemainclass = '';
}*/
if (strpos($current_url, 'profile.php') !== false) {
    $valueaddedactiveclass = 'active';
    $valueaddedactivemainclass = 'here show';
} else {
    $valueaddedactiveclass = '';
	$valueaddedactivemainclass = '';
}
if (strpos($current_url, 'profile.php') !== false) {
    $partnercumminityfundsactiveclass = 'active';
    $partnercumminityfundsactivemainclass = 'here show';
} else {
    $partnercumminityfundsactiveclass = '';
	$partnercumminityfundsactivemainclass = '';
}
if (strpos($current_url, 'profile.php') !== false) {
    $QuickAccessFundsactiveclass = 'active';
    $QuickAccessFundsactivemainclass = 'here show';
} else {
    $QuickAccessFundsactiveclass = '';
	$QuickAccessFundsactivemainclass = '';
}
?>
<!--begin::Aside-->
	<div id="kt_aside" style="overflow: unset;" class="aside px-2" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '310px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
		<!--begin::Aside menu-->
		
		<div class="aside-menu flex-column-fluid">
			<a href="<?php echo BASE_URL;?>pages/dashboard.php">
				<img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroopLogo.png" style="height:50px !important;margin-top: 10px;margin-left: 28px;" class="h-30px" />
			</a>
			<br/>
			<!--begin::Aside Menu-->
			<div class="hover-scroll-overlay-y my-5 mx-2" id="kt_aside_menu_wrapper" style="padding-bottom: 80px !important;" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="2px">
				<!--begin::Menu-->
				
				<div class="menu menu-column menu-sub-indention menu-active-bg menu-state-primary menu-title-gray-700 fs-6 menu-rounded w-100 fw-semibold" id="#kt_aside_menu" data-kt-menu="true">
					<!--begin:Menu item-->
					
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $dashboardactivemainclass.''.$salesPerformanceactivemainclass.''.$revenueinsightsactivemainclass;?> menu-accordion">
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
								<a class="menu-link <?php echo $dashboardactiveclass;?>" href="<?php echo BASE_URL;?>pages/dashboard.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
								<a class="menu-link <?php echo $salesPerformanceactiveclass;?>" href="<?php echo BASE_URL;?>pages/salesPerformance.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Sales Performace</span>
								</a>
								<a class="menu-link <?php echo $revenueinsightsactiveclass;?>" href="<?php echo BASE_URL;?>pages/revenueinsights.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Revenue Insights</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Service Desk Matrics*</span>
								</a>
								<!--end:Menu link-->
							</div>
							
							
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $customerListdactivemainclass.''.$feedbackreviewactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<!-- <i class="ki-duotone ki-element-11 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i> -->
								<i class="ki-duotone ki-people fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
								</i>
							</span>
							<span class="menu-title">Customer</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $customerListdactiveclass;?>" href="<?php echo BASE_URL;?>pages/customersList.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer List</span>
								</a>
								<a class="menu-link <?php echo $feedbackreviewactiveclass;?>" href="<?php echo BASE_URL;?>pages/feedbackReview.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Feedback & Reviews</span>
								</a>
								<!--end:Menu link-->
							</div>
							
							
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $openTicketactivemainclass.''.$resolvedTicketactivemainclass.''.$knowledgebaseactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								
								<i class="ki-duotone ki-electricity fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
									<span class="path7"></span>
									<span class="path8"></span>
									<span class="path9"></span>
									<span class="path10"></span>
								</i>
							</span>
							<span class="menu-title">Service Desk</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $openTicketactiveclass;?>" href="<?php echo BASE_URL;?>pages/openTickets.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Open Tickets</span>
								</a>
								<a class="menu-link <?php echo $resolvedTicketsactiveclass;?>" href="<?php echo BASE_URL;?>pages/resolvedTickets.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Resolved Tickets</span>
								</a>
								<a class="menu-link <?php echo $knowledgebaseactiveclass;?>" href="<?php echo BASE_URL;?>pages/knowledgebase.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Knowledge Base</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $ordersListdactivemainclass.' '.$newOrdersactivemainclass.''.$pendingApprovalactivemainclass.''.$orderHistoryactivemainclass.''.$returnsAndRefundsactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								
								<i class="ki-duotone ki-abstract-24 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</span>
							
							<span class="menu-title">Manage Orders</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item ">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $ordersListdactiveclass;?>" href="<?php echo BASE_URL;?>pages/ordersList.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Order List</span>
								</a>
								<a class="menu-link <?php echo $newOrdersactiveclass;?>" href="<?php echo BASE_URL;?>pages/newOrders.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">New Order</span>
								</a>
								<a class="menu-link <?php echo $pendingApprovalactiveclass;?>" href="<?php echo BASE_URL;?>pages/pendingApproval.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Pending Approvals</span>
								</a>
								<a class="menu-link <?php echo $orderHistoryactiveclass;?>" href="<?php echo BASE_URL;?>pages/orderHistory.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Order History</span>
								</a>
								<a class="menu-link <?php echo $returnsAndRefundsactiveclass;?>" href="<?php echo BASE_URL;?>pages/returnsAndRefunds.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Returns & Refunds</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->			
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $currentPlansactivemainclass.''.$planComparisionactivemainclass.''.$discountsOffersactivemainclass.''.$createNewPlanactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-price-tag fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Price List</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $currentPlansactiveclass;?>" href="<?php echo BASE_URL;?>pages/currentPlans.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Current Plans</span>
								</a>
								<a class="menu-link <?php echo $planComparisionactiveclass;?>" href="<?php echo BASE_URL;?>pages/planComparision.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Plan Comparision</span>
								</a>
								<a class="menu-link <?php echo $discountsOffersactiveclass;?>" href="<?php echo BASE_URL;?>pages/discountsOffers.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Discounts & Offers</span>
								</a>
								<a class="menu-link <?php echo $createNewPlanactiveclass;?>" href="<?php echo BASE_URL;?>pages/createNewPlan.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Create New Plan</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Subscription Analytics*</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $newLeadsdactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-line-star fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Leads</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->

								<a class="menu-link <?php echo $newLeadsdactiveclass;?>" href="<?php echo BASE_URL;?>pages/newLeads.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">New Leads</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $downloadToolsactivemainclass.''.$downloadLicencedToolsactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-technology fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
									<span class="path7"></span>
									<span class="path8"></span>
									<span class="path9"></span>
								</i>
							</span>
							<span class="menu-title">Software & Tools</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->

								<a class="menu-link <?php echo $downloadToolsactiveclass;?>" href="<?php echo BASE_URL;?>pages/downloadTools.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Download Free Tools</span>
								</a>
								<a class="menu-link <?php echo $downloadLicencedToolsactiveclass;?>" href="<?php echo BASE_URL;?>pages/downloadLicencedTools.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Download Licenced Software</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	

										<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $OEMPartnersdactivemainclass.''.$partnerDirectoryactivemainclass.''.$newPartnerRegistrationactivemainclass.''.$partnerAgreementsactivemainclass.''.$OEMPartnerAnalyticsactivemainclass.''.$collaborationOpportunitiesactivemainclass;?> menu-accordion">
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
							<span class="menu-title">OEM Partners</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $partnerDirectoryactiveclass;?>" href="<?php echo BASE_URL;?>pages/partnerDirectory.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Partner Directory</span>
								</a>
								<a class="menu-link <?php echo $newPartnerRegistrationactiveclass;?>" href="<?php echo BASE_URL;?>pages/newPartnerRegistration.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">New Partner Registration</span>
								</a>
								<a class="menu-link <?php echo $partnerAgreementsactiveclass;?>" href="<?php echo BASE_URL;?>pages/partnerAgreements.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Partner Agreements</span>
								</a>
								<a class="menu-link <?php echo $OEMPartnerAnalyticsactiveclass;?>" href="<?php echo BASE_URL;?>pages/OEMPartnerAnalytics.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">OEM Partner Analytics</span>
								</a>
								<a class="menu-link <?php echo $collaborationOpportunitiesactiveclass;?>" href="<?php echo BASE_URL;?>pages/collaborationOpportunities.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Collaboration Opportunities</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $partnerOverviewactivemainclass.''.$complianceCertificationsactivemainclass.''.$partnerDirectoryMIIactivemainclass.''.$newPartnerRegistrationMIIactivemainclass.''.$projectOpportunitiesactivemainclass.''.$successStoriesactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-binance fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
								</i>
							</span>
							<span class="menu-title">Make In India Partners</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $partnerOverviewactiveclass;?>" href="<?php echo BASE_URL;?>pages/partnerOverviewMII.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Partner Overview</span>
								</a>
								<a class="menu-link <?php echo $partnerDirectoryMIIactiveclass;?>" href="<?php echo BASE_URL;?>pages/partnerDirectoryMII.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Partner Directory MII</span>
								</a>
								<a class="menu-link <?php echo $newPartnerRegistrationMIIactiveclass;?>" href="<?php echo BASE_URL;?>pages/newPartnerRegistrationMII.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">New Partner Registration</span>
								</a>
								<a class="menu-link <?php echo $complianceCertificationsMIIactiveclass;?>" href="<?php echo BASE_URL;?>pages/complianceCertificationsMII.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Compliance & Certifications</span>
								</a>
								<a class="menu-link <?php echo $projectOpportunitiesactiveclass;?>" href="<?php echo BASE_URL;?>pages/projectOpportunities.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Project Opportunities</span>
								</a>
								<a class="menu-link <?php echo $successStoriesactiveclass;?>" href="<?php echo BASE_URL;?>pages/successStories.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Success Stories</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $Reportsdactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-line-up fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</span>
							<span class="menu-title">Reports*</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $Reportsdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Financial Reports</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Reports</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Operational Reports</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Custom Report Builder</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Export Data</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $TrainingAndCertificatesdactivemainclass.''.$trainningAndCertificationactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-teacher fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</span>
							<span class="menu-title">Training & Certificates*</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $TrainingAndCertificatesdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Available Trainings</span>
								</a>
								<a class="menu-link <?php echo $trainningAndCertificationactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">My Certifications</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Assigned Training</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Training Progress</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Certification History</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $customerTicketsdactivemainclass.''.$ticketOverviewactivemainclass.''.$priorityTicketsactivemainclass.''.$ticketAssignmentactivemainclass.''.$resolutionTimeMetricsactivemainclass.''.$escalationsactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-support-24 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Customer Tickets</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $ticketOverviewactiveclass;?>" href="<?php echo BASE_URL;?>pages/ticketOverview.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Ticket Overview</span>
								</a>
								<a class="menu-link <?php echo $priorityTicketsactiveclass;?>" href="<?php echo BASE_URL;?>pages/priorityTickets.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Priority Ticket</span>
								</a>
								<a class="menu-link <?php echo $ticketAssignmentactiveclass;?>" href="<?php echo BASE_URL;?>pages/ticketAssignment.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Ticket Assignment</span>
								</a>
								<a class="menu-link <?php echo $resolutionTimeMetricsactiveclass;?>" href="<?php echo BASE_URL;?>pages/resolutionTimeMetrics.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Resolution Time Metrics</span>
								</a>
								<a class="menu-link <?php echo $escalationsactiveclass;?>" href="<?php echo BASE_URL;?>pages/escalations.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Escalations</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $MarketingToolsAndTemplatesdactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-technology-4 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
									<span class="path7"></span>
								</i>
							</span>
							<span class="menu-title">Marketing Tools & Templates*</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $MarketingToolsAndTemplatesdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Email Campaigns</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Social Media Templates</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Brochures & Flyers</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Branding Guidelines</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Campaign Performance</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $RevenueAndPayoutsdactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-bill fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
								</i>
							</span>
							<span class="menu-title">Revenue & Payouts*</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $RevenueAndPayoutsdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Payout Overview</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Revenue Reports</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Payment History</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tax Documents</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Pending Oayments</span>
								</a>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->	
					
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $valueaddedactivemainclass;?> menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-medal-star fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</span>
							<span class="menu-title">Value Added Services*</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link <?php echo $valueaddedactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Service Catalog</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Subscription Catalog</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Subscription Status</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Usage Metrics</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add New Service</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Feedback</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">HR Services</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Payroll Services</span>
								</a>
							</div>
						</div>
					</div>

					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $partnercumminityfundsactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-crown-2 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Partner Community Funds*</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $partnercumminityfundsactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Funds Overview</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">New Fund Request</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Approved Funds</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Fund Utilization Reports</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Fund Guidelines</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item <?php echo $QuickAccessFundsactivemainclass;?> menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-fasten fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</span>
							<span class="menu-title">Quick Access Links*</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link <?php echo $QuickAccessFundsactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Frequently Used Tools</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Recently Accessed Items</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Saved Links</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Help & Support</span>
								</a>
								<a class="menu-link <?php echo $customerdactiveclass;?>" href="<?php echo BASE_URL;?>pages/comingSoon.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">User Settings</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->


					<!--begin:Menu item-->
					<!-- <div data-kt-menu-trigger="click" class="menu-item <?php echo $profileactivemainclass;?> menu-accordion">
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
							<span class="menu-title">Account</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link <?php echo $profileactiveclass;?>" href="<?php echo BASE_URL;?>pages/profile.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">My Profile</span>
								</a>
							</div>
						</div>
					</div> -->
					<!--end:Menu item-->

					

					<!--begin:Menu item-->
					<!-- <div data-kt-menu-trigger="click" class="menu-item <?php echo $addAssetsactivemainclass;?> menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-pie-3 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">IT Assets</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link <?php echo $addAssetsactiveclass;?>" href="<?php echo BASE_URL;?>pages/addItAssetsCustomer.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add</span>
								</a>
								<a class="menu-link <?php echo $listAssetsactiveclass;?>" href="<?php echo BASE_URL;?>pages/listItAssetsCustomer.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">List</span>
								</a>
							</div>
						</div>
					</div> -->
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<!-- <div data-kt-menu-trigger="click" class="menu-item <?php echo $ServiceRequestactivemainclass;?> menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-pie-3 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Service Request</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link <?php echo $ServiceRequestactiveclass;?>" href="<?php echo BASE_URL;?>pages/createServiceRequest.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Create</span>
								</a>
								<a class="menu-link <?php echo $listServiceRequestactiveclass;?>" href="<?php echo BASE_URL;?>pages/listServiceRequest.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">List</span>
								</a>
							</div>
						</div>
					</div> -->
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<!-- <div data-kt-menu-trigger="click" class="menu-item <?php echo $faqsactivemainclass;?> menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-chart-pie-3 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Help</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link <?php echo $faqsactiveclass;?>" href="<?php echo BASE_URL;?>pages/faq.php">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
								</a>
							</div>
						</div>
					</div> -->
					<!--end:Menu item-->
					
				</div>
				<!--end::Menu-->
			</div>
		</div>
		<!--end::Aside menu-->
		<!--begin::Footer-->
		<!-- <div class="aside-footer flex-column-auto px-4 pt-3 pb-7" id="kt_aside_footer">
			<a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
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