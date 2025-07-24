	
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo BASE_URL; ?>/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo BASE_URL; ?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?php echo BASE_URL; ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo BASE_URL; ?>/assets/js/widgets.bundle.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/widgets.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/type.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/budget.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/settings.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/team.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/targets.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/files.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/complete.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/create-project/main.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="<?php echo BASE_URL; ?>/assets/js/commonscripts.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
<script>
	function fn_logout(){
		var myKeyVals = { 
			op:'logout',
			serviceName:'login.php',
		};
		$.ajax({
			type: 'POST',
			url: "<?php echo BASE_URL;?>/api/rootapi.php",
			data: myKeyVals,
			dataType: "json",
			headers: {"Authorization": "Bearer " + localStorage.getItem('token')},
			success: function(resultData) {
				var jsonObj = resultData;
				console.log(jsonObj.status);
				if(jsonObj.status=="success"){
					
					Swal.fire({
						text: "You have successfully logged out!",
						icon: "success",
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
				}else{
					Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
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
			},
			error: function(resultData){
				
			}
		});
	}

		function fnGoBack(){
        history.back();
    }

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