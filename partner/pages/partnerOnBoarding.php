<!--- HEADER --->
<?php include('./includes/header.php'); ?>
		<div id="kt_header" class="header" style="background:#161461;" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="top: 0px;" data-kt-sticky-enabled="true">
			<div class="container-xxl d-flex align-items-center flex-lg-stack" >
				<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-2 me-lg-5">
					<div class="flex-grow-1" style="padding-right:10px;">
						<a href="#">
							<img alt="Logo" src="<?php echo BASE_URL;?>assets/media/logos/InfoTroop-Logo-White.png" style="width: 250px;">
						</a>
					</div>
					<div class="flex-grow-1" style="padding-left:10px;">
						<h3 style="color:white;font-weight:bold;margin-bottom: 0px;margin-top: 18px;">Partner Registration Form</h3>
						<h5 style="color:white;font-weight:unset;">Application for Partner Program Enrollment</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex flex-column flex-root" style="margin-top: 80px;">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">				
			
				<!--- SIDEBAR --->
				<?php include('./includes/sidebar.php') ?>
				
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper" style="padding: 0px;">
					<?php //include('./includes/topnavbar.php');?>
                    
               
                    <!-- STEPPER MAIN SECTION STARTS -->
                    <div class="toolbar d-flex flex-stack py-3 py-lg-5" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Stepper-->
							<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10" id="kt_create_account_stepper">
								<!--begin::Aside-->
								<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px" style="--bs-card-box-shadow: 0px 3px 4px 0px rgb(0 0 0 / 34%);">
									<!--begin::Wrapper-->
									<div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
										<!--begin::Nav-->
										<div class="stepper-nav">
											<!--begin::Step 1-->
											<div class="stepper-item current" data-kt-stepper-element="nav">
												<!--begin::Wrapper-->
												<div class="stepper-wrapper">
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="ki-duotone ki-check fs-2 stepper-check"></i>
														<span class="stepper-number">1</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Partner Application</h3>
														<div class="stepper-desc fw-semibold">Confirmation of business profile</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Line-->
												<div class="stepper-line h-40px"></div>
												<!--end::Line-->
											</div>
											<!--end::Step 1-->
											<!--begin::Step 2-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<!--begin::Wrapper-->
												<div class="stepper-wrapper">
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="ki-duotone ki-check fs-2 stepper-check"></i>
														<span class="stepper-number">2</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Company</h3>
														<div class="stepper-desc fw-semibold">Provide your company information</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Line-->
												<div class="stepper-line h-40px"></div>
												<!--end::Line-->
											</div>
											<!--end::Step 2-->
											<!--begin::Step 3-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<!--begin::Wrapper-->
												<div class="stepper-wrapper">
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="ki-duotone ki-check fs-2 stepper-check"></i>
														<span class="stepper-number">3</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Company Profile</h3>
														<div class="stepper-desc fw-semibold">Please provide your company's profile below.</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Line-->
												<div class="stepper-line h-40px"></div>
												<!--end::Line-->
											</div>
											<!--end::Step 3-->
											<!--begin::Step 4-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<!--begin::Wrapper-->
												<div class="stepper-wrapper">
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="ki-duotone ki-check fs-2 stepper-check"></i>
														<span class="stepper-number">4</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Contact information</h3>
														<div class="stepper-desc fw-semibold">Your Contact information</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Line-->
												<div class="stepper-line h-40px"></div>
												<!--end::Line-->
											</div>
											<!--end::Step 4-->
											<!--begin::Step 5-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<!--begin::Wrapper-->
												<div class="stepper-wrapper">
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="ki-duotone ki-check fs-2 stepper-check"></i>
														<span class="stepper-number">5</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Terms and Conditions</h3>
														<div class="stepper-desc fw-semibold">Please agree to the terms and conditions below.</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Step 5-->
										</div>
										<!--end::Nav-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--begin::Aside-->
								<!--begin::Content-->
								<div class="card d-flex flex-row-fluid flex-center" style="--bs-card-box-shadow: 0px 3px 4px 0px rgb(0 0 0 / 34%);">
									<!--begin::Form-->
									<div class="card-body py-20 w-100 mw-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form">
										<!--begin::Step 1-->
										<div class="current" data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!-- <div class="pb-10 pb-lg-15">
													<h2 class="fw-bold d-flex align-items-center text-gray-900">Choose Service County 
													<span class="ms-1" data-bs-toggle="tooltip" title="Billing is issued based on your selected account typ">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span></h2>
													<div class="text-muted fw-semibold fs-6">If you need more info, please check out 
													<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
												</div> -->
												<div class="fv-row">
													<div class="row">
														<div class="fv-row mb-8">
															<label class="required fs-3 fw-semibold mb-2">Country</label>
															<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="country" id="country">
																<option value=""></option>
																<option value="India">India</option>
																<option value="Philippines">Philippines</option>
																<option value="Vietnam">Vietnam</option>
																<option value="Indonesia">Indonesia</option>
																<option value="Malaysia">Malaysia</option>
																<option value="Thailand">Thailand</option>
																<option value="UAE">United Arab Emirates (UAE)</option>
																<option value="Saudi Arabia">Saudi Arabia</option>
																<option value="South Africa">South Africa</option>
																<option value="Kenya">Kenya</option>
																<option value="United Kingdom">United Kingdom</option>
																<option value="Germany">Germany</option>
																<option value="Poland">Poland</option>
																<option value="Netherlands">Netherlands</option>
																<option value="United States">United States</option>
																<option value="Canada">Canada</option>
																<option value="Brazil">Brazil</option>
																<option value="Mexico">Mexico</option>
																<option value="Australia">Australia</option>
																<option value="New Zealand">New Zealand</option>
															</select>
														</div>
														<!--<div class="fv-row mb-8">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Service Type</label>
															<div class="col-lg-12 fv-row">
																<select name="service_type" id="service_type" onchange="getserviceTypeData()" aria-label="Select Service Type" class="form-select form-select-solid form-select-lg">
																	<option value="Technical Service Partners">Technical Service Partners</option>
																	<option value="Corporate Training Partners">Corporate Training Partners</option>
																	<option value="Hardware Inventory Partners">Hardware Inventory Partners</option>
																	<option value="Authorized Service Centers">Authorized Service Centers</option>
																	<option value="IT Solution Resellers">IT Solution Resellers</option>
																	<option value="Network Security Partners">Network Security Partners</option>
																	<option value="Cloud Service Partners">Cloud Service Partners</option>
																	<option value="Hybrid Deployment Partners">Hybrid Deployment Partners</option>
																	<option value="OEM Warranty and AMC Service Partners">OEM Warranty and AMC Service Partners</option>
																	<option value="Skill Development Partners">Skill Development Partners</option>
																	<option value="Software and Tool Providers">Software and Tool Providers</option>
																	<option value="Customer Support and Helpdesk Partners">Customer Support and Helpdesk Partners</option>
																	<option value="Digital Marketing and Outreach Partners">Digital Marketing and Outreach Partners</option>
																	<option value="B2B and Enterprise Partners">B2B and Enterprise Partners</option>
																	<option value="Educational and Training Institutes">Educational and Training Institutes</option>
																	<option value="Independant IT Professionals & Startups">Independant IT Professionals & Startups</option>
																	<option value="Data Center Setup Partners">Data Center Setup Partners</option>
																</select>
															</div>
														</div>-->
														<!--<div class="fv-row mb-8">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Service Sub Type</label>
															<div class="col-lg-12 fv-row">
																<select name="sub_service_type" id="sub_service_type" aria-label="Select Service Type" class="form-select form-select-solid form-select-lg">
																</select>  
															</div>
														</div>-->
														<div class="fv-row mb-8" id="radioContainer">
															<label class="col-lg-8 col-form-label fw-semibold fs-3 required">Select Your Primary Business Model</label>
															<div class="form-check form-check-custom form-check-solid">
																<input class="form-check-input me-3"  type="radio" value="Solution Provider" id="primary_business_model_0" name="primary_business_model" />
																<label class="form-check-label" for="primary_business_model_0">
																	<div class="fw-bold text-gray-800" style="font-size: 14px;">Solution Provider</div>
																	<div class="text-gray-600" style="font-size: 12px;">Partners specializing in delivering comprehensive IT solutions by reselling products and offering customized technical services, maintenance, and support tailored to business needs.</div>
																</label>
															</div>
															<div class="form-check form-check-custom form-check-solid" style="margin-top: 15px;">
																<input class="form-check-input me-3"  type="radio" value="Value-Added Reseller (VAR)" id="primary_business_model_1" name="primary_business_model" />
																<label class="form-check-label" for="primary_business_model_1">
																	<div class="fw-bold text-gray-800" style="font-size: 14px;">Value-Added Reseller (VAR)</div>
																	<div class="text-gray-600" style="font-size: 12px;">Partners who resell IT hardware and software products, while adding value through solution-specific services such as installation, integration, and technical expertise to address customer-specific requirements.</div>
																</label>
															</div>
															<div class="form-check form-check-custom form-check-solid" style="margin-top: 15px;">
																<input class="form-check-input me-3"  type="radio" value="Managed Service Provider (MSP)" id="primary_business_model_2" name="primary_business_model" />
																<label class="form-check-label" for="primary_business_model_2">
																	<div class="fw-bold text-gray-800" style="font-size: 14px;">Managed Service Provider (MSP)</div>
																	<div class="text-gray-600" style="font-size: 12px;">Partners providing ongoing IT infrastructure management, including monitoring, support, and optimization, to ensure seamless operations for businesses and end users.</div>
																</label>
															</div>
															<div class="form-check form-check-custom form-check-solid" style="margin-top: 15px;">
																<input class="form-check-input me-3"  type="radio" value="Cloud Service Partner" id="primary_business_model_3" name="primary_business_model" />
																<label class="form-check-label" for="primary_business_model_3">
																	<div class="fw-bold text-gray-800" style="font-size: 14px;">Cloud Service Partner</div>
																	<div class="text-gray-600" style="font-size: 12px;">Businesses that host or manage cloud-based IT solutions, including Software as a Service (SaaS), Infrastructure as a Service (IaaS), and end-user IT infrastructure management.</div>
																</label>
															</div>
															<div class="form-check form-check-custom form-check-solid" style="margin-top: 15px;">
																<input class="form-check-input me-3"  type="radio" value="Service Provider- For Government Orgnizations & PSUs" id="primary_business_model_4" name="primary_business_model" />
																<label class="form-check-label" for="primary_business_model_4">
																	<div class="fw-bold text-gray-800" style="font-size: 14px;">Service Provider- For Government Orgnizations & PSUs</div>
																	<div class="text-gray-600" style="font-size: 12px;">Partners focusing on delivering IT products, services, and solutions to government agencies, meeting regulatory and compliance standards (India Only)</div>
																</label>
															</div>
															<div class="form-check form-check-custom form-check-solid" style="margin-top: 15px;">
																<input class="form-check-input me-3"  type="radio" value="Consumer Partner" id="primary_business_model_5" name="primary_business_model" />
																<label class="form-check-label" for="primary_business_model_5">
																	<div class="fw-bold text-gray-800" style="font-size: 14px;">Consumer Partner</div>
																	<div class="text-gray-600" style="font-size: 12px;">Retailers and resellers specializing in consumer-focused IT products, offering affordable and reliable options for individual and small business customers in targeted regions.</div>
																</label>
															</div>
															<div class="form-check form-check-custom form-check-solid" style="margin-top: 15px;">
																<input class="form-check-input me-3" type="radio" value="Corporate Partner" id="primary_business_model_6" name="primary_business_model" />
																<label class="form-check-label" for="primary_business_model_6">
																	<div class="fw-bold text-gray-800" style="font-size: 14px;">Corporate Partner</div>
																	<div class="text-gray-600" style="font-size: 12px;">Enterprises and partners that specialize in providing IT solutions, including hardware, software, and managed services, to large corporations and multi-site organizations.</div>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end::Step 1-->
										<!--begin::Step 2-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<!--begin::Heading-->
												<!-- <div class="pb-10 pb-lg-15">
													<h2 class="fw-bold text-gray-900">Business information</h2>
													<div class="text-muted fw-semibold fs-6">If you need more info, please check out 
													<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
												</div> -->
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="fv-row mb-8">
													<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Business Type</label>
													<div class="col-lg-12 fv-row">
														<select name="business_type" id="business_type" aria-label="Select Business Type" onchange="fn_companytype(this)" class="form-select form-select-solid form-select-lg">
															<option value="">Select Business Type</option>
															<option value="Independent Business Consultant">Independent Business Consultant</option>
															<option value="Proprietorship Firm">Proprietorship Firm</option>
															<option value="Partnership Firm">Partnership Firm</option>
															<option value="One Person Company (OPC)">One Person Company (OPC)</option>
															<option value="Limited Liability Partnership (LLP)">Limited Liability Partnership (LLP)</option>
															<option value="Private Limited Company (PVT. LTD.)">Private Limited Company (PVT. LTD.)</option>
															<option value="Public Limited Company (LTD.)">Public Limited Company (LTD.)</option>
														</select>  
													</div>
												</div>
                                                <div class="mb-10 fv-row">
													<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Company Name</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="partner_name" id="partner_name" placeholder="" value="" />
												</div>

												<div class="mb-10 fv-row">
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Company Locally Know As</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="local_company_name" id="local_company_name" placeholder="" value="" />
												</div>

                                                <div class="mb-10 fv-row">
													<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Head of the Company</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="company_head" id="company_head" placeholder="" value="" />
												</div>
												<div class="mb-10 fv-row">
													<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Company Website / URL</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="website_url" id="website_url" placeholder="" value="" />
												</div>
                                                <div class="mb-10 fv-row">
													<div class="row">
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">E-Mail ID</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="email_id" id="email_id" placeholder="" value="" />
														</div>
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-12 col-form-label fw-semibold fs-6 required">Telephone/ Mobile No.</label>
															<input type="tel" class="form-control form-control-lg form-control-solid" name="phone_no" id="phone_no" placeholder="" value="" />
														</div>
													</div>
													
												</div>

												<div class="mb-10 fv-row">
													<div class="row">
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">PAN No.</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="pan" id="pan" placeholder="" value="" />
														</div>
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-4 col-form-label fw-semibold fs-6">GSTIN</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="gst" id="gst" placeholder="" value="" />
														</div>
													</div>
												</div>

												<div class="mb-10 fv-row">
													<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Company Address</label>
													<textarea class="form-control form-control-lg form-control-solid" name="company_address" id="company_address" rows="5"></textarea>
												</div>

                                                <div class="mb-10 fv-row">
													<div class="row">
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">City</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="city" id="city" placeholder="" value="" />
														</div>
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">State</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="state" id="state" placeholder="" value="" />
														</div>
													</div>
												</div>

												<div class="mb-10 fv-row">
													<div class="row">
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Country</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="pcountry" id="pcountry" placeholder="" value="" />
														</div>
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Zipcode</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="zipcode" id="zipcode" placeholder="" value="" />
														</div>
													</div>
												</div>

												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">Member or subsidiary of any global organization?</label>
													<div class="form-check form-check-solid form-switch form-check-custom fv-row">
														<input class="form-check-input w-45px h-30px" type="checkbox" id="is_subsidiary" onchange="fn_subsidiary(this)" name="is_subsidiary">
														<label class="form-check-label" for="is_subsidiary"></label>
													</div>
												</div>

                                                <div id="subsidiary_div" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-4 col-form-label fw-semibold fs-6">Subsidary Company Name</label>
														<input type="text" class="form-control form-control-lg form-control-solid" name="subsidary_company_name" id="subsidary_company_name" placeholder="" value="" />
													</div>

													<div class="mb-10 fv-row">
														<label class="col-lg-4 col-form-label fw-semibold fs-6">Company Address</label>
														<textarea class="form-control form-control-lg form-control-solid" name="sub_company_address" id="sub_company_address" rows="5"></textarea>
													</div>

													<div class="mb-10 fv-row">
														<div class="row">
															<div class="col-lg-6 fv-row fv-plugins-icon-container">
																<label class="col-lg-4 col-form-label fw-semibold fs-6">City</label>
																<input type="text" class="form-control form-control-lg form-control-solid" name="sub_city" id="sub_city" placeholder="" value="" />
															</div>
															<div class="col-lg-6 fv-row fv-plugins-icon-container">
																<label class="col-lg-4 col-form-label fw-semibold fs-6">State</label>
																<input type="text" class="form-control form-control-lg form-control-solid" name="sub_state" id="sub_state" placeholder="" value="" />
															</div>
														</div>
													</div>

													<div class="mb-10 fv-row">
														<div class="row">
															<div class="col-lg-6 fv-row fv-plugins-icon-container">
																<label class="col-lg-4 col-form-label fw-semibold fs-6">Country</label>
																<input type="text" class="form-control form-control-lg form-control-solid" name="sub_pcountry" id="sub_pcountry" placeholder="" value="" />
															</div>
															<div class="col-lg-6 fv-row fv-plugins-icon-container">
																<label class="col-lg-4 col-form-label fw-semibold fs-6">Zipcode</label>
																<input type="text" class="form-control form-control-lg form-control-solid" name="sub_zipcode" id="sub_zipcode" placeholder="" value="" />
															</div>
														</div>
													</div>
												</div>
                                                <hr>
												<h2>Upload Documents</h2>
												<div id="Independent_Business_Consultant" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6">Government-issued ID proof (Aadhar Card, Voter ID, Passport, Or PAN Card)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="govt_id_proof" id="govt_id_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 "> Address proof (Aadhar Card, Utility Bill, Bank Statement, or Rent Agreement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="address_document" id="address_document" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Bank account details (Passbook, Cancelled Cheque or Bank Statement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="bank_document" id="bank_document" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">GST Registration Certificate (if applicable)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="gst_certificate" id="gst_certificate" placeholder="" value="" />
													</div>
												</div>

												<div id="Proprietorship_Firm" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6">Proprietor's ID proof (Aadhar Card, Voter ID, Passport, or PAN Card)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="govt_id_proof" id="govt_id_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Proprietor's address proof (Aadhar Card, Utility Bill, Bank Statement, or Rent Agreement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="address_document" id="address_document" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Business registration proof (Shop Act License or Udyam Certificate)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="business_document" id="business_document" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">GST Registration Certificate</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="gst_certificate" id="gst_certificate" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Bank account details (Cancelled Cheque or Bank Statement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="bank_document" id="bank_document" placeholder="" value="" />
													</div>
												</div>

												<div id="Partnership_Firm" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6">Partnership Deed (Registered)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="partnership_deed" id="partnership_deed" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">PAN Card of the Partnership Firm</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="pan_document" id="pan_document" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">GST Registration Certificate</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="gst_certificate" id="gst_certificate" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Partne's ID proof (Aadhar Card, Passport, or PAN Card)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="partner_proof" id="partner_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Partner's address proof (Utility Bill, Bank Statement, or Rent Agreement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="address_proof" id="address_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Bank account details (Cancelled Cheque or Bank Statement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="bank_document" id="bank_document" placeholder="" value="" />
													</div>
												</div>
												
												<div id="One_Person_Company" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6">Incorporation Certificate of OPC</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="coi_opc" id="coi_opc" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Director's ID proof (Aadhar Card, Passport, or PAN Card)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="director_proof" id="director_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 "> Director Identification Number (DIN)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="din" id="din" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">PAN Card of the Company</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="pan_no" id="pan_no" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">GST Registration Certificate</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="gst_certificate" id="gst_certificate" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Bank account details (Cancelled Cheque or Bank Statement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="bank_document" id="bank_document" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Memorandum of Association (MoA) and Articles of Association (AoA)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="moa_aoa" id="moa_aoa" placeholder="" value="" />
													</div>
												</div>

												<div id="Limited_Liability_Partnership" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6">Incorporation Certificate of LLP</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="coi_llp" id="coi_llp" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">PAN Card of the LLP</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="pan_llp" id="pan_llp" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">GST Registration Certificate</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="gst_certificate" id="gst_certificate" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">LLP Agreement</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="llp_agreement" id="llp_agreement" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Partner's ID proof (Aadhar Card, Passport, or PAN Card)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="partner_proof" id="partner_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Partner's address proof (Utility Bill, Bank Statement, or Rent Agreement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="address_proof" id="address_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Bank account details (Cancelled Cheque or Bank Statement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="bank_document" id="bank_document" placeholder="" value="" />
													</div>
												</div>

												<div id="Private_Limited_Company" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6">Incorporation Certificate of Company</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="coi_llp" id="coi_llp" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">PAN Card of the Company</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="pan_company" id="pan_company" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">GST Registration Certificate</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="gst_certificate" id="gst_certificate" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Memorandum of Association (MoA) and Articles of Association (AoA)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="moa_aoa" id="moa_aoa" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Director's ID proof (Aadhar Card, Passport, or PAN Card)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="partner_proof" id="partner_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Director's address proof (Utility Bill, Bank Statement, or Rent Agreement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="address_proof" id="address_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Bank account details (Cancelled Cheque or Bank Statement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="bank_document" id="bank_document" placeholder="" value="" />
													</div>
												</div>

												<div id="Public_Limited_Company" style="display:none;">
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6">Incorporation Certificate of Company</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="coi_llp" id="coi_llp" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">PAN Card of the Company</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="pan_company" id="pan_company" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">GST Registration Certificate</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="gst_certificate" id="gst_certificate" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Memorandum of Association (MoA) and Articles of Association (AoA)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="moa_aoa" id="moa_aoa" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Director's ID proof (Aadhar Card, Passport, or PAN Card)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="partner_proof" id="partner_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Director's address proof (Utility Bill, Bank Statement, or Rent Agreement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="address_proof" id="address_proof" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Board Resolution authorizing partnership</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="board_resolution" id="board_resolution" placeholder="" value="" />
													</div>
													<div class="mb-10 fv-row">
														<label class="col-lg-12 col-form-label fw-semibold fs-6 ">Bank account details (Cancelled Cheque or Bank Statement)</label>
														<input type="file" class="form-control form-control-lg form-control-solid" name="bank_document" id="bank_document" placeholder="" value="" />
													</div>
												</div>
											</div>
										</div>
										<!--end::Step 2-->
										<!--begin::Step 3-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">What is your organization's total revenue?</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="total_revenue" id="total_revenue" placeholder="" value="" />
												</div>
												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">How many active customers does your company have?</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="active_customer" id="active_customer" placeholder="" value="" />
												</div>
												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">How many employees does your company have?</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="head_count" id="head_count" placeholder="" value="" />
												</div>
												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">How many employees in your organization are part of the sales staff?</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="sales_count" id="sales_count" placeholder="" value="" />
												</div>
												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">How many employees in your organization are part of the technical staff?</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="tech_count" id="tech_count" placeholder="" value="" />
												</div>
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 3-->
										<!--begin::Step 4-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">

												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">Full Name</label>
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-2 fv-row fv-plugins-icon-container">
															<select class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="salutation" id="salutation">
																<option value="Mr.">Mr.</option>
																<option value="Ms.">Ms.</option>
																<option value="Mrs.">Mrs.</option>
																<option value="Miss.">Miss.</option>
																<option value="Dr.">Dr.</option>
																<option value="Prof.">Prof.</option>
															</select>
															<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
														</div>
														<div class="col-lg-5 fv-row fv-plugins-icon-container">
															<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="">
															<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-5 fv-row fv-plugins-icon-container">
															<input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="">
															<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
														</div>
														<!--end::Col-->
													</div>
												</div>
												<div class="mb-10 fv-row">
													<div class="row">

														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-6 col-form-label fw-semibold fs-6 required">Job Title</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="job_title" id="job_title" placeholder="" value="" />
														</div>
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-12 col-form-label fw-semibold fs-6 required">Job Roll in your Orgnization</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="job_role" id="job_role" placeholder="" value="" />
														</div>
													</div>
												</div>

												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">E-Mail ID</label>
													<input type="text" class="form-control form-control-lg form-control-solid" name="contact_email_id" id="contact_email_id" placeholder="" value="" />
												</div>

												<div class="mb-10 fv-row">
													<div class="row">
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-6 col-form-label fw-semibold fs-6 required">Phone No</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="contact_phone_no" id="contact_phone_no" placeholder="" value="" />
														</div>
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<label class="col-lg-6 col-form-label fw-semibold fs-6 required">Mobile No</label>
															<input type="text" class="form-control form-control-lg form-control-solid" name="contact_mobile_no" id="contact_mobile_no" placeholder="" value="" />
														</div>
													</div>
												</div>
												<div class="mb-10 fv-row">
													<label class="col-lg-12 col-form-label fw-semibold fs-6 required">Address</label>
													<textarea class="form-control form-control-lg form-control-solid" name="contact_address" id="contact_address" rows="5"></textarea>
												</div>

												<div class="fv-row mb-10">
													<input type="checkbox"  placeholder="" name="agree_tnc" id="agree_tnc" value="" /> <span style="font-weight:bold;">Yes, I would like InfoTroop to send me email communications.</span><br/>
													Opting in for Partner communications will enable you to receive important updates about the InfoTroop Partner Program benefits and rewards, product & Service launches, selling tools, training, and marketing tools.
													For more details on the information practices of <a href="#">InfoTroop and its Partner companies</a>, see our <a href="">Privacy Statement</a>. You can unsubscribe at any time.
												</div>                                                
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 4-->
										<!--begin::Step 5-->
										<div data-kt-stepper-element="content">
											<!--begin::Wrapper-->
											<div class="w-100">
												<div class="pb-8 pb-lg-10 before_api_call">
													<h2 class="fw-bold text-gray-900">Terms and Conditions</h2>
												</div>
												<div class="fv-row mb-10 before_api_call">
													<input type="checkbox"  placeholder="" name="last_agree_tnc" id="last_agree_tnc" value="" /> I accept the InfoTroop Partner Program Terms and Conditions
												</div>
												<p class="before_api_call">
													By submitting this form, you acknowledge that InfoTroop will process personal data in accordance with the Privacy Policy and, if you indicated that you accept the InfoTroop Partner Terms and Conditions, 
													you warrant that you have full corporate power and authority to do so.
												</p>
												<p class="before_api_call">
													By accepting the InfoTroop Partner Terms and Conditions, you represent and warrant that you will not export, re-export, transfer, or otherwise make available InfoTroop Products & Services, directly or indirectly, to any country, region, individual or entity in violation of, or for purposes prohibited by, the Sanctions and Export Control Laws. Currently, InfoTroop prohibit all Sales/ Purchase of Services & Prodcts to/from the following countries: China & Pakistan.
												</p>
												
												<div class="pb-8 pb-lg-10 after_api_call" style="display:none;">
													<h2 class="fw-bold text-gray-900">Application Submitted!</h2>
													<div class="text-muted fw-semibold fs-6">THANK YOU FOR CHOOSING <b>INFOTROOP</b>
													</div> 
												</div>
												<div class="mb-0 after_api_call" style="display:none;">
													<div class="notice d-flex bg-light-success rounded border-success border border-dashed p-6">
                                                        <i class="ki-duotone ki-archive-tick fs-2tx text-success me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
														<div class="d-flex flex-stack flex-grow-1">
															<div class="fw-semibold">
																<div class="fs-6 text-gray-700">
																	We have received your application to participate in the InfoTroop IT Solutions Partner Program.<br>
																	Your Application Number is <b><span class="partner_onboard_number">PR004669858</span></b>.<br>
																	We strive to process your request within 3-5 business days. You may be contacted to provide additional documentation or clarification as we review your application.
                                                                </div>
															</div>
														</div>
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Step 5-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack pt-10">
											<!--begin::Wrapper-->
											<div class="mr-2">
												<button type="button" class="btn btn-lg btn-light-primary me-3 btn_previous previous_button_btn" data-kt-stepper-action="previous">
												<i class="ki-duotone ki-arrow-left fs-4 me-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>Back</button>
											</div>
											<!--end::Wrapper-->
											<!--begin::Wrapper-->
											<div>
												<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" >
													<span class="indicator-label">Submit 
													<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
														<span class="path1"></span>
														<span class="path2"></span>
													</i></span>
													<span class="indicator-progress">Please wait... 
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue 
												<i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></button>
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Stepper-->
						</div>
						<!--end::Post-->
					</div>
                    <!-- STEPPER MAIN SECTION ENDS -->     
                    
                    
                    
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
        <!-- <script src="<?php echo BASE_URL; ?>assets/js/custom/utilities/modals/create-account.js"></script> -->
        <script src="<?php echo BASE_URL; ?>assets/js/custom/utilities/modals/create-app.js"></script>
<script>
	"use strict";
var KTCreateAccount = function() {
    var e, t, i, o, a, r, s = [];
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), (t = document.querySelector("#kt_create_account_stepper")) && (i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), a = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
                5 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), a.classList.add("d-none")) : 5 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), a.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), a.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function(e) {
                console.log("stepper.next");
                var t = s[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function(e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    country: {
                        validators: {
                            notEmpty: {
                                message: "Country is required"
                            }
                        }
                    },primary_business_model: {
                        validators: {
                            notEmpty: {
                                message: "Primary Businuess Model is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    business_type: {
                        validators: {
                            notEmpty: {
                                message: "Business Type is required"
                            }
                        }
                    },
                    partner_name: {
                        validators: {
                            notEmpty: {
                                message: "Company Name is required"
                            }
                        }
                    },
                    company_head: {
                        validators: {
                            notEmpty: {
                                message: "Company head name is required"
                            }
                        }
                    },
					website_url: {
                        validators: {
                            notEmpty: {
                                message: "Webiste URL is required"
                            }
                        }
                    },
                    email_id: {
                        validators: {
                            notEmpty: {
                                message: "Email-id is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    phone_no: {
                        validators: {
                            notEmpty: {
                                message: "Phone Number is required"
                            }
                        }
                    },
                    pan: {
                        validators: {
                            notEmpty: {
                                message: "PAN Number is required"
                            }
                        }
                    },
                    company_address: {
                        validators: {
                            notEmpty: {
                                message: "Address is required"
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: "City is required"
                            }
                        }
                    },
                    state: {
                        validators: {
                            notEmpty: {
                                message: "State is required"
                            }
                        }
                    },
                    pcountry: {
                        validators: {
                            notEmpty: {
                                message: "Country is required"
                            }
                        }
                    },
                    zipcode: {
                        validators: {
                            notEmpty: {
                                message: "Zipcode is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    total_revenue: {
                        validators: {
                            notEmpty: {
                                message: "Total Revenue is required"
                            }
                        }
                    },
                    active_customer: {
                        validators: {
                            notEmpty: {
                                message: "Active customer's count is required"
                            }
                        }
                    },
                    head_count: {
                        validators: {
                            notEmpty: {
                                message: "Total employee count is required"
                            }
                        }
                    },
                    sales_count: {
                        validators: {
                            notEmpty: {
                                message: "Total sale's member count is required"
                            }
                        }
                    },
                    tech_count: {
                        validators: {
                            notEmpty: {
                                message: "Total technical member count is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    salutation: {
                        validators: {
                            notEmpty: {
                                message: "Salutation is required"
                            }
                        }
                    },
                    fname: {
                        validators: {
                            notEmpty: {
                                message: "Firstname is required"
                            }
                        }
                    },
                    lname: {
                        validators: {
                            notEmpty: {
                                message: "Lastname is required"
                            }
                        }
                    },
					job_title: {
                        validators: {
                            notEmpty: {
                                message: "Job title is required"
                            }
                        }
                    },
					job_role: {
                        validators: {
                            notEmpty: {
                                message: "Job role is required"
                            }
                        }
                    },
					contact_email_id: {
                        validators: {
                            notEmpty: {
                                message: "E-Mail ID is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
					contact_phone_no: {
                        validators: {
                            notEmpty: {
                                message: "Phone No. is required"
                            }
                        }
                    },
					contact_mobile_no: {
                        validators: {
                            notEmpty: {
                                message: "Mobile No. is required"
                            }
                        }
                    },
					contact_address: {
                        validators: {
                            notEmpty: {
                                message: "Address is required"
                            }
                        }
                    },
					agree_tnc: {
                        validators: {
                            notEmpty: {
                                message: "Agree Terms and Conditions is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
				fields: {
                    last_agree_tnc: {
                        validators: {
                            notEmpty: {
                                message: "Acceptance of Terms and Conditions is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
			})), o.addEventListener("click", (function(e) {
                s[4].validate().then((function(t) {
                    console.log("validated!"),
                    "Valid" == t ? (
							e.preventDefault(), 
							o.disabled = !0, 
							o.setAttribute("data-kt-indicator", "on"), 
							setTimeout((function() {
								o.removeAttribute("data-kt-indicator"),
								o.disabled = !1, 
								savePartnerData(r),
								o.classList.add("d-none")
							}), 2e3)
						) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            }))
			
		)}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTCreateAccount.init()
}));
var selectedValue = '';
$('#radioContainer').on('change', 'input[name="primary_business_model"]', function () {
    selectedValue = $('input[name="primary_business_model"]:checked').val();
  });
async function savePartnerData(r) {
	$(".previous_button_btn").css("display","none");
	$(".before_api_call").css("display","none");
	try {
		var postData = {
			op:'createPartner',
			clid:'97250836d373fe5e31e2bff387748447',
			serviceName:'partners.php',
			country:$("#country").val(),
			primary_business_model:selectedValue,
			business_type:$("#business_type").val(),
			partner_name:$("#partner_name").val(),
			local_company_name:$("#local_company_name").val(),
			company_head:$("#company_head").val(),
			website_url:$("#website_url").val(),
			email_id:$("#email_id").val(),
			phone_no:$("#phone_no").val(),
			pan:$("#pan").val(),
			gst:$("#gst").val(),
			company_address:$("#company_address").val(),
			city:$("#city").val(),
			state:$("#state").val(),
			pcountry:$("#pcountry").val(),
			zipcode:$("#zipcode").val(),
			is_subsidiary:$("#is_subsidiary").val(),
			subsidary_company_name:$("#subsidary_company_name").val(),
			sub_company_address:$("#sub_company_address").val(),
			sub_city:$("#sub_city").val(),
			sub_state:$("#sub_state").val(),
			sub_pcountry:$("#sub_pcountry").val(),
			sub_zipcode:$("#sub_zipcode").val(),
			total_revenue:$("#total_revenue").val(),
			active_customer:$("#active_customer").val(),
			head_count:$("#head_count").val(),
			sales_count:$("#sales_count").val(),
			tech_count:$("#tech_count").val(),
			salutation:$("#salutation").val(),
			fname:$("#fname").val(),
			lname:$("#lname").val(),
			job_title:$("#job_title").val(),
			job_role:$("#job_role").val(),
			contact_email_id:$("#contact_email_id").val(),
			contact_phone_no:$("#contact_phone_no").val(),
			contact_mobile_no:$("#contact_mobile_no").val(),
			contact_address:$("#contact_address").val(),
			agree_tnc:$("#agree_tnc").val(),
			last_agree_tnc:$("#last_agree_tnc").val()
		}
		console.log(postData);
		var formData = new FormData();
		for (const key in postData) {
			if (postData[key] instanceof File) {
				// Append files
				formData.append(key, postData[key]);
			} else if (postData[key] !== undefined && postData[key] !== null) {
				// Append other fields
				formData.append(key, postData[key]);
			}
		}
		$('#kt_create_account_stepper input[type="file"]').each(function(index, fileInput) {
			Array.from(fileInput.files).forEach(file => {
				formData.append(fileInput.id, file); // Add file to FormData
				// console.log(fileInput.id, file);
			});
		});
		
		let data = await sendRequestFormdata(formData); // Wait for the AJAX call to complete
		console.log("Received data:", data);
		if(data.status=="success"){
			let jsonObj = data.data;
			$(".after_api_call").css("display","block");

			$(".partner_onboard_number").text('');
			$(".partner_onboard_number").text(jsonObj.request_id);
			Swal.fire({
				text: data.message,
				icon: "success",
				buttonsStyling: !1,
				confirmButtonText: "Ok, got it!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
			}).then((function(e) {
				if (e.isConfirmed) {
					$('.mark-completed').addClass('current');
					$('.btn_previous').css('display','none');
					r.goNext();
				}
			}));
		}else{
			Swal.fire({
				text: data.message,
				icon: "error",
				buttonsStyling: !1,
				confirmButtonText: "Ok, got it!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
			}).then((function(e) {
				if (e.isConfirmed) {
					location.href = "<?php echo BASE_URL;?>pages/partnerOnBoarding.php";
				}
			}));
		}
	} catch (error) {
		console.error("Error fetching data:", error);
	}
}


async function getserviceTypeData() {
	try {
		var postData = { 
			op:'fetchServiceType',
			serviceType:$("#service_type").val(),
			clid:'97250836d373fe5e31e2bff387748447',
			serviceName:'partners.php'
		};
		let data = await sendRequest(postData); // Wait for the AJAX call to complete
		console.log("Received data:", data);
		if(data.status=="success"){
			let jsonObj = data.data;
			//assign all input fileds the incoming values.
			const selectElement = document.getElementById('sub_service_type');
			selectElement.innerHTML = '';
			jsonObj.forEach(option => {
				const newOption = document.createElement('option');
				newOption.value = option.sub_type;
				newOption.textContent = option.sub_type;
				selectElement.appendChild(newOption);
			});
		}else{
			Swal.fire({
				text: data.message,
				icon: "error",
				buttonsStyling: !1,
				confirmButtonText: "Ok, got it!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
			}).then((function(e) {
				if (e.isConfirmed) {
					location.href = "<?php echo BASE_URL;?>index.php";
				}
			}))
		}
	} catch (error) {
		console.error("Error fetching data:", error);
	}
}
//getserviceTypeData();
var company_type='';
function fn_subsidiary(e){
	if(e.checked==true){
		document.getElementById("subsidiary_div").style.display = 'block';
	}else{
		document.getElementById("subsidiary_div").style.display = 'none';
	}
}
function fn_companytype(e){
	company_type = e.value;
	if(company_type=='Independent Business Consultant'){
		document.getElementById("Independent_Business_Consultant").style.display = 'block';
		document.getElementById("Proprietorship_Firm").style.display = 'none';
		document.getElementById("Partnership_Firm").style.display = 'none';
		document.getElementById("One_Person_Company").style.display = 'none';
		document.getElementById("Limited_Liability_Partnership").style.display = 'none';
		document.getElementById("Private_Limited_Company").style.display = 'none';
		document.getElementById("Public_Limited_Company").style.display = 'none';
	}else if (company_type=='Proprietorship Firm'){
		document.getElementById("Proprietorship_Firm").style.display = 'block';
		document.getElementById("Independent_Business_Consultant").style.display = 'none';
		document.getElementById("Partnership_Firm").style.display = 'none';
		document.getElementById("One_Person_Company").style.display = 'none';
		document.getElementById("Limited_Liability_Partnership").style.display = 'none';
		document.getElementById("Private_Limited_Company").style.display = 'none';
		document.getElementById("Public_Limited_Company").style.display = 'none';
	}else if (company_type=='Partnership Firm'){
		document.getElementById("Partnership_Firm").style.display = 'block';
		document.getElementById("Independent_Business_Consultant").style.display = 'none';
		document.getElementById("Proprietorship_Firm").style.display = 'none';
		document.getElementById("One_Person_Company").style.display = 'none';
		document.getElementById("Limited_Liability_Partnership").style.display = 'none';
		document.getElementById("Private_Limited_Company").style.display = 'none';
		document.getElementById("Public_Limited_Company").style.display = 'none';
	}else if (company_type=='One Person Company (OPC)'){
		document.getElementById("One_Person_Company").style.display = 'block';
		document.getElementById("Partnership_Firm").style.display = 'none';
		document.getElementById("Independent_Business_Consultant").style.display = 'none';
		document.getElementById("Proprietorship_Firm").style.display = 'none';
		document.getElementById("Limited_Liability_Partnership").style.display = 'none';
		document.getElementById("Private_Limited_Company").style.display = 'none';
		document.getElementById("Public_Limited_Company").style.display = 'none';
	}else if (company_type=='Limited Liability Partnership (LLP)'){
		document.getElementById("Limited_Liability_Partnership").style.display = 'block';
		document.getElementById("One_Person_Company").style.display = 'none';
		document.getElementById("Partnership_Firm").style.display = 'none';
		document.getElementById("Independent_Business_Consultant").style.display = 'none';
		document.getElementById("Proprietorship_Firm").style.display = 'none';
		document.getElementById("Private_Limited_Company").style.display = 'none';
		document.getElementById("Public_Limited_Company").style.display = 'none';
	}else if (company_type=='Private Limited Company (PVT. LTD.)'){
		document.getElementById("Private_Limited_Company").style.display = 'block';
		document.getElementById("Limited_Liability_Partnership").style.display = 'none';
		document.getElementById("One_Person_Company").style.display = 'none';
		document.getElementById("Partnership_Firm").style.display = 'none';
		document.getElementById("Independent_Business_Consultant").style.display = 'none';
		document.getElementById("Proprietorship_Firm").style.display = 'none';
		document.getElementById("Public_Limited_Company").style.display = 'none';
	}else if (company_type=='Public Limited Company (LTD.)'){
		document.getElementById("Public_Limited_Company").style.display = 'block';
		document.getElementById("Private_Limited_Company").style.display = 'none';
		document.getElementById("Limited_Liability_Partnership").style.display = 'none';
		document.getElementById("One_Person_Company").style.display = 'none';
		document.getElementById("Partnership_Firm").style.display = 'none';
		document.getElementById("Independent_Business_Consultant").style.display = 'none';
		document.getElementById("Proprietorship_Firm").style.display = 'none';
	}
}
   
</script>