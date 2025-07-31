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
                    
                    <div id="kt_content_container" class="flex flex-column-fluid align-items-start container-fluid" style="padding-top: 30px !important;">
						<!--begin::Post-->
						<!--begin::Body-->
						<div class="card">
							<!--begin::Card header-->
							<span class="card-label fw-bold fs-3 mb-1" style="padding-top: 30px;padding-left: 40px;">New Partner Requests</span>
							<div class="card-header border-0 pt-6">
								
								<!--begin::Card title-->
								<div class="card-title ">
									
									<!--begin::Search-->
									<div class="d-flex align-items-center position-relative my-1">
										<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Customers" />
									</div>
									<!--end::Search-->
								</div>
								<!--begin::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<!--begin::Group actions-->
									<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
										<div class="fw-bold me-5">
										<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
										<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
									</div>
									<!--end::Group actions-->
								</div>
								<!--end::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="table-responsive-xxl overflow-auto">
								<!--begin::Table-->
								<table class="table align-middle table-row-dashed table-fixed fs-6 gy-1" id="kt_customers_table">
									<thead>
										<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
											<th class="min-w-50px">Sr No.</th>
											<th class="min-w-120px">UniqueId</th>
											<th class="min-w-300px">Partner name</th>
											<th class="min-w-150px">Business Model</th>
											<!-- <th class="min-w-200px">Business Type</th> -->
											<th class="min-w-250px">Website</th>
											<th class="min-w-150px">Contact Details</th>
											<th class="min-w-120px">Job Role</th>
											<th class="min-w-100px">Job Title</th>
											<th class="min-w-150px">Documents</th>
											<th class="min-w-70px">Status</th>
											<th class="min-w-150px text-center">Actions</th>
										</tr>
									</thead>
									<tbody class="fw-semibold text-gray-600">

									</tbody>
									
								</table>
								<!--end::Table-->
							</div>
							<!--end::Card body-->
						</div>
						<!--begin::Body-->
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
        var postData = { 
			op:'fetchNewPartnerRequests',
			serviceName:'partners.php'
		};
        
        async function getData(postData) {
            try {
                let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
                console.log("Received data:", data);
                if(data.status=="success"){
                    let jsonObj = data.data;
                                   
					const tableBody = document.querySelector('#kt_customers_table tbody'); // Replace 'yourTableId' with the actual table ID

					// Define the HTML for the row
					var rowHTML = '';
					var srno = 1;
					for(var i =0;i<jsonObj.length;i++){						
						rowHTML = rowHTML + `<tr>
							<td>
								<span style="margin-left: 12px;">`+srno+`</span>
							</td>
							<td>
								`+jsonObj[i].partner_uniqueid+`
							</td>
							<td>
								`+jsonObj[i].partner_name+`
							</td>
							<td>
								`+jsonObj[i].primary_business_model+`
							</td>
							<td>
								`+jsonObj[i].website_url+`
							</td>
							<td>
								 <br> `+jsonObj[i].email_id+` <br> `+jsonObj[i].mobile_no+` <br> `+jsonObj[i].phone_no+` 
							</td>
							<td>
								`+jsonObj[i].job_role+`
							</td>
							<td>
								`+jsonObj[i].job_title+`
							</td>
							<td>
								<a href="./PartnerDocuments.php?id=`+jsonObj[i].id+`" title="Documents" class="btn btn-sm btn-light btn-active-light-primary">
									View Documents
								</a>
							</td>
							<td>
								<span class="badge badge-light-primary fs-7 fw-bold">New</span>
							</td>
							<td class="text-end">
								<a href="<?php echo BASE_URL;?>pages/editPartnerDetails.php?id=`+jsonObj[i].id+`" title="Edit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<i class="ki-duotone ki-pencil fs-2" style="color:#1b97ff;">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</a>
								<a href="#" onclick="acceptPartnerRequest(`+jsonObj[i].id+`);" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
									<i class="ki-duotone ki-archive-tick fs-2" title="Accept" style="color: green;">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</a>
								<a href="#" onclick="declinePartnerRequest(`+jsonObj[i].id+`);" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
									<i class="ki-duotone ki-shield-cross fs-2" title="Decline" style="color: red;">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</a>
							</td>
						</tr>`;
						srno++;
					}
					var table = $('#kt_customers_table').DataTable();             
					$('#kt_customers_table tbody').append(rowHTML);
					table.rows.add($(rowHTML)).draw();
					$('#kt_customers_table').on('click', '.btn-action', function () {
						var id = $(this).data('id');
						alert('Action button clicked for ID: ' + id);
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
							location.href = "<?php echo BASE_URL;?>pages/index.php";
						}
					}))
                }
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        }
        getData(postData);
    });
	function acceptPartnerRequest(id){
		var postData = { 
			id:id,
			op:'acceptPartnerRequest',
			serviceName:'partners.php'
		};
		acceptPartnerRequestAjax(postData);
	}
	async function acceptPartnerRequestAjax(postData) {
		try {
			let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
			console.log("Received data:", data);
			if(data.status=="success"){
				let jsonObj = data.data;
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
	function declinePartnerRequest(id){
		var postData = { 
			id:id,
			op:'declinePartnerRequest',
			serviceName:'partners.php'
		};
		declinePartnerRequestAjax(postData);
	}
	async function declinePartnerRequestAjax(postData) {
		try {
			let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
			console.log("Received data:", data);
			if(data.status=="success"){
				let jsonObj = data.data;
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
</script>