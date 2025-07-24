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
								<div class="card-header border-0 cursor-pointer"  data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Profile Details</h3>
									</div>
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
											
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-6 fv-row">
															<input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" />
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-6 fv-row">
															<input type="text" name="lname" id="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>
                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Email-Id</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="tel" name="emailid" id="emailid" class="form-control form-control-lg form-control-solid" readonly placeholder="Email-Id" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Contact Phone</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="tel" name="phone" id="phone" class="form-control form-control-lg form-control-solid" readonly placeholder="Phone number" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
                                            <!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="">Alt Contact Phone</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Alt Phone number must be active">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="tel" name="alt_phone_no" id="alt_phone_no" class="form-control form-control-lg form-control-solid" placeholder="Alt Phone number" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Address 1</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="tel" name="address1" id="address1" class="form-control form-control-lg form-control-solid" placeholder="Address 1"  required />
												</div>
												<!--end::Col-->
											</div>

                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Address 2</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="tel" name="address1" id="address1" class="form-control form-control-lg form-control-solid" placeholder="Address 2" />
												</div>
												<!--end::Col-->
											</div>

                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">City</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="tel" name="city" id="city" class="form-control form-control-lg form-control-solid" placeholder="City" />
												</div>
												<!--end::Col-->
											</div>

                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">State</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="tel" name="state" id="state" class="form-control form-control-lg form-control-solid" placeholder="State" />
												</div>
												<!--end::Col-->
											</div>

                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Zipcode</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="tel" name="zipcode" id="zipcode" class="form-control form-control-lg form-control-solid" placeholder="Zipcode" />
												</div>
												<!--end::Col-->
											</div>

											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Country</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
                                                    <input type="tel" name="country" id="country" class="form-control form-control-lg form-control-solid" placeholder="Country" />
												</div>
												<!--end::Col-->
											</div>

											<!--end::Input group-->
										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
											<button type="submit" onClick="saveMyProfile()" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
										</div>
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
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
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
    $(document).ready(function() {
        var postData = { 
			op:'fetchprofile',
			serviceName:'customer.php'
		};
        async function getData(postData) {
            try {
                let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
                console.log("Received data:", data);
                if(data.status=="success"){
                    let jsonObj = data.data;
                    $("#fname").val(jsonObj.firstname);
                    $("#lname").val(jsonObj.lastname);
                    $("#emailid").val(jsonObj.email);
                    $("#phone").val(jsonObj.phone_no);
                    $("#alt_phone_no").val(jsonObj.alt_phone_no);
                    $("#address1").val(jsonObj.address1);
                    $("#address2").val(jsonObj.address2);
                    $("#city").val(jsonObj.city);
                    $("#state").val(jsonObj.state);
                    $("#zipcode").val(jsonObj.zipcode);
                    $("#country").val(jsonObj.country);
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
							location.href = "<?php echo BASE_URL;?>index_loginpage.php";
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
            op:'saveprofile',
			serviceName:'customer.php',
            fname:$("#fname").val(),
            lname:$("#lname").val(),
            emailid:$("#emailid").val(),
            phone:$("#phone").val(),
            alt_phone_no:$("#alt_phone_no").val(),
            address1:$("#address1").val(),
            address2:$("#address2").val(),
            city:$("#city").val(),
            state:$("#state").val(),
            zipcode:$("#zipcode").val(),
            country:$("#country").val()
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
							location.href = "<?php echo BASE_URL;?>index_loginpage.php";
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