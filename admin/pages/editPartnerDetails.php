<!--- HEADER --->
<?php include('./includes/header.php');?>

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">				
    
        <!--- SIDEBAR --->
        <?php include('./includes/sidebar.php') ?>
        
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <?php include('./includes/topnavbar.php');?>
            
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 " role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h2 class="fw-bold m-0">Edit Partner Details</h2>
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
                                    <h3 class="stepper-title">Partner Application</h3>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Country</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="country" id="country"  class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Primary Business Model</label>
                                        <div class="col-lg-8 fv-row">
                                            <select name="primary_business_model" id="primary_business_model" aria-label="Select Service Type" class="form-select form-select-solid form-select-lg">
                                                <option value="">Select Business Model...</option>
                                                <option value="Solution Provider">Solution Provider</option>
                                                <option value="Value-Added Reseller (VAR)">Value-Added Reseller (VAR)</option>
                                                <option value="Managed Service Provider (MSP)">Managed Service Provider (MSP)</option>
                                                <option value="Cloud Service Partner">Cloud Service Partner</option>
                                                <option value="Service Provider- For Government Orgnizations & PSUs">Service Provider- For Government Orgnizations & PSUs</option>
                                                <option value="Consumer Partner">Consumer Partner</option>
                                                <option value="Corporate Partner">Corporate Partner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Business Type</label>
                                        <div class="col-lg-8 fv-row">
                                            <select name="business_type" id="business_type" aria-label="Select Business Type" class="form-select form-select-solid form-select-lg">
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
                                    <hr>
                                    <h3 class="stepper-title">Business Info</h3>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Partner Name</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="partner_name" id="partner_name" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Local Company Name</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="local_company_name" id="local_company_name" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Head</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="company_head" id="company_head" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Head</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="website_url" id="website_url" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">E-Mail ID</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="email_id" id="email_id" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Phone Number</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="phone_no" id="phone_no" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">PAN No.</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="pan" id="pan" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">GSTIN</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="gst" id="gst" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Address</label>
                                        <div class="col-lg-8 fv-row">
                                            <textarea name="company_address" id="company_address" rows="5" class="form-control form-control-lg form-control-solid"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">City</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="city" id="city" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">State</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="state" id="state" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Country</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="pcountry" id="pcountry" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Zipcode</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="zipcode" id="zipcode" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    


                                    <hr>
                                    <h3 class="stepper-title">Company Profile</h3>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">What is your organization's total revenue?</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="total_revenue" id="total_revenue" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">How many active customers does your company have?</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="active_customer" id="active_customer" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">How many employees does your company have?</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="head_count" id="head_count" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">How many employees in your organization are part of the sales staff?</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="sales_count" id="sales_count" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">How many employees in your organization are part of the technical staff?</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="tech_count" id="tech_count" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 class="stepper-title">Company Owner Information</h3>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Full Name</label>
                                        <div class="col-lg-2">
                                            <select class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="salutation" id="salutation">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Prof.">Prof.</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="fname" id="fname" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="lname" id="lname" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Job Title</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="job_title" id="job_title" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Job Roll in your Orgnization</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="job_role" id="job_role" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">E-Mail ID</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="contact_email_id" id="contact_email_id" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Phone No</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="contact_phone_no" id="contact_phone_no" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Mobile No</label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="contact_mobile_no" id="contact_mobile_no" class="form-control form-control-lg form-control-solid" />
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
                                        <div class="col-lg-8 fv-row">
                                            <textarea name="contact_address" id="contact_address" rows="5" class="form-control form-control-lg form-control-solid"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Status</label>
                                        <div class="col-lg-8 fv-row">
                                            <select name="status" id="status" class="form-select form-select-solid form-select-lg">
                                                <option value="New">New</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Completed">Completed</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Declined">Declined</option>
                                                <option value="Cancelled">Cancelled</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 class="stepper-title">Company Documents</h3>
                                    <!-- <div class="row mb-6">
                                        <div class="col-md-4" style="display:none;" id="upload_gst">
                                            <div class="card h-100" style="border: solid 1px black;border-style: dashed;">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                    Upload GST Certificate
                                                    <input type="file" onchange="uploadGstCert(this);" class="form-control form-control-lg form-control-solid" name="upload_gst_certificate" id="upload_gst_certificate" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="display:none;" id="download_gst">
                                            <div class="card h-100" style="border: solid 1px black;border-style: dashed;">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                    <a href="#" id="gst_certificate" target="_blank" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                        <div class="fs-5 fw-bold mb-2">Download GST Certificate</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="display:none;" id="upload_reseller">
                                            <div class="card h-100" style="border: solid 1px black;border-style: dashed;">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                    Upload Reseller Certificate
                                                    <input type="file" onchange="uploadresellerCert(this);" class="form-control form-control-lg form-control-solid" name="upload_reseller_certificate" id="upload_reseller_certificate" placeholder="" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="display:none;" id="download_reseller">
                                            <div class="card h-100" style="border: solid 1px black;border-style: dashed;">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                    <a href="#" id="reseller_certificate" target="_blank" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                        
                                                        <div class="fs-5 fw-bold mb-2">Download Reseller Certificate</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="display:none;" id="upload_address">
                                            <div class="card h-100" style="border: solid 1px black;border-style: dashed;">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                    Upload Address Proof
                                                    <input type="file" onchange="uploadAddressCert(this)" class="form-control form-control-lg form-control-solid" name="upload_address_certificate" id="upload_address_certificate" placeholder="" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="display:none;" id="download_address">
                                            <div class="card h-100" style="border: solid 1px black;border-style: dashed;">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                    <a href="#" id="address_document" target="_blank" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                        <div class="fs-5 fw-bold mb-2">Download Address Proof</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    

                                    
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="button" onClick="savePartnerDetails()" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
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
                        <span class="text-muted fw-semibold me-1">2024&copy;</span>
                        <a href="https://www.infotroop.co.in/" target="_blank" class="text-gray-800 text-hover-primary">Infotroop</a>
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
 
    $(document).ready(function() {
        async function getData() {
            var postData = { 
                id:"<?php echo $_GET['id'];?>",
                op:'fetchPartnerDetails',
                serviceName:'partners.php'
            };
            try {
                let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
                console.log("Received data:", data);
                if(data.status=="success"){
                    let jsonObj = data.data;
                    if(jsonObj.length>0){
                        jsonObj = jsonObj[0];
                        $("#country").val(jsonObj.country);
                        $("#primary_business_model").val(jsonObj.primary_business_model);
                        $("#business_type").val(jsonObj.business_type);
                        $("#partner_name").val(jsonObj.partner_name);
                        $("#local_company_name").val(jsonObj.local_company_name);
                        $("#company_head").val(jsonObj.company_head);
                        $("#email_id").val(jsonObj.email_id);
                        $("#phone_no").val(jsonObj.phone_no);
                        $("#pan").val(jsonObj.pan);
                        $("#gst").val(jsonObj.gst);
                        $("#company_address").val(jsonObj.company_address);
                        $("#city").val(jsonObj.city);
                        $("#state").val(jsonObj.state);
                        $("#pcountry").val(jsonObj.pcountry);
                        $("#zipcode").val(jsonObj.zipcode);
                        $("#website_url").val(jsonObj.website_url);
                        if(jsonObj.is_subsidiary=='on'){
                            $('#is_subsidiary').prop('checked', true);
                            $("#is_subsidiary_div").css("display","block");
                        }else{
                            $("#is_subsidiary_div").css("display","none");
                        }
                        $("#subsidary_company_name").val(jsonObj.subsidary_company_name);
                        $("#sub_company_address").val(jsonObj.sub_company_address);
                        $("#sub_city").val(jsonObj.sub_city);
                        $("#sub_state").val(jsonObj.sub_state);
                        $("#sub_pcountry").val(jsonObj.sub_pcountry);
                        $("#sub_zipcode").val(jsonObj.sub_zipcode);
                        $("#total_revenue").val(jsonObj.total_revenue);
                        $("#active_customer").val(jsonObj.active_customer);
                        $("#head_count").val(jsonObj.head_count);
                        $("#sales_count").val(jsonObj.sales_count);
                        $("#tech_count").val(jsonObj.tech_count);
                        $("#salutation").val(jsonObj.salutation);
                        $("#fname").val(jsonObj.fname);
                        $("#lname").val(jsonObj.lname);
                        $("#job_title").val(jsonObj.job_title);
                        $("#job_role").val(jsonObj.job_role);
                        $("#contact_email_id").val(jsonObj.contact_email_id);
                        $("#contact_phone_no").val(jsonObj.contact_phone_no);
                        $("#contact_mobile_no").val(jsonObj.contact_mobile_no);
                        $("#contact_address").val(jsonObj.contact_address);
                        $("#status").val(jsonObj.status);

                        if(jsonObj.gst_certificate==''){
                            $("#upload_gst").css("display","block");
                            $("#download_gst").css("display","none");
                            
                        }else{
                            $("#upload_gst").css("display","none");
                            $("#download_gst").css("display","block");
                            $('#gst_certificate').attr('href', jsonObj.gst_certificate);
                        }

                        if(jsonObj.reseller_certificate==''){
                            $("#upload_reseller").css("display","block");
                            $("#download_reseller").css("display","none");
                            
                        }else{
                            $("#upload_reseller").css("display","none");
                            $("#download_reseller").css("display","block");
                            $('#reseller_certificate').attr('href', jsonObj.reseller_certificate);
                        }

                        if(jsonObj.address_certificate==''){
                            $("#upload_address").css("display","block");
                            $("#download_address").css("display","none");
                            
                        }else{
                            $("#upload_address").css("display","none");
                            $("#download_address").css("display","block");
                            $('#address_document').attr('href', jsonObj.address_certificate);
                        }
                        
                    }
                    //assign all input fileds the incoming values.
                    
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
							location.href = "<?php echo BASE_URL;?>pages/index.php";
						}
					}))
                }
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        }
        getData();
    });
    function uploadGstCert(e){
        var gst_cert = $('#upload_gst_certificate')[0].files.length>0 ? $('#upload_gst_certificate')[0].files[0] : "";
        if(gst_cert==''){
            return;
        }
        var formData = new FormData();
        formData.append("op", "uploadGstCertificate");
        formData.append("serviceName", "partners.php");
        formData.append("id", "<?php echo $_GET['id'];?>");
        formData.append("file", gst_cert);
        uploadGstCertajax(formData);
    }
    function uploadresellerCert(e){
        var reseller_cert = $('#upload_reseller_certificate')[0].files.length>0 ? $('#upload_reseller_certificate')[0].files[0] : "";
        if(reseller_cert==''){
            return;
        }
        var formData = new FormData();
        formData.append("op", "uploadResellerCertificate");
        formData.append("serviceName", "partners.php");
        formData.append("id", "<?php echo $_GET['id'];?>");
        formData.append("file", reseller_cert);
        uploadGstCertajax(formData);
    }
    function uploadAddressCert(e){
        var address_cert = $('#upload_address_certificate')[0].files.length>0 ? $('#upload_address_certificate')[0].files[0] : "";
        if(address_cert==''){
            return;
        }
        var formData = new FormData();
        formData.append("op", "uploadAddressCertificate");
        formData.append("serviceName", "partners.php");
        formData.append("id", "<?php echo $_GET['id'];?>");
        formData.append("file", address_cert);
        uploadGstCertajax(formData);
    }
    async function uploadGstCertajax(formData) {
        try {
            
            let data = await sendRequestSecureformdata(formData); // Wait for the AJAX call to complete
            console.log("Received data:", data);
            data = JSON.parse(data);
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
                        location.href = "<?php echo BASE_URL;?>pages/index.php";
                    }
                }))
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }
    function savePartnerDetails(){
        var postData = {
            op:'savePartnerDetails',
			serviceName:'partners.php',
            id:"<?php echo $_GET['id'];?>",
            country:$("#country").val(),
            service_type:$("#service_type").val(),
            sub_service_type:$("#sub_service_type").val(),
            partner_name:$("#partner_name").val(),
            local_company_name:$("#local_company_name").val(),
            company_head:$("#company_head").val(),
            email_id:$("#email_id").val(),
            phone_no:$("#phone_no").val(),
            website_url:$("#website_url").val(),
            gst:$("#gst").val(),
            pan:$("#pan").val(),
            is_subsidiary:$("#is_subsidiary").val(),
            subsidary_company_name:$("#subsidary_company_name").val(),
            address_line1:$("#address_line1").val(),
            address_line2:$("#address_line2").val(),
            city:$("#city").val(),
            state:$("#state").val(),
            pcountry:$("#pcountry").val(),
            zipcode:$("#zipcode").val(),
            primary_full_name:$("#primary_full_name").val(),
            primary_corporate_email:$("#primary_corporate_email").val(),
            primary_phone:$("#primary_phone").val(),
            primary_mobile:$("#primary_mobile").val(),
            primary_job_function:$("#primary_job_function").val(),
            primary_job_function_role:$("#primary_job_function_role").val(),
            status:$("#status").val()
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
							location.href = "<?php echo BASE_URL;?>pages/index.php";
						}
					}))
                }
            } catch (error) {
                console.error("Error fetching data:", error);
                
            }
        }
        savedata(postData);
    }
    function fnGoBack(){
        history.back(); // Go back one step in history

        //window.location.href="<?php echo BASE_URL;?>pages/newPartnerRequest.php";
    }
</script>