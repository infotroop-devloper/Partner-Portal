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
                    
                    <div id="kt_content_container" class="flex-column-fluid align-items-start container-xxl" style="padding-top: 30px !important;">
						<!--begin::Post-->
						<div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            
                            <div class="card-header border-0 " role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <h2 class="fw-bold m-0">Partner Documents</h2>
                                </div>
                                <button onclick="fnGoBack();" class="btn btn-sm btn-primary align-self-center">Back</button>
                                <!--end::Card title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_datatable_vertical_scroll" class="table align-middle gs-0 gy-3">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 min-w-10px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-120px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <!--begin::Footer-->
					<div class="footer pb-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-gray-900 order-2 order-md-1">
								<span class="text-muted fw-semibold me-1"><?php echo date('Y');?> &copy;</span>
								<a href="https://infotroop.co.in" target="_blank" class="text-gray-800 text-hover-primary">InfoTroop IT Solutions</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://infotroop.co.in" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://infotroop.co.in" target="_blank" class="menu-link px-2">Support</a>
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
			op:'fetchPartnerDocuments',
			id:'<?php echo $_GET["id"];?>',
			serviceName:'partners.php'
		};
        
        async function getData(postData) {
            try {
                let data = await sendRequestSecure(postData); // Wait for the AJAX call to complete
                console.log("Received data:", data);
                if(data.status=="success"){
                    let jsonObj = data.data;
                                   
					const tableBody = document.querySelector('#kt_datatable_vertical_scroll tbody'); // Replace 'yourTableId' with the actual table ID
                    
					// Define the HTML for the row
					var rowHTML = '';
					var srno = 1;
					for(var i =0;i<jsonObj.length;i++){	
                        
                        var downloadTD = ``;
                        if(jsonObj[i].doc_name!=''){
                            downloadTD = `<a href="`+jsonObj[i].doc_name+`" target="_blank" title="Documents" class="btn btn-outline btn-outline-dashed btn-outline-secondary btn-active-light-secondary btn-sm me-1" style="padding-left: 10px;padding-right: 5px;">
                                    <i class="ki-duotone ki-folder-down fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
								</a>`;
                        }
						rowHTML = rowHTML + `<tr style="height: 52px;">
							<td style="border-bottom: solid 1px #dcd9d9;">
								<span style="margin-left: 12px;">`+srno+`</span>
							</td>
							<td style="border-bottom: solid 1px #dcd9d9;">
								`+jsonObj[i].doc_type+`
							</td>
							<td style="border-bottom: solid 1px #dcd9d9;">
								`+downloadTD+`
							</td>
							
						</tr>`;
						srno++;
					}
					var table = $('#kt_datatable_vertical_scroll').DataTable({
                        ordering: false // Disable sorting for the entire table
                    });             
					$('#kt_datatable_vertical_scroll tbody').append(rowHTML);
					table.rows.add($(rowHTML)).draw();
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
	
</script>