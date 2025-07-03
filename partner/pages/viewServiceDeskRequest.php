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
                    
                    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
                            <div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Service Request Details</h3>
									</div>
									<button onclick="fnGoBack();" class="btn btn-sm btn-primary align-self-center">Back</button>
									<!--end::Card title-->
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
									<!--begin::Form-->
									<div id="kt_account_profile_details_form" class="form">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->
											<input type="hidden" id="id" name="id"/>
											<input type="hidden" id="partner_idfk" name="partner_idfk"/>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Request ID</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-12 fv-row">
															<input readonly type="text" name="request_id" id="request_id" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Request ID" />
														</div>
														<!--end::Col-->
														
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>
                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label  fw-semibold fs-6">Customer Name</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="text" readonly name="customer_name" id="customer_name" class="form-control form-control-lg form-control-solid"  placeholder="Customer Name" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                    Contact Phone
													<!-- <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span> -->
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="tel" readonly name="phone_no" id="phone_no" class="form-control form-control-lg form-control-solid"  placeholder="Phone number" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Address 1</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="text" readonly  name="partner_name" id="partner_name" class="form-control form-control-lg form-control-solid" placeholder="Partner Name"  />
												</div>
												<!--end::Col-->
											</div>

                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Service Type</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="text" readonly name="service_type" id="service_type" class="form-control form-control-lg form-control-solid" placeholder="Service Type" />
												</div>
												<!--end::Col-->
											</div>

                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Status</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="text" readonly name="status" id="status" class="form-control form-control-lg form-control-solid" placeholder="Status" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<!-- <div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="submit" onClick="saveMyProfile()" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
										</div> -->
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Content-->
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
    $(document).ready(function() {
        var postData = { 
			op:'fetchServiceDeskDetails',
			id:'<?php echo $_GET["id"];?>',
			serviceName:'servicedesk.php'
		};
        async function getData(postData) {
            try {
                let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
                console.log("Received data:", data);
                if(data.status=="success"){
                    let jsonObj = data.data;
					if(jsonObj.length>0){
						jsonObj = jsonObj[0];
						$("#request_id").val(jsonObj.request_id);
						$("#customer_name").val(jsonObj.customer_name);
						$("#partner_name").val(jsonObj.partner_name);
						$("#id").val(jsonObj.id);
						$("#partner_idfk").val(jsonObj.partner_idfk);
						$("#customer_idfk").val(jsonObj.customer_idfk);
						$("#phone_no").val(jsonObj.phone_no);
						$("#status").val(jsonObj.status);
						$("#service_type").val(jsonObj.service_type);
					}else{
						Swal.fire({
						text: "Some Error Occured. Try after sometime.",
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
        getData(postData);
    });
    function saveMyProfile(){
        //kt_account_profile_details_submit
        var postData = {
            op:'saveCustomerDetail',
			serviceName:'customer.php',
            customer_name:$("#customer_name").val(),
            address1:$("#address1").val(),
            address2:$("#address2").val(),
            phone_no:$("#phone_no").val(),
            alt_phone_no:$("#alt_phone_no").val(),
            city:$("#city").val(),
            state:$("#state").val(),
            zipcode:$("#zipcode").val(),
            country:$("#country").val(),
            email_id:$("#email_id").val(),
            id:$("#id").val(),
            landline:$("#landline").val(),
            licence_id:$("#licence_id").val(),
            partner_idfk:$("#partner_idfk").val(),
            subscription_status:$("#subscription_status").val()
        };

        async function savedata(postData) {
            try {
                let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
                console.log("Received data:", data);
                if(data.status=="success"){
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
							window.location.reload();
						}
					}))
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
        savedata(postData);
    }
    </script>