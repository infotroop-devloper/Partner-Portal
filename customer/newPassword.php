<!DOCTYPE html>
<?php 
include_once './config/config.php'; 
?>
<html lang="en">
	<!--begin::Head-->
	<head>
	<base href="../../../" />
		<title>Infotroop | Partner</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://infotroop.co.in/" />
		<meta property="og:site_name" content="Infotroop IT Solutions" />
		<link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/media/logos/favicon.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo BASE_URL; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
        <!--begin::Body-->
        <body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
            <!--begin::Theme mode setup on page load-->
            <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
            <!--end::Theme mode setup on page load-->
            <!--begin::Main-->
            <!--begin::Root-->
            <div class="d-flex flex-column flex-root">
                <!--begin::Page bg image-->
                <style>body { background-image: url('<?php echo BASE_URL; ?>assets/media/auth/PartnerLoginPage1.jpg'); } [data-bs-theme="dark"] body { background-image: url('<?php echo BASE_URL; ?>assets/media/auth/PartnerLoginPage1.jpg'); }</style>
                <!--end::Page bg image-->
                <!--begin::Authentication - New password -->
                <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                    <!--begin::Aside-->
                    <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                        <!--begin::Aside-->
                        <div class="d-flex flex-center flex-lg-start flex-column">
                            <!--begin::Logo-->
                            <a href="index.html" class="mb-7">
                                <img alt="Logo" style="width:80%;" src="<?php echo BASE_URL; ?>assets/media/logos/InfoTroop-Logo-White.png" />
                            </a>
                            <!--end::Logo-->
                            <!--begin::Title-->
                            <!-- <h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2> -->
                            <!--end::Title-->
                        </div>
                        <!--begin::Aside-->
                    </div>
                    <!--begin::Aside-->
                    <!--begin::Body-->
                    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                        <!--begin::Card-->
                        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                                <!--begin::Form-->
                                <div class="form w-100" novalidate="novalidate" id="kt_new_password_form">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-10">
                                        <!--begin::Title-->
                                        <h1 class="text-gray-900 fw-bolder mb-3">Setup New Password</h1>
                                        <!--end::Title-->
                                        <!--begin::Link-->
                                        <div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ? 
                                        <a href="<?php echo BASE_URL; ?>index.php" class="link-primary fw-bold">Sign in</a></div>
                                        <!--end::Link-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" id="password" autocomplete="off" />
                                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                    <i class="ki-duotone ki-eye-slash fs-2"></i>
                                                    <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--end::Input group=-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Repeat Password-->
                                        <input type="password" placeholder="Repeat Password" name="confirm-password" id="confirm-password" autocomplete="off" class="form-control bg-transparent" />
                                        <!--end::Repeat Password-->
                                    </div>
                                    <!--begin::Action-->
                                    <div class="d-grid mb-10">
                                        <button type="button" id="kt_new_password_submit" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Submit</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">Please wait... 
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            <!--end::Indicator progress-->
                                        </button>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack px-lg-10">
                                <!--begin::Languages-->
                                <div class="me-0">
                                    
                                </div>
                                <!--end::Languages-->
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold text-primary fs-base gap-5">
                                    <a href="https://www.infotroop.co.in/" target="_blank">About</a>
                                    <a href="https://www.infotroop.co.in/contact" target="_blank">Contact Us</a>
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Authentication - New password-->
            </div>
            <!--end::Root-->
            <!--end::Main-->
            <!--begin::Javascript-->
            <script>var hostUrl = "assets/";</script>
            <!--begin::Global Javascript Bundle(mandatory for all pages)-->
            <script src="<?php echo BASE_URL; ?>assets/plugins/global/plugins.bundle.js"></script>
            <script src="<?php echo BASE_URL; ?>assets/js/scripts.bundle.js"></script>
            <script src="<?php echo BASE_URL; ?>assets/js/custom/authentication/reset-password/new-password.js"></script>
            <script>
            
            function confirmPassword(){
                var myKeyVals = { 
                    newpassword : $("#confirm-password").val(), 
                    password : $("#password").val(),
                    email : localStorage.getItem("email"),
                    clid:'97250836d373fe5e31e2bff387748447',
                    op:'confirmPassword',
                    serviceName:'login.php'
                };
                $.ajax({
                    type: 'POST',
                    url: "<?php echo BASE_URL;?>/api/rootapi.php",
                    data: myKeyVals,
                    dataType: "text",
                    success: function(resultData) {
                        var jsonObj = JSON.parse(resultData);
                        console.log(jsonObj.status);
                        if(jsonObj.status=="success" && jsonObj.data.hasOwnProperty('token')){
                            var token = jsonObj.data.token;
                            var userdata = jsonObj.data.userdata;
                            localStorage.setItem('token',token);
                            localStorage.setItem('email',userdata.email);
                            localStorage.setItem('firstname',userdata.firstname);
                            localStorage.setItem('uid',userdata.uid);
                            localStorage.setItem('user_type',userdata.user_type);

                            Swal.fire({
                                text: "You have successfully logged in!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then((function(e) {
                                if (e.isConfirmed) {
                                    $(".indicator-label").css("display","block");
                                    $(".indicator-progress").css("display","none");
                                    if(userdata.firstname==''){
                                        location.href = "<?php echo BASE_URL;?>pages/profile.php";
                                    }else{
                                        location.href = "<?php echo BASE_URL;?>pages/dashboard.php";
                                    }
                                    
                                }
                            }))
                        }else{
                            $(".indicator-label").css("display","block");
                            $(".indicator-progress").css("display","none");
                            Swal.fire({
                                text: jsonObj.message ? jsonObj.message : jsonObj.msg,
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                        }
                    },
                    error: function(resultData){
                        
                    }
                });
            }
            </script>
            <!--end::Javascript-->
        </body>
    	<!--end::Body-->
</html>